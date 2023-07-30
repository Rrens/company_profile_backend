<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use App\Models\ImageGaleryBrand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class GaleryController extends Controller
{
    public function index()
    {
        $active = 'galery';
        $brand = Brands::select('id', 'name')
            ->orderBy('created_at')
            ->get();
        $data = ImageGaleryBrand::all();
        return view('admin.page.galery.index', compact('data', 'brand', 'active'));
    }

    public function filter_outlet($name)
    {
        $active = 'galery';
        $brand = Brands::where('name', $name)
            ->get();
        $for_data = $brand[0]->name;
        $brand_for_filter = Brands::all();
        $data = DB::table('image_galery_brand as img')
            ->select(DB::raw('distinct(img.id)'), 'b.name', 'img.image')
            ->join('brands as b', 'b.id', '=', 'img.id_brand')
            ->where('b.name', $name)
            ->orderBy('img.created_at')
            ->get();

        return view('admin.page.galery.filter', compact('data', 'brand', 'brand_for_filter', 'for_data', 'active'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:png,jpg,jpg',
            'outlet' => 'required',
        ]);

        if ($validator->fails()) {
            if ($validator->fails()) {
                Alert::success('Failed', $validator->messages()->all());
                return back()->withInput();
            }
        }

        $image = $request->file('image');
        $brand = Brands::where('id', $request->outlet)->select('name')->first();
        // PHOTO
        $image_name = time() . 'user-' . $brand->name  . '.' . $image->getClientOriginalExtension();
        Storage::putFileAs('public/uploads/image/', $image, $image_name);

        $image_galery = new ImageGaleryBrand();
        $image_galery->id_brand = $request->outlet;
        $image_galery->image = $image_name;
        $image_galery->save();
        // dd($image_galery, $image_galery->save());
        Alert::toast('Successfully Add Image', 'success');
        return back();
    }

    public function delete(Request $request)
    {
        $image_galery = ImageGaleryBrand::findOrFail($request->id);
        $image_galery->delete();

        Alert::toast('Successfully Delete Image', 'success');
        return back();
    }
}