<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use App\Models\Happening;
use App\Models\ImageGaleryBrand;
use App\Models\ImageHeaderBrand;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class BrandsController extends Controller
{
    public function index()
    {
        $data = Brands::all();
        $thumbnail = ImageHeaderBrand::where('status', 1)->get();
        return view('page.brands.index', compact('data', 'thumbnail'));
    }

    public function select_brand($name)
    {
        $active = $name;
        $data = Brands::where('name', $name)->first();
        $brand = Brands::select('name', 'id', 'logo')->get();
        $header = ImageHeaderBrand::where('id_brand', $data->id)->where('status', 1)->first();
        $galery = ImageGaleryBrand::where('id_brand', $data->id)->where('status', 1)->get();
        $happening = Happening::where('id_brand', $data->id)->first();
        $menu = Menu::where('id_brand', $data->id)->first();
        // dd($header->image);
        return view('page.brands.select_brand', compact('active', 'brand', 'data', 'galery', 'header', 'happening', 'menu'));
    }

    public function brand_admin()
    {
        // dd(Auth::user()->role);

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
            // 'address' => 'required',
            // 'open_outlet_day' => 'required',
            // 'close_outlet_day' => 'required',
            // 'open_outlet_time' => 'required',
            // 'close_outlet_time' => 'required',
            'logo' => 'required|image|mimes:png,jpg,jpg',
            // 'phone' => 'required|min:8'
        ]);

        if ($validator->fails()) {
            Alert::error('Failed', $validator->messages()->all());
            return redirect()->route('admin.brand.index')->withInput();
        }

        $image = $request->file('image');
        $thumbnail = $request->file('thumbnail');
        $logo = $request->file('logo');

        // PHOTO
        $logo_name = time() . 'logo-' . $request->name  . '.' . $logo->getClientOriginalExtension();
        Storage::putFileAs('public/uploads/logo/', $logo, $logo_name);
        $image_name = time() . 'image-' . $request->name  . '.' . $image->getClientOriginalExtension();
        Storage::putFileAs('public/uploads/image/', $image, $image_name);
        $thumbnail_name = time() . 'thumbnail-' . $request->name  . '.' . $thumbnail->getClientOriginalExtension();
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
        $brand->logo = $logo_name;
        $brand->instagram = $request->instagram;
        $brand->save();

        $photo_thumbnail = new ImageHeaderBrand();
        $photo_thumbnail->id_brand = $brand->id;
        $photo_thumbnail->image = $thumbnail_name;
        $photo_thumbnail->status = 1;
        $photo_thumbnail->save();

        $photo_image = new ImageGaleryBrand();
        $photo_image->id_brand = $brand->id;
        $photo_image->image = $image_name;
        $photo_image->status = 1;
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
        if (!empty($request->logo)) {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'id' => 'required',
                'description' => 'required',
                'instagram' => 'required',
                // 'address' => 'required',
                // 'open_outlet_day' => 'required',
                // 'close_outlet_day' => 'required',
                // 'open_outlet_time' => 'required',
                // 'close_outlet_time' => 'required',
                'logo' => 'required|image|mimes:png,jpg,jpg',
                // 'phone' => 'required|min:8'
            ]);

            if ($validator->fails()) {
                Alert::success('Failed', $validator->messages()->all());
                return redirect()->route('admin.brand.index')->withInput();
            }

            $logo = $request->file('logo');

            $logo_name = time() . 'logo-' . $request->name  . '.' . $logo->getClientOriginalExtension();
            Storage::putFileAs('public/uploads/logo/', $logo, $logo_name);

            $brand = Brands::findOrFail($request->id);
            // $brand->update($request->all());
            $brand->name = $request->name;
            $brand->description = $request->description;
            $brand->instagram = $request->instagram;
            $brand->address = $request->address;
            $brand->open_outlet_day = $request->open_outlet_day;
            $brand->close_outlet_day = $request->close_outlet_day;
            $brand->open_outlet_time = $request->open_outlet_time;
            $brand->close_outlet_time = $request->close_outlet_time;
            $brand->logo = $logo_name;
            $brand->phone = $request->phone;
            $brand->update();
            Alert::toast('Successfully Update Outlet', 'success');
            return redirect()->route('admin.brand.index');
        }
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'id' => 'required',
            'description' => 'required',
            'instagram' => 'required',
            // 'address' => 'required',
            // 'open_outlet_day' => 'required',
            // 'close_outlet_day' => 'required',
            // 'open_outlet_time' => 'required',
            // 'close_outlet_time' => 'required',
            // 'phone' => 'required|min:8'
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
