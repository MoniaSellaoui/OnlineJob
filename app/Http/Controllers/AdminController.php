<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function companies()
    { $companies=Company::get();
        return view('admin.company')->with('companies',$companies);
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



    public function savecompany(Request $request)
    {
        $company=new Company();
        $company->name=$request->input('name');
        $company->address=$request->input('address');
        $company->contact=$request->input('contact');
        $company->save();
        return  back()->with('status','the company name has been successfully created !! ');
    }

    public function deletecompany($id)
    {
        $company=Company::find($id);
        $company->delete();
        return  back()->with('status','the company name has been successfully deleted !! ');
    }
public function editcompany($id)
{$company=Company::find($id);
    return view('admin.editcompany')->with('company',$company);
}
public function updatecompany(Request $request)
{   $company=Company::find($request->input('id'));
    $company->name=$request->input('name');
    $company->address=$request->input('address');
    $company->contact=$request->input('contact');
    $company->update();
    return  redirect('/admin/companies')->with('status','the company name has been successfully updated !! ');

    
}


}
