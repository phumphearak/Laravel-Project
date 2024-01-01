<?php

namespace App\Http\Controllers;

use App\Models\Product; 
use Illuminate\Http\RedirectResponse; 
use Illuminate\Http\Request; 
use Illuminate\Http\Response; 
use Illuminate\View\View;

class ProductController extends Controller
{
    
    //  * Display a listing of the resource
    public function index()
    {
        $products = Product::all(); 
        return view('products.index',compact('products'));
    }

    //  * Show the form for creating a new resource.
    public function create()
    {
        return view('products.create');
    }

    //  * Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([ 
            'name' => 'required', 
            'price' => 'required', 
        ]); 
        Product::create($request->all()); 
        return redirect()->route('products.index');
    }

    //  * Display the specified resource.
    public function show(Product $products)
    {
        return view('products.show',compact('product'));
    }

    //  * Show the form for editing the specified resource.
    public function edit(Product $products)
    {
        return view('products.edit',compact('product'));
    }

    //  * Update the specified resource in storage.
    public function update(Request $request, Product $products)
    {
        $request->validate([ 
            'name' => 'required', 
            'price' => 'required', 
        ]); 
        $product->update($request->all()); 
        return redirect()->route('products.index');
    }

    //  * Remove the specified resource from storage.
    public function destroy(Product $products)
    {
        $products->delete(); 
        return redirect()->route('products.index');
    }
}
