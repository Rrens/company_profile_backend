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

    public function viewUser()
    {
        $active = 'galery';
        $brand = Brands::select('name', 'id', 'logo')->where('name', '!=', 'GALERY')->get();
        // $image = null;
        // $check_image = ImageGaleryBrand::where('id_brand', Brands::where('name', 'GALERY')->first()['id'])->get();
        $image = ImageGaleryBrand::whereHas('brands', function ($query) {
            $query->where('name', 'GALERY');
        })->get();
        // dd($image);

        return view('page.galeries.index', compact('active', 'brand', 'image'));
    }

    public function index()
    {
        $active = 'galery';
        $brand = Brands::select('id', 'name')
            ->orderBy('created_at')
            ->get();
        $data = ImageGaleryBrand::with('brands')->paginate(5);
        // dd($data);
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
            ->select(DB::raw('distinct(img.id)'), 'b.name', 'img.image', 'b.id as id_brand', 'img.status')
            ->join('brands as b', 'b.id', '=', 'img.id_brand')
            ->where('b.name', $name)
            ->orderBy('img.created_at')
            ->paginate(5);

        return view('admin.page.galery.filter', compact('data', 'brand', 'brand_for_filter', 'for_data', 'active'));
    }

    public function change_status($id)
    {
        $image = ImageGaleryBrand::findOrFail($id);
        if ($image->status == 1) {
            $image->status = 0;
        } else {
            $image->status = 1;
        }
        $image->save();

        Alert::toast('Successfully Change Status', 'success');
        return back();
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'outlet' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg',
        ]);

        if ($validator->fails()) {
            dd($validator->messages()->all());
        }

        $images = $request->file('images');
        foreach ($images as $item) {
            $image_name = sha1(time() . '_' . $item->getClientOriginalName()) . '.' . $item->getClientOriginalExtension();
            Storage::putFileAs('public/uploads/image/', $item, $image_name);

            ImageGaleryBrand::create([
                'image' => $image_name,
                'id_brand' => $request->outlet,
                'status' => 1
            ]);
        }

        Alert::toast('Successfully Add Image', 'success');
        return back();
    }

    public function delete(Request $request)
    {
        // dd($request->all());
        $check_image_for_brand = ImageGaleryBrand::where('id_brand', $request->id_brand)->count();
        // dd($check_image_for_brand);
        if ($check_image_for_brand <= 1) {
            Alert::toast('Headers cannot be more than 1', 'error');
            return back();
        }
        $image_galery = ImageGaleryBrand::findOrFail($request->id);
        $image_galery->delete();

        Alert::toast('Successfully Delete Image', 'success');
        return back();
    }

    public function index_multiple_upload()
    {
        $brand = Brands::get();
        // dd($brand);
        return view('admin.upload', compact('brand'));
    }

    public function uploadMultiple(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'brand' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg',
        ]);

        if ($validator->fails()) {
            dd($validator->messages()->all());
        }

        $images = $request->file('images');
        foreach ($images as $item) {
            $image_name = sha1(time() . '_' . $item->getClientOriginalName()) . '.' . $item->getClientOriginalExtension();
            Storage::putFileAs('public/uploads/image/', $item, $image_name);

            ImageGaleryBrand::create([
                'image' => $image_name,
                'id_brand' => $request->brand,
                'status' => 1
            ]);
        }

        return back();
    }
}
