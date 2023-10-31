<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use App\Models\ImageGaleryBrand;
use App\Models\ImageHeaderBrand;
use Illuminate\Http\Request;

class EstablishmentController extends Controller
{
    public function index()
    {
        $active = 'establishment';
        $brand = Brands::select('name', 'id', 'logo')->where('name', '!=', 'GALERY')->get();
        $thumbnail = ImageHeaderBrand::get();
        return view('page.establishments.index', compact('active', 'brand', 'thumbnail'));
    }
}
