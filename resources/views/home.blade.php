@extends('layouts.app')

@section('content')
<div class="container">
   <h2>Products</h2>
   <div class="row">
@foreach ($allProducts as $products)

   <div class="card col-4">
       <img class="card-img-top" src="{{asset('default.png')}}" alt="Card image cap">
       <div class="card-body">
           <h4 class="card-title">{{$products->name}}</h4>
           <p class="card-text">{{$products->description}}</p>
       </div>
       <div class="card-body">
           <a href="/add-to-card/{{$products->id}}" class="card-link">Add to Cart</a>
       </div>
   </div>
@endforeach

   </div>
</div>
@endsection
