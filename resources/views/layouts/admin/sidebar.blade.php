<!-- Navbar -->
<nav class="py-3 main-header navbar fixed-topnav navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <a class="" data-widget="pushmenu" href="#">
            <button class="btn btn-default btn-toggle"
                    style="margin-left:30px !important;border-radius: 50%;height:45px;width:45px">
                <i class="fas fa-bars text-white"></i>
            </button>
        </a>
        <li class="nav-item dropdown ml-5">
            <a class="nav-link" data-bs-toggle="dropdown" id="dropdownMenuButtonNotification" aria-expanded="false">
                <i class="fas fa-bell fa-2x text-muted"></i>
                <span class="badge badge-warning navbar-badge">
                    {{ auth()->user()->unreadNotifications->count() }}
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right" id="notifications-container"
                 aria-labelledby="dropdownMenuButtonNotification"
                 style="border-radius: 20px;box-shadow:0 .5rem 1rem rgba(0,0,0,.15) !important">
                <span class="dropdown-item dropdown-header text-dark">
                    <span class="badge bg-primary badge-pill">
                        {{ auth()->user()->unreadNotifications->count() }}
                    </span> New Notification
                </span>
                <div class="dropdown-divider"></div>
                @if (auth()->user()->unreadNotifications->count() > 0)
                    <a onclick="readNotifications()" class="text-center ml-3">Mark all as Read</a>
                @endif
                @foreach (auth()->user()->unreadNotifications as $notification)
                    <a class="dropdown-item">
                        <i class="ml-2 fa fa-bell fa-beat text-success"></i>
                        {!! $notification->data['data'] !!}
                        <br/>
                        <span
                            class="float-left text-sm text-muted text-bold">{{ $notification->created_at->diffForHumans() }}</span>
                    </a>
                @endforeach
                <span class="dropdown-item dropdown-footer">
                    <a href="{{ url('notifications') }}">See All Notifications</a>
                </span>
            </div>
        </li>
        <li class="nav-item" id="notifications-container"></li>
    </ul>
    <!-- Right navbar links -->
    <ul class="ml-auto navbar-nav">
        <li class="px-3 ml-5 shadow-lg bg-info" title="Quickly setup things"
            onclick="document.getElementById('notificationSound').play();helpModal()"
            style="margin-top: -6px; cursor:pointer; border-radius: 30px">
            <h6 class="text-white" style="padding: 0 10px 0 10px;"><i class="fas fa-question-circle"></i> WB<i>-help</i>
            </h6>
        </li>
        <li class="px-3 ml-5 bg-white shadow-sm" style="margin-top: -6px;">
            <h4 id="clockdisplayDesktop" class="text-muted">00:00:00 AM</h4>
        </li>
        <!-- User Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                @if (Auth::user()->image === '')
                    <span class="px-3 py-3 text-white img-circle elevation-1 bg-warning">
                        <strong style="color: #fff !important;">
                            <?php
                                $str = Auth::user()->first_name;
                                echo strtoupper($str[0]);
                                ?>
                        </strong>
                    </span>
                @else
                    <img src="{{ Auth::user()->image }}" width="30px" height="30px" class="img-circle elevation-1"
                         alt="User Image" style="margin-top:-4px; ">
                @endif
            </a>
            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                <span class="dropdown-item dropdown-header">
                    {{ Auth::user()->name . ' ' . auth::user()->lastName }}</span>
                <div class="dropdown-divider"></div>
                <a href="{{ url('/users/loginUser') }}" class="dropdown-item">
                    <i class="mr-2 fas fa-user"></i> Profile
                </a>
                <a href="{{ url('/settings') }}" class="dropdown-item">
                    <i class="mr-2 fas fa-cog"></i> Settings
                </a>
                <a class="dropdown-item" href="#"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="mr-2 fas fa-power-off"></i>Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar">
    <!-- Brand Logo -->
    <a href="{{ url('/home') }}" class="brand-link"
       style=" padding-top: 1.4rem !important; padding-bottom: 1.25rem !important; background-color:#109ed9 !important;">

        <div style="text-align: center;"><span class="imgWrapper"><img
                    src="{{asset('https://www.rwandair.com/dist/phoenix/V1.0/img/logo.svg')}}"
                    style="height: 40px;width: auto"
                    alt="Logo"></span></div>
    </a>
    <!-- Sidebar -->
    <div class="sidebar" style=" background-color:#109ed9 !important; ">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li>
                    <hr class="dropdown-divider"/>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/home') }}" class="nav-link {{ request()->is('home') ? 'active' : '' }}">
                        <img src="{{ asset('icons/dashboard.png') }}" alt="">
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider"/>
                </li>
                <li class="nav-item has-treeview">
                    @php
                        $activeClass = request()->is('employees','employees/*', 'leaves', 'categories', 'holidays', 'notice', 'employees/exits', 'suggestions','attendance') ? 'active' : '';
                    @endphp
                    <a href="#"
                       class="nav-link {{$activeClass}}">
                        <img src="{{ asset('icons/cms.png') }}" alt="cms">
                        <p>
                            CMS
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('cms/about') }}"
                               class="nav-link {{ request()->is('cms/about') ? 'active' : '' }}">
                                <p class="ml-3">
                                    <img src="{{ asset('icons/home.png') }}" alt="About">
                                    About
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/cms/baggage') }}"
                               class="nav-link {{ request()->is('cms/baggage') ? 'active' : '' }}">
                                <p class="ml-3">
                                    <img src="{{ asset('icons/baggage.png') }}" alt="Baggage">
                                    Baggage
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/cms/partnership') }}"
                               class="nav-link {{ request()->is('cms/partnership') ? 'active' : '' }}">
                                <p class="ml-3">
                                    <img src="{{ asset('icons/partner.png') }}" alt="Partnership">
                                    Partnership
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('cms/accessibility') }}"
                               class="nav-link {{ request()->is('cms/accessibility') ? 'active' : '' }}">
                                <p class="ml-3">
                                    <img src="{{ asset('icons/accessibility.png') }}" alt="Accessibility">
                                    Accessibility
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('cms/medical-information') }}"
                               class="nav-link {{ request()->is('cms/medical-information') ? 'active' : '' }}">
                                <p class="ml-3">
                                    <img src="{{ asset('icons/medical-information.png') }}" alt="medicalInformation">
                                    Medical Information
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('cms/payment-option') }}"
                               class="nav-link {{ request()->is('cms/payment-option') ? 'active' : '' }}">
                                <p class="ml-3">
                                    <img src="{{ asset('icons/partner.png') }}" alt="paymentOption">
                                    Payment Option
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('cms/special-assistance') }}"
                               class="nav-link {{ request()->is('cms/special-assistance') ? 'active' : '' }}">
                                <p class="ml-3">
                                    <img src="{{ asset('icons/special-assistance.png') }}" alt="specialAssistance">
                                    Special Assistance
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('cms/travel-insurance') }}"
                               class="nav-link {{ request()->is('cms/travel-insurance') ? 'active' : '' }}">
                                <p class="ml-3">
                                    <img src="{{ asset('icons/travel-insurance.png') }}" alt="travelInsurance">
                                    travel Insurance
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('cms/check-online') }}"
                               class="nav-link {{ request()->is('cms/check-online') ? 'active' : '' }}">
                                <p class="ml-3">
                                    <img src="{{ asset('icons/check-in.png') }}" alt="checkInOnline">
                                    check In Online
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('cms/seat') }}"
                               class="nav-link {{ request()->is('cms/seat') ? 'active' : '' }}">
                                <p class="ml-3">
                                    <img src="{{ asset('icons/seat1.png') }}" alt="seat">
                                    Seat
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('cms/sustainability') }}"
                               class="nav-link {{ request()->is('cms/sustainability') ? 'active' : '' }}">
                                <p class="ml-3">
                                    <img src="{{ asset('icons/sustainability.png') }}" alt="sustainability">
                                    Sustainability
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('cms/faqs') }}"
                               class="nav-link {{ request()->is('cms/faqs') ? 'active' : '' }}">
                                <p class="ml-3">
                                    <img src="{{ asset('icons/faq.png') }}" alt="faqs">
                                    Faqs
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#"
                               class="nav-link {{ request()->is('cms/faqs') ? 'active' : '' }}">
                                <p class="ml-3">
                                    <img src="{{ asset('icons/faq.png') }}" alt="faqs">
                                    Cookies
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#"
                               class="nav-link ">
                                <p class="ml-3">
                                    <img src="{{ asset('icons/faq.png') }}" alt="faqs">
                                    Careers
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#"
                               class="nav-link ">
                                <p class="ml-3">
                                    <img src="{{ asset('icons/faq.png') }}" alt="faqs">
                                    Duty-Free
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#"
                               class="nav-link ">
                                <p class="ml-3">
                                    <img src="{{ asset('icons/faq.png') }}" alt="faqs">
                                    Legal
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#"
                               class="nav-link ">
                                <p class="ml-3">
                                    <img src="{{ asset('icons/faq.png') }}" alt="faqs">
                                    Cuisine
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#"
                               class="nav-link ">
                                <p class="ml-3">
                                    <img src="{{ asset('icons/faq.png') }}" alt="faqs">
                                    Economy Class
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#"
                               class="nav-link ">
                                <p class="ml-3">
                                    <img src="{{ asset('icons/faq.png') }}" alt="faqs">
                                    Business Class
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#"
                               class="nav-link ">
                                <p class="ml-3">
                                    <img src="{{ asset('icons/faq.png') }}" alt="faqs">
                                    Fares
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#"
                               class="nav-link ">
                                <p class="ml-3">
                                    <img src="{{ asset('icons/faq.png') }}" alt="faqs">
                                    Contract
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#"
                               class="nav-link ">
                                <p class="ml-3">
                                    <img src="{{ asset('icons/faq.png') }}" alt="faqs">
                                    Contact Us
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#"
                               class="nav-link ">
                                <p class="ml-3">
                                    <img src="{{ asset('icons/faq.png') }}" alt="faqs">
                                    DreamMiles
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#"
                               class="nav-link ">
                                <p class="ml-3">
                                    <img src="{{ asset('icons/faq.png') }}" alt="faqs">
                                    Search
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#"
                               class="nav-link ">
                                <p class="ml-3">
                                    <img src="{{ asset('icons/faq.png') }}" alt="faqs">
                                    Wifi
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#"
                               class="nav-link ">
                                <p class="ml-3">
                                    <img src="{{ asset('icons/faq.png') }}" alt="faqs">
                                    Offers
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#"
                               class="nav-link ">
                                <p class="ml-3">
                                    <img src="{{ asset('icons/faq.png') }}" alt="faqs">
                                    Media Information
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#"
                               class="nav-link ">
                                <p class="ml-3">
                                    <img src="{{ asset('icons/faq.png') }}" alt="faqs">
                                    Route Map
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#"
                               class="nav-link ">
                                <p class="ml-3">
                                    <img src="{{ asset('icons/faq.png') }}" alt="faqs">
                                    SiteMap
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#"
                               class="nav-link ">
                                <p class="ml-3">
                                    <img src="{{ asset('icons/faq.png') }}" alt="faqs">
                                    Help Center
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#"
                               class="nav-link ">
                                <p class="ml-3">
                                    <img src="{{ asset('icons/faq.png') }}" alt="faqs">
                                    Media Center
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#"
                               class="nav-link ">
                                <p class="ml-3">
                                    <img src="{{ asset('icons/faq.png') }}" alt="faqs">
                                    Online Service
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#"
                               class="nav-link ">
                                <p class="ml-3">
                                    <img src="{{ asset('icons/faq.png') }}" alt="faqs">
                                    Partnership
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#"
                               class="nav-link ">
                                <p class="ml-3">
                                    <img src="{{ asset('icons/faq.png') }}" alt="faqs">
                                    Privacy Policy
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#"
                               class="nav-link ">
                                <p class="ml-3">
                                    <img src="{{ asset('icons/faq.png') }}" alt="faqs">
                                    Inflight Entertainment
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <hr class="dropdown-divider"/>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/sliders') }}" class="nav-link {{ request()->is('sldiers') ? 'active' : '' }}">
                        <img src="{{ asset('icons/slider.png') }}" alt="logout">
                        <p>
                            Sliders
                        </p>
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider"/>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/values') }}" class="nav-link {{ request()->is('values') ? 'active' : '' }}">
                        <img src="{{ asset('icons/values.png') }}" alt="logout">
                        <p>
                            Values
                        </p>
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider"/>
                </li>
                <li class="nav-item">
                    <a href="{{ url('cms/fleet') }}" class="nav-link {{ request()->is('cms/fleet') ? 'active' : '' }}">
                        <img src="{{ asset('icons/flight.png') }}" alt="logout">
                        <p>
                            Fleet
                        </p>
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li class="nav-item">
                    <a href="{{ url('menus') }}" class="nav-link {{ request()->is('menus') ? 'active' : '' }}">
                        <img src="{{ asset('icons/slider.png') }}" alt="menu">
                        <p>
                            Menu
                        </p>
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li class="nav-item">
                    <a href="{{ url('cms/careers') }}" class="nav-link {{ request()->is('careers') ? 'active' : '' }}">
                        <img src="{{ asset('icons/slider.png') }}" alt="menu">
                        <p>
                            Careers
                        </p>
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider"/>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#"
                       class="nav-link {{ request()->is('users') ? 'active' : '' }} {{ request()->is('roles') ? 'active' : '' }}">
                        <img src="{{ asset('icons/adminstration.png') }}" alt="hr">
                        <p>
                            Administration
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/users') }}" class="nav-link {{ request()->is('users') ? 'active' : '' }}">
                                <p class="ml-3">
                                    <img src="{{ asset('icons/admin.png') }}" alt="hr">
                                    Administrators
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link {{ request()->is('leaves') ? 'active' : '' }}">
                                <p class="ml-3">
                                    <img src="{{ asset('icons/roles.png') }}" alt="hr">
                                    Roles
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <hr class="dropdown-divider"/>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/logout') }}" class="nav-link">
                        <img src="{{ asset('icons/logout.png') }}" alt="logout">
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider"/>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
