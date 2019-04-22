@extends('layouts.frontend')

@section('title', 'Homepage')

@section('carousal')
    @include('partials._carousal')
@endsection


@section('content')
@foreach ($products as $product)
    

<div class="col-lg-4 col-md-6 mb-4">
  <div class="card h-100">
    <a href="{{route('product.show', $product->slug)}}">
      <img class="card-img-top" src="http://placehold.it/700x400" alt="">
    </a>
    <div class="card-body">
      <h4 class="card-title">
        <a href="{{route('product.show', $product->slug)}}">{{substr($product->name, 0, 17)}}</a>
      </h4>
      <h5>BDT {{$product->price}}</h5>
      <p class="card-text">{{substr($product->name, 0, 50)}}</p>
      <a href="{{route('cart')}}" class="btn btn-success btn-block">Add to Cart</a>
    </div>
    <div class="card-footer">
      <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
    </div>
  </div>
</div>
@endforeach

@endsection
    
