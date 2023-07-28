<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $page = 'home';
        return view('page.home.index', compact('page'));
    }
}
