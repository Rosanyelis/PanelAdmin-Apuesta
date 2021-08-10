<div class="horizontal-menu-wrapper">
    <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-shadow menu-border" role="navigation" data-menu="menu-wrapper" data-menu-type="floating-nav">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto">
                    <a class="navbar-brand" href="{{ url('dashboard') }}">
                        <img src="{{ asset('img/logo-star-2.png') }}" width="85%" alt="Star Sport logo">
                    </a>
                </li>
                <li class="nav-item nav-toggle">
                    <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                        <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <!-- Horizontal menu content-->
        <div class="navbar-container main-menu-content" data-menu="menu-container">
            <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="dropdown nav-item" data-menu="dropdown">
                    <a class="nav-link d-flex align-items-center" href="{{ url('dashboard') }}">
                        <i data-feather="home"></i>
                        <span data-i18n="Dashboards">Dashboard</span>
                    </a>
                </li>
                <li class="dropdown nav-item" data-menu="dropdown">
                    <a class="nav-link d-flex align-items-center" href="{{ url('encuentros') }}">
                        <i data-feather="users"></i>
                        <span data-i18n="Encuentros">Encuentros</span>
                    </a>
                </li>
                <li class="dropdown nav-item" data-menu="dropdown">
                    <a class="nav-link d-flex align-items-center" href="{{ url('apuestas') }}">
                        <i data-feather="users"></i>
                        <span data-i18n="Apuestas">Apuestas</span>
                    </a>
                </li>
                <li class="dropdown nav-item" data-menu="dropdown">
                    <a class="nav-link d-flex align-items-center" href="{{ url('arbol-de-sistema') }}">
                        <i data-feather="users"></i>
                        <span data-i18n="Apuestas">Arbol de Sistema</span>
                    </a>
                </li>
                <li class="dropdown nav-item" data-menu="dropdown">
                    <a class="nav-link d-flex align-items-center" href="{{ url('usuarios') }}">
                        <i data-feather="users"></i>
                        <span data-i18n="Users">Usuarios</span>
                    </a>
                </li>
                <li class="dropdown nav-item" data-menu="dropdown">
                    <a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown">
                        <i data-feather="package"></i>
                        <span data-i18n="Apps">Configuraciones</span></a>
                    <ul class="dropdown-menu">
                        <li data-menu="">
                            <a class="dropdown-item d-flex align-items-center" href="{{ url('roles') }}" data-toggle="dropdown" data-i18n="Roles">
                                <i data-feather="circle"></i>
                                <span data-i18n="Email">Roles</span>
                            </a>
                        </li>
                        <li data-menu="">
                            <a class="dropdown-item d-flex align-items-center" href="{{ url('agencias') }}" data-toggle="dropdown" data-i18n="Roles">
                                <i data-feather="circle"></i>
                                <span data-i18n="Email">Agencias</span>
                            </a>
                        </li>
                        <li data-menu="">
                            <a class="dropdown-item d-flex align-items-center" href="{{ url('bancos') }}" data-toggle="dropdown" data-i18n="Roles">
                                <i data-feather="circle"></i>
                                <span data-i18n="Email">Bancos</span>
                            </a>
                        </li>
                        <li data-menu="">
                            <a class="dropdown-item d-flex align-items-center" href="{{ url('monedas') }}" data-toggle="dropdown" data-i18n="Roles">
                                <i data-feather="circle"></i>
                                <span data-i18n="Email">Monedas</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
