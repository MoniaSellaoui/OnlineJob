@extends('admin_Layout.master')
@section('title')
  User Profile
@endsection

@section('content')
         <!-- start content -->
         <div class="content-wrapper">     
            <section class="content-header">
                <h1> Users </h1>
                <ol class="breadcrumb">
                  <li><a href="dashboard.html"><i class="fa fa-dashboard"></i> Home</a></li><li class=><a href="">Users</a></li><li class="active">view</li>      
                </ol>
            </section>
        
            <section class="content">
              <div class="row">
                <div class="col-xs-12">
                  <div class="box">
                    <div class="box-body">
        
                      <div class="alert-success" style="height:30px;text-align:center;padding:5px">Profile has been updated!
                      </div>
        
                      <div class="container">
                        <div class="panel-body inf-content">
                          <div class="row">
                            <div class="col-md-4">
                              <a  data-target="#myModal" data-toggle="modal" href="" title="Click here to Change Image." >
                                <img alt="" style="width:500px; height:400px;"
                                title="" class="img-circle img-thumbnail isTooltip" src="{{asset('dist/img/user/photos/Koala.jpg')}}" data-original-title="Usuario"> 
                              </a>  
                            </div>
        
                            <div class="col-md-6">
        
                              <h1><strong>User Profile</strong></h1><br>
                              
                              <form class="form-horizontal span6" action="" method="POST">
                                
                                <div class="form-group">
                                  <div class="col-md-8">
                                    <label class="col-md-4 control-label" for=
                                    "U_NAME">Name:</label>
        
                                    <div class="col-md-8">
                                      <input class="form-control input-sm" id="U_NAME" name="U_NAME" placeholder=
                                          "Account Name" type="text" value="Héritier">
                                    </div>
                                  </div>
                                </div>
        
                                <div class="form-group">
                                  <div class="col-md-8">
                                    <label class="col-md-4 control-label" for=
                                    "U_USERNAME">Username:</label>
        
                                    <div class="col-md-8">
                                      <input class="form-control input-sm" id="U_USERNAME" name="U_USERNAME" placeholder=
                                          "Email Address" type="text" value="admin">
                                    </div>
                                  </div>
                                </div>
        
                                <div class="form-group">
                                  <div class="col-md-8">
                                    <label class="col-md-4 control-label" for=
                                    "U_PASS">Password:</label>
        
                                    <div class="col-md-8">
                                      <input class="form-control input-sm" id="U_PASS" name="U_PASS" placeholder=
                                          "Account Password" type="Password" value="" required>
                                    </div>
                                  </div>
                                </div>
        
                                <div class="form-group">
                                  <div class="col-md-8">
                                    <label class="col-md-4 control-label" for=
                                    "U_ROLE">Role:</label>
        
                                    <div class="col-md-8">
                                      <select class="form-control input-sm" name="U_ROLE" id="U_ROLE">
                                        <option value="Administrator"  selected="true">Administrator</option>
                                        <option value="Staff" >Staff</option>  
                                      </select> 
                                    </div>
        
                                  </div>
                                </div>
        
                                <div class="form-group">
                                  <div class="col-md-8">
                                    <label class="col-md-4 control-label" for=
                                    "idno"></label>
        
                                    <div class="col-md-8">
                                      <button class="btn btn-primary " name="save" type="submit" ><span class="fa fa-save fw-fa"></span> Save</button>
                                    </div>
                                  </div>
                                </div>
        
                              </form>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <button class="close" data-dismiss="modal" type=
                            "button">×</button>
        
                            <h4 class="modal-title" id="myModalLabel">Choose Image.</h4>
                            </div>
        
                            <form action="" method="post">
                            <div class="modal-body">
                                <div class="form-group">
                                <div class="rows">
                                    <div class="col-md-12">
                                    <div class="rows">
                                        <div class="col-md-8">
                                        <input id="photo" name="photo" type="file">
                                        </div>
                                        <div class="col-md-4"></div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
        
                            <div class="modal-footer">
                                <button class="btn btn-default" data-dismiss="modal">Close</button> <button class="btn btn-primary"
                                name="savephoto" type="submit">Upload Photo</button>
                            </div>
                            </form>
                        </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
                    <!-- end content -->
        
@endsection
