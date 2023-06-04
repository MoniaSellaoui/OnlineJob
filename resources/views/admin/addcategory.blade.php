@extends('admin_Layout.master')
@section('title')
  Add Category
@endsection

@section('content')

            <!-- start content -->
            <div class="content-wrapper">
              <section class="content-header">
                  <h1>Category</h1>
                  <ol class="breadcrumb">
                    <li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class=><a href="dashboard.html">Category</a></li>
                    <li class="active">add</li>      
                  </ol>
              </section>
          
              <section class="content">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="box">
                      <div class="box-body">
                                      <form class="form-horizontal span6" action="admin/savecategory" method="POST">
                          <input type="hidden" name="_token" value="Nlnz4RR81OkM5thtNt1eIPiOup05KoiKdN3rY7OA">
                          <div class="row">
                            <div class="col-lg-12">
                              <h1 class="page-header">Add New Category</h1>
                            </div>
                            <!-- /.col-lg-12 -->
                          </div> 
          
                          <div class="form-group">
                            <div class="col-md-8">
                              <label class="col-md-4 control-label" for=
                              "CATEGORY">Category:</label>
          
                              <div class="col-md-8">
                                <input class="form-control input-sm" id="CATEGORY" name="category" placeholder=
                                    "Category" type="text" value="">
                              </div>
                            </div>
                          </div>
          
                          <div class="form-group">
                            <div class="col-md-8">
                              <label class="col-md-4 control-label" for=
                              "idno"></label>
                              <div class="col-md-8">
                                <button class="btn btn-primary btn-sm" name="save" type="submit" ><span class="fa fa-save fw-fa"></span> Save</button>
                              </div>
                            </div>
                          </div> 
          
                          <div class="form-group">
                            <div class="rows">
                              <div class="col-md-6">
                                <label class="col-md-6 control-label" for="otherperson"></label>
                                <div class="col-md-6">
                                </div>
                              </div>
                              <div class="col-md-6" align="right">
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