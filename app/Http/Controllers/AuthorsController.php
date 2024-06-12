<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Authors;

class AuthorsController extends Controller
{
    public function index()
    {
        $authors = Authors::all();
        return view('authors.index', compact('authors'));
    }

    public function create()
    {
        return view('authors.create');
    }

    public function store(Request $request)
    {
        Authors::create($request->all());
        return redirect()->route('authors.index');
    }

    public function show(Authors $author)
    {
        return view('authors.show', compact('author'));
    }

    public function edit(Authors $author)
    {
        return view('authors.edit', compact('author'));
    }

    public function update(Request $request, Authors $author)
    {
        $author->update($request->all());
        return redirect()->route('authors.index');
    }

    public function destroy(Authors $author)
    {
        $author->delete();
        return redirect()->route('authors.index');
    }
}
