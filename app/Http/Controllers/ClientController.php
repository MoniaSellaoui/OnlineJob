<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function home(){
        return view('client.home');
    }
    public function advanced()
    { return view('client.advanced');

    }
    public function jobbycompany()
    {return view('client.jobbycompany');

    }
    public function jobbyfunction()
    {return view('client.jobbyfunction');

    }
    public function jobbytitle()
    {return view('client.jobbytitle');

    }
    public function jobbycategory()
    {return view('client.jobbycategory');

    }
    public function companies()
    {
        return view('client.companies');
    }
    public function hiring()
    {
        return view('client.hiring');
    }
    public function aboutus()
    {
        return view('client.aboutus');
    }
    public function contactus()
    {
        return view('client.contact');
    }
    public function submitapp()
    {
        return view('client.submitapp');
    }
    public function hiringcompany()
    {
        return view('client.hiringcompany');
    }
    public function jobdetails()
    {
        return view('client.jobdetails');
    }
    public function register()
    {
        return view('client.register');
    }
    public function profile()
    {
        return view('client.profile');
    }
    public function message()
    {
        return view('client.message');
    }
    public function readmessage()
    {
        return view('client.readmessage');
    }
    public function jobapplied()
    {
        return view('client.jobapplied');
    }
}
