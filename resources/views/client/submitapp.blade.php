@extends('client_Layout.master')
@section('title')
  Submit
@endsection

@section('content')
 <!-- start conent -->
 <section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">Submit Application</h2>
            </div>
        </div>
    </div>
</section>

<section id="content">
    <div class="container content">     
        <p> </p>     
        <form class="form-horizontal span6  wow fadeInDown" action="/submit " method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
            <div class="col-sm-8"> 
                <div class="row">
                    <h2 class=" ">Personal Info</h2>          
                    <div class="form-group">
                        <div class="col-md-11">
                        <label class="col-md-4 control-label" for=
                            "FNAME">Firstname:</label>
                    
                            <div class="col-md-8">
                                <input class="form-control input-sm" id="FNAME" name="firstname" value="{{Session::get('client')->firstname}}" placeholder="Firstname" type="text" value="Héritier" autocomplete="off" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-11">
                            <label class="col-md-4 control-label" for=
                            "LNAME">Lastname:</label>
                    
                            <div class="col-md-8">
                                <input  class="form-control input-sm" id="LNAME" name="lastname" value="{{Session::get('client')->lastname}}" placeholder="Lastname" value="N&#039;kele"  autocomplete="off" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-11">
                            <label class="col-md-4 control-label" for=
                            "MNAME">Middle Name:</label>
                    
                            <div class="col-md-8">
                                <input  class="form-control input-sm" id="MNAME" name="middlename" placeholder=
                                "Middle Name" value="{{Session::get('client')->middlename}}" autocomplete="off" readonly>
                            </div>
                        </div>
                    </div> 

                    <div class="form-group">
                        <div class="col-md-11">
                            <label class="col-md-4 control-label" for=
                            "ADDRESS">Address:</label>
                    
                            <div class="col-md-8">
                                <textarea class="form-control input-sm" id="ADDRESS" name="address" placeholder=
                                "Address" type="text" value="{{Session::get('client')->address}}" readonly autocomplete="off">{{Session::get('client')->address}}</textarea>
                            </div>
                        </div>
                    </div> 

                    <div class="form-group">
                        <div class="col-md-11">
                            <label class="col-md-4 control-label" for=
                            "Gender">Sex:</label>
                            @if (Session::get('client')->gender=="Male")
                                   <div class="col-md-8">
                                  
                                    <div class="col-lg-5">
                                        <div class="radio">
                                        <label><input id="optionsRadios1"  name="gender" type="radio" value="Female" readonly>Female</label>
                                        </div>
                                    </div>
                            
                                    <div class="col-lg-4">
                                        <div class="radio">
                                        <label><input id="optionsRadios2" checked="true"   name="gender" type="radio" value="Male" readonly> Male</label>
                                        </div>
                                    </div> 
                                    @else
                                    <div class="col-md-8">
                                    <div class="col-lg-5">
                                        <div class="radio">
                                        <label><input id="optionsRadios1"  name="gender" checked="true" type="radio" value="Female" readonly>Female</label>
                                        </div>
                                    </div>
                            
                                    <div class="col-lg-4">
                                        <div class="radio">
                                        <label><input id="optionsRadios2" checked="true"   name="gender" type="radio" value="Male" readonly> Male</label>
                                        </div>
                                    </div> 
                                    @endif
                                 
                                </div> 
                            
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-11">
                            <label class="col-md-4 control-label" for=
                            "BIRTHPLACE">
                                Date of Birth:
                            </label>
                    
                            <div class="col-md-8">
                                <input type="date" name="" id="" class="form-control input-sm" value="{{session::get('client')->dateofbirth}}" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-11">
                            <label class="col-md-4 control-label" for=
                            "BIRTHPLACE">Place of Birth:</label>
                    
                            <div class="col-md-8">
                                <textarea class="form-control input-sm" id="BIRTHPLACE" name="birthplace" value="{{session::get('client')->birthplace}}" placeholder="Place of Birth" type="text" autocomplete="off" readonly>{{session::get('client')->birthplace}}
                                </textarea>
                            </div>
                        </div>
                    </div> 

                    <div class="form-group">
                        <div class="col-md-11">
                            <label class="col-md-4 control-label" for=
                            "TELNO">Contact No.:</label>
                        
                            <div class="col-md-8">
                                <input class="form-control input-sm" id="TELNO" name="phone" placeholder=
                                "Contact No." type="text" any value="{{session::get('client')->phone}}" readonly autocomplete="off">
                            </div>
                        </div>
                    </div> 

                    <div class="form-group">
                        <div class="col-md-11">
                            <label class="col-md-4 control-label" for=
                            "CIVILSTATUS">Civil Status:</label>
                        
                            <div class="col-md-8">
                                <select class="form-control input-sm" name="civilstatus" id="CIVILSTATUS" readonly >
                                    <option value="{{session::get('client')->civilstatus}}" >{{session::get('client')->civilstatus}}</option>
                                </select> 
                            </div>
                        </div>
                    </div>  
                    
                    <div class="form-group">
                        <div class="col-md-11">
                            <label class="col-md-4 control-label" for=
                            "EMAILADDRESS">Email Address:</label> 
                            <div class="col-md-8">
                                <input type="email" class="form-control input-sm" id="EMAILADDRESS" name="email" placeholder="Email Address"   autocomplete="false" value="{{session::get('client')->email}}" readonly/> 
                            </div>
                        </div>
                    </div>  

                    <div class="form-group">
                        <div class="col-md-11">
                            <label class="col-md-4 control-label" for=
                            "USERNAME">Username:</label>
                        
                            <div class="col-md-8">
                                <input  class="form-control input-sm" id="USERNAME" name="username" placeholder="Username" value="{{session::get('client')->username}}" autocomplete="off" readonly>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-md-11">
                            <label class="col-md-4 control-label" for=
                            "PASS">Password:</label>
                        
                            <div class="col-md-8">
                            <input  class="form-control input-sm" id="PASS" name="password" placeholder="Password" type="password" value="{{session::get('client')->password}}" autocomplete="off" readonly>
                            </div>
                        </div>
                    </div> 

                    <div class="form-group">
                        <div class="col-md-11">
                            <label class="col-md-4 control-label" for=
                            "DEGREE">Educational Attainment:</label>
                        
                            <div class="col-md-8">
                                <input  class="form-control input-sm" id="DEGREE" name="degree" placeholder="Educational Attainment" value="{{session::get('client')->degree}}" autocomplete="off" readonly>
                            </div>
                        </div>
                    </div> 

                    <div class="form-group">
                        <div class="col-md-11">
                            <label class="col-md-4 control-label" for=
                            "d"></label>  
                        
                            <div class="col-md-8">
                                <label><input type="checkbox" required> By Sign up you are agree with our <a href="#">terms and condition</a></label>
                            
                            </div>
                        </div>
                    </div>   
    
                </div>
            </div>

            <div class="col-sm-4">
                <div class="row">
                    <h2 class=" " >Job Details</h2>
                    <div class="panel">

                        <div class="panel-header">
                            <div style="border-bottom: 1px solid #ddd;padding: 10px;font-size: 25px;font-weight: bold;color: #000;margin-bottom: 5px;"><a href="">{{$vacancy->occuptitle}}</a> 
                            </div> 
                        </div>

                        <div class="panel-body">
                                <div class="row contentbody">
                                        <div class="col-sm-6">
                                            <ul>
                                                <li><i class="fp-ht-bed"></i>Required No. of Employee's : {{$vacancy->numofemp}}</li>
                                                <li><i class="fp-ht-food"></i>Salary : {{$vacancy->salary}}</li>
                                                <li><i class="fa fa-sun-"></i>Duration of Employment : {{$vacancy->duration}}</li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <ul> 
                                                <li><i class="fp-ht-tv"></i>Prefered Sex : {{$vacancy->prefsex}}</li>
                                                <li><i class="fp-ht-computer"></i>Sector of Vacancy : {{$vacancy->sector}}</li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-12">
                                            <p>Qualification/Work Experience :</p>
                                            <ul style="list-style: none;"> 
                                                <li>{{$vacancy->experience}}</li> 
                                            </ul> 
                                        </div>
                                        <div class="col-sm-12"> 
                                            <p>Job Description:</p>
                                            <ul style="list-style: none;"> 
                                                <li>{{$vacancy->description}}</li> 
                                            </ul> 
                                        </div>
                                        <div class="col-sm-12">
                                            <p>Employer :  {{$vacancy->companyname}}</p> 
                                            <p>Location :  {{$vacancy->address}}</p>
                                        </div>
                                    </div>
                        </div>
                        
                        <div class="panel-footer">
                            Date Posted : {{$vacancy->created_at}}  
                        </div>
                    </div>  
                </div>
            </div>

            <div class="col-sm-12">
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-header">
                            <div style="border-bottom: 1px solid #ddd;padding: 10px;font-size: 25px;font-weight: bold;color: #000;margin-bottom: 5px;">Attach your Resume here.
                            </div>
                        </div>
                        <div class="panel-body"> 
                            <label class="col-md-2" for="picture" style="padding: 0;margin: 0;">Attachtment File:</label> 
                            <div class="col-md-10" style="padding: 0;margin: 0;">
                                <input id="picture" name="resume" type="file" required>
                                <input type="hidden" name="vacancyid" value="{{$vacancy->id}}">
                                <input type="hidden" name="clientid" value="{{session::get('client')->id}}">
                                <input type="hidden" name="companyname" value="{{$vacancy->companyname}}">
                                <input type="hidden" name="occuptitle" value="{{$vacancy->occuptitle}}">
                            </div> 
                        </div>
                    </div> 
                </div> 
            </div>
            <div class="form-group">
                <div class="col-md-12"> 
                    <button class="btn btn-primary btn-sm pull-right" name="submit" type="submit" >Submit <span class="fa fa-arrow-right"></span></button>
                <a href="" class="btn btn-info"><span class="fa fa-arrow-left"></span>&nbsp;<strong>Back</strong></a> 
                </div>
            </div>   
        </form> 
    </div> 
</section> 
<!-- end content -->
@endsection