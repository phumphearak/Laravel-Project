<!DOCTYPE html>
<html lang="en">
     <head> 
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>MyApp</title> 
        <link href="{{asset('css/app.css')}}" rel="stylesheet"> 
    </head> 
    <body>
        <!--banner-->
        <div id="header"> 
            <h2>PHP Laravel Framework</h2>
             <p>Laravel is a web application framework with expressive, elegant syntax.</p> 
        </div> 
        <!--menu-->
         <div id="menu"> 
            <ul>
                 <li><a href="{{ url('/')}}">Home</a></li> 
                 <li><a href="{{ url('news')}}">News</a></li> 
                <li class="dropdown"> <a href="javascript:void(0)" class="dropbtn">Product</a>
                    <div class="dropdown-content"> 
                        <a href="{{ url('apple')}}">Apple</a> 
                        <a href="#">Samsung</a>
                        <a href="#">OPPO</a>
                    </div> 
                </li> 
                <li class="dropdown"> <a href="javascript:void(0)" class="dropbtn">Form Submit</a> 
                    <div class="dropdown-content"> 
                        <a href="{{ url('frm_ex01')}}">Form-01</a> 
                        <a href="{{ url('frm_ex02')}}">Form-02</a> 
                        <a href="{{ url('frm_ex03')}}">Form-03</a> 
                        <a href="{{ url('frm_ex04')}}">Form-04</a>
                    </div>
                </li>
                <li class="dropdown"> <a href="javascript:void(0)" class="dropbtn">Laravel Database</a> 
                    <div class="dropdown-content"> 
                        <a href="{{ url('products')}}">Products</a>
                        <a href="{{ url('suppliers')}}">Supplies</a> 
                        <a href="{{ url('imports')}}">Imports</a> 
                        <a href="{{ url('searchsort')}}">SearchSort</a> 
                    </div> 
                </li>
            </ul> 
         </div> 
            <!--container--> 
            <div id="container"> 
                @yield('content') 
            </div> 
            <!--banner--> 
            <div id="footer"> 
            <footer> 
                <p> &copy; <script>document.write(new Date().getFullYear());</script> Laravel 10 Framework </p> 
            </footer> 
        </div> 
    </body> 
</html>