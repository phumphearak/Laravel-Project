<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class SupplierConstroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers = Supplier::all();
        return view('suppliers.index', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('suppliers.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'supname' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ]);
        Supplier::create('$request->all()');
        return redirect()->route('supplier.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view ('supplier.show', compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('supplier.edit' ,compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'supname' => 'required',
            'phone' => 'required',
            'email'=> 'required'
        ])
        $suppliers->update('$requriest->all()');
        return redirect()->route('suppliers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $suppliers->delete();
        return redirect()->route('suppliers.index');
        
    }
}
