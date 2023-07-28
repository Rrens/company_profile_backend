<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function index()
    {
        return view('page.brands.index');
    }
    public function select_brand()
    {
        $page = 'brand_each';
        return view('page.brands.select_brand', compact('page'));
    }

    public function brand_admin()
    {
        return view('admin.page.brand');
    }
}
