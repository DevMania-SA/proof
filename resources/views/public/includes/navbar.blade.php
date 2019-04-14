<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <div class="container">
        <a href="{{ url('/') }}" class="navbar-brand">
            {{ config('app.name') }}
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('about') }}" class="nav-link">
                        About
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('services') }}" class="nav-link">
                        Services
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('blog') }}" class="nav-link">
                        Blog
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contact') }}" class="nav-link">
                        Contact
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

{{-- <header class="main-nav"> --}}
    {{-- <div class="top_nav">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="top_nav_left">

                    </div>
                </div>
                <div class="col-md-6 text-right">
                    <div class="top_nav_right">
                        <ul class="top_nav_menu">
                            <!-- Currency / Language / My Account -->
                            <li class="currency">
                                <a href="#">
                                    ZAR
                                    {{-- <i class="fa fa-angle-down"></i> --}}{{--
                                </a>
                                {{--
                                <ul class="currency_selection">
                                    <li><a href="#">cad</a></li>
                                    <li><a href="#">aud</a></li>
                                    <li><a href="#">eur</a></li>
                                    <li><a href="#">gbp</a></li>
                                </ul>
                                --}}{{--
                            </li>
                            <li class="language">
                                <a href="#">
                                    {{ str_replace('_', '-', app()->getLocale()) }}
                                    {{-- <i class="fa fa-angle-down"></i> --}}{{--
                                </a>
                                {{--
                                <ul class="language_selection">
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">Italian</a></li>
                                    <li><a href="#">German</a></li>
                                    <li><a href="#">Spanish</a></li>
                                </ul>
                                --}}{{--
                            </li>

                            @guest
                                <li class="account">
                                    
                                    <a href="#">
                                        My Account
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="account_selection">
                                        <li>
                                            <a href="{{ route('login') }}">
                                                <i class="fa fa-signin" aria-hidden="true"></i>Sign In
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('register') }}">
                                                <i class="fa fa-user-plus" aria-hidden="true"></i>Register
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            @else
                                <li class="nav-item dropdown account user-account">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            <img src="{{asset('images/avatar.png')}}" alt="..." class="img-fluid rounded-circle" style="height: 30px; width: 30px;"> {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
            
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a href="{{ route('profile') }}" class="dropdown-item">Profile</a>
                                        <a href="#" class="dropdown-item">Notifications</a>
                                        <a href="#" class="dropdown-item">Settings</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
            
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Main Navigation -->

    {{-- <div class="main_nav_container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-right">
                    <div class="logo_container">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('images/logo.png') }}" class="img-fluid nav-logo" alt="{{ config('app.name') }}" />
                        </a>
                    </div>
                    <nav class="navbar">
                        <ul class="navbar_menu">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ route('about') }}">About</a></li>
                            <li><a href="{{ route('services') }}">Services</a></li>
                            <li><a href="{{ route('tracks') }}">Music Store</a></li>
                            <li><a href="{{ route('vids') }}">Video Library</a></li> --}}
                            {{-- <li><a href="{{ route('artists') }}">Artists</a></li> --}}
                            {{-- <li><a href="{{ route('blog') }}">Blog</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                        <ul class="navbar_user">
                            <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li> --}}
                            {{--<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>--}}
                        {{-- </ul>
                        <div class="hamburger_container">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="fs_menu_overlay"></div>
<div class="hamburger_menu">
    <div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
    <div class="hamburger_menu_content text-right">
        <ul class="menu_top_nav"> --}}
            {{-- <li class="menu_item has-children">
                <a href="#">
                    zar --}}
                    {{--<i class="fa fa-angle-down"></i>--}}
                {{-- </a> --}}
                {{--
                <ul class="menu_selection">
                    <li><a href="#">cad</a></li>
                    <li><a href="#">aud</a></li>
                    <li><a href="#">eur</a></li>
                    <li><a href="#">gbp</a></li>
                </ul>
                --}}
            {{-- </li>
            <li class="menu_item has-children">
                <a href="#">
                    {{ str_replace('_', '-', app()->getLocale()) }} --}}
                    {{--<i class="fa fa-angle-down"></i>--}}
                {{-- </a> --}}
                {{--
                <ul class="menu_selection">
                    <li><a href="#">French</a></li>
                    <li><a href="#">Italian</a></li>
                    <li><a href="#">German</a></li>
                    <li><a href="#">Spanish</a></li>
                </ul>
                --}}
            {{-- </li>
            <li class="menu_item has-children">
                <a href="#">
                    My Account
                    <i class="fa fa-angle-down"></i>
                </a>
                <ul class="menu_selection">
                    <li><a href="{{ route('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
                    <li><a href="{{ route('register') }}"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
                </ul>
            </li> --}}

            {{-- <li class="menu-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="menu-item"><a href="#">Services</a></li>
            <li class="menu-item"><a href="{{ route('tracks') }}">Music Store</a></li>
            <li class="menu-item"><a href="{{ route('vids') }}">Video Library</a></li>
            {{-- class="menu-item"- <li><a href="{{ route('artists') }}">Artists</a></li> --}}{{--
            <li class="menu-item"><a href="{{ route('blog') }}">Blog</a></li>
            <li class="menu-item"><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </div>
</div> --}}

{{--
<nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('images/logo.png') }}" width="30" height="25" class="img-fluid" alt="{{ config('app.name') }}" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ url()->current() == url('/') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item {{ url()->current() == url('/tracks') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('tracks') }}">Music</a>
                </li>
                <li class="nav-item {{ url()->current() == url('/vids') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('vids') }}">Videos</a>
                </li>
                <li class="nav-item {{ url()->current() == url('/artists') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('artists') }}">Artists</a>
                </li>
                <li class="nav-item {{ url()->current() == url('/event') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('event') }}">Events</a>
                </li>
                <li class="nav-item {{ url()->current() == url('/mechandiser') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('mechandiser') }}">Mechandiser</a>
                </li>
                <li class="nav-item {{ url()->current() == url('/blog') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                </li>
                <li class="nav-item {{ url()->current() == url('/contact') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
--}}
