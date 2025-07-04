<!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="{{route('home')}}"></a>
<!-- END SCROLL TOP BUTTON -->

<!--=========== BEGIN HEADER SECTION ================-->
<header id="header">
    <!-- BEGIN MENU -->
    <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                            aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- LOGO -->
                    <!-- TEXT BASED LOGO -->
                    <a class="navbar-brand" href="{{route('home')}}">IBP <span>Üniversitesi</span></a>
                    <!-- IMG BASED LOGO  -->
                <!-- <a class="navbar-brand" href="index.html"><img src="{{asset('assets')}}/img/logo.png" alt="logo"></a>  -->

                </div>

                @php
                    $mainMenus=\App\Http\Controllers\HomeController::mainmenulist()
                @endphp
                <div id="navbar" class="navbar-collapse collapse" @if(!@isset($page))@endif>
                    <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">Menu<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                @foreach($mainMenus as $rs)
                                    <li class="dropdown side-dropdown">
                                        <a href="" class="dropdown-item">{{$rs->title}}</a>
                                        <div class="custom-menu">
                                            <div class="row">
                                                @if(count($rs->children))
                                                    @include('home.menutree',['children'=> $rs->children])
                                                @endif
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="course-archive.html">Course</a></li>
                        <li><a href="scholarship.html">Scholarship</a></li>
                        <li><a href="events-archive.html">Events</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="blog-archive.html">Blog</a></li>
                        <li><a href="{{route('about')}}">About</a></li>
                        <li><a href="{{route('references')}}">References</a></li>
                        <li><a href="{{route('faq')}}">FAQ</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>

                        <li class="dropdown @if(!@isset($page)) show-on-click @endif">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">Account<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                @auth()
                                    <li><a href="{{route('userpanel.index')}}">{{Auth::user()->name}}</a></li>
                                @endauth
                                @guest()
                                    <li><a href="/loginuser">Log in</a></li>

                                    <li><a href="/registeruser">Join</a></li>
                                @endguest
                                <li><a href="/logoutuser">Log Out</a></li>
                                <li><a href="{{route('userpanel.reviews')}}">Reviews</a></li>

                            </ul>
                        </li>

                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
    </div>
    <!-- END MENU -->
</header>

<!--=========== END HEADER SECTION ================-->
