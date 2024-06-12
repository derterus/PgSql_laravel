<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books; // Предполагается, что вы создали модель Book
use App\Models\Publishers;
use App\Models\Suppliers;
use App\Models\Authors;
use App\Models\Pages;

class BookCRUDController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the books.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $books = Books::with('page', 'author', 'supplier', 'publisher')
                  ->orderBy('название', 'asc') // Сортировка по полю 'название' в порядке возрастания
                  ->get();
    return response()->view('books.crudbook', compact('books'));
}

    public function viewBooks()
    {
        $books = Books::with('page', 'author', 'supplier', 'publisher')->orderBy('название', 'asc') // Сортировка по полю 'название' в порядке возрастания
        ->get();
        return response()->view('books', compact('books'));
    }
    /**
     * Show the form for creating a new book.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created book in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['кол-во'] = $request->get('кол_во');
        $book = Books::create($data);
        return redirect()->route('crudbook');
    }

    /**
     * Remove the specified book from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Books::findOrFail($id);
        $book->delete();
        return redirect()->route('crudbook');
    }

    /**
     * Update the specified field of the book in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editInline(Request $request, $Код_книги)
{
    $book = Books::findOrFail($Код_книги);
    $data = $request->all();
    $data['кол-во'] = $request->get('кол_во');
    $book->update($data);
    return response()->json(['success'=>'done']);
}



}
