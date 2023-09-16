<?php

namespace App\Http\Controllers;

use App\Mail\contact;
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

        Mail::send(new contact($request));
        return back();
    }
}
