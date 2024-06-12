<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books; // Предполагается, что вы создали модель Book
use App\Models\Publishers;
use App\Models\Suppliers;
use App\Models\Authors;
use App\Models\Pages;

class AdminLTEController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('adminLTE.starter');
    }
}