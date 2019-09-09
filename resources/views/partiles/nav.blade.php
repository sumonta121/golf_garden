<nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid top_menu_back">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header"><a class="navbar-brand hover_color" href="{{ route('index') }}"> LARAVEL PROJECT </a> </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <form class="navbar-form navbar-left" method="GET" role="search">
        <div class="form-group" style="padding-left:50px;">
          <input type="text" style="width:600px;" name="q" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
      </form>

	  <ul class="nav navbar-nav navbar-right">
	  <li><a class="hover_color" href="{{ route('Product') }}">All Product</a></li>
       <li><a class="hover_color" href="{{ route('Contact') }}">Contact Us</a></li>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a style="color:#012787;" href="{{ route('user.dashboard') }}">
                                    {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                                </a>


                            </li>
							<li>
							 <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                        @csrf
								  <input style="background:#FF0000; color:#012787; border:#FF0000 1px solid; padding-top:12px;" name="dwd" type="submit" value="Logout" />
							</form>
							</li>
                        @endguest


                    </ul>



    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
