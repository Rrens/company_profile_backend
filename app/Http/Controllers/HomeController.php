<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use App\Models\ImageGaleryBrand;
use App\Models\ImageHeaderBrand;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $page = 'home';
        $brand = Brands::select('name', 'id')->get();
        $thumbnail = ImageHeaderBrand::first();
        $image = ImageGaleryBrand::first();
        return view('page.home.index', compact('page', 'brand', 'thumbnail', 'image'));
    }
}
