<!--INICIO BARRA LATERAL IZQUIERDA-->
<!DOCTYPE html>
<html lang="es">

<head>
    <title>
        @yield('titulo1')

    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="{{asset('img/Logo_Final_Cronnch.png')}}">
    <script src="{{asset('js/sweet-alert.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/sweet-alert.css')}}">
    <link rel="stylesheet" href="{{asset('css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="{{asset('js/modernizr.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</head>

<body>
    <div class="navbar-lateral full-reset">
        <div class="visible-xs font-movile-menu mobile-menu-button"></div>
        <div class="full-reset container-menu-movile nav-lateral-scroll">
            <div class="logo full-reset all-tittles">
                <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button" style="line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;"></i>
                sistema softcronnch
            </div>
            <div class="nav-lateral-divider full-reset"></div>
            <div class="full-reset" style="padding: 10px 0; color:#fff;">
                <figure>
                    <img src="{{asset('img/logos/Logo_Final_Cronnch.png')}}" alt="Logo" class="img-responsive center-box" style="width:55%;">
                </figure>
                <p class="text-center" style="padding-top: 15px;">@yield('titulo2')</p>
            </div>
            <div class="nav-lateral-divider full-reset"></div>
            <div class="full-reset nav-lateral-list-menu">
                <ul class="list-unstyled">
                    <li><a href="Siute"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Inicio</a></li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-truck zmdi-hc-fw"></i>&nbsp;&nbsp; Proveedores <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="crearproveedor"><i class="zmdi zmdi-shopping-cart zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo proveedor</a></li>
                            <li><a href="listarproveedor"><i class="zmdi zmdi-plus-circle zmdi-hc-fw"></i>&nbsp;&nbsp; Modificar proveedor</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i>&nbsp;&nbsp; Registro de usuarios <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                        <ul class="list-unstyled">

                            <li><a href="registrarusuario"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo Usuario</a></li>
                            <li><a href="listausuarios"><i class="zmdi zmdi-accounts zmdi-hc-fw"></i>&nbsp;&nbsp; Modificar usuario</a></li>

                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-assignment-o zmdi-hc-fw"></i>&nbsp;&nbsp; Inventario <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="registrarproducto"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; Registrar Producto</a></li>
                            <li>
                                <a href="registrarinsumo"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; Registrar Insumo <span class="label label-danger pull-right label-mhover">7</span></a>
                            </li>
                            <li><a href="inventarioprincipal"><i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Productos</a></li>
                        </ul>

                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-store zmdi-hc-fw"></i>&nbsp;&nbsp; Ventas <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="listaventas"><i class="zmdi zmdi-money zmdi-hc-fw"></i>&nbsp;&nbsp; Lista de ventas</a></li>


                            <li>
                                <a href="registrarventa"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; Registrar Venta <span class="label label-danger pull-right label-mhover">7</span></a>
                            </li>





                        </ul>
                    </li>
                    <li><a href="report"><i class="zmdi zmdi-trending-up zmdi-hc-fw"></i>&nbsp;&nbsp; Reportes y estadísticas</a></li>
                    <li><a href="advancesettings"><i class="zmdi zmdi-wrench zmdi-hc-fw"></i>&nbsp;&nbsp; Configuraciones avanzadas</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!--FIN BARRA LATERAL IZQUIERDA-->
    <!--INICIO BARRA AMARILLA-->
    <div class="content-page-container full-reset custom-scroll-containers">
        <nav class="navbar-user-top full-reset" class="content-page-container full-reset custom-scroll-containers">
            <ul class="list-unstyled full-reset">
                <figure>
                    <img src="{{asset('img/user01.png')}}" alt="user-picture" class="img-responsive img-circle center-box">
                </figure>
                <li style="color:#fff; cursor:default;">
                    <span class="all-tittles">Admin Name</span>
                </li>
                <li class="tooltips-general exit-system-button" data-href="/" data-placement="bottom" title="Salir del sistema">
                    <i class="zmdi zmdi-power"></i>
                </li>

                <li class="tooltips-general btn-help" data-placement="bottom" title="Ayuda">
                    <i class="zmdi zmdi-help-outline zmdi-hc-fw"></i>
                </li>
                <li class="mobile-menu-button visible-xs" style="float: left !important;">
                    <i class="zmdi zmdi-menu"></i>
                </li>
                <li class="desktop-menu-button hidden-xs" style="float: left !important;">
                    <i class="zmdi zmdi-swap"></i>
                </li>
            </ul>
        </nav>


        <!--FIN BARRA AMARILLA-->
        @yield('seccion')


        <!--INICIO FOOTER-->

        <footer class="footer full-reset">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">Acerca de</h4>
                        <p>
                            Softcronnch es un sistema dediacado a la organización y digitalización de los procesos internos.
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">Desarrollador</h4>
                        <ul class="list-unstyled">
                            <li><i class="zmdi zmdi-check zmdi-hc-fw"></i>&nbsp; Gaes 1 <i class="zmdi zmdi-facebook zmdi-hc-fw footer-social"></i><i class="zmdi zmdi-twitter zmdi-hc-fw footer-social"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright full-reset all-tittles">2022 Gaes 1</div>
        </footer>


    </div>
</body>

</html>
<!--FIN FOOTER-->