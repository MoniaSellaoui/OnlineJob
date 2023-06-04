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
                <h2 class="pageTitle">Search by Function</h2>
            </div>
        </div>
    </div>
</section> 

<style type="text/css">
    #content {
        min-height: 500px; 
    }
    #content .panel {
        padding: 10px;
    }

    .panel-body label {
        font-size: 20px; 
    }
    .panel-body input {
        font-size: 15px;
    }
    .panel-body > .row {
        margin-bottom:10px;
    }
</style>

<form action="" method="POST"> 
    <section id="content">
        <div class="container content">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="panel">
                    <div class="panel-header"></div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12 search1">
                                <label class="col-sm-3">SEARCH:</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="" name="SEARCH" placeholder="Search For">
                                </div>
                            </div>
                        </div>   
                        <div class="row">
                            <div class="col-sm-12 search1">
                                <label class="col-sm-3">FUNCTION:</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="CATEGORY">
                                        <option value="">All</option>
                                        <option>Technology</option>
                                        <option>Managerial</option>
                                        <option>Engineer</option>
                                        <option>IT</option>
                                        <option>Civil Engineer</option>
                                        <option>HR</option>
                                        <option>Sales</option>
                                        <option>Banking</option>
                                        <option>Finance</option>
                                        <option>BPO</option>
                                        <option>Degital Marketing</option><option>Shipping</option>			
                                    </select>
                                </div>
                            </div>
                        </div>  
                        <div class="row">
                            <div class="col-sm-12 search1">
                                <label class="col-sm-3"></label>
                                <div class="col-sm-9">
                                    <input type="submit" name="submit" class="btn btn-success">
                                </div>
                            </div>
                        </div>  
                    </div>
                </div> 
            </div>
            <div class="col-sm-2"></div> 
        </div>
    </section>
</form>  

<!-- end content -->

@endsection