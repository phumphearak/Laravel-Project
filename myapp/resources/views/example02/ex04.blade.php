@extends('layout.layout') 
@section('content')
     <link href="{{asset('css/form.css')}}" rel="stylesheet"> 
     <div id="form">
         <h3>Convert number to Word</h3>
          <form action="/frm_ex04" method="post">
             @csrf 
             <label for="num">Input Number</label>
              <input type="text" id="num" name="num" value="@isset($num) {{ $num }} @endisset">
               <input type="submit" value="Submit">
         </form>
     </div> 
     <hr>
     <p>English : @isset($eng_word) {!! $eng_word !!} @endisset</p> 
     <p>Khmer : @isset($khm_word) {!! $khm_word !!} @endisset</p>