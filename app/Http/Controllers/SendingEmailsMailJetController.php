<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class SendingEmailsMailJetController extends Controller
{
    public function index(){
        return view('BasicUsage.SendingEmail');
    }
    public function sendEmail(Request $request)
    {
        try {
            //Try to send the email using Mailjet
            Mail::raw($request->input('content'), function ($message) use ($request) {
                $message->from($request->input('sender_email'))
                        ->to($request->input('receiver_email'))
                        ->subject($request->input('subject'));
            });

            return redirect()->back()->with('success', 'Email sent successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to send email: ' . $e->getMessage());
        }
    }
}
