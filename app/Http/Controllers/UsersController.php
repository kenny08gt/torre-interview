<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;

class UsersController extends Controller
{
    public function show(Request $request, $user_slug) {
        if(Cache::has($user_slug)){
            //TODO: get a webhook of user profile updated to clean and get new data
            $user = Cache::get($user_slug);
        } else {
            $user = Http::get('https://bio.torre.co/api/bios/'.$user_slug)->throw()->json();
            Cache::put($user_slug, $user);
        }
        return Inertia::render('Welcome')->with('user', $user);
    }

    public function get(Request $request)
    {

    }
}
