@extends('client_Layout.master')
@section('title')
  Register
@endsection

@section('content')
 <!-- start content -->

 <section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
            <h2 class="pageTitle">Register New Member</h2>
        </div>
      </div>
    </div>
  </section>

  <section id="content">
    @if (Session::has('status'))
    <div class="alert-success" style="height:30px;text-align:center;padding:5px">
    {{Session::get('status')}}
    </div>
        
    @endif
      <div class="container content">    
        <p> </p> 
     

        <form class="form-horizontal span6  wow fadeInDown" action="/createaccount " method="POST">
          {{ csrf_field() }}
      
          <div class="col-sm-8"> 
            <div class="row">
              <h2 class=" ">Personal Info</h2>
              
                <br>   
                 
              <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-4 control-label" for=
                    "FNAME">Firstname:</label>
                  <div class="col-md-8">
                    <input class="form-control input-sm" id="FNAME" name="firstname" placeholder=
                    "Firstname" type="text" value="" autocomplete="off" required>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-4 control-label" for=
                  "LNAME">Lastname:</label>
          
                  <div class="col-md-8">
                    <input  class="form-control input-sm" id="LNAME" name="lastname" placeholder="Lastname"   autocomplete="off" required>
                  </div>

                </div>
              </div>

              <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-4 control-label" for=
                  "MNAME">Middle Name:</label>
          
                  <div class="col-md-8">
                      <input  class="form-control input-sm" id="MNAME" name="middlename" placeholder=
                      "Middle Name" autocomplete="off" required>
                  </div>
                </div>
              </div> 

              <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-4 control-label" for=
                  "ADDRESS">Address:</label>
          
                  <div class="col-md-8">
                    <textarea class="form-control input-sm" id="ADDRESS" name="address" placeholder=
                    "Address" type="text" value="" required autocomplete="off"></textarea>
                  </div>
                </div>
              </div> 

              <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-4 control-label" for=
                  "Gender">Sex:</label>
            
                  <div class="col-md-8">
                    <div class="col-lg-5">
                      <div class="radio">
                        <label><input id="optionsRadios1"  name="gender" type="radio" value="Female" required>Female</label>
                      </div>
                    </div>
              
                    <div class="col-lg-4">
                      <div class="radio">
                        <label><input id="optionsRadios2"   name="gender" type="radio" value="Male" required> Male</label>
                      </div>
                    </div> 
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-4 control-label" for=
                  "BIRTHPLACE">
                      Date of Birth:
                  </label>
          
                  <div class="col-md-8">
                      <input type="date" name="dateofbirth" id="" class="form-control input-sm" required>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-4 control-label" for=
                  "BIRTHPLACE">Place of Birth:</label>
          
                  <div class="col-md-8">
                      <textarea class="form-control input-sm" id="ADDRESS" name="birthplace" placeholder="Place of Birth" type="text" value="" required autocomplete="off"></textarea>
                  </div>
                </div>
              </div> 

              <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-4 control-label" for=
                  "phone">Contact No.:</label>
              
                  <div class="col-md-8">
                      <input class="form-control input-sm" id="TELNO" name="phone" placeholder=
                      "Contact No." type="text" any value="" required autocomplete="off">
                  </div>
                </div>
              </div> 

              <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-4 control-label" for=
                  "CIVILSTATUS">Civil Status:</label>
              
                  <div class="col-md-8">
                      <select class="form-control input-sm" name="civilstatus" id="CIVILSTATUS" required>
                          <option value="" >Select</option>
                          <option value="Single">Single</option>
                          <option value="Married">Married</option>
                          <option value="Widow" >Widow</option>
                      </select> 
                  </div>
                </div>
              </div>  
                
              <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-4 control-label" for=
                  "EMAILADDRESS">Email Address:</label> 
                  <div class="col-md-8">
                      <input type="email" class="form-control input-sm" id="EMAILADDRESS" name="email" placeholder="Email Address"   autocomplete="false" required/> 
                  </div>
                </div>
              </div>  

              <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-4 control-label" for=
                  "USERNAME">Username:</label>
              
                  <div class="col-md-8">
                      <input  class="form-control input-sm" id="USERNAME" name="username" placeholder=
                          "Username" autocomplete="off" required>
                  </div>
                </div>
              </div>
                
              <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-4 control-label" for=
                  "PASS">Password:</label>
              
                  <div class="col-md-8">
                  <input  class="form-control input-sm" id="PASS" name="password" placeholder=
                      "Password" type="password" required  autocomplete="off">
                  </div>
                </div>
              </div> 

              <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-4 control-label" for=
                  "DEGREE">Educational Attainment:</label>
              
                  <div class="col-md-8">
                      <input  class="form-control input-sm" id="DEGREE" name="degree" placeholder=
                      "Educational Attainment" autocomplete="off" required>
                  </div>
                </div>
              </div> 

              <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-4 control-label" for=
                  "d"></label>  
              
                  <div class="col-md-8">
                      <label><input type="checkbox" required> By Sign up you are agree with our <a href="#">terms and condition</a></label>
                  
                  </div>
                </div>
              </div>   

            </div>
          </div>

          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "idno"></label>  

              <div class="col-md-8">
                <button class="btn btn-primary btn-sm" name="btnRegister" type="submit" ><span class="fa fa-save fw-fa"></span> Save</button> 
            </div>

            </div>
          </div>  

        </form> 
      </div>
  </section> 

<!--end content  -->
@endsection