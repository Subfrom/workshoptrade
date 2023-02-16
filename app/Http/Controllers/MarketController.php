<?php

namespace App\Http\Controllers;

use App\Models\Coin_wallet;
use App\Models\Market;
use App\Models\Transition;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MarketController extends Controller
{
    public function index()
    {

        // $markets = Market::all();

        $markets = Market::select('markets.*', 'digital_coins.*', 'users.*')
            ->join('digital_coins', 'markets.coin_id', '=', 'digital_coins.id')
            ->join('users', 'markets.user_id', '=', 'users.id')
            ->where('markets.status', 'buy')->get();

        return view('markets', compact('markets'));
    }

    public function buy()
    {

        $id = request('id');

        $wallet = Wallet::where('wallet_by', auth()->user()->id)->first();

        $market = Market::find($id);

        $tol = $market->price * $market->amount;

        $checkmoney = $wallet->money - $tol;

        if ($checkmoney < 0) {

            return redirect()->route('markets')->with('error', 'You do not have enough money to buy this coin');
        }else{

            $findwallet = Wallet::where('wallet_by', $market->user_id)->first();

            $findwallet->money = $findwallet->money + $tol;
            $findwallet->save();

            $findcoinwallet = Coin_wallet::where('user_id', $market->user_id)->where('coin_id', $market->coin_id)->first();
            $findcoinwallet->amount - $market->amount;
            $findcoinwallet->save();

            $savetra = Transition::create([
                'coin_id' => $market->coin_id,
                'amount' => $market->amount,
                'user_id' => auth()->user()->id,
                'exchange_id' => $market->user_id,
                'price' => $tol,
                'status' => 'buy'
            ]);
            $savetra->save();

            $addcoin = Coin_wallet::where('user_id', auth()->user()->id)->where('coin_id', $market->coin_id)->first();

            // dd($addcoin);

            if(!empty($addcoin)){
                $addcoin->amount = $addcoin->amount + $market->amount;
                $addcoin->save();
            }else{
                $addcoin = Coin_wallet::create([
                    'coin_id' => $market->coin_id,
                    'amount' => $market->amount,
                    'user_id' => auth()->user()->id
                ]);
                $addcoin->save();
            }


            $wallet->money = $checkmoney;
            $wallet->save();

            $market->status = 'sold';
            $market->save();

            return redirect()->route('markets');
        }
    }
}

