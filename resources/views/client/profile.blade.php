@extends('client_Layout.master')
@section('title')
  Profile
@endsection

@section('content')
 <!-- start content -->
 <section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="pageTitle">Profile</h2>
        </div>
      </div>
    </div>
  </section>

  <div class="container" style="margin-top: 10px;min-height: 600px;">
    <div class="row">
      <div class="col-sm-3"><!--left col-->
        <div class="panel panel-default">            
          <div class="panel-body"> 
            <div  id="image-container">
              <img title="profile image"  data-target="#myModal1"  data-toggle="modal"  src="/storage/profiles/team2_1659498284.jpg" style="border-radius : 50% "> 
            </div>
          </div>

          <ul class="list-group">
            <li class="list-group-item text-muted">Profile</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Real Name</strong></span> 
            Héritier Nkele 
            </li>
          </ul> 

          <div class="box box-solid">  
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked"> 
                <li class="active"><a href=""><i class="fa fa-list"></i> Applied Jobs
                  </a></li>
                  <li class=""><a href=""><i class="fa fa-user"></i> Accounts </a></li>
                <li class=""><a href=""><i class="fa fa-envelope-o"></i> Messages
                  <span class="label label-success pull-right">1</span></a></li> 
              </ul>
            </div>
            <!-- /.box-body -->
          </div>

        <!-- /.box -->
        </div>
        
      </div> 
      <div class="col-sm-9">

      <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper"> 
          <!-- Main content -->
          <section class="content">
            <div class="row"> 
              <!-- /.col -->
              <div class="col-md-12">
                <div class="box box-primary">
                  <div class="box-header with-border">
                    <h3 class="box-title">Applied Jobs</h3> 
                    <!-- /.box-tools -->
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body no-padding">
                    <div class="table-responsive mailbox-messages">
                      <table id="dash-table" class="table table-hover table-striped">
                        <thead> 
                          <tr>
                            <th>Job Title</th>
                            <th>Company</th>
                            <th>Location</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ( $applicants as $applicant )
                          <tr>
                            <td class="mailbox-star">
                              <a href=""><i class="fa fa-pencil-o text-yellow"></i> {{$applicant->occuptitle}}</a>
                            </td>
                            <td class="mailbox-attachment">{{$applicant->company}}</td>
                            <td class="mailbox-attachment">{{Session::get('client')->address}}</td>
                            <td class="mailbox-attachment">{{$applicant->status}}
                            </td>
                          </tr> 
                          @endforeach
                             
                                
                        </tbody>
                      </table>
                      <!-- /.table -->
                    </div>
                    <!-- /.mail-box-messages -->
                  </div> 
                </div>
                <!-- /. box -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </section>
          <!-- /.content -->
        </div>    
      </div><!--/col-sm-9-->
    </div><!--/row-->
  </div>
<!-- end content --> 

<!-- Modal -->
  <div class="modal fade" id="myModal1" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button class="close" data-dismiss="modal" type="button">×</button>
          <h4 class="modal-title" id="myModalLabel">Choose Image.</h4>
        </div>

        <form action="profile/uploadimage " method="post" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="ZJLPQIkfMJhoPRGwoueM8KtNelvHt69vXLhsfjjO">
          <div class="modal-body">
            <div class="form-group">
              <div class="rows">
                <div class="col-md-12">
                  <div class="rows">
                    <div class="col-md-8">
                        <input id="photo" name="image" type="file" required />
                    </div>
                    <div class="col-md-4"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="modal-footer">
            <button class="btn btn-default" data-dismiss="modal" type="button">Close</button> 
            <button  class="btn btn-primary"
              name="savephoto" type="submit">Upload Photo</button>
          </div>

        </form>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
<!-- /.modal -->
    

@endsection