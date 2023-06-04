@extends('admin_Layout.master')
@section('title')
  Category
@endsection

@section('content')

            <!-- start content -->
            <div class="content-wrapper">

                <section class="content-header">
                    <h1>Category</h1>
                    <ol class="breadcrumb">
                    <li><a href="admin"><i class="fa fa-dashboard"></i> Home</a></li><li class=>Category</li>      </ol>
                </section>
            
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-body">
                                                            <div class="row">
                                        <div class="col-lg-12">
                                            <h1 class="page-header">List of Categories  <a href="/admin/addcategory" class="btn btn-primary btn-xs  ">  <i class="fa fa-plus-circle fw-fa"></i> Add Category</a>  </h1>
                                        </div>
                                        <!-- /.col-lg-12 -->
                                    </div>
            
                                    <form action="" Method="POST">
                                        <div class="table-responsive">
            
                                            <table id="dash-table" class="table table-striped table-bordered table-hover" style="font-size:12px" cellspacing="0">
                                            
                                                <thead>
                                                    <tr>
                                                        <th> Category</th> 
                                                        <th width="10%" align="center">Action</th>
                                                    </tr>	
                                                </thead>
                                                 
                                                <tbody>
                                                                                                <tr>
                                                            <td>It jobs</td>
                                                            <td align="center"><a title="Edit" href="/admin/editcategory/1" class="btn btn-primary btn-xs  "> <span class="fa fa-edit fw-fa"></a>
                                                                <a title="Delete" href="/admin/deletecategory/1" class="btn btn-danger btn-xs  ">  <span class="fa  fa-trash-o fw-fa "></a>
                                                            </td>
                                                        </tr>
                                                                                                <tr>
                                                            <td>Technology</td>
                                                            <td align="center"><a title="Edit" href="/admin/editcategory/2" class="btn btn-primary btn-xs  "> <span class="fa fa-edit fw-fa"></a>
                                                                <a title="Delete" href="/admin/deletecategory/2" class="btn btn-danger btn-xs  ">  <span class="fa  fa-trash-o fw-fa "></a>
                                                            </td>
                                                        </tr>
                                                                                                <tr>
                                                            <td>Digital Marketing</td>
                                                            <td align="center"><a title="Edit" href="/admin/editcategory/4" class="btn btn-primary btn-xs  "> <span class="fa fa-edit fw-fa"></a>
                                                                <a title="Delete" href="/admin/deletecategory/4" class="btn btn-danger btn-xs  ">  <span class="fa  fa-trash-o fw-fa "></a>
                                                            </td>
                                                        </tr>
                                                                                                          
                                                </tbody>
                                            </table>
            
                                            <div class="btn-group">
                                            </div>
            
                                        </div>
                                    </form>
            
                                    <div class="table-responsive"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            
            </div>
                        <!-- end content -->
            
@endsection