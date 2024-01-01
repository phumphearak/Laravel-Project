<?php

namespace App\Http\Controllers;

use App\Models\Import; 
use App\Models\Product; 
use App\Models\Supplier; 
use Illuminate\Http\RedirectResponse; 
use Illuminate\Http\Request; 
use Illuminate\Http\Response;
 
use Illuminate\Support\Facades\DB;

class ImportConstroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $imports = DB::table('imports') 
        ->join('products', 'imports.pcode', '=', 'products.id') 
        ->join('suppliers', 'imports.supid', '=', 'suppliers.id') 
        ->select('imports.*', 'products.name', 'suppliers.supname') 
        ->get();
        return view('imports.index',['imports' => $imports]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all(); 
        $suppliers = Supplier::all(); 
        return view('imports.create',['products' => $products,'suppliers' => $suppliers]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([ 
            'impdate' => 'required', 
            'pcode' => 'required', 
            'quantity' => 'required', 
            'supid' => 'required' 
        ]); 
        Import::create($request->all()); 
        return redirect()->route('imports.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $import_data = DB::table('imports') 
        ->join('products', 'imports.pcode', '=', 'products.id') 
        ->join('suppliers', 'imports.supid', '=', 'suppliers.id') 
        ->where('imports.id', '=', $import->id) 
        ->select('imports.*', 'products.name', 'suppliers.supname') 
        ->get(); 
        //return $import_data; 
        return view('imports.show',['import' => $import_data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $products = Product::all(); 
        $suppliers = Supplier::all(); 
        return view('imports.edit',['import'=>$import, 'products' => $products,'suppliers' => $suppliers]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([ 
            'impdate' => 'required', 
            'pcode' => 'required', 
            'quantity' => 'required', 
            'supid' => 'required' 
        ]);
        $import->update($request->all()); 
        return redirect()->route('imports.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $import->delete(); 
        return redirect()->route('imports.index');
    }
}
