<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="{{ url('dashboard') }}">
                    <img src="{{ asset('img/logo-star-2.png') }}" width="85%" alt="Star Sport logo">
                </a>
            </li>

        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content mt-2">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item">
                <a class="d-flex align-items-center" href="{{ url('dashboard') }}">
                    <i data-feather="home"></i>
                    <span class="menu-title text-truncate" data-i18n="Dashboards">Dashboard</span>
                </a>
            </li>
            <li class="navigation-header">
                <span data-i18n="Módulos">Módulos</span>
                <i data-feather="more-horizontal"></i>
            </li>
            <li class="nav-item">
                <a class="d-flex align-items-center" href="{{ url('encuentros') }}">
                    <i data-feather='users'></i>
                    <span class="menu-title text-truncate " data-i18n="Encuentros">Encuentros</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex align-items-center" href="{{ url('apuestas') }}">
                    <i data-feather='users'></i>
                    <span class="menu-title text-truncate " data-i18n="Apuestas">Apuestas</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex align-items-center" href="{{ url('usuarios') }}">
                    <i data-feather='users'></i>
                    <span class="menu-title text-truncate " data-i18n="Users">Usuarios</span>
                </a>
            </li>
            <li class=" nav-item">
                <a class="d-flex align-items-center" href="javascript:void(0);">
                    <i data-feather='settings'></i>
                    <span class="menu-title text-truncate" data-i18n="settings">Reportes</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="d-flex align-items-center" href="javascript:void(0);">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Ingresos">Ingresos</span>
                        </a>
                    </li>
                    <li>
                        <a class="d-flex align-items-center" href="javascript:void(0);">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Saldos">Saldos</span>
                        </a>
                    </li>
                    <li>
                        <a class="d-flex align-items-center" href="javascript:void(0);">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Bancos">Reporte Contable</span>
                        </a>
                    </li>
                    <li>
                        <a class="d-flex align-items-center" href="javascript:void(0);">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Monedas">Caja de Operación</span>
                        </a>
                    </li>
                    <li>
                        <a class="d-flex align-items-center" href="javascript:void(0);">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Monedas">Pagos y Recargas</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a class="d-flex align-items-center" href="javascript:void(0);">
                    <i data-feather='settings'></i>
                    <span class="menu-title text-truncate" data-i18n="settings">Configuración</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="d-flex align-items-center" href="{{ url('roles') }}">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Roles">Roles</span>
                        </a>
                    </li>
                    <li>
                        <a class="d-flex align-items-center" href="{{ url('agencias') }}">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Agencias">Agencias</span>
                        </a>
                    </li>
                    <li>
                        <a class="d-flex align-items-center" href="{{ url('bancos') }}">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Bancos">Bancos</span>
                        </a>
                    </li>
                    <li>
                        <a class="d-flex align-items-center" href="{{ url('monedas') }}">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Monedas">Monedas</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
