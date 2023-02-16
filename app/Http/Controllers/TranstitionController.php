<?php

namespace App\Http\Controllers;

use App\Models\Transition;
use Illuminate\Http\Request;

class TranstitionController extends Controller
{
    public function index()
    {

        // $transition = Transition::select('transitions.*','digital_coins.*','users.id','users.fullname')
        // ->join('digital_coins','transitions.coin_id','=','digital_coins.id')
        // ->join('users','transitions.user_id','=','users.id')
        // ->where('transitions.user_id', auth()->user()->id)->paginate(10);

        $transition = Transition::select('transitions.*', 'digital_coins.*', 'users.id', 'users.fullname', 'exchangers.fullname as exchange_name')
        ->join('digital_coins', 'transitions.coin_id', '=', 'digital_coins.id')
        ->join('users', 'transitions.user_id', '=', 'users.id')
        ->join('users as exchangers', 'transitions.exchange_id', '=', 'exchangers.id')
        ->where('transitions.user_id', auth()->user()->id)
        ->paginate(5);
        
        // dd($transition);

        return view('transition' , compact('transition'));
    }
}
