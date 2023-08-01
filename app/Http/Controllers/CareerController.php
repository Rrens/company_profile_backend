<?php

namespace App\Http\Controllers;

use App\Models\Careers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class CareerController extends Controller
{
    public function index()
    {
        $data = Careers::select('position')->get();
        return view('page.career.index', compact('data'));
    }

    public function select_career($name)
    {
        $data = Careers::where('position', $name)->first();
        return view('page.career.detail', compact('data'));
    }

    public function index_admin()
    {
        $active = 'career';
        $data = Careers::all();
        return view('admin.page.career.index', compact('active', 'data'));
    }

    public function change_status($id)
    {
        $career = Careers::findOrFail($id);
        if ($career->status == 1) {
            $career->status = 0;
        } else {
            $career->status = 1;
        }
        $career->save();

        Alert::toast('Successfully Change Status', 'success');
        return back();
    }

    public function edit($id)
    {
        $active = 'career';
        $data = Careers::findOrFail($id);
        return view('admin.page.career.edit', compact('data', 'active'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'position' => 'required',
            'description' => 'required'
        ]);

        if ($validator->fails()) {
            Alert::error('Failed', $validator->messages()->all());
            return back()->withInput();
        }

        $career = new Careers();
        $career->position = $request->position;
        $career->description = $request->description;
        $career->status = 1;
        // dd($career);
        $career->save();

        Alert::toast('Successfully Add Career', 'success');
        return back();
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'position' => 'required',
            'description' => 'required'
        ]);

        if ($validator->fails()) {
            Alert::error('Failed', $validator->messages()->all());
            return back()->withInput();
        }

        $career = Careers::findOrFail($request->id);
        $career->position = $request->position;
        $career->description = $request->description;
        $career->save();

        Alert::toast('Successfully Update Career', 'success');
        return back();
    }

    public function delete(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required'
        ]);

        if ($validator->fails()) {
            Alert::error('Failed', $validator->messages()->all());
            return back()->withInput();
        }

        $career = Careers::findOrFail($request->id);
        $career->delete();

        Alert::toast('Successfully Delete Career', 'success');
        return back();
    }
}
