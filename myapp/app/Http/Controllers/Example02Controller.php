<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Example02Controller extends Controller
{
    /*-----------Form-01----------*/ 
    public function ex01(){ 
        return view('example02.ex01'); 
    }
     public function ex01_submit(Request $request){
         $data = [ 'firstname' => $request->input('firstname'), 'lastname' => $request->input('lastname'), 'country' => $request->input('country') ]; 
         return view('example02.ex01_submit')->with("data",$data); 
    } 
    /*-----------Form-02----------*/ 
    public function ex02(){ 
        return view('example02.ex02'); 
    } 
    public function ex02_submit(Request $request){ 
        $num = $request->input('num'); 
        $output = ""; for($i=1;$i<=$num;$i++){ 
            $output .= $i . " ";
     } 
     return view('example02.ex02', ['num' => $num, 'output' => $output ]); 
    } 
    /*-----------Form-03----------*/ 
    public function ex03(){
         return view('example02.ex03'); 
    }
    public function ex03_submit(Request $request){ 
        return view('example02.ex03_submit', ['fullname' => $request->input('fullname'), 'phone' => $request->input('phone'), 'address' => $request->input('address')]); 
    } 
    /*-----------Form-04----------*/ 
    public function ex04(){ 
        return view('example02.ex04'); 
    } 
    public function ex04_submit(Request $request){
         $num = $request->input('num'); 
         $eng=["Zero","One","Two","Three","Four","Five","Six","Seven","Eight","Nine"]; 
         $khm=["សូន្យ","មួយ","ពីរ","បី","បួន្","ប្រាំ","ប្រាំមួយ","ប្រាំពីរ","ប្រាំបី","ប្រាំបួន្"]; 
         $eng_word = ""; 
         $khm_word = ""; 
        for($i=0;$i<strlen($num);$i++){ 
            $eng_word .= $eng[$num[$i]] . "&nbsp;&nbsp;"; 
            $khm_word .= $khm[$num[$i]] . "&nbsp;&nbsp;"; 
        }
     return view('example02.ex04', ['num' => $num, 
                                'eng_word' => $eng_word, 
                                'khm_word' => $khm_word ]); 
    }
}
