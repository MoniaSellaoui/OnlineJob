@extends('admin_Layout.master')
@section('title')
  Edit Employee
@endsection

@section('content')

            <!-- start content -->
            <div class="content-wrapper">
                <section class="content-header">
                    <h1>Employees</h1>
                    <ol class="breadcrumb">
                        <li><a href="admin"><i class="fa fa-dashboard"></i>Home</a></li>
                        <li class=><a href="admin/addemployee">Employees</a></li><li class="active">add</li>      
                    </ol>
                </section>
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-body">
                                    <section id="feature" class="transparent-bg">
                                        <div class="container">
                                            <div class="center wow fadeInDown">
                                               
                                                <h2 class="page-header">Edit Employee</h2>
                                            </div>
                                            <br>
                                         
                                            <div class="row">
                                              
                                                <div class="features">
                                                    <form class="form-horizontal span6  wow fadeInDown" action="/admin/updateemployee " method="POST">
                                                        {{ csrf_field() }}
                                                       
                                                        <div class="form-group">
                                                           
                                                            <div class="col-md-8">
                                                                @if (Session::has('status'))
                                                                <div class="alert-success" style="height:30px;text-align:center;padding:5px">
                                                                {{Session::get('status')}}
                                                                </div>
                                                                    
                                                                @endif
                                                            <label class="col-md-4 control-label" for=
                                                            "EMPLOYEEID">Employee ID:</label>
            
                                                                <div class="col-md-8">
                                                                    <input type="hidden" name="id" value="{{$employee->id}}">
                                                                    <input class="form-control input-sm" id="EMPLOYEEID" name="empid" placeholder=
                                                                    "Employee ID" type="text" value="{{$employee->empid}}" required>
                                                                </div>
                                                            </div>
                                                        </div>           
                                                        <div class="form-group">
                                                        <div class="col-md-8">
                                                        <label class="col-md-4 control-label" for=
                                                        "FNAME">Firstname:</label>
            
                                                        <div class="col-md-8">
                                                            <input class="form-control input-sm" id="FNAME" name="firstname" placeholder=
                                                                "Firstname" type="text" value="{{$employee->firstname}}"   autocomplete="off" required>
                                                        </div>
                                                        </div>
                                                    </div>
            
                                                    <div class="form-group">
                                                        <div class="col-md-8">
                                                        <label class="col-md-4 control-label" for=
                                                        "LNAME">Lastname:</label>
            
                                                        <div class="col-md-8">
                                                            <input  class="form-control input-sm" id="LNAME" name="lastname" value="{{$employee->lastname}}" placeholder="Lastname"     autocomplete="off" required>
                                                            </div>
                                                        </div>
                                                    </div>
            
                                                    <div class="form-group">
                                                        <div class="col-md-8">
                                                            <label class="col-md-4 control-label" for="MNAME">Middle Name:</label>
            
                                                            <div class="col-md-8">
                                                                <input  class="form-control input-sm" id="MNAME" name="middlename" value="{{$employee->middlename}}" placeholder=
                                                                    "Middle Name"     autocomplete="off" required>
                                                            </div>
                                                        </div>
                                                    </div> 
            
                                                    <div class="form-group">
                                                    <div class="col-md-8">
                                                        <label class="col-md-4 control-label" for=
                                                        "ADDRESS">Address:</label>
            
                                                        <div class="col-md-8">
                                                        
                                                            <textarea class="form-control input-sm" id="ADDRESS" name="address" placeholder=
                                                            "Address" type="text" value="{{$employee->address}}" required   autocomplete="off">{{$employee->address}}</textarea>
                                                        </div>
                                                    </div>
                                                    </div> 
            
                                                    <div class="form-group">
                                                    <div class="col-md-8">
                                                        
                                                        <label class="col-md-4 control-label" for=
                                                        "Gender">Sex:</label>
            
                                                        <div class="col-md-8">
                                                            @if ($employee->gender=='Male')
                                                            <div class="col-lg-5">
                                                                <div class="radio">
                                                                    <label><input id="optionsRadios1" 
                                                                         name="gender" type="radio" value="Female">Female</label>
                                                                </div>
                                                                </div>
                
                                                                <div class="col-lg-4">
                                                                <div class="radio">
                                                                    <label><input id="optionsRadios2" checked="True"
                                                                          name="gender" type="radio" value="{{$employee->gender}}"> Male</label>
                                                                </div>
                                                                </div> 

                                                        @else
                                                       
            
                                                            <div class="col-lg-4">
                                                            <div class="radio">
                                                                <label><input id="optionsRadios2" checked="True"
                                                                      name="gender" type="radio" value="{{$employee->gender}}">Female</label>
                                                            </div>
                                                            </div>
                                                            <div class="col-lg-5">
                                                                <div class="radio">
                                                                    <label><input id="optionsRadios1" 
                                                                         name="gender" type="radio" value="Female">Male</label>
                                                                </div>
                                                                </div>
                                                        @endif
                                                        
                                                            
                                                        </div>
                                                    </div>
                                                    </div>
            
                                                            <div class="form-group">
                                                            <div class="col-md-8">
                                                                <label class="col-md-4 control-label" for=
                                                                "BIRTHDATE">Date of Birth:</label>
            
                                                                <div class="col-md-8">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"> 
                                                                        <i class="fa fa-calendar"></i> 
                                                                    </span>  
                                                                    <input class="form-control input-sm date_picker" id="BIRTHDATE" name="birthday" placeholder="Date of Birth" type="text"    value="{{$employee->birthday}}" required  autocomplete="off">
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </div>
            
                                                                <div class="form-group">
                                                                <div class="col-md-8">
                                                                    <label class="col-md-4 control-label" for=
                                                                    "BIRTHPLACE">Place of Birth:</label>
            
                                                                    <div class="col-md-8">
                                                                    
                                                                        <textarea class="form-control input-sm" id="BIRTHPLACE" name="birthplace" placeholder=
                                                                        "Place of Birth" type="text" value="{{$employee->birthplace}}" required   autocomplete="off">{{$employee->birthplace}}</textarea>
                                                                    </div>
                                                                </div>
                                                                </div> 
            
            
                                                                <div class="form-group">
                                                                <div class="col-md-8">
                                                                <label class="col-md-4 control-label" for=
                                                                "TELNO">Contact No.:</label>
            
                                                                <div class="col-md-8">
                                                                    
                                                                    <input class="form-control input-sm" id="TELNO" name="phone" placeholder=
                                                                        "Contact No." type="text" any value="{{$employee->phone}}" required   autocomplete="off">
                                                                </div>
                                                                </div>
                                                            </div> 
            
                                                                <div class="form-group">
                                                                <div class="col-md-8">
                                                                <label class="col-md-4 control-label" for=
                                                                "CIVILSTATUS">Civil Status:</label>
            
                                                                <div class="col-md-8">
                                                                    <select class="form-control input-sm" name="civilstatus" id="CIVILSTATUS" required>
                                                                        <option value="{{$employee->civilstatus}}" >{{$employee->civilstatus}}</option>

                                                                        @if ($employee->civilstatus=="Single")

                                                                        <option value="Married">Married</option>
                                                                        <option value="Widow" >Widow</option>
                                                                            
                                                                        @elseif($employee->civilstatus=="Married")
                                                                        <option value="Single">Single</option>
                                                                        <option value="Widow" >Widow</option>
                                                                      
                                                                            
                                                                        @else
                                                                        <option value="Single">Single</option>
                                                                        <option value="Married">Married</option>
                                                                       
                                                                        @endif
                                                                      
                                                                    </select> 
                                                                </div>
                                                                </div>
                                                            </div>
            
                                                            <div class="form-group">
                                                                <div class="col-md-8">
                                                                <label class="col-md-4 control-label" for=
                                                                "POSITION">Postion:</label>
            
                                                                <div class="col-md-8">
                                                                    
                                                                    <input class="form-control input-sm" id="POSITION" name="position" placeholder=
                                                                        "Postion" type="text" any value="{{$employee->position}}" required   autocomplete="off">
                                                                </div>
                                                                </div>
                                                            </div>
            
                                                            <div class="form-group">
                                                                <div class="col-md-8">
                                                                <label class="col-md-4 control-label" for=
                                                                "EMP_HIREDDATE">Hired Date:</label> 
                                                                <div class="col-md-8">
                                                                    <div class="input-group date" data-provide="datepicker" data-date="2012-12-21T15:25:00Z">
                                                                        <input type="input" class="form-control input-sm date_picker" id="HIREDDATE" name="hireddate" value="{{$employee->hireddate}}" placeholder="hired date" required>
                                                                        <span class="input-group-addon"><i class="fa fa-th"></i></span>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>  
            
            
                                                                <div class="form-group">
                                                                <div class="col-md-8">
                                                                <label class="col-md-4 control-label" for=
                                                                "EMP_EMAILADDRESS">Email Address:</label> 
                                                                <div class="col-md-8">
                                                                    <input type="Email" class="form-control input-sm" id="EMP_EMAILADDRESS" name="email" value="{{$employee->email}}" placeholder="Email Address"   autocomplete="false" required/> 
                                                                </div>
                                                                </div>
                                                            </div>  
            
                                                            <div class="form-group">
                                                                <div class="col-md-8">
                                                                    <label class="col-md-4 control-label" for=
                                                                    "COMPANYNAME">Company Name:</label>
            
                                                                    <div class="col-md-8">
                                                                    <select class="form-control input-sm" id="COMPANYID" name="companyname" required>

                                                                             <option value="{{$employee->companyname}}">{{$employee->companyname}}</option>
                                                                             @foreach ($companies as $company )
                                                                             <option value="{{$company->name}}">{{$company->name}}</option>
                                                                             @endforeach
                                                                           
                                                                                                                                        
                                                                    </select>
                                                                    </div>
                                                                </div>
                                                            </div>  
            
                                                            <div class="form-group">
                                                                <div class="col-md-8">
                                                                    <label class="col-md-4 control-label" for=
                                                                    "idno"></label>  
            
                                                                    <div class="col-md-8">
                                                                        <button class="btn btn-primary btn-sm" name="save" type="submit" ><span class="fa fa-save fw-fa"></span>update</button>
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                    </form>
                                                </div><!--/.services-->
                                            </div><!--/.row--> 
                                        </div><!--/.container-->
                                    </section><!--/#feature-->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
                        <!-- end content -->
            
@endsection