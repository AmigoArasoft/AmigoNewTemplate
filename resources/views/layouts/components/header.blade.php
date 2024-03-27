
            <header class="app-header">

                <div class="main-header-container container-fluid">

                    <div class="header-content-left">

                        <div class="header-element">
                            <div class="horizontal-logo">
                                <a href="{{url('/amigo')}}" class="header-logo">
                                    <img src="{{asset('img/logo_letras_blancas.png')}}" alt="logo" class="desktop-logo">
                                    <img src="{{asset('img/logo_letras_blancas.png')}}" alt="logo" class="toggle-logo">
                                    <img src="{{asset('img/logo_letras_blancas.png')}}" alt="logo" class="desktop-dark">
                                    <img src="{{asset('img/logo_letras_blancas.png')}}" alt="logo" class="toggle-dark">
                                    <img src="{{asset('img/logo_letras_blancas.png')}}" alt="logo" class="desktop-white">
                                    <img src="{{asset('img/logo_letras_blancas.png')}}" alt="logo" class="toggle-white">
                                </a>
                            </div>
                        </div>

                        <div class="header-element">
                            <a aria-label="Hide Sidebar" class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle" data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
                        </div>

                    </div>

                    <div class="header-content-right">
                        <div class="header-element">
                            <a href="javascript:void(0);" class="header-link dropdown-toggle" id="mainHeaderProfile" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                <div class="d-flex align-items-center">
                                    <div class="me-sm-2 me-0">
                                        <img src="{{asset('img/logo_letras_blancas.png')}}" alt="img" width="32" height="32" class="rounded-circle">
                                    </div>
                                    <div class="d-sm-block d-none">
                                        <p class="fw-semibold mb-0 lh-1">{{ Auth::user()->name }}</p>
                                    </div>
                                </div>
                            </a>
                            <ul class="main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end" aria-labelledby="mainHeaderProfile">
                                <li><a class="dropdown-item d-flex" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="ti ti-logout fs-18 me-2 op-7"></i>Cerrar Sesión</a>
                                </li>
                            </ul>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>  
                    </div>
                </div>
            </header>