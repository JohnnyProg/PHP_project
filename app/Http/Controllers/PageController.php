<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function showCoffes() {
        return view('pages.kawy');
    }

    function showFood() {
        return view('pages.jedzenie');
    }

    function showOrder() {
        return view('pages.zestaw_forms');
    }

    function showHome() {
        return view('home');
    }
}
