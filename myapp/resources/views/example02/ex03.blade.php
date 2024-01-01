@extends('layout.layout') 
@section('content') 
    <link href="{{asset('css/form.css')}}" rel="stylesheet"> 
    <div id="form">
         <h3>Laravel with HTML Form</h3>
          <form action="/frm_ex03" method="post"> 
            @csrf 
            <label for="fullname">FullName</label>
             <input type="text" id="fullname" name="fullname" placeholder="Input fullname">
              <label for="phone">Phone Number</label> 
              <input type="text" id="phone" name="phone" placeholder="Input phone number">
              <label for="address">Phone Number</label>
               <textarea id="address" name="address" cols="30" rows="5"></textarea>
               <input type="submit" value="Submit"> 
        </form>
     </div> 
@endsection