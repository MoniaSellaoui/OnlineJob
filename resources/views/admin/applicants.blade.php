@extends('admin_Layout.master')
@section('title')
  Applicants
@endsection

@section('content')

            <!-- start content -->
            <div class="content-wrapper">
                <section class="content-header">
                    <h1> Applicants </h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href="http://127.0.0.1:8000/admin"> <i class="fa fa-dashboard"></i> Home</a>
                        </li>
                        <li class=>Applicants</li>      
                    </ol>
                </section>
            
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-body">  
                                        
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h1 class="page-header">List of Applicant's   </h1>
                                        </div>
                                    </div>
                                    <form class="wow fadeInDownaction" action="" Method="POST">   		
                                        <table id="dash-table" class="table table-striped  table-hover table-responsive" style="font-size:12px" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Applicant</th>
                                                    <th>Job Title</th>
                                                    <th>Company</th>
                                                    <th>Applied Date</th> 
                                                    <th width="14%" >Action</th> 
                                                </tr>	
                                            </thead> 
                                            <tbody>
                                                                                        <tr>
                                                        <td>Nkele Nkele</td>
                                                        <td>Digital Marketer</td>
                                                        <td>URC</td>
                                                        <td>2022-08-01 00:04:16</td>
                                                        <td align="center" >    
                                                            <a title="View" href="/admin/viewapplicant/4/3"  class="btn btn-info btn-xs  ">
                                                            <span class="fa fa-info fw-fa"></span> View</a> 
                                                            <a title="Remove" href="/admin/deleteapplicant/1"  class="btn btn-danger btn-xs  ">
                                                            <span class="fa fa-trash-o fw-fa"></span> Remove</a> 
                                                        </td>
                                                    </tr>
                                                                              
                                            </tbody>
                                        </table>  
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
                        <!-- end content -->
            
@endsection