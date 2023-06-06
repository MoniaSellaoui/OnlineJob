@extends('admin_Layout.master')
@section('title')
  Edit Company
@endsection

@section('content')

            <!-- start content -->
            <div class="content-wrapper">

                <section class="content-header">
                    <h1>Company</h1>
                    <ol class="breadcrumb">
                      <li><a href="dashboard.html"><i class="fa fa-dashboard"></i> Home</a></li><li class=><a href="dashboard.html">Company</a></li><li class="active">add</li>      
                    </ol>
                </section>
            
                <section class="content">
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="box">
                        <div class="box-body">         
                         <form class="form-horizontal span6" action="{{url('/admin/updatecompany')}}" method="POST">
                            {{ csrf_field() }}

                            
                               <div class="row">
                                <div class="col-lg-12">
                                  <h1 class="page-header">Edit New Company</h1>
                                </div>
                               </div> 
                           
                                <br>
                              <div class="form-group">
                                <div class="col-md-8">
                                  <label class="col-md-4 control-label" for="COMPANYNAME">Company Name:</label>
            
                                  <div class="col-md-8">
                                    <input type="hidden" name="id" value="{{$company->id}}">
                                    <input class="form-control input-sm" id="COMPANYNAME" placeholder=
                                        "Company Name" type="text" value="{{$company->name}}" autocomplete="none" name="name" required>
                                  </div>
                                </div>
                              </div>
            
                              <div class="form-group">
                                <div class="col-md-8">
                                  <label class="col-md-4 control-label" for="COMPANYADDRESS">Company Address:</label> 
                                  <div class="col-md-8">
                                    <textarea class="form-control input-sm" id="COMPANYADDRESS" placeholder="Company Address" type="text" value="{{$company->address}}" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off" name="address">{{$company->address}}</textarea>
                                  </div>
                                </div>
                              </div> 
            
                              <div class="form-group">
                                <div class="col-md-8">
                                  <label class="col-md-4 control-label" for="COMPANYCONTACTNO">Company Contact No.:</label>
            
                                  <div class="col-md-8">
                                    <input class="form-control input-sm" id="COMPANYCONTACTNO" placeholder=
                                        "Company Contact No." type="text" value="{{$company->contact}}" autocomplete="none"   name="contact" required>
                                  </div>
                                </div>
                              </div>  
            
                              <div class="form-group">
                                <div class="col-md-8">
                                  <label class="col-md-4 control-label" for="idno"></label>  
            
                                  <div class="col-md-8">
                                    <button class="btn btn-primary btn-sm" name="save" type="submit" ><span class="fa fa-save fw-fa"></span>update</button>
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