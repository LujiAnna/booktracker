<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ExactSearchController extends Controller
{
    public function show()
    {
        return view('exactsearch');
    }


    //TODO verify code here
    public function submitSearch(Request $request)
    {
        $input = request('exactsearch');
        if ($input) {
            $client = new Client();
            $googleBooks = Http::get('https://www.googleapis.com/books/v1/volumes?q=' . $input . '&key=' . config('services.google.key'));

            $res = $client->request('GET', "https://www.googleapis.com/books/v1/volumes?q=" . $input . "&key=" . config('services.google.key'));

            if ($res->getStatusCode() == 200) {
                $res->getBody();
                dd(json_decode($res->getBody()->getContents()));
            }

            return view('exactsearch')->with('name', $googleBooks);
        } else {
            return view('exactsearch');
        }
    }
}
