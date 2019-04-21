<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//panggil class mail
use App\Mail\MalasEmail;
use Illuminate\Support\Facades\Mail;

class MalasemailController extends Controller
{
    //
    public function index()
    {
        //kirim email
        Mail::to("saifudin.zezy7@gmail.com")->send(new MalasEmail());
        return "Email telah dikirim";
    }
}
