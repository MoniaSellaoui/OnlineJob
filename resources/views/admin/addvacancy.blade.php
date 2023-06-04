@extends('admin_Layout.master')
@section('title')
  Users
@endsection

@section('content')
 <!-- start content -->
 <div class="content-wrapper">

    <section class="content-header">
        <h1>
        Vacancy        <!-- <small>it all starts here</small> -->
        </h1>
        <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i> Home</a></li><li class=><a href="">Vacancy</a></li><li class="active">add</li>      </ol>
    </section>

    <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-body">
                                                        <form class="form-horizontal span6" action="admin/savevacancy " method="POST">
                                <input type="hidden" name="_token" value="Nlnz4RR81OkM5thtNt1eIPiOup05KoiKdN3rY7OA">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h1 class="page-header">Add New Job Vacancy</h1>
                                    </div>
                                    <!-- /.col-lg-12 -->
                                </div> 

                                <div class="form-group">
                                    <div class="col-md-8">
                                        <label class="col-md-4 control-label" for=
                                        "COMPANYNAME">Company Name:</label>
                                        <div class="col-md-8">
                                            <select class="form-control input-sm" id="COMPANYID" name="companyname" required>
                                                <option value="">Select</option>
                                                                                                    <option value="Copreros">Copreros</option> 
                                                                                                    <option value="URC">URC</option> 
                                                                                                    <option value="Quest">Quest</option> 
                                                                                                    <option value="Palacios Company">Palacios Company</option> 
                                                                                                    <option value="IT Company">IT Company</option> 
                                                                                            </select>
                                        </div>
                                    </div>
                                </div>  

                                <div class="form-group">
                                    <div class="col-md-8">
                                        <label class="col-md-4 control-label" for="CATEGORY">Category :</label>

                                        <div class="col-md-8">
                                            <select class="form-control input-sm" id="CATEGORY" name="category" required>
                                                <option value="">Select</option>
                                                                                                    <option value="It jobs">It jobs</option> 
                                                                                                    <option value="Technology">Technology</option> 
                                                                                                    <option value="Digital Marketing">Digital Marketing</option> 
                                                                       
                                            </select>
                                        </div>
                                    </div>
                                </div>  

                                <div class="form-group">
                                    <div class="col-md-8">
                                        <label class="col-md-4 control-label" for=
                                        "OCCUPATIONTITLE">Occupation Title:</label> 
                                        <div class="col-md-8">
                                        <input class="form-control input-sm" id="OCCUPATIONTITLE" name="occuptitle" placeholder="Occupation Title"   autocomplete="none" required /> 
                                        </div>
                                    </div>
                                </div>  

                                <div class="form-group">
                                    <div class="col-md-8">
                                        <label class="col-md-4 control-label" for=
                                        "REQ_NO_EMPLOYEES">Required no. of Employees:</label> 
                                        <div class="col-md-8">
                                            <input class="form-control input-sm" type="number" id="REQ_NO_EMPLOYEES" name="numofemp" placeholder="Required no. of Employees"   autocomplete="none" required /> 
                                        </div>
                                    </div>
                                </div>  

                                <div class="form-group">
                                    <div class="col-md-8">
                                        <label class="col-md-4 control-label" for=
                                        "SALARIES">Salary:</label> 
                                        <div class="col-md-8">
                                            <input class="form-control input-sm" id="SALARIES" name="salary" type="number" placeholder="Salary"   autocomplete="none" required /> 
                                        </div>
                                    </div>
                                </div>  

                                <div class="form-group">
                                    <div class="col-md-8">
                                        <label class="col-md-4 control-label" for=
                                        "DURATION_EMPLOYEMENT">Duration of Employment:</label> 
                                        <div class="col-md-8">
                                            <input class="form-control input-sm" id="DURATION_EMPLOYEMENT" name="duration" placeholder="Duration of Employment"   autocomplete="none" required /> 
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-8">
                                        <label class="col-md-4 control-label" for=
                                        "QUALIFICATION_WORKEXPERIENCE">Qualification/Work Experience:</label> 
                                        <div class="col-md-8">
                                            <textarea class="form-control input-sm" id="QUALIFICATION_WORKEXPERIENCE" name="experience" placeholder="Qualification/Work Experience"   autocomplete="none" required ></textarea> 
                                        </div>
                                    </div>
                                </div> 

                                <div class="form-group">
                                    <div class="col-md-8">
                                        <label class="col-md-4 control-label" for=
                                        "JOBDESCRIPTION">Job Description:</label> 
                                        <div class="col-md-8">
                                            <textarea class="form-control input-sm" id="JOBDESCRIPTION" name="description" placeholder="Job Description"   autocomplete="none" required ></textarea> 
                                        </div>
                                    </div>
                                </div>  

                                <div class="form-group">
                                    <div class="col-md-8">
                                        <label class="col-md-4 control-label" for=
                                        "PREFEREDSEX">Prefered Sex:</label> 
                                        <div class="col-md-8">
                                            <select class="form-control input-sm" id="PREFEREDSEX" name="prefsex" required>
                                                <option value="">Select</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                                <option>Male/Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>  

                                <div class="form-group">
                                    <div class="col-md-8">
                                        <label class="col-md-4 control-label" for=
                                        "SECTOR_VACANCY">Sector of Vacancy:</label> 
                                        <div class="col-md-8">
                                            <textarea class="form-control input-sm" id="SECTOR_VACANCY" name="sector" placeholder="Sector of Vacancy"   autocomplete="none" required></textarea> 
                                        </div>
                                    </div>
                                </div>   
                                
                                <div class="form-group">
                                    <div class="col-md-8">
                                        <label class="col-md-4 control-label" for="idno"></label>  

                                        <div class="col-md-8">
                                            <button class="btn btn-primary btn-sm" name="save" type="submit" ><span class="fa fa-save fw-fa"></span> Save</button></a>
                                        </div>
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