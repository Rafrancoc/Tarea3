<!DOCTYPE html>
<html dir="ltr" lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="GenieSolutions +593969853570">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
        <title>Backoffice - PRUF</title>
        <!-- Custom CSS -->
        <link href="<?= base_url('asset/vendor/css/c3.min.css') ?>" rel="stylesheet">
        <link href="<?= base_url('asset/vendor/css/chartist.min.css') ?>" rel="stylesheet">
        <link href="<?= base_url('asset/vendor/css/jquery-jvectormap-2.0.2.css') ?>" rel="stylesheet" />
        <link href="<?= base_url('asset/vendor/css/bootstrap.css') ?>" rel="stylesheet"> 
        <!-- Custom CSS -->
        <link href="<?= base_url('asset/vendor/css/style.min.css?v=2') ?>" rel="stylesheet">
        <link href="<?= base_url('asset/vendor/fontawesome-free-5.15.3-web/css/all.css') ?>" rel="stylesheet">
        <link href="<?= base_url('asset/vendor/css/bootstrap-toggle.min.css') ?>" rel="stylesheet">
        <link href="<?= base_url('asset/vendor/alert/sweetalert2.css') ?>" rel="stylesheet"> 
        <link href="<?= base_url('asset/vendor/css/jquery.dataTables.css') ?> rel="stylesheet" type="text/css" ">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
    <body>

        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
 
        <!--
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        -->

        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
             data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
            <!-- ============================================================== -->
            <!-- Topbar header - style you can find in pages.scss -->
            <!-- ============================================================== -->

            <header class="topbar" data-navbarbg="skin6">
                <nav class="navbar top-navbar navbar-expand-md">
                    <div class="navbar-header" data-logobg="skin6">
                        <!-- This is for the sidebar toggle which is visible on mobile only -->
                        <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                                class="fa fa-bars"></i></a>
                        <!-- ============================================================== -->
                        <!-- Logo -->
                        <!-- ============================================================== -->
                        <div class="navbar-brand">
                            <!-- Logo icon -->
                            <a href="inicio">
                                <b class="logo-icon">
                                    <!-- Dark Logo icon -->
                                    <img src="<?= str_replace('index.php','',base_url('asset/images/logo-icon.png')) ?>" alt="homepage" class="dark-logo" />
                                    <!-- Light Logo icon -->
                                    <img src="<?= str_replace('index.php','',base_url('asset/images/logo-icon.png')) ?>" alt="homepage" class="light-logo" />
                                </b>
                                <!--End Logo icon -->
                                <!-- Logo text -->
                                <span class="logo-text">
                                    <!-- dark Logo text -->
                                    <img src="<?= str_replace('index.php','',base_url('asset/images/logo-text.png?v=1')) ?>" alt="homepage" class="dark-logo" />
                                    <!-- Light Logo text -->
                                    <img src="<?= str_replace('index.php','',base_url('asset/images/logo-light-text.png')) ?>" class="light-logo" alt="homepage" />
                                </span>
                            </a>
                        </div>
                        <!-- ============================================================== -->
                        <!-- End Logo -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Toggle which is visible on mobile only -->
                        <!-- ============================================================== -->
                        <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                           data-toggle="collapse" data-target="#navbarSupportedContent"
                           aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                                class="fa fa-ellipsis-h"></i></a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-collapse collapse" id="navbarSupportedContent" style="background: #0db5d6;">
                        <!-- ============================================================== -->
                        <!-- toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                            <!-- Notification -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle pl-md-3 position-relative" href="javascript:void(0)"
                                   id="bell" role="button" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">
                                    <span><i data-feather="bell" class="svg-icon" style="color: #FFF"></i></span>
                                    <span class="badge badge-primary notify-no rounded-circle <?php                                
                                    $cantidad = (isset($anuncios) && !empty($anuncios))? count($anuncios) : 0;
                                    if ($cantidad >= 1) {
                                        ?>
                                              blink_me
                                <?php } ?>"><?= $cantidad ?></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-left mailbox animated bounceInDown">
                                    <ul class="list-style-none">
                                        <li>
                                            <div class="message-center notifications position-relative">
                                            <?php 
                                            if(isset($anuncios))
                                            foreach ($anuncios as $clave => $valor) { ?>
                                                    <a href="<?= $valor['an_url'] ?>" class="message-item d-flex align-items-center border-bottom px-3 py-2"  onclick="visto(<?= $valor['an_id'] ?>)">
                                                        <div class="btn btn-danger rounded-circle btn-circle">
                                                            <i   class="fas fa-bullhorn"></i></div>
                                                        <div class="w-75 d-inline-block v-middle pl-2">
                                                            <h6 class="message-title mb-0 mt-1">Aviso</h6>
                                                            <span class="font-12 text-nowrap d-block text-muted" style="text-align: justify"><?= substr($valor['an_mensaje'], 0, 138) . "..." ?></span>
                                                            <span class="font-12 text-nowrap d-block text-muted"><?= $valor['an_fecha'] ?></span>
                                                        </div>
                                                    </a>
                                                <?php } ?>
                                                <!-- Message -->
                                                <a href="perfil"
                                                   class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                    <div class="btn btn-danger rounded-circle btn-circle"><i
                                                            data-feather="airplay" class="text-white"></i></div>
                                                    <div class="w-75 d-inline-block v-middle pl-2">
                                                        <h6 class="message-title mb-0 mt-1">Perfil</h6>
                                                        <span class="font-12 text-nowrap d-block text-muted">Actualiza tu datos de perfil.</span>
                                                        <span class="font-12 text-nowrap d-block text-muted">11:30 AM</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                   class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                    <div class="btn btn-danger rounded-circle btn-circle"><i
                                                            data-feather="airplay" class="text-white"></i></div>
                                                    <div class="w-75 d-inline-block v-middle pl-2">
                                                        <h6 class="message-title mb-0 mt-1">Saludos</h6>
                                                        <span class="font-12 text-nowrap d-block text-muted">Bienvenido a la plataforma Pruf.</span>
                                                        <span class="font-12 text-nowrap d-block text-muted">9:30 AM</span>
                                                    </div>
                                                </a>

                                            </div>
                                        </li>
                                        <li>
                                            <a class="nav-link pt-3 text-center text-dark" href="veranuncios">
                                                <strong>Ver todas las notificaciones</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link dropdown-toggle pl-md-3 position-relative" href="carrito" >
                                    <span><i   class="fas fa-shopping-cart" style="color: #FFF"></i></span>
                                    <span   id="tot_item"  class="badge orden_total badge-primary notify-no rounded-circle">0</span>
                                </a>
                            </li>
                        </ul>
                        <!-- ============================================================== -->
                        <!-- Right side toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav float-right">
                            <!-- ============================================================== -->
                            <!-- User profile and search -->
                            <!-- ============================================================== -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
                                    <?php if ($_SESSION["us_foto"] == '') { ?>
                                        <img src="asset/images/user.jpg" alt="user" class="rounded-circle" width="40">
                                    <?php } else { ?>
                                        <img src="asset/<?= str_replace('..','',$_SESSION["us_foto"]); ?>" alt="user" class="rounded-circle" width="40" style="width: 40px;   height: 40px;">
                                    <?php } ?>
                                    <span class="ml-2 d-none d-lg-inline-block"> <span class="text-white"><?= $_SESSION["us_usuario"] ?></span> <i data-feather="chevron-down" class="svg-icon"></i></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                    <a class="dropdown-item" href="perfil"><i data-feather="user" class="svg-icon mr-2 ml-1"></i>Mi Perfil</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)" onClick="salir()"><i data-feather="power"class="svg-icon mr-2 ml-1"></i>Salir</a>
                                </div>
                            </li>
                            <!-- ============================================================== -->
                            <!-- User profile and search -->
                            <!-- ============================================================== -->
                        </ul>
                    </div>
                </nav>
            </header>    
            <!-- ============================================================== -->
            <!-- End Topbar header -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
                <?php $this->load->view('partes/menu'); ?>
            <!-- ============================================================== -->
            <!-- End Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Page wrapper  -->
            <!-- ============================================================== -->            
            <div class="page-wrapper">     
                <?php
                if (isset($view) && !empty($view)) {
                      $this->load->view($view); 
                      unset($view); 
                }
                ?>
                <footer class="footer text-center text-muted">
                    All Rights Reserved by Pruf. Designed and Developed by <a href="https://pruf-ec.com/" target="_blank">Pruf</a>.
                </footer>
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
        </div>

        <div class="modal fade" id="default-Modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Cargando...</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Mostrando contenido...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark waves-effect btn-round " data-dismiss="modal">Cerrar</button> 
                    </div>
                </div>
            </div>
        </div>

        <canvas class="canva" id="canvas"></canvas>  

        <script src="<?= base_url('asset/vendor/js/jquery-3.5.1.min.js') ?>"  type="text/javascript" charset="utf8" ></script>
        <script src="<?= base_url('asset/vendor/js/popper/popper.min.js') ?>"  type="text/javascript" charset="utf8" ></script>
        <script src="<?= base_url('asset/vendor/js/bootstrap.min.js') ?>"  type="text/javascript" charset="utf8" ></script>
        <!-- apps -->
        <script src="<?= base_url('asset/vendor/js/app-style-switcher.js') ?>" type="text/javascript" charset="utf8" ></script>
        <script src="<?= base_url('asset/vendor/js/feather.min.js') ?>"  type="text/javascript" charset="utf8" ></script>
        <script src="<?= base_url('asset/vendor/js/perfect-scrollbar.jquery.min.js') ?>"  type="text/javascript" charset="utf8" ></script>
        <script src="<?= base_url('asset/vendor/js/sidebarmenu.js') ?>"  type="text/javascript" charset="utf8" ></script>
        <!--Custom JavaScript -->
        <script src="<?= base_url('asset/vendor/js/custom.min.js') ?>"  type="text/javascript" charset="utf8" ></script>
        <!--This page JavaScript -->
        <script src="<?= base_url('asset/vendor/js/d3.min.js') ?>"  type="text/javascript" charset="utf8" ></script>
        <script src="<?= base_url('asset/vendor/js/c3.min.js') ?>"  type="text/javascript" charset="utf8" ></script>
        <script src="<?= base_url('asset/vendor/js/chartist.min.js') ?>"  type="text/javascript" charset="utf8" ></script>
        <script src="<?= base_url('asset/vendor/js/chartist-plugin-tooltip.min.js') ?>"  type="text/javascript" charset="utf8" ></script>
        <script src="<?= base_url('asset/vendor/js/jquery-jvectormap-2.0.2.min.js') ?>"  type="text/javascript" charset="utf8" ></script> 

        <script src="<?= base_url('asset/vendor/js/jquery.dataTables.js') ?>" type="text/javascript" charset="utf8" ></script> 
        <script src="<?= base_url('asset/vendor/js/bootstrap-toggle.min.js') ?>"  type="text/javascript" charset="utf8" ></script>

        <script src="<?= base_url('asset/vendor/js/dashboard1.min.js') ?>"  type="text/javascript" charset="utf8" ></script>
        <script src="<?= base_url('asset/vendor/alert/sweetalert2@11.js') ?>" async></script>


        <?php if (isset($rango) && count($rango) == 1 and $_GET["pw"] == '') { ?>
            <script src="vendor/js/confetti.browser.min.js"  type="text/javascript" charset="utf8" ></script>
            <script>
                                            var myCanvas = document.createElement('canvas');
                                            document.body.appendChild(myCanvas);

                                            var myConfetti = confetti.create(myCanvas, {
                                                resize: true,
                                                useWorker: true
                                            });

                                            myConfetti();

                                            setTimeout(() => {
                                                myConfetti.reset();
                                            }, 100);

                                            var duration = 30 * 1000;
                                            var duration = 15 * 1000;
                                            var animationEnd = Date.now() + duration;
                                            var defaults = {startVelocity: 30, spread: 360, ticks: 60, zIndex: 0};

                                            function randomInRange(min, max) {
                                                return Math.random() * (max - min) + min;
                                            }

                                            var interval = setInterval(function () {
                                                var timeLeft = animationEnd - Date.now();

                                                if (timeLeft <= 0) {
                                                    return clearInterval(interval);
                                                }

                                                var particleCount = 50 * (timeLeft / duration);
                                                // since particles fall down, start a bit higher than random
                                                confetti(Object.assign({}, defaults, {particleCount, origin: {x: randomInRange(0.1, 0.3), y: Math.random() - 0.2}}));
                                                confetti(Object.assign({}, defaults, {particleCount, origin: {x: randomInRange(0.7, 0.9), y: Math.random() - 0.2}}));
                                            }, 250);

            </script>
        <?php } ?>


