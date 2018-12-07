<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function home () {
        return view('home');
    }

    public function food () {
        return view('food');
    }

    public function promo () {
        return view('promo');
    }

    public function article () {
        return view('article');
    }

    public function about() {
        return view('about');
    }

    public function foodDetail() {
        return view('foodDetail');
    }

    public function articleDetail() {
        return view('articleDetail');
    }
}
