@extends('layout.layout') 
@section('content') 
    <link href="{{asset('css/form.css')}}" rel="stylesheet"> 
    <div id="form"> 
        <h3>Laravel with HTML Form</h3> 
        <form action="/frm_ex02" method="post"> 
            @csrf 
            <label for="num">Number</label> 
            <input type="text" id="num" name="num" value="@isset($num) {{ $num }} @endisset"> 
            <input type="submit" value="Submit"> 
        </form>
     </div> 
     <hr> 
     <p>Output : @isset($output) {{ $output }} @endisset</p> 
@endsection