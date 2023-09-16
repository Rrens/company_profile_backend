<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;
use Mail;


class ContactController extends Controller
{
    public function index()
    {
        $active = 'contact';
        $brand = Brands::select('name', 'id', 'logo')->get();
        return view('page.contact.index', compact('active', 'brand'));
    }

    public function contactPost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required'
        ]);

        if ($validator->fails()) {
            Alert::error('Failed', $validator->messages()->all());
            return redirect()->route('admin.brand.index')->withInput();
        }

        $data = [
            'subject' => $request->subject,
            'name' => $request->name,
            'email' => $request->email,
            'content' => $request->content
        ];

        Mail::send('email', $data, function ($message) use ($data) {
            $message->to($data['email'])
                ->subject($data['subject']);
        });

        // Mail::send(
        //     'email',
        //     [
        //         'name' => $request->get('name'),
        //         'email' => $request->get('email'),
        //         'content' => $request->get('content'),
        //     ],
        //     function ($message) {
        //         $message->from($request->email);
        //         $message->to('admin@1010-group.com', 'Messages')
        //             ->subject($request->get('subject'));
        //     }
        // );
    }
}
