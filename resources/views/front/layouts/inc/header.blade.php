<div id="header">
    <div class="container">
        <div id="welcomeLine" class="row">
            <div class="span6">Welcome!<strong> User</strong></div>
            <div class="span6">
                <div class="pull-right">
                    <a href="product_summary.html"><span class="">Fr</span></a>
                    <a href="product_summary.html"><span class="">Es</span></a>
                    <span class="btn btn-mini">En</span>
                    <a href="product_summary.html"><span>&pound;</span></a>
                    <span class="btn btn-mini">$155.00</span>
                    <a href="product_summary.html"><span class="">$</span></a>
                    <a href="{{route('basket')}}"><span class="btn btn-mini btn-primary"><i
                                class="icon-shopping-cart icon-white"></i>

                            [ <span v-text="totalProduct"></span> ] Itemes in your cart </span>

                    </a>
                </div>
            </div>
        </div>
        <!-- Navbar ================================================== -->
        <div id="logoArea" class="navbar">
            <a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="navbar-inner">
                <a class="brand" href="{{route('homepage')}}"><img src="/themes/images/logo.png" alt="Bootsshop"/></a>
                <form class="form-inline navbar-search" method="post"
                      action="{{route('search')}}">


                    {{csrf_field()}}

                    <input id="srchFld" name="search" class="srchTxt" value="{{old('search')}}" type="text"/>
                    <button type="submit" id="submitButton" class="btn btn-primary">Search</button>
                </form>
                <ul id="topMenu" class="nav pull-right">

                         @auth
                            <li class=""><a href="{{route('logout')}}">Logout</a></li>
                        @endauth

                        @guest
                            <li class=""><a href="{{route('login')}}">Login</a></li>
                            <li class=""><a href="{{route('register')}}">Register</a></li>
                        @endguest

                </ul>
            </div>
        </div>
    </div>
</div>
