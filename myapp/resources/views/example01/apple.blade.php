@extends('layout.layout') 
@section('content') 
    <link href="{{asset('css/gallery.css')}}" rel="stylesheet"> 
    <h2>Apple Products</h2> 
    <div class="gallery"> 
        <a target="_blank" href="{{ url('images/apple1.jpg') }}"> <img src="{{ url('images/apple1.jpg') }}" alt="Cinque Terre" width="600" height="400"> </a> 
        <div class="desc">Add a description of the image here</div> 
    </div> 
    <div class="gallery"> 
        <a target="_blank" href="{{ url('images/apple2.jpg') }}"> <img src="{{ url('images/apple2.jpg') }}" alt="Forest" width="600" height="400"> </a> 
        <div class="desc">Add a description of the image here</div> 
    </div> 
    <div class="gallery"> 
        <a target="_blank" href="{{ url('images/apple3.jpg') }}"> <img src="{{ url('images/apple3.jpg') }}" alt="Northern Lights" width="600" height="400"> </a> 
        <div class="desc">Add a description of the image here</div> 
    </div> 
    <div class="gallery"> 
        <a target="_blank" href="{{ url('images/apple4.jpg') }}"> <img src="{{ url('images/apple4.jpg') }}" alt="Mountains" width="600" height="400"> </a> 
        <div class="desc">Add a description of the image here</div> 
    </div>
 @endsection