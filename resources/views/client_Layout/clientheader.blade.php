<header>
    <div class="topbar navbar-fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">  
                    
                   

                      <p class="pull-left hidden-xs">
                        <i class="fa fa-phone"></i>Tel No. (+001) 123-456-789
                      </p>
                            @if (Session::has('client'))

                            <p class="pull-right login">

                                <a title="View Notification(s)" href=""> <i class="fa fa-bell-o"></i> <span class="label label-success">2</span></a> | 
                                
                                <a title="View Message(s)" href=""> <i class="fa fa-envelope-o"></i> <span class="label label-success">1</span></a> | 
                                
                                <a title="View Profile" href="/profile"> <i class="fa fa-user"></i> {{Session::get('client')->firstname}} 
                                    {{Session::get('client')->lastname}}</a> | 
                                
                                <a href="/logout">  <i class="fa fa-sign-out"> </i>Logout</a> 
                                
                            </p>
                            @else
                                
                            <p   class="pull-right login">
                                <a data-target="#myModal" data-toggle="modal" href="/login"> <i class="fa fa-lock"></i> Login </a>
                            </p> 
                            @endif
                    

                </div>
            </div>
        </div>
    </div> 

    <div style="min-height: 30px;"></div>

    <div class="navbar navbar-default navbar-static-top" > 
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">Website Name</a>
            </div>

            <div class="navbar-collapse collapse ">
                <ul class="nav navbar-nav">
                    <li class="{{request()->is('home')?'active':''}}"><a href="">Home</a></li> 
                    <li class="dropdown  {{request()->is('advanced')||request()->is('jobbycompany')
                    ||request()->is('jobbyfunction')||request()->is('jobbytitle')? 'active' : ''}}">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle" >Job Search <b class="caret"></b></a>
                        <ul class="dropdown-menu" >
                            <li class=""><a href="/advanced">Advance Search</a></li>
                            <li><a href="/jobbycompany">Job By Company</a></li>
                            <li><a href="/jobbyfunction">Job By Function</a></li>
                            <li><a href="/jobbytitle">Job By Title</a></li>
                        </ul>
                    </li> 
                    <li class="dropdown  ">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Popular Jobs <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="/jobbycategory">Technology Jobs</a></li>
                        <li><a href="">Managerial Jobs</a></li>
                        <li><a href="">Engineer Jobs</a></li>
                        <li><a href="">IT Jobs</a></li>
                        <li><a href="">Civil Engineer Jobs</a></li>
                        <li><a href="">HR Jobs</a></li>
                        <li><a href="">Sales Jobs</a></li>
                        <li><a href="">Banking Jobs</a></li>
                        <li><a href="">Finance Jobs</a></li>
                        <li><a href="">BPO Jobs</a></li> 
                    </ul>
                    </li> 
                    <li class="{{request()->is('companies')?'active':''}}"><a href="/companies">Company</a></li>
                    <li class="{{request()->is('hiring')?'active':''}}"><a href="/hiring">Hiring Now</a></li>
                    <li class="{{request()->is('aboutus')?'active':''}}"><a href="/aboutus">About Us</a></li>
                    <li class="{{request()->is('contactus')?'active':''}}"><a href="/contactus">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>  