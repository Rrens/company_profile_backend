<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $active = 'about';
        $brand = Brands::select('name', 'id', 'logo')->get();
        return view('page.about.index', compact('active', 'brand'));
    }
}
