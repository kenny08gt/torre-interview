<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;

class UsersController extends Controller
{
    public function show(Request $request, $user_slug) {
        $user = User::get($user_slug);
        return Inertia::render('Welcome')->with('user', $user);
    }


    public function getTraitsProcessed($user_slug)
    {
        $user = User::get($user_slug);

        $traits = [];
        foreach( $user['personalityTraitsResults']['groups'] as $group) {
            $traits[$group['id']] = [
                'median' => $group['median']
            ];
        }

        foreach( $user['personalityTraitsResults']['analyses'] as $analysis) {
            $traits[$analysis['groupId']]['value'] = $analysis['analysis'];
            $traits[$analysis['groupId']]['label'] = lcfirst(str_replace('-', ' ', $analysis['groupId']));
        }

        return response(['traits' => $traits], 200);
    }
}
