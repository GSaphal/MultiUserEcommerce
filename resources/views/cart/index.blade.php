@extends('layouts.app')

@section('content')
<h1>Your Cart</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Quanity</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($cartItems as $item)
            <tr>
                <td scope="row"><{{$item->name}}/td>
                <td>{{$item->price}}</td>
                <td>
                    <form action="{{route('cart.update',$item->id)}}"><input type="number" name="quantity" value="{{$item->quantity}}">
                <input type="submit" value="Save"></form></td>
                <td><a href="{{route('cart.destory',$item->id)}}">Delete</a></td>

            </tr>
            @endforeach

        </tbody>
    </table>
@endsection
