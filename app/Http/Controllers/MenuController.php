<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class MenuController extends Controller
{
    public function index()
    {
        $active = 'menu';
        $brand = Brands::select('name', 'id')->get();
        $data = Menu::with('brand')->get();
        return view('admin.page.menu.index', compact('active', 'brand', 'data'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_brand' => 'required',
            'food' => 'required|mimetypes:application/pdf',
            'drink' => 'required|mimetypes:application/pdf',
        ]);

        if ($validator->fails()) {
            if ($validator->fails()) {
                Alert::error('Failed', $validator->messages()->all());
                return back()->withInput();
            }
        }

        $name_brand = Brands::select('name')->where('id', $request->id_brand)->first();

        $menu_before = $request->file('food');
        $food = sha1(time() . 'menu-' . $name_brand->name)  . '.' . $menu_before->getClientOriginalExtension();
        Storage::putFileAs('public/uploads/menu/', $menu_before, $food);

        $drink_before = $request->file('drink');
        $drink = sha1(time() . 'drink-' . $name_brand->name)  . '.' . $drink_before->getClientOriginalExtension();
        Storage::putFileAs('public/uploads/drink/', $drink_before, $drink);

        $menu = new Menu();
        $menu->id_brand = $request->id_brand;
        $menu->food = $food;
        $menu->drink = $drink;

        if (!empty(Menu::where('id_brand', $request->id_brand)->first())) {
            Alert::error('Failed', 'Menu on Outet Exist');
            return back()->withInput();
        }
        $menu->save();

        Alert::toast('Successfully Add Menu', 'success');
        return back();
    }

    public function update(Request $request)
    {
        if ($request->file('food') && $request->file('drink')) {
            $validator = Validator::make($request->all(), [
                'id_brand' => 'required',
                'food' => 'required|mimetypes:application/pdf',
                'drink' => 'required|mimetypes:application/pdf',
            ]);

            if ($validator->fails()) {
                if ($validator->fails()) {
                    Alert::error('Failed', $validator->messages()->all());
                    return back()->withInput();
                }
            }

            $name_brand = Brands::select('name')->where('id', $request->id_brand)->first();

            $menu_before = $request->file('food');
            $food = sha1(time() . 'menu-' . $name_brand->name)  . '.' . $menu_before->getClientOriginalExtension();
            Storage::putFileAs('public/uploads/menu/', $menu_before, $food);

            $drink_before = $request->file('drink');
            $drink = sha1(time() . 'drink-' . $name_brand->name)  . '.' . $drink_before->getClientOriginalExtension();
            Storage::putFileAs('public/uploads/drink/', $drink_before, $drink);


            $menu = Menu::findOrFail($request->id);
            $menu->id_brand = $request->id_brand;
            $menu->food = $food;
            $menu->drink = $drink;
        } elseif ($request->file('food')) {
            $validator = Validator::make($request->all(), [
                'id_brand' => 'required',
                'food' => 'required|mimetypes:application/pdf',
            ]);

            if ($validator->fails()) {
                if ($validator->fails()) {
                    Alert::error('Failed', $validator->messages()->all());
                    return back()->withInput();
                }
            }

            $name_brand = Brands::select('name')->where('id', $request->id_brand)->first();

            $menu_before = $request->file('food');
            $food = sha1(time() . 'menu-' . $name_brand->name)  . '.' . $menu_before->getClientOriginalExtension();
            Storage::putFileAs('public/uploads/menu/', $menu_before, $food);

            $menu = Menu::findOrFail($request->id);
            $menu->id_brand = $request->id_brand;
            $menu->food = $food;
        } elseif ($request->file('drink')) {
            $validator = Validator::make($request->all(), [
                'id_brand' => 'required',
                'drink' => 'required|mimetypes:application/pdf',
            ]);

            if ($validator->fails()) {
                if ($validator->fails()) {
                    Alert::error('Failed', $validator->messages()->all());
                    return back()->withInput();
                }
            }

            $name_brand = Brands::select('name')->where('id', $request->id_brand)->first();
            $drink_before = $request->file('drink');
            $drink = sha1(time() . 'drink-' . $name_brand->name)  . '.' . $drink_before->getClientOriginalExtension();
            Storage::putFileAs('public/uploads/drink/', $drink_before, $drink);


            $menu = Menu::findOrFail($request->id);
            $menu->id_brand = $request->id_brand;
            $menu->drink = $drink;
        } else {
            $validator = Validator::make($request->all(), [
                'id_brand' => 'required',
            ]);

            if ($validator->fails()) {
                if ($validator->fails()) {
                    Alert::error('Failed', $validator->messages()->all());
                    return back()->withInput();
                }
            }


            $menu = Menu::findOrFail($request->id);
            $menu->id_brand = $request->id_brand;
        }

        if (!empty(Menu::where('id_brand', $request->id_brand)->first())) {
            Alert::error('Failed', 'Menu on Outet Exist');
            return back()->withInput();
        }

        $menu->save();

        Alert::toast('Successfully Update Menu', 'success');
        return back();
    }

    public function delete(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
        ]);

        if ($validator->fails()) {
            if ($validator->fails()) {
                Alert::error('Failed', $validator->messages()->all());
                return back()->withInput();
            }
        }

        $menu = Menu::findOrFail($request->id);
        $menu->dalete();

        Alert::toast('Successfully Delete Menu', 'success');
        return back();
    }
}
