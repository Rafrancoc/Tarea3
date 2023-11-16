<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item <?php if ($view === 'inicio') { ?>selected<?php } ?>"> 
                    <a class="sidebar-link sidebar-link <?php if ($view === 'inicio') { ?>active<?php } ?>"  href="inicio"
                       aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                            class="hide-menu">Dashboard</span></a>
                </li>
                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Modulos</span></li>
                <li class="sidebar-item <?php if ($view === 'balance') { ?>selected<?php } ?>"> 
                    <a class="sidebar-link" href="balance" aria-expanded="false">
                        <i class="fas fa-briefcase"></i>
                        <span class="hide-menu">Mi Balance</span>
                    </a>
                </li>
                <li class="sidebar-item <?php if ($view === 'retiros') { ?>selected<?php } ?>"> 
                    <a class="sidebar-link" href="retiros" aria-expanded="false">
                        <i class="fas fa-wallet"></i>
                        <span class="hide-menu">Mi billetera</span>
                    </a>
                </li> 	
                <li class="sidebar-item <?php if ($view === 'referidos') { ?>selected<?php } ?>"> 
                    <a class="sidebar-link sidebar-link" href="promotores"
                       aria-expanded="false">
                        <i  class="fas fa-user-plus"></i><span
                            class="hide-menu">Mis Promotores</span></a>
                </li>
                <li class="sidebar-item <?php if ($view === 'supermarket') { ?>selected<?php } ?>"> 
                    <a class="sidebar-link sidebar-link" href="supermarket"
                       aria-expanded="false">
                        <i  class="fas fa-store-alt"></i><span
                            class="hide-menu">SuperMarket</span></a>
                </li>
                <?php if ($_SESSION["us_tipocta"] == 1) { ?>
                    <li class="list-divider"></li>
                    <li class="nav-small-cap"><span class="hide-menu">Configuración</span></li>
                    <li class="sidebar-item <?php if ($view === 'adminusu') { ?>selected<?php } ?>"> 
                        <a class="sidebar-link sidebar-link" href="adminusu"  aria-expanded="false" >
                            <i  class="fas fa-users"></i> 
                            <span class="hide-menu">Administrar Usuarios</span></a>
                    </li>
                    <li class="sidebar-item <?php if ($view === 'adminorden') { ?>selected<?php } ?>"> 
                        <a class="sidebar-link sidebar-link" href="adminorden"  aria-expanded="false" >
                            <i  class="fas fa-file-invoice"></i> 
                            <span class="hide-menu">Administrar Ordenes</span></a>
                    </li>
                    <li class="sidebar-item <?php if ($view === 'anuncios') { ?>selected<?php } ?>"> 
                        <a class="sidebar-link sidebar-link" href="anuncios"  aria-expanded="false" >
                            <i  class="fas fa-bullhorn"></i> 
                            <span class="hide-menu">Anuncios</span></a>
                    </li>
                    <li class="sidebar-item <?php if ($view === 'ventas') { ?>selected<?php } ?>"> 
                        <a class="sidebar-link sidebar-link" href="ventas"  aria-expanded="false" >
                            <i  class="fas fa-receipt"></i> 
                            <span class="hide-menu">Reporte de ventas</span></a>
                    </li>
                    <li class="sidebar-item <?php if ($view === 'valores') { ?>selected<?php } ?>"> 
                        <a class="sidebar-link sidebar-link" href="valores"  aria-expanded="false" >
                            <i  class="fas fa-cash-register"></i> 
                            <span class="hide-menu">Valores</span></a>
                    </li>
                <?php } ?>
                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Extra</span>s</li>	
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="testimonio" aria-expanded="false"><i class="fas fa-photo-video"></i><span
                            class="hide-menu">Eventos PRUF</span></a></li>

                <li class="sidebar-item" > 
                    <a class="sidebar-link sidebar-link" href="https://docs.google.com/gview?url=https://backoffice.pruf-ec.com/docs/Plan_de_compensacion.pdf?v=2.1"
                       aria-expanded="false" target="_blank"><i  class="fas fa-clipboard-list"></i><span
                            class="hide-menu">Plan de Compensación</span></a>
                </li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>