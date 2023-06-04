@extends('client_Layout.master')
@section('title')
  Submit
@endsection

@section('content')

 <!-- start content -->
 <section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">Job Details</h2>
            </div>
        </div>
    </div>
</section>

<section id="content">
    <div class="container content">      
        <div class="container">
            <div class="mg-available-rooms">
                <h5 class="mg-sec-left-title">Date Posted :  2022-07-26 02:15:02</h5>
                <div class="mg-avl-rooms">
                    <div class="mg-avl-room">
                        <div class="row">
                            <div class="col-sm-2">
                                <a href="#"><span class="fa fa-building-o" style="font-size: 50px"></span></a>
                            </div>
                            <div class="col-sm-10">
                                <div style="border-bottom: 1px solid #ddd;padding: 10px;font-size: 25px;font-weight: bold;color: #000;margin-bottom: 5px;">Developer 
                                </div> 
                                <div class="row contentbody">
                                    <div class="col-sm-6">
                                        <ul>
                                            <li><i class="fp-ht-bed"></i>Required No. of Employee's : 2</li>
                                            <li><i class="fp-ht-food"></i>Salary : 3000</li>
                                            <li><i class="fa fa-sun-"></i>Duration of Employment : Jan 30</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul>
                                            <li><i class="fp-ht-tv"></i>Prefered Sex : Male</li>
                                            <li><i class="fp-ht-computer"></i>Sector of Vacancy : Programming</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-12">
                                        <p>Qualification/Work Experience :</p>
                                        <ul style="list-style: none;"> 
                                            <li>Two year Experience</li> 
                                        </ul> 
                                    </div>
                                    <div class="col-sm-12"> 
                                        <p>Job Description:</p>
                                        <ul style="list-style: none;"> 
                                            <li>We are looking for bachelor of science in information technology. asdasdasd</li> 
                                        </ul> 
                                    </div>
                                    <div class="col-sm-12">
                                        <p>Employer :  URC</p> 
                                        <p>Location :  Bry Camugao</p>
                                    </div>
                                </div>
                                <a href="/submitapp" class="btn btn-main btn-next-tab">Apply Now !</a>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>                        
    </div>
</section>  
<!-- end content -->
@endsection