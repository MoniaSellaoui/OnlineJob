@extends('admin_Layout.master')
@section('title')
  Vacancy
@endsection

@section('content')
    <!-- start content -->
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
              Vacancy        <!-- <small>it all starts here</small> -->
            </h1>
            <ol class="breadcrumb">
              <li><a href="admin"><i class="fa fa-dashboard"></i> Home</a></li><li class=>Vacancy</li>      </ol>
        </section>
    
        <section class="content">
    
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-body">
                                <div class="row">
                    <div class="col-lg-12">
                      <h1 class="page-header">List of Vacancies  <a href="/admin/addvacancy" class="btn btn-primary btn-xs  ">  <i class="fa fa-plus-circle fw-fa"></i> Add Job Vacancy</a>  </h1>
                    </div>
                  <!-- /.col-lg-12 -->
                  </div>
    
                    <form action="controller.php?action=delete" Method="POST">  	
                    <div class="table-responsive">					
                  <table id="dash-table" class="table table-striped table-bordered table-hover"  style="font-size:12px" cellspacing="0">
                  
                    <thead>
                      <tr>
    
                        <!-- <th>No.</th> -->
                        <th>Company Name</th> 
                        <th>Occupation Title</th> 
                        <th>Require no. of Employees</th> 
                        <th>Salaries</th> 
                        <th>Duration of Employment</th> 
                        <th>Qualification/Work experience</th> 
                        <th>Job Description</th> 
                        <th>Prefered Sex</th> 
                        <th>Sector of Vacancy</th> 
                        
                        <th width="10%" align="center">Action</th>
                      </tr>	
                    </thead> 
                    <tbody>
                                        <tr>
                          <td>Copreros</td>
                          <td>IT Manager</td>
                          <td>2</td>
                          <td>1000</td>
                          <td>Jan 30</td>
                          <td>Two year Experience</td>
                          <td>We are looking for bachelor of science in information technology. asdasdasd</td>
                          <td>Male/Female</td>
                          <td>Maintainance.</td>
                          <td align="center">
                            <a title="Edit" href="/admin/editvacancy/1" class="btn btn-primary btn-xs  ">  <span class="fa fa-edit fw-fa"></a>
                            <a title="Delete" href="/admin/deletevacancy/1" class="btn btn-danger btn-xs  ">  <span class="fa  fa-trash-o fw-fa "></a>
                          </td>
                        </tr>
                                        <tr>
                          <td>URC</td>
                          <td>Digital Marketer</td>
                          <td>3</td>
                          <td>2500</td>
                          <td>Jan 30</td>
                          <td>Four years of experience</td>
                          <td>We are looking for bachelor of science in information technology. asdasdasd</td>
                          <td>Male/Female</td>
                          <td>Marketing</td>
                          <td align="center">
                            <a title="Edit" href="/admin/editvacancy/3" class="btn btn-primary btn-xs  ">  <span class="fa fa-edit fw-fa"></a>
                            <a title="Delete" href="/admin/deletevacancy/3" class="btn btn-danger btn-xs  ">  <span class="fa  fa-trash-o fw-fa "></a>
                          </td>
                        </tr>
                                  
                            </tbody>
                  </table>
                      <div class="btn-group">
                  <!--  <a href="index.php?view=add" class="btn btn-default">New</a> -->
                            </div>
                
                
                    </form>
    
                  <div class="table-responsive">	  
                  </div>
                </div>
              </div>
            </div>
        </section>
      </div>
                <!-- end content -->
    
@endsection