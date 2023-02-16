@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ชื่อเหรียญ</th>
                <th scope="col">ราคา</th>
                <th scope="col">จำนวน</th>
                <th scope="col">ผู้ซื้อ</th>
                <th scope="col">ผู้ขาย</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transition as $item)
            <tr>
                <td>{{$item->name_coin}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->amount}}</td>
                <td>{{$item->fullname}}</td>
                <td>{{$item->exchange_name}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $transition->withQueryString()->links('pagination::bootstrap-5') !!}
</div>
@endsection
