<div class="header">
    <div class="header-left"> <a href="{{ route('admin.index') }}" class="logo"> <img src="{{ asset('images/slider/' . $basic_info->logo) }}" width="40" height="40" alt=""> </a> </div>
    <div class="page-title-box pull-left">
      <h3>{{ $basic_info->title }}</h3>
    </div>
    <a id="mobile_btn" class="mobile_btn pull-left" href="#sidebar"><i class="fa fa-bars" aria-hidden="true"></i></a>
    <ul class="nav navbar-nav navbar-right user-menu pull-right">    
      <li class="dropdown"> <a href="profile.html" class="dropdown-toggle user-link" data-toggle="dropdown" title="Admin"> <span class="user-img"><img class="img-circle" src="{{ asset('admin_resorce/img/user.jpg')}}" width="40" alt="Admin"> <span class="status online"></span></span> <span>Admin</span> <i class="caret"></i> </a>
        <ul class="dropdown-menu">
        <!--   <li><a href="#">My Profile</a></li>
          <li><a href="#">Password Change</a></li> -->
          <li><a href="{{ route('admin.logout') }}">Logout</a></li>
        </ul>
      </li>
    </ul>
    <div class="dropdown mobile-user-menu pull-right"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
      <ul class="dropdown-menu pull-right">
        <li><a href="#">My Profile</a></li>
        <li><a href="#">Password Change</a></li>
        <li><a href="{{ route('admin.logout') }}">Logout</a></li>
      </ul>
    </div>
  </div>