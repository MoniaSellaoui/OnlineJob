<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Company;
use App\Models\Category;
use App\Models\Vacancy;
use App\Models\Client;


class ClientController extends Controller
{
    //
    public function home()
    {
        $companies=Company::get();
        $categories=Category::get();
        return view('client.home')->with('companies',$companies)->with('categories',$categories);
    }
    public function advanced()
    { return view('client.advanced');

    }
    public function jobbycompany()
    {
        return view('client.jobbycompany');

    }
    public function jobbyfunction()
    {return view('client.jobbyfunction');

    }
    public function jobbytitle()
    {return view('client.jobbytitle');

    }
    public function jobbycategory($name)
    { $vacancies=Vacancy::where('category',$name)->get();
        return view('client.jobbycategory')->with('vacancies',$vacancies)->with('name',$name);

    }
    public function companies()
    {$companies=Company::get();
        return view('client.companies')->with('companies',$companies);
    }
    public function hiring()
    {$vacancies=Vacancy::get();
        return view('client.hiring')->with('vacancies',$vacancies);
    }
    public function aboutus()
    {
        return view('client.aboutus');
    }
    public function contactus()
    {
        return view('client.contact');
    }
    public function submitapp($id)
    {$vacancy=Vacancy::find($id);
        if(Session::has('client'))
        {
            return view('client.submitapp')->with('vacancy',$vacancy);
        }
        else{
            return redirect('/register');
        }
      
    }
    public function hiringcompany($name)
    {$vacancies=Vacancy::where('companyname',$name)->get();
        return view('client.hiringcompany')->with('vacancies',$vacancies)->with('name',$name);
    }
    public function jobdetails($id)
    {$vacancy=Vacancy::find($id);
        return view('client.jobdetails')->with('vacancy',$vacancy);
    }
    public function register()
    {
        return view('client.register');
    }
    public function createaccount(Request $request)
    {$this->validate($request,['email'=>'required|email|unique:clients']);

        $client=new Client();
        $client->firstname=$request->input('firstname');
        $client->lastname=$request->input('lastname');
        $client->middlename=$request->input('middlename');
        $client->address=$request->input('address');
        $client->gender=$request->input('gender');
        $client->dateofbirth=$request->input('dateofbirth');
        $client->birthplace=$request->input('birthplace');
        $client->phone=$request->input('phone');
        $client->civilstatus=$request->input('civilstatus');
        $client->email=$request->input('email');
        $client->username=$request->input('username');
        $client->password=$request->input('password');
        $client->degree=$request->input('degree');

        $client->save();

        session::put('client',$client);
        return back()->with('status','Client account has been successfully created!');


    }
    public function login(Request $request)
    { $clients=Client::get();
        foreach($clients as $client)
        {
            if($client->username == $request->username &&  $client->password == $request->password)
            {
                Session::put('client',$client);
                return redirect('/home');
            }
            else{
                return back();
            }
        }
    }
    public function logout()
    {
        Session::forget('client');
        return redirect('/home');
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
