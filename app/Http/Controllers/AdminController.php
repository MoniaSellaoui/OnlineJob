<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Employee;

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
    {$employees=Employee::get();
        return view('admin.employee')->with('employees',$employees);
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
    {   $companies=Company::get();
        return view('admin.addemployee')->with('companies',$companies);
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
public function saveemployee(Request $request)
{$employee=new Employee();
    $employee->empid=$request->input('empid');
    $employee->firstname=$request->input('firstname');
    $employee->lastname=$request->input('lastname');
    $employee->middlename=$request->input('middlename');
    $employee->address=$request->input('address');
    $employee->gender=$request->input('gender');
    $employee->birthday=$request->input('birthday');
    $employee->birthplace=$request->input('birthplace');
    $employee->phone=$request->input('phone');
    $employee->civilstatus=$request->input('civilstatus');
    $employee->position=$request->input('position');
    $employee->hireddate=$request->input('hireddate');
    $employee->email=$request->input('email');
    $employee->companyname=$request->input('companyname');
    $employee->save();
    return  back()->with('status','the employee  has been successfully created!! ');

}

public function deleteemployee($id)
{
$employee=Employee::find($id);
$employee->delete();
return  back()->with('status','the employee has been successfully deleted !! ');

}
public function editemployee($id)
{
    $employee=Employee::find($id);
    $companies=Company::where('name','!=',$employee->companyname)->get();
    return view('admin.editemployee')->with('employee',$employee)->with('companies',$companies);
}


public function updateemployee(Request $request)
{   $employee=Employee::find($request->input('id'));
    $employee->empid=$request->input('empid');
    $employee->firstname=$request->input('firstname');
    $employee->lastname=$request->input('lastname');
    $employee->middlename=$request->input('middlename');
    $employee->address=$request->input('address');
    $employee->gender=$request->input('gender');
    $employee->birthday=$request->input('birthday');
    $employee->birthplace=$request->input('birthplace');
    $employee->phone=$request->input('phone');
    $employee->civilstatus=$request->input('civilstatus');
    $employee->position=$request->input('position');
    $employee->hireddate=$request->input('hireddate');
    $employee->email=$request->input('email');
    $employee->companyname=$request->input('companyname');
    $employee->update();
    return  redirect('/admin/employees')->with('status','the employee has been successfully updated !! ');

}
}
