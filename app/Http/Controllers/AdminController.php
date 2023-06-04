<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function companies()
    {
        return view('admin.company');
    }
    public function vacancy()
    {
        return view('admin.vacancy');
    }
    public function category()
    {
        return view('admin.category');
    }
    public function employee()
    {
        return view('admin.employee');
    }
    public function applicants()
    {
        return view('admin.applicants');
    }
    public function users()
    {
        return view('admin.users');
    }
    public function addcompany()
    {
        return view('admin.addcompany');
    }
    public function addcategory()
    {
        return view('admin.addcategory');
    }
    public function addemployee()
    {
        return view('admin.addemployee');
    }
    public function adduser()
    {
        return view('admin.adduser');
    }
    public function addvacancy()
    {
        return view('admin.addvacancy');
    }
    public function userprofile()
    {
        return view('admin.userprofile');
    }
}
