<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Views;
use App\RandomUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class RouteController extends Controller
{
    public function naming() {
        $Name = request('Name', '');
        return view('laravel1.routes.route1', compact('Name'));
    }

    public function naming_index() {
        return view('laravel1.routes.route1_post_index');
    }

    public function naming_post($Name) {
        return view('laravel1.routes.route1_post_name', ['Name' => $Name]);
    }

    public function naming_redirect() {
        $Name =  request('Name', '');
        return Redirect::to('route1_post/'.$Name);
    }

    public function naming2_index() {
        return view('laravel1.routes.route2_post');
    }

    public function naming2_redirect() {
        $Name =  request('Name', '');
        return view('laravel1.routes.route2_post', ['Name' => $Name]);
    }

    public function naming3_index($Name=NULL) {
        return view('laravel1.routes.route3_post', ['Name' => $Name]);
    }

    public function naming3_redirect() {
        $Name =  request('Name', '');
        return Redirect::to('route3_post/'.$Name);
    }

    //Thin controller
    public function viewing() {
        Views::incrementing(1);
//        $views_count = Views::all();
//        $usernames = RandomUsers::all();
////      $random_users = App\RandomUsers::generate();
//        return view('route_views', compact('views_count', 'usernames'));
        RandomUsers::recreation([1, 264, 265, 266, 267], 5);
        return view('laravel1.routes.route_views')
            ->with('views_count', Views::all())
            ->with('usernames', RandomUsers::some_values(5));
    }
}
