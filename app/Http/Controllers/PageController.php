<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $num_products = Comic::count();
        return view('home', compact('num_products'));
    }

    public function contacts() {
        return view('contacts');
    }
}
