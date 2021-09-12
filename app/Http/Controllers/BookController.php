<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        return view('books.index', [
            'books' => Book::all()
        ]);
    }

    public function store(Request $request){
        Book::create([
            'google_id' => $request->input('google_id'),
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'description' => $request->input('description'),
            'img_url' => $request->input('img_url'),
        ]);

        return redirect('/books');
    }
}
