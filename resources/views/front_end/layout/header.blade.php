  <!-- header -->
  <header class="fixed-top header">
    <!-- navbar -->
    <div class="navigation w-100">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('images/logo.png')}}" alt="logo"></a>
                <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse"
                    data-target="#navigation" aria-controls="navigation" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="navbar-nav ml-auto text-center">
                        <li class="nav-item @if(Route::currentRouteName() == 'home') active @endif">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item @if(Route::currentRouteName() == 'how-to-play') active @endif">
                            <a class="nav-link" href="{{ route('how-to-play') }}">How To Play</a>
                        </li>
                        <li class="nav-item @if(Route::currentRouteName() == 'about-us') active @endif">
                            <a class="nav-link" href="{{ route('about-us') }}">About Us</a>
                        </li>
                        <li class="nav-item @if(Route::currentRouteName() == 'contact-us') active @endif">
                            <a class="nav-link" href="{{ route('contact-us') }}">Contact Us</a>
                        </li>
                    </ul>
                </div>

                <div class="d-flex flex-row order-2 order-lg-3 user_info">
                    @if(!Auth::check())
                        <div class="group_btn d-none d-sm-block">
                            <a href="{{route('login')}}" class="group_link log_in registration">LOG IN</a>
                            <a href="{{route('signup')}}" class="group_link registration ">SIGN UP</a>
                        </div>
                    @endif
                    @if(Auth::check())
                    <div class="profile">
                        <div class="avatar">
                            <div class="avatar-content">
                                <a href="#">
                                    {{-- <img src="{{asset('images/user.jfif')}}" alt="us"> --}}
                                    <img src="{{(!empty(Auth::user()->image)) ? asset(Auth::user()->image) : asset('images/dummy.jpg') }}" alt="dp">
                                    &nbsp;
                                    <span>{{ ucfirst(Auth::user()->name) }}</span>
                                </a>

                                    {{-- <span>Johan Deo</span> --}}
                                </a>
                                <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            </div>
                            <div class="dropdown">
                                <ul>
                                    <li><a href="{{ route('profile.profile') }}"><img src="{{asset('images/user.svg')}}" alt="user">My
                                            Profile</a>
                                    </li>
                                    <li>
                                        <a href="my-matches.html"><img src="{{asset('images/stadium.svg')}}" alt="stadium">My
                                            Matches</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{asset('images/logo.png')}}" alt="logout">log Out</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> 
                    @endif
                </div>
            </nav>
        </div>
    </div>
</header>