<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use App\Models\ImageHeaderBrand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class HeaderController extends Controller
{
    public function index()
    {
        $active = 'header';
        $brand = Brands::select('id', 'name')
            ->orderBy('created_at')
            ->get();
        $data = ImageHeaderBrand::with('brands')->get();

        return view('admin.page.header.index', compact('data', 'brand', 'active'));
    }

    public function filter_outlet($name)
    {
        $active = 'header';
        $brand = Brands::where('name', $name)
            ->get();
        $for_data = $brand[0]->name;
        $brand_for_filter = Brands::all();
        $data = DB::table('image_header_brand as img')
            ->select(DB::raw('distinct(img.id)'), 'b.name', 'img.image', 'img.status', 'b.id as id_brand')
            ->join('brands as b', 'b.id', '=', 'img.id_brand')
            ->where('b.name', $name)
            ->orderBy('img.created_at')
            ->get();

        return view('admin.page.header.filter', compact('data', 'brand', 'brand_for_filter', 'for_data', 'active'));
    }

    public function change_status($id)
    {
        $image = ImageHeaderBrand::findOrFail($id);
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
            'image' => 'required|image|mimes:png,jpg,jpg',
            'outlet' => 'required',
        ]);

        if ($validator->fails()) {
            if ($validator->fails()) {
                Alert::error('Failed', $validator->messages()->all());
                return back()->withInput();
            }
        }

        $image = $request->file('image');
        $brand = Brands::where('id', $request->outlet)->select('name')->first();
        // PHOTO
        $image_name = time() . 'user-' . $brand->name  . '.' . $image->getClientOriginalExtension();
        Storage::putFileAs('public/uploads/thumbnail/', $image, $image_name);

        $image_galery = new ImageHeaderBrand();
        $image_galery->id_brand = $request->outlet;
        $image_galery->image = $image_name;
        $image_galery->status = 1;
        $image_galery->save();
        // dd($image_galery, $image_galery->save());
        Alert::toast('Successfully Add Header', 'success');
        return back();
    }

    public function delete(Request $request)
    {
        $check_image_for_brand = ImageHeaderBrand::where('id_brand', $request->id_brand)->count();

        if ($check_image_for_brand <= 1) {
            Alert::toast('Headers cannot be more than 1', 'error');
            return back();
        }
        $image_galery = ImageHeaderBrand::findOrFail($request->id);
        $image_galery->delete();

        Alert::toast('Successfully Delete Header', 'success');
        return back();
    }
}
