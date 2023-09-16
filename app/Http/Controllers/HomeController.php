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
        $active = 'home';
        $brand = Brands::select('name', 'id', 'logo')->get();
        // $thumbnail = ImageHeaderBrand::first();
        $thumbnail = ImageGaleryBrand::get();
        // $image = ImageGaleryBrand::first();
        return view('page.home.index', compact('active', 'brand', 'thumbnail'));
    }
}
