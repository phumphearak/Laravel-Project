@extends('layout.layout') 
@section('content') 
    <link href="{{asset('css/form.css')}}" rel="stylesheet"> 
    <div id="form"> 
        <h2>Add New Product</h2> 
        <p><a href="{{ route('products.index') }}"> Back</a></p> 
        <form action="{{ route('products.store') }}" method="POST">
             @csrf 
             <label>Name:</label> 
             <input type="text" name="name" class="form-control" placeholder="Name"> 
             <label>Price:</label> 
             <input type="text" name="price" class="form-control" placeholder="Price"> 
             <input type="submit" value="Save">
        </form> 
    </div>
 @endsection