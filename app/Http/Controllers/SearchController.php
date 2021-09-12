<?php

namespace App\Http\Controllers;

//use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class SearchController extends Controller
{
    public function index()
    {
        $input = request('search');

        if ($input) {
// Using guzzle
//            $client = new Client();
//            $res = $client->request('GET', "https://www.googleapis.com/books/v1/volumes?q=".$input."&key=".config('services.google.key'));
//
//            if($res->getStatusCode() == 200){
//                $bookload = json_decode((string)$res->getBody()->getContents());
//                $bookitems = $bookload->items;
//            }

            // (alternative) Using Laravel HTTP-client
            $bookitems = Http::get("https://www.googleapis.com/books/v1/volumes?q=" . $input . "&key=" . config('services.google.key'))->object()->items;
        }

        return view('search', [
            'bookitems' => $bookitems ?? []
        ]);
    }

    public function show(string $id)
    {
        $book = Http::get('https://www.googleapis.com/books/v1/volumes/' . $id . '?key=' . config('services.google.key'))->object();

        return view('detail', [
            'book' => $book
        ]);
    }
}
