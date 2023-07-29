<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use App\Models\ImageGaleryBrand;
use App\Models\ImageHeaderBrand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class BrandsController extends Controller
{
    public function index()
    {
        return view('page.brands.index', compact('brand', 'thumbnail'));
    }
    public function select_brand()
    {
        $page = 'brand_each';
        return view('page.brands.select_brand', compact('page'));
    }

    public function brand_admin()
    {
        $brand = Brands::all();
        $thumbnail = ImageHeaderBrand::all();
        return view('admin.page.brand', compact('brand', 'thumbnail'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'thumbnail' => 'required|image|mimes:png,jpg,jpg',
            'image' => 'required|image|mimes:png,jpg,jpg',
            'description' => 'required',
            'instagram' => 'required',
            'open_outlet_day' => 'required',
            'close_outlet_day' => 'required',
            'open_outlet_time' => 'required',
            'close_outlet_time' => 'required',
            'phone' => 'required|min:8'
        ]);

        if ($validator->fails()) {
            Alert::success('Failed', $validator->messages()->all());
            return redirect()->route('admin.brand.index')->withInput();
        }

        $image = $request->file('image');
        $thumbnail = $request->file('thumbnail');

        // PHOTO
        $image_name = time() . 'user-' . $request->name  . '.' . $image->getClientOriginalExtension();
        Storage::putFileAs('public/uploads/image/', $image, $image_name);
        $thumbnail_name = time() . 'user-' . $request->name  . '.' . $thumbnail->getClientOriginalExtension();
        Storage::putFileAs('public/uploads/thumbnail/', $thumbnail, $thumbnail_name);

        $brand = new Brands();
        $brand->name = $request->name;
        $brand->description = $request->description;
        $brand->open_outlet_day = $request->open_outlet_day;
        $brand->close_outlet_day = $request->close_outlet_day;
        $brand->open_outlet_time = $request->open_outlet_time;
        $brand->close_outlet_time = $request->close_outlet_time;
        $brand->phone = $request->phone;
        $brand->instagram = $request->instagram;
        $brand->save();

        $photo_thumbnail = new ImageHeaderBrand();
        $photo_thumbnail->id_brand = $brand->id;
        $photo_thumbnail->image = $thumbnail_name;
        $photo_thumbnail->save();

        $photo_image = new ImageGaleryBrand();
        $photo_image->id_brand = $brand->id;
        $photo_image->image = $image_name;
        $photo_image->save();

        Alert::toast('Success', 'Successfully add outlet');
        return back();
    }
}
