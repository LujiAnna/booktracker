<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use GuzzleHttp\Client;

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
        // dd(request('search'));
        $input = request('search');
        // dd($input);
        if($input) { 

            // try to store in the database
            $client = new Client();
            $res = $client->request('GET', "https://www.googleapis.com/books/v1/volumes?q=".$input."&key=".config('services.google.key'));
            // dd($res);
            // dd("https://www.googleapis.com/books/v1/volumes?q=".$input."&key=".config('services.google.key'));

            if($res->getStatusCode() == 200){
                $res->getBody();
                // dd((string)$res->getBody());
                dd(json_decode($res->getBody()->getContents()));
            }

            return view('search')->with('name', $googleBooks);
        } else {
            return view('search');
        }
            }
}
