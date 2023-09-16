<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use Illuminate\Http\Request;

class ReserveController extends Controller
{
    public function index()
    {
        $active = 'reserve';
        $brand = Brands::select('name', 'id', 'logo')->get();
        return view('page.reserve.index', compact('active', 'brand'));
    }
}
