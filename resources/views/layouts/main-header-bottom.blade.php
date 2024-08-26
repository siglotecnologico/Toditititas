<div class="main-header-one__bottom">
    <div class="main-header-one__bottom-inner">
        <nav class="main-menu main-menu-one">
            <div class="main-menu__wrapper clearfix">
                <div class="container">
                    <div class="main-menu__wrapper-inner">
                        <div class="main-header-one__bottom-center">
                            <div class="main-menu-box">
                                <a href="#" class="mobile-nav__toggler">
                                    <i class="fa fa-bars"></i>
                                </a>

                                <ul class="main-menu__list">
                                    <li class="{{ request()->routeIs('inicio') ? 'current' : '' }}">
                                        <a href="{{ route('inicio') }}">Inicio</a>
                                    </li>
                                    <li class="{{ request()->routeIs('about') ? 'current' : '' }}">
                                        <a href="{{ route('about') }}">Toditititas</a>
                                    </li>
                                    <li class="{{ request()->routeIs('donaciones') ? 'current' : '' }}">
                                        <a href="{{ route('donaciones') }}">Donaciones</a>
                                    </li>
                                    <li class="{{ request()->routeIs('proyectos') ? 'current' : '' }}">
                                        <a href="{{ route('proyectos') }}">Proyectos</a>
                                    </li>
                                    <li class="{{ request()->routeIs('capacitaciones') ? 'current' : '' }}">
                                        <a href="{{ route('capacitaciones') }}">Capacitaciónes</a>
                                    </li>
                                    <li class="{{ request()->routeIs('contactos') ? 'current' : '' }}">
                                        <a href="{{ route('contactos') }}">Contactos</a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                        <div class="main-header-one__bottom-right">
                            <div class="btn-box1">
                                <a href="{{ route('donations.create') }}">Contribuir </a>
                            </div>

                            <div class="btn-box2">
                                <a href="{{ route('unirse') }}">Voluntario</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
