@extends('layouts.frontend')

@section('title', 'Homepage')

<div class="row justify-content-center">
    <div class="col-lg-5 ">
        <h1>{{$category->name}}</h1>
      </div>
</div>

@section('content')
@foreach ($products as $product)


<div class="col-lg-4 col-md-6 mb-4">
  <div class="card">
    <a href="{{ route('product.show', $product->slug) }}"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
    <div class="card-body">
      <h4 class="card-title">
        <a href="{{ route('product.show', $product->slug) }}">{{ substr($product->name, 0 , 20)}}</a>
      </h4>
      <h5>BDT {{$product->price}}</h5>
      <p class="card-text">{{ substr($product->description, 0 , 60)}}</p>
      <a href="" class="btn btn-success btn-block">Add to Cart</a>
    </div>
    <div class="card-footer">
      <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
    </div>
  </div>
</div>
@endforeach

@endsection
    
