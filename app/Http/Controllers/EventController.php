<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $page = 'event_promo';
        return view('page.event.index', compact('page'));
    }
}
