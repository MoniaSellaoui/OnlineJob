<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="" />
        <meta name="author" content="http://webthemez.com" />
        <!-- css -->
        <link href="{{asset('plugins/home-plugins/css/bootstrap.min.css')}}" rel="stylesheet" />
        <link href="{{asset('plugins/home-plugins/css/fancybox/jquery.fancybox.css')}}" rel="stylesheet"> 
        <link href="{{asset('plugins/home-plugins/css/flexslider.css')}}" rel="stylesheet" /> 
        <link href="{{asset('plugins/home-plugins/css/style.css')}}" rel="stylesheet" />
        <!-- <link rel="stylesheet" href="plugins/dataTables/dataTables.bootstrap.css">  --> 
        <link rel="stylesheet" href="{{asset('plugins/font-awesome/css/font-awesome.min.css')}}"> 

        <link rel="stylesheet" href="{{asset('plugins/dataTables/jquery.dataTables.min.css')}}"> 
        <link rel="stylesheet" href="{{asset('plugins/dataTables/jquery.dataTables_themeroller.css')}}"> 
        <!-- datetime picker CSS -->
        <link href="{{asset('plugins/datepicker/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('plugins/datepicker/datepicker3.css')}}" rel="stylesheet" media="screen">
    </head>

    <body>

        <div id="wrapper" class="home-page">

            <!-- start header -->
              @include('client_Layout.clientheader')          
            <!-- end header --> 

            <!-- start Modal -->
              @include('client_Layout.clientmodal')           
            <!-- end Modal --> 

            <!-- start content -->
                @yield('content')
            <!-- end content -->


            <!-- start footer -->
             @include('client_Layout.clientfooter')           
            <!-- end footer -->
                        
            </div>
                            
             <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
             <!-- javascript ================================================== -->
             <!-- Placed at the end of the document so the pages load faster -->
            @include('client_Layout.scripts')
                        
                </body>
            </html>