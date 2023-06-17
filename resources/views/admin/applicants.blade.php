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
                                    @if (Session::has('status'))
                                    <div class="alert-success" style="height:30px;text-align:center;padding:5px">
                                    {{Session::get('status')}}
                                    </div>
                                        
                                    @endif
                                        
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
                                                @foreach ($applicants as $applicant )
                                                <tr>
                                                    <td>{{$applicant->fullname}}</td>
                                                    <td>{{$applicant->occuptitle}}</td>
                                                    <td>{{$applicant->company}}</td>
                                                    <td>{{$applicant->created_at}}</td>
                                                    <td align="center" >    
                                                        <a title="View" href="/admin/viewapplicant/{{$applicant->clientid}}/{{$applicant->vacancyid}}"  class="btn btn-info btn-xs  ">
                                                        <span class="fa fa-info fw-fa"></span> View</a> 
                                                        <a title="Remove" href="/admin/deleteapplicant/{{$applicant->id}}"  class="btn btn-danger btn-xs  ">
                                                        <span class="fa fa-trash-o fw-fa"></span> Remove</a> 
                                                    </td>
                                                </tr>
                                                @endforeach
                                                    
                                                                              
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