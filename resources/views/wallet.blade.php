@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
                <div class="card" style="border: none;">
                    <div class="card-body" style="text-align: end;">
                        จำนวนเงิน : {{$wallet->money}}
                    </div>
                </div>
        </div>
            @foreach ($coin as $item)
            <div class="col-4">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title text-center">{{$item->name_coin}}</h5>
                    <p class="card-text text-center">จำนวน : {{$item->amount}}</p>
                  </div>
                </div>
              </div>
            @endforeach
    </div>
</div>
@endsection
