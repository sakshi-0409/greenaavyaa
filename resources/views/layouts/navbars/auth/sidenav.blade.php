<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{ route('home') }}" target="_blank">
            <img src="{{asset('images/logo-dark.png')}}" class="navbar-brand-img h-100" alt="main_logo">
            <br><span class="ms-1 font-weight-bold">Greenaavyaa - {{@Auth::user()->name}}</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            {{-- <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}" href="{{ route('home') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
            </a>
            </li> --}}

            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'leads' ? 'active' : '' }}" href="{{ route('leads')}}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-collection text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Leads</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'properties' ? 'active' : '' }}" href="{{url('properties')}}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-pin-3 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Properties</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'brokers' ? 'active' : '' }}" href="{{ route('brokers')}}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Brokers</span>
                </a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'schedule' ? 'active' : '' }}" href="">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Schedule</span>
            </a>
            </li> --}}
            {{-- <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'team' ? 'active' : '' }}" href="">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Team</span>
            </a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'contacts' ? 'active' : '' }}" href="{{url('contacts')}}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-books text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Contacts</span>
                </a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'billing' ? 'active' : '' }}" href="{{url('billing')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Billing</span>
            </a>
            </li> --}}
            {{-- <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'task' ? 'active' : '' }}" href="">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Task</span>
            </a>
            </li> --}}
            {{-- <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'setting' ? 'active' : '' }}" href="">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Setting</span>
            </a>
            </li> --}}




            {{-- <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'analytics' ? 'active' : '' }}" href="">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-app text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Analytics</span>
            </a>
            </li> --}}

            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'profile-static' ? 'active' : '' }}" href="{{ route('profile') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
            @guest

            <li class="nav-item">
                <a class="nav-link " href="{{ url('login') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Sign In</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('register') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-collection text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Sign Up</span>
                </a>
            </li>
            @endguest
            @auth
            <li class="nav-item">
                <form role="form" method="post" action="{{ route('logout') }}" id="logout-form">
                    @csrf
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-single-02 text-danger text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Log out</span>
                    </a>
                </form>
            </li>
            @endauth


        </ul>
    </div>

</aside>
