<nav class="navbar navbar-default navbar-fixed-top hidden-xs">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="visible-xs text">MENU</span>
            </button>
            <a class="navbar-brand navbar-brand-center" href="/"><div class="nav-logo"></div></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle link-lg" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Buy<!--property <span class="caret"></span>--></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Property for sale</a></li>
                        <li><a href="#">New homes for sale</a></li>
                        <li role="separator" class="divider hidden-xs"></li>
                        <li><a href="#">Property valuation</a></li>
                        <li><a href="#">Investors</a></li>
                        <li><a href="#">Mortgages</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle link-lg" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Rent<!-- <span class="caret"></span>--></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Property for rent</a></li>
                        <li><a href="#">
                                <span class="hidden-xxs">Student property for rent</span>
                                <span class="visible-xxs-inline">Rentals for students</span>
                            </a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle link-lg" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Find Agent<!-- property <span class="caret"></span>--></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Property valuation</a></li>
                        <li><a href="#">Find estate agent</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle link-lg" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="visible-lg visible-md visible-sm">Prices</span><span class="visible-xs">House prices</span><!-- property <span class="caret"></span>--></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Sold house prices</a></li>
                        <li><a href="#">Property valuation</a></li>
                        <li role="separator" class="divider hidden-xs"></li>
                        <li><a href="#">Market trends</a></li>
                        <li><a href="#">Price comparison report</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle link-lg" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Commercial<!-- property <span class="caret"></span>--></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Commercial property to let</a></li>
                        <li><a href="#">Commercial property for sale</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle link-lg" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Overseas<!-- property <span class="caret"></span>--></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Overseas properties for sale</a></li>
                        <li><a href="#">Hot properties</a></li>
                        <li><a href="#">Help and advice</a></li>
                        <li><a href="#">Sell overseas property</a></li>
                    </ul>
                </li>
                <!-- Authentication Links -->
                @guest
                <li class="dropdown hidden-xs">
                    <a href="/login" class="dropdown-toggle link-lg" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> &nbsp;Sign In</a>
                    <ul class="dropdown-menu remove-bottom-padding">
                        <form method="POST" action="{{ route('login') }}" class="nav-login-form">
                            @csrf

                            <li><div class="input-group input-group-md">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required>
                                </div></li>
                            <li><div class="input-group input-group-md">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-lock"></span>
                                </span>
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                                </div></li>
                            <li><div class="info-container keep-info">
                                    <input type="checkbox" name="remember" class="logged_in checkbox-inline logged-in-inline" id="remember" {{ old('remember') ? 'checked' : '' }}/>
                                    <label for="remember" class="control-label logged-in-inline">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div></li>
                            <li>
                                <input type="submit" value="Sign In" class="btn btn-info input-group form-control btn-no-top-margin"/>
                                <div class="info-container signup-info text-right">
                                    <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                                </div>
                            </li>
                            <li class="registration-link">
                            @if (Route::has('register'))
                                <div class="info-container signup-info text-center">
                                    New here? <a href="{{ route('register') }}">{{ __('Create an account') }}</a>!
                                </div></li>
                            @endif
                        </form>
                    </ul>
                </li>
                @else
                <li class="dropdown hidden-xs">
                    <a href="#" class="dropdown-toggle link-lg" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b><span class="glyphicon glyphicon-user"></span> &nbsp;{{ Auth::user()->name }}</b> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('search.history') }}"><span class="glyphicon glyphicon-time"></span>&nbsp;&nbsp;Search History</a></li>
                        <li><a href="{{ route('saved.searches') }}"><span class="glyphicon glyphicon-saved"></span>&nbsp;&nbsp;Saved Searches <span class="badge badge-primary">5</span></a></li>
                        <li><a href="{{ route('viewed.properties') }}"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;&nbsp;Viewed Properties <span class="badge badge-info">53</span></a></li>
                        <li><a href="{{ route('saved.properties') }}"><span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;Saved Properties <span class="badge badge-success">53</span></a></li>
                        <li><a href="{{ route('favourites') }}"><span class="glyphicon glyphicon-heart"></span>&nbsp;&nbsp;Favourites <span class="badge badge-warning">53</span></a></li>
                        <li><a href="{{ route('user.messages') }}"><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;Messages <span class="badge badge-danger">4</span></a></li>
                        <li><a href="{{ route('user.settings') }}"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;Settings</a></li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <span class="glyphicon glyphicon-log-out"></span> {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
                @endguest
            </ul>
        </div>{{-- .nav-collapse --}}
    </div>
</nav>{{-- Navigation ends here --}}
<nav class="navbar navbar-default navbar-fixed-top visible-xs">
    <div class="container">
        <div class="navbar-header">
            @guest
            <a href="{{ route('login') }}" type="button" class="btn navbar-toggle pull-left theme">
                <span class="sr-only">User Login</span>
                <span class="glyphicon glyphicon-user"></span>
            </a>
            @else
            <a href="{{ route('user.settings') }}" type="button" class="btn navbar-toggle pull-left theme">
                <span class="sr-only">User Login</span>
                <span class="glyphicon glyphicon-user"></span>
            </a>
            @endguest
            <button type="button" class="navbar-toggle collapsed mobile-toggle theme">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="visible-xs text">MENU</span>
            </button>
            <a class="navbar-brand navbar-brand-center" href="/"><div class="nav-logo"></div></a>
        </div>
    </div>
</nav>
<div class="mobile-menu theme hidden-lg hidden-md hidden-sm">
    <div class="mobile-menu-items">
        <ul class="nav navbar-nav">
            <li><a href="/" class="icon home">Home</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle link-lg icon for-sale" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Buy <span class="glyphicon glyphicon-plus-sign"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Property for sale</a></li>
                    <li><a href="#">New homes for sale</a></li>
                    <li><a href="#">Property valuation</a></li>
                    <li><a href="#">Investors</a></li>
                    <li><a href="#">Mortgages</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle link-lg icon to-rent" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Rent <span class="glyphicon glyphicon-plus-sign"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Property to rent</a></li>
                    <li><a href="#">
                            <span class="hidden-xxs">Student property to rent</span>
                            <span class="visible-xxs-inline">Rentals for students</span>
                        </a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle link-lg icon find-agent" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Find Agent <span class="glyphicon glyphicon-plus-sign"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Property valuation</a></li>
                    <li><a href="#">Find estate agent</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle link-lg icon sold-prices" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="visible-lg visible-md visible-sm">Prices</span><span class="visible-xs">House prices</span> <span class="glyphicon glyphicon-plus-sign"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Sold house prices</a></li>
                    <li><a href="#">Property valuation</a></li>
                    <li><a href="#">Market trends</a></li>
                    <li><a href="#">Price comparison report</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle link-lg icon commercial" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Commercial <span class="glyphicon glyphicon-plus-sign"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Commercial property to let</a></li>
                    <li><a href="#">Commercial property for sale</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle link-lg icon overseas" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Overseas <span class="glyphicon glyphicon-plus-sign"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Overseas properties for sale</a></li>
                    <li><a href="#">Hot properties</a></li>
                    <li><a href="#">Help and advice</a></li>
                    <li><a href="#">Sell overseas property</a></li>
                </ul>
            </li>
            <li><a href="#" class="icon student">Student accommodation</a></li>
            <li><a href="#" class="icon valuation">Property valuation</a></li>
            @guest
            <li><a href="{{ route('login') }}" class="icon sign-in">Sign in</a></li>
            <li><a href="{{ route('register') }}" class="icon register">Register</a></li>
            @else
            <li role="separator" class="divider hidden-xs"></li>
            <li>
                <a class="icon sign-in" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
            @endguest
        </ul>
    </div>
</div>{{-- Mobile Navigation ends here --}}