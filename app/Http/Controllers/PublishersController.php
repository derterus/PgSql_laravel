<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publishers;

class PublishersController extends Controller
{
    public function index()
    {
        $publishers = Publishers::all();
        return view('publishers.index', compact('publishers'));
    }

    public function create()
    {
        return view('publishers.create');
    }

    public function store(Request $request)
    {
        Publishers::create($request->all());
        return redirect()->route('publishers.index');
    }

    public function show(Publishers $publisher)
    {
        return view('publishers.show', compact('publisher'));
    }

    public function edit(Publishers $publisher)
    {
        return view('publishers.edit', compact('publisher'));
    }

    public function update(Request $request, Publishers $publisher)
    {
        $publisher->update($request->all());
        return redirect()->route('publishers.index');
    }

    public function destroy(Publishers $publisher)
    {
        $publisher->delete();
        return redirect()->route('publishers.index');
    }
}