<!--  <script src="<?= base_url('asset/includes/mi_scripts.js') ?>"  type="text/javascript" charset="utf8" ></script> -->
        <style>
            .toggle{
                width: 40px !important;
                height: 20px !important;
                border-radius: 50px;
            }
            .toggle-on{
                font-size: 13px;
            }
            .toggle-off{
                font-size: 13px;
            }
            .btn-default {
                color: #333;
                background-color: #fff;
                border-color: #ccc;
            }
        </style>
        <script>
            $(function () {
                d3.select("#campaign-v2 .c3-chart-arcs-title").style("font-family", "Rubik");
                var e = {
                    axisX: {
                        showGrid: !1
                    },
                    seriesBarDistance: 1,
                    chartPadding: {
                        top: 15,
                        right: 15,
                        bottom: 5,
                        left: 0
                    },
                    plugins: [Chartist.plugins.tooltip()],
                    width: "100%"
                };
                new Chartist.Bar(".net-income", {
                    labels: ["Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
                    series: [
                        [<?= $counter7 ?>, <?= $counter8 ?>, <?= $counter9 ?>, 0, 0, 0]
                    ]
                }, e, [
                    ["screen and (max-width: 640px)", {
                            seriesBarDistance: 5,
                            axisX: {
                                labelInterpolationFnc: function (e) {
                                    return e[0]
                                }
                            }
                        }]
                ]);
                var t = new Chartist.Line(".stats", {
                    labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
                    series: [
                        [11, 10, 15, 21, 14, 23, 12]
                    ]
                }, {
                    low: 0,
                    high: 28,
                    showArea: !0,
                    fullWidth: !0,
                    plugins: [Chartist.plugins.tooltip()],
                    axisY: {
                        onlyInteger: !0,
                        scaleMinSpace: 40,
                        offset: 20,
                        labelInterpolationFnc: function (e) {
                            return e / 1 + "k"
                        }
                    }
                });
                t.on("draw", function (e) {
                    "area" === e.type && e.element.attr({
                        x1: e.x1 + .001
                    })
                }), t.on("created", function (e) {
                    e.svg.elem("defs").elem("linearGradient", {
                        id: "gradient",
                        x1: 0,
                        y1: 1,
                        x2: 0,
                        y2: 0
                    }).elem("stop", {
                        offset: 0,
                        "stop-color": "rgba(255, 255, 255, 1)"
                    }).parent().elem("stop", {
                        offset: 1,
                        "stop-color": "rgba(80, 153, 255, 1)"
                    })
                }), $(window).on("resize", function () {
                    t.update()
                })

            });

        </script>
    </body> 
</html>