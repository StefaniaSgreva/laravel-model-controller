<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Movie;

class PageController extends Controller
{
    //metodo che per convenzione si chiama 'index' e che recupera tutte le info dal db
    public function index()
    {
        $movies = Movie::all();
        // dd($movies);
        return view('home', compact('movies'));
    }

    public function home()
    {
        // $books = Book::limit(3)->get();
        $books = Movie::select('id', 'title', 'image')
            ->limit(3)
            ->get();

        return view('home', compact('movies'));
    }

    public function show($id)
    {
        $movie = Movie::find($id);
        // dd($movie);
        return view('singlemovie', compact('movie'));
    }
}