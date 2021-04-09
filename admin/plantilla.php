<?php 

function _header()
{
    echo '<div class="navbar-custom">
    <ul class="list-unstyled topbar-right-menu float-right mb-0">
        
        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" href="#"
                role="button" aria-haspopup="false" aria-expanded="false">
                <span class="account-user-avatar">
                    <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                </span>
                <span>
                    <span class="account-user-name">Nombre</span>
                    <span class="account-position">Administrador</span>
                </span>
            </a>
            <div
                class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                <!-- item-->
                <div class=" dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Bienvenido !</h6>
                </div>
                <!-- item-->
                <a href="cuenta-admin.html" class="dropdown-item notify-item">
                    <i class="mdi mdi-account-circle mr-1"></i>
                    <span>Mi Perfil</span>
                </a>

                <!-- item-->
                <a href="../index.html" class="dropdown-item notify-item">
                    <i class="mdi mdi-logout mr-1"></i>
                    <span>Cerrar Sesión</span>
                </a>

            </div>
        </li>

    </ul>
    <button class="button-menu-mobile open-left disable-btn">
        <i class="mdi mdi-menu"></i>
    </button>
    <div class="app-search dropdown d-none d-lg-block">
        

        <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
            <!-- item -->
            <div class="dropdown-header noti-title">
                <h5 class="text-overflow mb-2">Found <span class="text-danger">17</span> results</h5>
            </div>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
                <i class="uil-notes font-16 mr-1"></i>
                <span>Analytics Report</span>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
                <i class="uil-life-ring font-16 mr-1"></i>
                <span>How can I help you?</span>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
                <i class="uil-cog font-16 mr-1"></i>
                <span>User profile settings</span>
            </a>

            <!-- item-->
            <div class="dropdown-header noti-title">
                <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
            </div>

            <div class="notification-list">
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <div class="media">
                        <img class="d-flex mr-2 rounded-circle" src="assets/images/users/avatar-2.jpg"
                            alt="Generic placeholder image" height="32">
                        <div class="media-body">
                            <h5 class="m-0 font-14">Erwin Brown</h5>
                            <span class="font-12 mb-0">UI Designer</span>
                        </div>
                    </div>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <div class="media">
                        <img class="d-flex mr-2 rounded-circle" src="assets/images/users/avatar-5.jpg"
                            alt="Generic placeholder image" height="32">
                        <div class="media-body">
                            <h5 class="m-0 font-14">Jacob Deo</h5>
                            <span class="font-12 mb-0">Developer</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>';
}

function _leftSideBar()
{
    echo '<div class="left-side-menu">

    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-light">
        <span class="logo-lg">
            <img src="assets/images/logo.png" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="assets/images/logo_sm.png" alt="" height="16">
        </span>
    </a>

    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-dark">
        <span class="logo-lg">
            <img src="assets/images/logo-dark.png" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="assets/images/logo_sm_dark.png" alt="" height="16">
        </span>
    </a>

    <div class="h-100" id="left-side-menu-container" data-simplebar>

        <!--- Sidemenu -->
        <ul class="metismenu side-nav">

            <li class="side-nav-title side-nav-item">Administración de Negocio</li>

            <li class="side-nav-item">
                <a href="index.php" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <!--<span class="badge badge-success float-right">4</span>-->
                    <span> Dashboards </span>
                </a>
                <!--<ul class="side-nav-second-level" aria-expanded="false">
                    <li>
                        <a href="dashboard-analytics.html">Analytics</a>
                    </li>
                    <li>
                        <a href="dashboard-crm.html">CRM</a>
                    </li>
                    <li>
                        <a href="index.html">Ecommerce</a>
                    </li>
                    <li>
                        <a href="dashboard-projects.html">Projects</a>
                    </li>
                </ul>-->
            </li>



            <li class="side-nav-title side-nav-item mt-1">Administración</li>



            <li class="side-nav-item">
                <a href="javascript: void(0);" class="side-nav-link">
                    <i class="uil-document-layout-center"></i>
                    <span> Mantenimiento </span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="side-nav-second-level" aria-expanded="false">

                    <li>
                        <a href="mant_usuarios.php">Usuarios</a>
                    </li>
                    <li>
                        <a href="mant_publicaciones.php">Publicaciones</a>
                    </li>
                    <li>
                        <a href="mant_planes.php">Planes</a>
                    </li>
                    <li>
                        <a href="mant_promociones.php">Promociones</a>
                    </li>
                    <li>
                        <a href="categoria_promociones.php">Categorías Promociones</a>
                    </li>
                    <li>
                        <a href="sub_categoria_promociones.php">Sub Categorías Promociones</a>
                    </li>
                    <li>
                        <a href="productos_auspiciador.php">Productos de Auspiciador</a>
                    </li>
                </ul>
            </li>

            <!--<li class="side-nav-item">
                <a href="javascript: void(0);" class="side-nav-link">
                    <i class="uil-table"></i>
                    <span> Tables </span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="side-nav-second-level" aria-expanded="false">
                    <li>
                        <a href="tables-basic.html">Basic Tables</a>
                    </li>
                    <li>
                        <a href="tables-datatable.html">Data Tables</a>
                    </li>
                </ul>
            </li>-->




            <!-- End Sidebar -->

            <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>';
}

?>