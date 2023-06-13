@extends('client_Layout.master')
 @section('title')
  Hiring Company
  @endsection

  @section('content')
    <!-- start content -->
    
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="pageTitle">Hiring In {{$name}}</h2>
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
                    @foreach ( $vacancies as $vacancy )
                    <tr>
                        <td><a href="/jobdetails/{{$vacancy->id}}">{{$vacancy->occuptitle}}</a></td>
                        <td>{{$vacancy->companyname}}</td>
                        <td>{{$vacancy->address}}</td>
                        <td>{{$vacancy->created_at}}</td>
                    </tr>
                    @endforeach
                       
                    
                </tbody>
            </table>   
        </div>
    </section> 
    <!-- end content -->

   @endsection