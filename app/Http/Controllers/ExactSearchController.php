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

    public function list (Request $request)
    {
        $bookitems = Http::get("https://www.googleapis.com/books/v1/volumes/zyTCAlFPjgYC?key=".config('services.google.key'))->json();
        return view('exactsearch') ->with('bookitems', json_decode($bookitems, true));
    }


    public function submitSearch(Request $request)
    {
        $input = request('exactsearch');
        if ($input) {
            $client = new Client();
            $res = $client->request('GET', "https://www.googleapis.com/books/v1/volumes?q=" . $input . "&key=" . config('services.google.key'));

            if ($res->getStatusCode() == 200) {
                $bookload = json_decode((string)$res->getBody()->getContents());
                $bookitems = $bookload->items;
            }

            return view('exactsearch', ['bookitems' => $bookitems]);
        } else {
            return view('exactsearch');
        }
    }
}
