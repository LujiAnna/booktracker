<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SearchController extends Controller
{

      /**
     * * renderAddBook(Request $request)
     * 
     *  This method prepares and renders the view to add book to collection
     * 
     * @param Image cover
     * @param String title
     * @param String description
     * @param Array author(s)
     * 
     * @return View pages.add_book_collection
     */


    public function show() {
        // make an API request in PHP
        return view('search');
    }

    public function submitSearch(Request $request)
    {
        // dd($request);
        $input = $request->input("name");
        // dd($input);
        if(!$input) { 
            // try to store in the database
            $googleBooks = Http::get('https://www.googleapis.com/books/v1/volumes?q=' . $input . '&key=' . config('services.google.key'));
            // !!!
            return view('search')->with('name', $googleBooks);
        } else {
            return view('search');
        }
            }
}
