<nav class="navbar navbar-expand-sm navbar-dark">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a style="color: #ff4a5a" class="navbar-brand" href="{{ url('/') }}">PetQoo</a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
               
                @if(Auth::guard('web')->check())
                    
                            <li><a href="{{route('AdminAdd')}}">Tambah</a></li>
                     
                    </li>
                @endif
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if(Auth::guard('doctor')->check())
                
                <li><a style="color: #ff4a5a" style="hover:color:red" href="{{route('Doctors')}}">Cari Dokter Hewan</a></li>
               

                    <li class="dropdown">
                        <a style="color: #ff4a5a" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::guard('doctor')->user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{route('ViewDoc', ['id' => Auth::guard('doctor')->user()->id])}}">Profile</a></li>
                            <li>
                                <a href="{{route('DocLogout')}}"
                                   onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('DocLogout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @elseif(Auth::guard('patient')->check())
                <li><a style="color: #ff4a5a" style="hover:color:red" href="{{route('Doctors')}}">Cari Dokter Hewan</a></li>
              <li><a style="color: #ff4a5a" style="hover:color:red" href="{{route('info')}}">Informasi</a></li>
                    <li class="dropdown">
                        <a style="color: #ff4a5a" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::guard('patient')->user()->fname }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            
                            <li><a href="{{route('ViewPatient', ['id' => Auth::guard('patient')->user()->id])}}">Profile</a></li>
                            <li>
                                <a href="{{route('PatientLogout')}}"
                                   onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('PatientLogout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @elseif(Auth::guard('web')->check())
                    <li class="dropdown">
                        <a style="color: #ff4a5a" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::guard()->user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{route('logout')}}"
                                   onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @elseif (Auth::guest())
               
                    <li><a href="{{Route('PatientAdd')}}"><span style="color: #ff4a5a" class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                 
                    </li>

                    <li class="dropdown">
                        <a style="color: #ff4a5a" class="dropdown-toggle" data-toggle="dropdown" href="#"><span style="color: #ff4a5a" class="glyphicon glyphicon-log-in"></span> Login
                            <span style="color: #ff4a5a" class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('PatientLogin')}}">PatientLogin</a></li>
                            <li><a href="{{route('DocLogin')}}">DoctorLogin</a></li>
                            <li><a href="{{route('login')}}">Admin</a></li>
                        </ul>
                    </li>
                @endif

            </ul>
        </div>
    </div>
</nav>