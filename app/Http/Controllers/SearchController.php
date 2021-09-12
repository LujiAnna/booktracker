<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $input = request('search');

        if($input) {
            $client = new Client();
            $res = $client->request('GET', "https://www.googleapis.com/books/v1/volumes?q=".$input."&key=".config('services.google.key'));

            if($res->getStatusCode() == 200){
                $bookload = json_decode((string)$res->getBody()->getContents());
                $bookitems = $bookload->items;
            }
        }

        return view('search', [
            'bookitems' => $bookitems ?? []
        ]);
    }
}
