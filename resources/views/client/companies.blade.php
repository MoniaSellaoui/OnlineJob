@extends('client_Layout.master')
@section('title')
  Companies
@endsection

@section('content')

 <!-- start content -->
 <section id="inner-headline">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <h2 class="pageTitle">Company</h2>
          </div>
      </div>
  </div>
</section>

<section id="content">
  <div class="container content">     
      <!-- Service Blcoks -->  
     
      <div class="row">
        @foreach ( $companies as $company )
        <div class="col-sm-4 info-blocks">
          <i class="icon-info-blocks fa fa-building-o"></i>
          <div class="info-blocks-in">
              <h3><a href="/hiringcompany/{{$company->name}}">{{$company->name}}</a></h3>
              <!-- <p>weqwe</p> -->
              <p>Address :{{$company->address}}</p>
              <p>Contact No. :{{$company->contact}}</p>
          </div>
</div>
    
     
@endforeach

</div> 
     
     
  </div>
</section>  
<!-- end content -->
@endsection