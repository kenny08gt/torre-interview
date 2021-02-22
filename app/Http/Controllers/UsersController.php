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
        if(!$user)
            throw new \Exception('User with slug '.$user_slug.' not found');

        $traits = [];
        if(!isset($user['personalityTraitsResults']))
            throw new \Exception('No traits found');

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

    public function getTraitsCompared($user_slug, $user_slug2)
    {
        $user = User::get($user_slug);
        if(!$user)
            throw new \Exception('User with slug '.$user_slug.' not found');
        $user2 = User::get($user_slug2);
        if(!$user2)
            throw new \Exception('User with slug '.$user_slug2.' not found');


        if(!isset($user['personalityTraitsResults']))
            throw new \Exception('No traits found');
        if(!isset($user2['personalityTraitsResults']))
            throw new \Exception('No traits found');

        $traits = [];
        foreach( $user['personalityTraitsResults']['groups'] as $group) {
            $traits[$group['id']] = [];
        }

        foreach( $user['personalityTraitsResults']['analyses'] as $analysis) {
            $traits[$analysis['groupId']]['value'][0] = $analysis['analysis'];
            $traits[$analysis['groupId']]['label'] = lcfirst(str_replace('-', ' ', $analysis['groupId']));
        }

        foreach( $user2['personalityTraitsResults']['analyses'] as $analysis) {
            $traits[$analysis['groupId']]['value'][1] = $analysis['analysis'];
        }

        return response(['traits' => $traits], 200);
    }
}
