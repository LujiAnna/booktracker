<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use GuzzleHttp\Client;

class SearchController extends Controller
{
    public function list(Request $request) {
        dd('hello- this is not working');
        $bookitems = Http::get("https://www.googleapis.com/books/v1/volumes/zyTCAlFPjgYC?key=".config('services.google.key'))->json();
        dd($bookitems);
        return view('search')->with('bookitems', json_decode($bookitems, true));
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
                // dd((string)$res->getBody());
                // dd(json_decode($res->getBody()->getContents()));
                $bookload = json_decode((string)$res->getBody()->getContents());
                // dd($bookload->items);
                $bookitems = $bookload->items;
            //    dd($bookitems[0]->volumeInfo);
            }
            // dd($title);
            return view('search', ['bookitems' => $bookitems]);
        } else {
            $response = Http::get("https://www.googleapis.com/books/v1/volumes?q=time&printType=books&key=".config('services.google.key'))->object();
            // dd($response); // if decides to use json() method
            // dd($response->items);
            $bookitems = $response->items;
            return view('search', ['bookitems' => $bookitems]);
        }
    }
}
