<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use App\Models\Coin_wallet;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function index()
    {
        $user_id = auth()->user()->id;

        $wallet = Wallet::where('wallet_by', $user_id)->first();

        $coin = Wallet::select('wallets.*', 'coin_wallets.*','digital_coins.*')
            ->join('coin_wallets', 'wallets.id', '=', 'coin_wallets.user_id')
            ->join('digital_coins', 'coin_wallets.coin_id', '=', 'digital_coins.id')
            ->where('wallets.wallet_by', $user_id)
            ->get();

        // dd($coin);

        return view('wallet', compact('wallet', 'coin'));
    }
}
