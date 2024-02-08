<?php

namespace Kalukunda\SparrowSms\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Kalukunda\SparrowSms\Mail\SparrowMail;
use Kalukunda\SparrowSms\Models\SparrowSms;

class SparrowSmsController extends Controller
{
    public function index()
    {
        return view('sparrowSms::send-sms');
    }
    public function store(Request $request)
    {
        SparrowSms::create($request->all());
        Mail::to(config('sparrowSms.email_send_to'))->send(new SparrowMail($request->message));
        return redirect()->route('sparrow-sms.index')->with('success', 'Message has been sent');
    }
}
