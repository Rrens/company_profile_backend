<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use Illuminate\Http\Request;

class ReserveController extends Controller
{
    public function index()
    {
        $active = 'reserve';
        $brand = Brands::select('name', 'id', 'logo', 'instagram', 'link_learn_more')->where('name', '!=', 'GALERY')->get();
        return view('page.reserve.index', compact('active', 'brand'));
    }
}
