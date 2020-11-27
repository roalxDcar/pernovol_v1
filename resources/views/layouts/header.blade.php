<!-- BEGIN: Header-->
<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-lg-none mr-auto">
                    <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
                        <i class="ft-menu font-large-1">
                        </i>
                    </a>
                </li>
                <li class="nav-item mr-auto">
                    <a class="navbar-brand" href="index.html">
                        <img alt="modern admin logo" class="brand-logo" src="{!!asset('assets/app-assets/images/logo/logo.png')!!}">
                            <h3 class="brand-text">
                                Modern
                            </h3>
                        </img>
                    </a>
                </li>
                <li class="nav-item d-lg-none">
                    <a class="nav-link open-navbar-container" data-target="#navbar-mobile" data-toggle="collapse">
                        <i class="material-icons mt-50">
                            more_vert
                        </i>
                    </a>
                </li>
            </ul>
        </div>
        {{-- Contenido Header --}}
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left"><li class="nav-item"></li></ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" data-toggle="dropdown" href="#">
                            <span class="mr-1 user-name text-bold-700 dropdown-toggle">
                                Hola, {{ Auth::user()->name }}
                            </span>
                            <span class="avatar avatar-online">
                                <img alt="avatar" src="{!! asset('assets/app-assets/images/portrait/small/avatar-s-6.png')!!}">
                                    <i>
                                    </i>
                                </img>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="
                                                        event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                <i class="material-icons">
                                    power_settings_new
                                </i>
                                Cerrar Sesión
                            </a>
                            {{-- Form de Cierre de Sesión --}}
                            <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        {{-- Fin de contenido Header --}}
    </div>
</nav>
<!-- END: Header-->
