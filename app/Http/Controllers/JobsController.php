<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;

class JobsController extends Controller
{
    public function search(Request  $request)
    {
        $term = $request->get('job_search');
//dd($term);
        $url = 'https://search.torre.co/opportunities/_search/?'.$term;
//        dd($url);
        $data = Http::post($url)->body();
dd($data);
        return Inertia::render('SearchResults')->with('results', $data['results']);
    }
}
