<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pages;

class PagesController extends Controller
{
    public function index()
    {
        $pages = Pages::all();
        return view('pages.index', compact('pages'));
    }

    public function create()
    {
        return view('pages.create');
    }

    public function store(Request $request)
    {
        Pages::create($request->all());
        return redirect()->route('pages.index');
    }

    public function show(Pages $page)
    {
        return view('pages.show', compact('page'));
    }

    public function edit(Pages $page)
    {
        return view('pages.edit', compact('page'));
    }

    public function update(Request $request, Pages $page)
    {
        $page->update($request->all());
        return redirect()->route('pages.index');
    }

    public function destroy(Pages $page)
    {
        $page->delete();
        return redirect()->route('pages.index');
    }
}
