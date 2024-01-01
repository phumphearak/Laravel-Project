@extends('layout.layout')
 @section('content')
     <h2>Your Info</h2> 
     <hr> 
     <p>fullname : {{ $fullname }}</p> 
     <p>phone number : {{ $phone }}</p>
      <p>address : {{ $address }}</p>
@endsection