@extends('client_Layout.master')
@section('title')
  Job by company
@endsection

@section('content')

<section id="inner-headline">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <h2 class="pageTitle">Search for Technology</h2>
          </div>
      </div>
  </div>
</section>

<section id="content">
  <div class="container content"> 
            <div class="panel panel-primary">

        <div class="panel-header">
          <div style="border-bottom: 1px solid #ddd;padding: 10px;font-size: 20px;font-weight: bold;color:
           #000;margin-bottom: 5px;"><a href="/jobdetails">IT Manager</a> 
          </div> 
        </div>

        <div class="panel-body contentbody">
          <div class="col-sm-10">

            <div class="col-sm-12">
              <p>Qualification/Work Experience :</p>
                <ul style="list-style: none;"> 
                  <li>Three years of experience.</li> 
               </ul> 
            </div>

            <div class="col-sm-12"> 
              <p>Job Description:</p>
              <ul style="list-style: none;"> 
                    <li>We are looking for bachelor of science in informat.</li> 
              </ul> 
            </div>

            <div class="col-sm-12">
              <p>Employer :  URC</p>
              <p>Location :  Bry Camugao</p>
                                                                                                                                                                                                          </div>

          </div>

          <div class="col-sm-2"> 
            <a href="/submitapp" class="btn btn-main btn-next-tab">Apply Now !</a>
          </div>

        </div> 
      
        <div class="panel-footer">
            Date Posted :  2022-07-24 14:21:23              
        </div>

      </div>  
        </div>
</section>
          

@endsection