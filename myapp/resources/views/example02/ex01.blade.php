@extends('layout.layout') 
@section('content') 
    <link href="{{asset('css/form.css')}}" rel="stylesheet"> 
    <div id="form"> 
        <h3>Laravel with HTML Form</h3> 
        <form action="/frm_ex01" method="post"> 
            @csrf 
            <label for="fname">First Name</label> 
            <input type="text" id="fname" name="firstname" placeholder="Your name..">
             <label for="lname">Last Name</label> 
             <input type="text" id="lname" name="lastname" placeholder="Your last name..">
              <label for="country">Country</label> 
            <select id="country" name="country">
                 <option value="australia">Australia</option> 
                 <option value="canada">Canada</option> 
                 <option value="usa">USA</option> 
            </select> 
            <input type="submit" value="Submit"> 
        </form> 
    </div>
 @endsection