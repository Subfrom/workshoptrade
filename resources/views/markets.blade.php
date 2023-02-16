@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ชื่อเจ้าของ</th>
                <th scope="col">ชื่อเหรียญ</th>
                <th scope="col">ราคา</th>
                <th scope="col">จำนวน</th>
                <th scope="col">ราคารวม</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($markets as $item)
            @if($item->id != Auth::user()->id)
            <tr>
                <td>{{$item->fullname}}</td>
                <td>{{$item->name_coin}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->amount}}</td>
                <td>{{$item->price * $item->amount}}</td>
                <td>
                    <form action="{{route('markets.buy')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$item->id}}">
                        <button type="submit" class="btn btn-success">{{$item->status}}</button>
                    </form>
                </td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>
</div>
@endsection
