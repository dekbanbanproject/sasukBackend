<!-- Preloader Start -->
<header>
    <!--? Header Start -->
    <div class="header-area header-transparent">
            <div class="main-header  header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-3 col-lg-3 col-md-1">
                            <div class="logo mt-2">
                                <a href="/"><img src="{{ asset('/img/logo.png') }}" alt="" width="100" height="60"> <h3>gtw-backoffice </h3></a>
                               
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav> 
                                        <ul id="navigation">
                                            <li><a href="{{url('/')}}">หน้าหลัก</a></li>
                                            {{-- <li><a href="{{url('fontend/About')}}" >About</a></li> --}}
                                            {{-- <li><a href="{{url('fontend/Menu')}}">Menu</a></li> --}}
                                            <li><a href="{{url('fontend/blog/index')}}">Blog</a>
                                                <ul class="submenu">
                                                    <li><a href="{{url('fontend/blog/index')}}">Blog</a></li>
                                                    <li><a href="blog_details.html">Blog Details</a></li>
                                                    <li><a href="elements.html">Element</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{url('fontend/contact')}}">ติดต่อเรา</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                {{-- <div class="header-right-btn f-right d-none d-lg-block ml-20">
                                    <a href="{{url('contact')}}" class="border-btn header-btn">ติดต่อเรา </a>
                                </div> --}}
                                <div class="header-right-btn f-right d-none d-lg-block ml-20">
                                    <a href="{{url('login')}}" class="border-btn header-btn">Login </a>
                                </div>
                            </div>
                        </div>   
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Header End -->
</header>