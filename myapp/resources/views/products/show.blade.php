@extends('layout.layout') 
@section('content') 
    <h2>Product Details</h2> 
    <p><a href="{{ route('products.index') }}"> Back</a></p> 
    <p> <strong>Name:</strong> {{ $product->name }}</p> 
    <p> <strong>Price:</strong> {{ $product->price }}</p> 
@endsection