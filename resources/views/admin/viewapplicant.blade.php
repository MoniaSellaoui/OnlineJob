@extends('admin_Layout.master')
@section('title')
View Applicant
@endsection

@section('content')

                   <!-- start content -->
                   <div class="content-wrapper">
                    <section class="content-header">
                        <h1>Applicants</h1>
                        <ol class="breadcrumb">
                            <li><a href="dashboard.html"><i class="fa fa-dashboard"></i> Home</a></li>
                            <li class=><a href="dashboard.html">Applicants</a></li><li class="active">view</li>      
                        </ol>
                    </section>
            
                    <section class="content">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box">
                                    <div class="box-body">
                    
                                        <style type="text/css">
                                            .content-header {
                                                min-height: 50px;
                                                border-bottom: 1px solid #ddd;
                                                font-size: 15px;
                                                font-weight: bold;
                                            }
            
                                            .content-body {
                                                min-height: 350px;
                                                /*border-bottom: 1px solid #ddd;*/
                                            }
            
                                            .content-body >p {
                                                padding:10px;
                                                font-size: 12px;
                                                font-weight: bold;
                                                border-bottom: 1px solid #ddd;
                                            }
            
                                            .content-footer {
                                                min-height: 100px;
                                                border-top: 1px solid #ddd;
                                            }
            
                                            .content-footer > p {
                                                padding:5px;
                                                font-size: 15px;
                                                font-weight: bold; 
                                            }
                                        
                                            .content-footer textarea {
                                                width: 100%;
                                                height: 200px;
                                            }
                                            .content-footer  .submitbutton{  
                                                margin-top: 20px;
                                                /*padding: 0;*/
                                            }
                                        </style>
                    
                                        <form action="/admin/sendfeedback " method="POST">
                                         {{ csrf_field() }}
                                            <div class="col-sm-12 content-header">View Details</div>
                                            
                                            <div class="col-sm-6 content-body" > 
                                                <p>Job Details</p> 
                                                <h3>{{$vacancy->occuptitle}}</h3>
                                                <input type="hidden" name="JOBREGID" value="3">
                                                <input type="hidden" name="APPLICANTID" value="2022016">
                        
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
                                                    <p>Job Description : </p>   
                                                    <p style="margin-left: 15px;">{{$vacancy->description}}</p>
                                                </div>
                        
                                                <div class="col-sm-12"> 
                                                    <p>Qualification/Work Experience : </p>
                                                    <p style="margin-left: 15px;">{{$vacancy->experience}}</p>
                                                </div>
                        
                                                <div class="col-sm-12"> 
                                                    <p>Employeer : </p>
                                                    <p style="margin-left: 15px;">{{$vacancy->companyname}}</p> 
                                                    
                                                </div>
                        
                                            </div>
                    
                                            <div class="col-sm-6 content-body" >
                                                <p>Applicant Infomation</p> 
                                                <h3> {{$client->firstname}}  {{$client->middlename}} {{$client->lastname}}
                                                </h3>
                                                <ul> 
                                                    <li>Address : {{$client->address}}</li>
                                                    <li>Contact No. :{{$client->phone}}</li>
                                                    <li>Email Address. : {{$client->email}}</li>
                                                    <li>Sex: {{$client->gender}}</li>
                                                    <li>Age : {{$client->dateofbirth}}</li> 
                                                </ul>
            
                                                <div class="col-sm-12"> 
                                                    <p>Educational Attainment : </p>
                                                    <p style="margin-left: 15px;">{{$client->degree}}</p>
                                                </div>
                                            </div>
                                        
                                            <div class="col-sm-12 content-footer">
                                                
                                                <p><i class="fa fa-paperclip"></i>  Attachment Files</p>
                                                
                                                <div class="col-sm-12 slider">
                                                    <h3>Download Resume <a target="_blank" href="/storage/resumes/{{$applicant->resume}}" >Here</a></h3>
                                                </div> 
                        
                                                <div class="col-sm-12">
                                                    <p>Feedback</p>
                                                    <textarea class="input-group" name="feedback" required> 
                                                      {{$applicant->status != "pending" ? $applicant->status:''}} </textarea>
                                                    <input type="hidden" name="id" value="{{$applicant->id}}">
                                                </div>
            
                                                <div class="col-sm-12  submitbutton "> 
                                                    <button type="submit" name="submit" class="btn btn-primary">Send</button>
                                                </div> 
                                            </div>
            
                                        </form> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- end content -->
@endsection