<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed"
             data-toggle="collapse" data-target="#app-navbar-collapse" >
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/')}}">
              LaraBBS
            </a>
        </div>

        <div class="collpase navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
              <li class="{{ active_class(if_route('topic.index')) }}"><a href="{{ route('topics.index')}}">Topic</a></li>
              <li class="{{ active_class((if_route('categories.show') && if_route_param('category', 1)))}}"><a href="{{ route('categories.show', 1) }}">Share</a></li>
              <li class="{{ active_class((if_route('categories.show') && if_route_param('category', 2)))}}"><a href="{{ route('categories.show', 2) }}">Tutorial</a></li>
              <li class="{{ active_class((if_route('categories.show') && if_route_param('category', 3)))}}"><a href="{{ route('categories.show', 3) }}">Questions</a></li>
              <li class="{{ active_class((if_route('categories.show') && if_route_param('category', 4)))}}"><a href="{{ route('categories.show', 4) }}">Notice</a></li>
            </ul>

            <!-- Right Side Of Navbar-->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                <li><a href="{{ route('login') }}">SignIn</a></li>
                <li><a href="{{ route('register')}}">Register</a></li>
                @else
                <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <span class="user-avatar pull-left" style="margin-right:8px; margin-top:-5px;">
                                <img src="https://fsdhubcdn.phphub.org/uploads/images/201709/20/1/PtDKbASVcz.png?imageView2/1/w/60/h/60" class="img-responsive img-circle" width="30px" height="30px">
                            </span>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">

                            <li>
                                <a href="{{ route('users.edit', Auth::id())}}">Edit Profile</a>
                            </li>

                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Log out
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>