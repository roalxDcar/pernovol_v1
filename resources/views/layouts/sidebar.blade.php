<div class="main-menu material-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="user-profile">
        <div class="user-info text-center pb-2">
            <img alt="" class="user-img img-fluid rounded-circle w-25 mt-2" src="{!! asset('assets/app-assets/images/portrait/small/avatar-s-3.png')!!}"/>
            <div class="name-wrapper d-block dropdown mt-1">
                <a aria-expanded="false" aria-haspopup="true" class="white dropdown-toggle" data-toggle="dropdown" href="#" id="user-account">
                    <span class="user-name">
                        {{ Auth::user()->name }}
                    </span>
                </a>
                <div class="text-light">
                    Administrador
                </div>
                <div aria-labelledby="dropdownMenuLink" class="dropdown-menu arrow">
                    <a class="dropdown-item">
                        <i class="material-icons align-middle mr-1">
                            person
                        </i>
                        <span class="align-middle">
                            Profile
                        </span>
                    </a>
                    <a class="dropdown-item">
                        <i class="material-icons align-middle mr-1">
                            message
                        </i>
                        <span class="align-middle">
                            Messages
                        </span>
                    </a>
                    <a class="dropdown-item">
                        <i class="material-icons align-middle mr-1">
                            attach_money
                        </i>
                        <span class="align-middle">
                            Balance
                        </span>
                    </a>
                    <a class="dropdown-item">
                        <i class="material-icons align-middle mr-1">
                            settings
                        </i>
                        <span class="align-middle">
                            Settings
                        </span>
                    </a>
                    <a class="dropdown-item">
                        <i class="material-icons align-middle mr-1">
                            power_settings_new
                        </i>
                        <span class="align-middle">
                            Log Out
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" data-menu="menu-navigation" id="main-menu-navigation">
            <li class=" nav-item">
                <a href="index.html">
                    <i class="material-icons">
                        settings_input_svideo
                    </i>
                    <span class="menu-title" data-i18n="Dashboard">
                        Dashboard
                    </span>
                    <span class="badge badge badge-info badge-pill float-right mr-2">
                        3
                    </span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="{{ route('welcome') }}">
                            <i class="material-icons">
                            </i>
                            <span data-i18n="eCommerce">
                                eCommerce
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="menu-item" href="dashboard-crypto.html">
                            <i class="material-icons">
                            </i>
                            <span data-i18n="Crypto">
                                Crypto
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="menu-item" href="dashboard-sales.html">
                            <i class="material-icons">
                            </i>
                            <span data-i18n="Sales">
                                Sales
                            </span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item">
                <a href="#">
                    <i class="material-icons">
                        person_outline
                    </i>
                    <span class="menu-title" data-i18n="Users">
                        Gestión de Usuarios
                    </span>
                </a>
                <ul class="menu-content">
                    <li class="active">
                        <a class="menu-item" href="{{ route('get.provider') }}">
                            <i class="material-icons">
                            </i>
                            <span data-i18n="Users List">
                                Proveedores
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="charts-apexcharts.html">
                    <i class="material-icons">
                        data_usage
                    </i>
                    <span class="menu-title" data-i18n="Apex Charts">
                        Apex Charts
                    </span>
                </a>
            </li>
        </ul>
    </div>
</div>