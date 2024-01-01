<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier; 
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response; 
use Illuminate\Support\Facades\DB;
class SearchSortController extends Controller
{
    public function index() { 
        $suppliers = Supplier::all(); 
        return view('SearchSorts.index',['suppliers'=> $suppliers]); 
    }
    public function form_submit(Request $request) { 
        $field = $request->input('txtfield'); 
        $search = $request->input('txtsearch'); 
        $suppliers = Supplier::all(); 
        //Search 
        if($request->input('btnsearch') != null){ 
            switch($field){ 
                case 1 : $suppliers = DB::table('suppliers')->where('id', '=', $search)->get(); 
                break; 
                case 2 : $suppliers = DB::table('suppliers')->where('supname','LIKE','%'.$search.'%')->get(); 
                break; 
                case 3 : $suppliers = DB::table('suppliers')->where('phone','LIKE','%'.$search.'%')->get(); 
                break; 
                case 4 : $suppliers = DB::table('suppliers')->where('email','LIKE','%'.$search.'%')->get(); 
                break; 
            } 
        }
        //sort asc 
        if($request->input('btnasc') != null){ 
            switch($field){ 
                case 1 : $suppliers = DB::table('suppliers')->orderBy('id', 'asc')->get(); 
                break; 
                case 2 : $suppliers = DB::table('suppliers')->orderBy('supname', 'asc')->get(); 
                break; 
                case 3 : $suppliers = DB::table('suppliers')->orderBy('phone', 'asc')->get(); 
                break; 
                case 4 : $suppliers = DB::table('suppliers')->orderBy('email', 'asc')->get(); 
                break; 
            } 
        }
        //sort desc 
        if($request->input('btndesc') != null){ 
            switch($field){ 
                case 1 : $suppliers = DB::table('suppliers')->orderBy('id', 'desc')->get(); 
                break; 
                case 2 : $suppliers = DB::table('suppliers')->orderBy('supname', 'desc')->get(); 
                break;
                case 3 : $suppliers = DB::table('suppliers')->orderBy('phone', 'desc')->get(); 
                break; 
                case 4 : $suppliers = DB::table('suppliers')->orderBy('email', 'desc')->get(); 
                break; 
            } 
        }
        return view('searchsorts.index',['suppliers'=> $suppliers]); 
    } 
}

