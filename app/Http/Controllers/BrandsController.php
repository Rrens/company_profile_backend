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
        $data = Brands::all();
        $thumbnail = ImageHeaderBrand::all();
        return view('page.brands.index', compact('data', 'thumbnail'));
    }
    public function select_brand($name)
    {
        $page = 'brand_each';
        return view('page.brands.select_brand', compact('page'));
    }

    public function brand_admin()
    {
        $active = 'brands';
        $brand = Brands::all();
        $thumbnail = ImageHeaderBrand::get();
        $image = ImageGaleryBrand::get();
        // Brands::withTrashed()->restore();
        // ImageHeaderBrand::withTrashed()->restore();
        // ImageGaleryBrand::withTrashed()->restore();
        return view('admin.page.brand', compact('brand', 'thumbnail', 'image', 'active'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'thumbnail' => 'required|image|mimes:png,jpg,jpg',
            'image' => 'required|image|mimes:png,jpg,jpg',
            'description' => 'required',
            'instagram' => 'required',
            'address' => 'required',
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
        $brand->address = $request->address;
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

        Alert::toast('Successfully Add Outlet', 'success');
        return back();
    }

    public function edit($id)
    {
        $active = 'brands';
        $brand = Brands::findOrFail($id);
        return view('admin.page.edit-brand', compact('active', 'brand'));
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'id' => 'required',
            'description' => 'required',
            'instagram' => 'required',
            'address' => 'required',
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

        $brand = Brands::findOrFail($request->id);
        $brand->update($request->all());
        Alert::toast('Successfully Update Outlet', 'success');
        return redirect()->route('admin.brand.index');
    }

    public function delete(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required'
        ]);

        if ($validator->fails()) {
            Alert::success('Failed', $validator->messages()->all());
            return redirect()->route('admin.brand.index');
        }

        $image_galery_brand = ImageGaleryBrand::where('id_brand', $request->id)->first();
        $image_header_brand = ImageHeaderBrand::where('id_brand', $request->id)->first();
        $brand = Brands::findOrFail($request->id);

        $image_galery_brand->delete();
        $image_header_brand->delete();
        $brand->delete();

        Alert::toast('Successfully Delete Outlet', 'success');
        return redirect()->route('admin.brand.index');
    }
}
