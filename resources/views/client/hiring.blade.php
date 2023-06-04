@extends('client_Layout.master')
@section('title')
  Job by company
@endsection

@section('content')
  <!-- start content -->
  <section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">Hiring</h2>
            </div>
        </div>
    </div>
</section>

<section id="content">
    <div class="container content">     
        <!-- Service Blcoks -->    
        <table id="dash-table" class="table table-hover">
            <thead>
                <th>Job Title</th>
                <th>Company</th>
                <th>Location</th>
                <th>Date Posted</th>
            </thead>
            <tbody>
                    <tr>
                        <td><a href="/jobdetails">Developer</a></td>
                        <td>URC</td>
                        <td>Bry Camugao</td>
                        <td>2022-07-26 02:15:02</td>
                    </tr>  
                  
                
            </tbody>
        </table>   
    </div>
</section> 
<!-- end content -->
@endsection