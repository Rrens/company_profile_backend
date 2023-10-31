<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use App\Models\Events;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class EventController extends Controller
{
    public function index()
    {
        $page = 'event_promo';
        $data = Events::with('brand')
            ->whereDate('date', '>=', Carbon::now())
            ->orderBy('id_brand')
            ->get();

        return view('page.event.index', compact('page', 'data'));
    }

    public function index_admin()
    {
        $active = 'event';
        $data = Events::with('brand')->get();
        $brand = Brands::select('name', 'id')->get();
        return view('admin.page.event.index', compact('active', 'data', 'brand'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpg',
            'date' => 'required',
            'id_brand' => 'required',
            'category' => 'required'
        ]);

        if ($validator->fails()) {
            Alert::error('Failed', $validator->messages()->all());
            return redirect()->route('admin.event.index')->withInput();
        }

        $image = $request->file('image');

        // PHOTO
        $image_name = sha1(time() . 'event-' . $request->name)  . '.' . $image->getClientOriginalExtension();
        Storage::putFileAs('public/uploads/event/', $image, $image_name);

        $event = new Events();
        $event->name = $request->name;
        $event->image = $image_name;
        $event->date = $request->date;
        $event->open_time = $request->open_time;
        $event->close_time = $request->close_time;
        $event->id_brand = $request->id_brand;
        $event->category = $request->category;
        $event->save();

        Alert::toast('Successfully Add Event', 'success');
        return back();
    }

    public function update(Request $request)
    {
        // dd($request->all());
        if ($request->hasFile('image')) {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'image' => 'required|image|mimes:png,jpg,jpg',
                'date' => 'required',
                'id_brand' => 'required',
                'open_time' => 'required',
                'close_time' => 'required',
                'id' => 'required',
                'category' => 'required'
            ]);

            if ($validator->fails()) {
                Alert::error('Failed', $validator->messages()->all());
                return back()->withInput();
            }

            $image = $request->file('image');

            // PHOTO
            $image_name = sha1(time() . 'event-' . $request->name)  . '.' . $image->getClientOriginalExtension();
            Storage::putFileAs('public/uploads/event/', $image, $image_name);

            $event = Events::findOrFail($request->id);
            $event->name = $request->name;
            $event->image = $image_name;
            $event->date = $request->date;
            $event->open_time = $request->open_time;
            $event->close_time = $request->close_time;
            $event->id_brand = $request->id_brand;
            $event->category = $request->category;
            $event->save();
            Alert::toast('Successfully Add Event', 'success');
            return back();
        } else {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'date' => 'required',
                'id_brand' => 'required',
                'open_time' => 'required',
                'close_time' => 'required',
                'id' => 'required',
                'category' => 'required'
            ]);

            if ($validator->fails()) {
                Alert::error('Failed', $validator->messages()->all());
                return back()->withInput();
            }
            // dd($request->all());

            $event = Events::findOrFail($request->id);
            $event->name = $request->name;
            $event->date = $request->date;
            $event->open_time = $request->open_time;
            $event->close_time = $request->close_time;
            $event->id_brand = $request->id_brand;
            $event->category = $request->category;
            $event->save();
            Alert::toast('Successfully Add Event', 'success');
            return back();
        }
    }

    public function delete(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required'
        ]);

        if ($validator->fails()) {
            Alert::error('Failed', $validator->messages()->all());
            return back();
        }

        $event = Events::findOrFail($request->id);
        $event->delete();

        Alert::toast('Successfully Delete Event', 'success');
        return back();
    }
}
