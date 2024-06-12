<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suppliers;

class SuppliersController extends Controller
{
    public function index()
    {
        $suppliers = Suppliers::all();
        return view('suppliers.index', compact('suppliers'));
    }

    public function create()
    {
        return view('suppliers.create');
    }

    public function store(Request $request)
    {
        Suppliers::create($request->all());
        return redirect()->route('suppliers.index');
    }

    public function show(Suppliers $supplier)
    {
        return view('suppliers.show', compact('supplier'));
    }

    public function edit(Suppliers $supplier)
    {
        return view('suppliers.edit', compact('supplier'));
    }

    public function update(Request $request, Suppliers $supplier)
    {
        $supplier->update($request->all());
        return redirect()->route('suppliers.index');
    }

    public function destroy(Suppliers $supplier)
    {
        $supplier->delete();
        return redirect()->route('suppliers.index');
    }
}
