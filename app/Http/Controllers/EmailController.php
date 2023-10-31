<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function index(Request $request)
    {
        $date = Carbon::now();
        $formattedDate = $date->formatLocalized('%A, %d %B %Y');
        $request["date"] = $formattedDate;

        Mail::send(new Contact($request));
        return back();
    }
}
