@extends('layout.layout') 
@section('content') 
    <h2>Your Info</h2> 
    <hr>
    <p>firstname : {{ $data['firstname'] }}</p> 
    <p>lastname : {{ $data['lastname'] }}</p> 
    <p>country : {{ $data['country'] }}</p>
 @endsection