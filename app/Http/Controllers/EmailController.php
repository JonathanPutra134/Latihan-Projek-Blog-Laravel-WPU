<?php

namespace App\Http\Controllers;
use App\Mail\EmailVerification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function index()
    {
        Mail::to("atrasshalhan@gmail.com")->send(new EmailVerification());
    }
}
