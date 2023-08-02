<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use App\Models\Happening;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class HappeningController extends Controller
{
    public function index()
    {
        $active = 'happening';
        $brand = Brands::select('name', 'id')->get();
        $data = Happening::with('brand')->get();

        return view('admin.page.happening.index', compact('data', 'brand',  'active'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'id_brand' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpg',
        ]);

        if ($validator->fails()) {
            Alert::error('Failed', $validator->messages()->all());
            return back()->withInput();
        }

        $name_brand = Brands::select('name')->where('id', $request->id_brand)->first();

        $happening_before = $request->file('image');
        $happening_image = time() . 'happening-' . $name_brand->name  . '.' . $happening_before->getClientOriginalExtension();
        Storage::putFileAs('public/uploads/happening/', $happening_before, $happening_image);

        $data = new Happening();
        $data->id_brand = $request->id_brand;
        $data->image = $happening_image;

        if (!empty(Happening::where('id_brand', $request->id_brand)->first())) {
            Alert::error('Failed', 'Happening on Outet Exist');
            return back()->withInput();
        }
        $data->save();

        Alert::toast('Successfully Add Happening', 'success');
        return back();
    }

    public function update(Request $request)
    {
        if ($request->file('image')) {
            $validator = Validator::make($request->all(), [
                'id' => 'required',
                'id_brand' => 'required',
                'image' => 'required|image|mimes:png,jpg,jpg',
            ]);

            if ($validator->fails()) {
                Alert::error('Failed', $validator->messages()->all());
                return back()->withInput();
            }

            $name_brand = Brands::select('name')->where('id', $request->id_brand)->first();

            $happening_before = $request->file('image');
            $happening_image = time() . 'happening-' . $name_brand->name  . '.' . $happening_before->getClientOriginalExtension();
            Storage::putFileAs('public/uploads/happening/', $happening_before, $happening_image);

            $data = Happening::findOrFail($request->id);
            $data->id_brand = $request->id_brand;
            $data->image = $happening_image;

            if (!empty(Happening::where('id_brand', $request->id_brand)->first())) {
                Alert::error('Failed', 'Happening on Outet Exist');
                return back()->withInput();
            }
            $data->save();

            Alert::toast('Successfully Update Happening', 'success');
            return back();
        }

        $validator = Validator::make($request->all(), [
            'id_brand' => 'required',
            'id' => 'required',
        ]);

        if ($validator->fails()) {
            Alert::error('Failed', $validator->messages()->all());
            return back()->withInput();
        }

        $data = Happening::findOrFail($request->id);
        $data->id_brand = $request->id_brand;

        if (!empty(Happening::where('id_brand', $request->id_brand)->first())) {
            Alert::error('Failed', 'Happening on Outet Exist');
            return back()->withInput();
        }
        $data->save();

        Alert::toast('Successfully Update Happening', 'success');
        return back();
    }

    public function delete(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
        ]);

        if ($validator->fails()) {
            Alert::error('Failed', $validator->messages()->all());
            return back()->withInput();
        }

        $data = Happening::findOrFail($request->id);
        $data->dalete();

        Alert::toast('Successfully Delete Happening', 'success');
        return back();
    }
}
