<!DOCTYPE html>
<?php include ("plantilla.php"); ?>
<html lang="en">


<!-- Mirrored from coderthemes.com/hyper/saas/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Jul 2020 03:08:58 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Hyper - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- third party css -->
    <link href="assets/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- third party css end -->

    <!-- App css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style" />
    <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />

</head>

<body class="loading" data-layout-config='{"leftSideBarTheme":"red","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": false}'>
    <!-- Begin page -->
    <div class="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        <?php _leftSideBar(); ?>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">
                <!-- Topbar Start -->
                <?php _header(); ?>
                <!-- end Topbar -->

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <form class="form-inline">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-light" id="dash-daterange">
                                                <div class="input-group-append">
                                                    <span class="input-group-text bg-primary border-primary text-white">
                                                        <i class="mdi mdi-calendar-range font-13"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="javascript: void(0);" class="btn btn-primary ml-2">
                                            <i class="mdi mdi-autorenew"></i>
                                        </a>

                                    </form>
                                </div>
                                <h4 class="page-title">Cuadro de Mando</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xl-5 col-lg-6">

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card widget-flat">
                                        <div class="card-body">
                                            <div class="float-right">
                                                <i class="mdi mdi-account-multiple widget-icon"></i>
                                            </div>
                                            <h5 class="text-muted font-weight-normal mt-0" title="Number of Customers">Clientes</h5>
                                            <h3 class="mt-3 mb-3">36,254</h3>
                                            <p class="mb-0 text-muted">
                                                <span class="text-success mr-2"><i class="mdi mdi-arrow-up-bold"></i> 5.27%</span>
                                                <span class="text-nowrap">Desde el mes pasado</span>
                                            </p>
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col-->

                                <div class="col-lg-6">
                                    <div class="card widget-flat">
                                        <div class="card-body">
                                            <div class="float-right">
                                                <i class="mdi mdi-cart-plus widget-icon"></i>
                                            </div>
                                            <h5 class="text-muted font-weight-normal mt-0" title="Number of Orders">Pedidos</h5>
                                            <h3 class="mt-3 mb-3">5,543</h3>
                                            <p class="mb-0 text-muted">
                                                <span class="text-danger mr-2"><i class="mdi mdi-arrow-down-bold"></i> 1.08%</span>
                                                <span class="text-nowrap">Desde el mes pasado</span>
                                            </p>
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col-->
                            </div> <!-- end row -->

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card widget-flat">
                                        <div class="card-body">
                                            <div class="float-right">
                                                <i class="mdi mdi-currency-usd widget-icon"></i>
                                            </div>
                                            <h5 class="text-muted font-weight-normal mt-0" title="Average Revenue">Ingresos</h5>
                                            <h3 class="mt-3 mb-3">S/. 6,254</h3>
                                            <p class="mb-0 text-muted">
                                                <span class="text-danger mr-2"><i class="mdi mdi-arrow-down-bold"></i> 7.00%</span>
                                                <span class="text-nowrap">Desde el mes pasado</span>
                                            </p>
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col-->

                                <div class="col-lg-6">
                                    <div class="card widget-flat">
                                        <div class="card-body">
                                            <div class="float-right">
                                                <i class="mdi mdi-pulse widget-icon"></i>
                                            </div>
                                            <h5 class="text-muted font-weight-normal mt-0" title="Growth">Crecimiento</h5>
                                            <h3 class="mt-3 mb-3">+ 30.56%</h3>
                                            <p class="mb-0 text-muted">
                                                <span class="text-success mr-2"><i class="mdi mdi-arrow-up-bold"></i> 4.87%</span>
                                                <span class="text-nowrap">Desde el mes pasado</span>
                                            </p>
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col-->
                            </div> <!-- end row -->

                        </div> <!-- end col -->

                        <div class="col-xl-7  col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                        </div>
                                    </div>
                                    <h4 class="header-title mb-3">Historial de Ventas</h4>

                                    <div id="high-performing-product" class="apex-charts" data-colors="#727cf5"></div>

                                </div> <!-- end card-body-->
                            </div> <!-- end card-->

                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Reporte de Ventas PDF</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Reporte de Ventas Excel</a>
                                        </div>
                                    </div>
                                    <h4 class="header-title mb-3">Ingresos</h4>

                                    <div class="chart-content-bg">
                                        <div class="row text-center">
                                            <div class="col-md-6">
                                                <p class="text-muted mb-0 mt-3">Semana Actual</p>
                                                <h2 class="font-weight-normal mb-3">
                                                    <small class="mdi mdi-checkbox-blank-circle text-primary align-middle mr-1"></small>
                                                    <span>S/. 58,254</span>
                                                </h2>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="text-muted mb-0 mt-3">Semana Pasada</p>
                                                <h2 class="font-weight-normal mb-3">
                                                    <small class="mdi mdi-checkbox-blank-circle text-success align-middle mr-1"></small>
                                                    <span>S/. 69,524</span>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>

                                    <!--<div class="dash-item-overlay d-none d-md-block">
                                            <h5>Today's Earning: $2,562.30</h5>
                                            <p class="text-muted font-13 mb-3 mt-2">Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.
                                                Etiam rhoncus...</p>
                                            <a href="javascript: void(0);" class="btn btn-outline-primary">View Statements
                                                <i class="mdi mdi-arrow-right ml-2"></i>
                                            </a>
                                        </div>-->

                                    <div id="revenue-chart" class="apex-charts mt-3" data-colors="#727cf5,#0acf97"></div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Reporte de Ventas PDF</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Reporte de Ventas Excel</a>
                                        </div>
                                    </div>
                                    <h4 class="header-title">Ingresos por Zona</h4>
                                    <!--<div class="mb-4 mt-4">
                                            <div id="world-map-markers" style="height: 224px"></div>
                                        </div>-->
                                    <br>

                                    <br>
                                    <h5 class="mb-1 mt-0 font-weight-normal">Chiclayo</h5>
                                    <div class="progress-w-percent">
                                        <span class="progress-value font-weight-bold">72k </span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar" role="progressbar" style="width: 72%;" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                    <h5 class="mb-1 mt-0 font-weight-normal">La Victoria</h5>
                                    <div class="progress-w-percent">
                                        <span class="progress-value font-weight-bold">39k </span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar" role="progressbar" style="width: 39%;" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                    <h5 class="mb-1 mt-0 font-weight-normal">JLO</h5>
                                    <div class="progress-w-percent">
                                        <span class="progress-value font-weight-bold">25k </span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar" role="progressbar" style="width: 39%;" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                    <h5 class="mb-1 mt-0 font-weight-normal">Pimentel</h5>
                                    <div class="progress-w-percent mb-0">
                                        <span class="progress-value font-weight-bold">61k </span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar" role="progressbar" style="width: 61%;" aria-valuenow="61" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div><br>
                                    <h5 class="mb-1 mt-0 font-weight-normal">Lambayeque</h5>
                                    <div class="progress-w-percent mb-0">
                                        <span class="progress-value font-weight-bold">45kk </span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar" role="progressbar" style="width: 61%;" aria-valuenow="61" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row -->


                    <div class="row">
                        <div class="col-xl-6 col-lg-12 order-lg-2 order-xl-1">
                            <div class="card">
                                <div class="card-body">
                                    <a href="#" class="btn btn-sm btn-link float-right mb-3">Exportar
                                        <i class="mdi mdi-download ml-1"></i>
                                    </a>
                                    <h4 class="header-title mt-2">Productos más vendidos</h4>

                                    <div class="table-responsive">
                                        <table class="table table-centered table-nowrap table-hover mb-0">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <h5 class="font-14 my-1 font-weight-normal">FANNY DELI FRESA 12 X 85 GR X6</h5>
                                                        <span class="text-muted font-13">Abril 07, 2020</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-14 my-1 font-weight-normal">S/. 3.00</h5>
                                                        <span class="text-muted font-13">Precio</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-14 my-1 font-weight-normal">82</h5>
                                                        <span class="text-muted font-13">Cantidad</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-14 my-1 font-weight-normal">$6,518.18</h5>
                                                        <span class="text-muted font-13">Ventas</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5 class="font-14 my-1 font-weight-normal">NESCAFE FINA SELECCION 12X225G</h5>
                                                        <span class="text-muted font-13">Marzo 25, 2020</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-14 my-1 font-weight-normal">S/. 128.50</h5>
                                                        <span class="text-muted font-13">Precio</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-14 my-1 font-weight-normal">37</h5>
                                                        <span class="text-muted font-13">Cantidad</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-14 my-1 font-weight-normal">S/. 4,754.50</h5>
                                                        <span class="text-muted font-13">Ventas</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5 class="font-14 my-1 font-weight-normal">ANGEL ZUCK 72BL X 55GR.</h5>
                                                        <span class="text-muted font-13">Marzo 17, 2020</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-14 my-1 font-weight-normal">S/. 39.99</h5>
                                                        <span class="text-muted font-13">Precio</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-14 my-1 font-weight-normal">64</h5>
                                                        <span class="text-muted font-13">Cantidad</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-14 my-1 font-weight-normal">$2,559.36</h5>
                                                        <span class="text-muted font-13">Ventas</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5 class="font-14 my-1 font-weight-normal">AVENA 3OSITOS CANELA CLAVO 24X150 GR</h5>
                                                        <span class="text-muted font-13">Marzo 12, 2020</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-14 my-1 font-weight-normal">S/. 20.00</h5>
                                                        <span class="text-muted font-13">Precio</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-14 my-1 font-weight-normal">184</h5>
                                                        <span class="text-muted font-13">Cantidad</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-14 my-1 font-weight-normal">$3,680.00</h5>
                                                        <span class="text-muted font-13">Ventas</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5 class="font-14 my-1 font-weight-normal">ALI.ACEITE VEGETAL PRIMOR X1LT</h5>
                                                        <span class="text-muted font-13">Marzo 05, 2020</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-14 my-1 font-weight-normal">S/. 28.49</h5>
                                                        <span class="text-muted font-13">Precio</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-14 my-1 font-weight-normal">69</h5>
                                                        <span class="text-muted font-13">Cantidad</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-14 my-1 font-weight-normal">$1,965.81</h5>
                                                        <span class="text-muted font-13">Ventas</span>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div> <!-- end table-responsive-->
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-xl-3 col-lg-6 order-lg-1">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                        </div>
                                    </div>
                                    <h4 class="header-title">Ventas Totales</h4>

                                    <div id="average-sales" class="apex-charts mb-4 mt-4" data-colors="#727cf5,#0acf97,#fa5c7c,#ffbc00"></div>


                                    <div class="chart-widget-list">
                                        <p>
                                            <i class="mdi mdi-square text-primary"></i> Efectivo
                                            <span class="float-right">S/. 300.56</span>
                                        </p>
                                        <p>
                                            <i class="mdi mdi-square text-danger"></i> Yape
                                            <span class="float-right">S/. 135.18</span>
                                        </p>
                                        <p>
                                            <i class="mdi mdi-square text-success"></i> Transferencia
                                            <span class="float-right">S/. 48.96</span>
                                        </p>
                                        <p class="mb-0">
                                            <i class="mdi mdi-square text-warning"></i> Tarjeta
                                            <span class="float-right">S/. 154.02</span>
                                        </p>
                                    </div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->


                        <!-- end col -->

                    </div>
                    <!-- end row -->

                </div>
                <!-- container -->

            </div>
            <!-- content -->

            <!-- Footer Start -->
            <!--<footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                2018 - 2020 © Hyper - Coderthemes.com
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-md-block">
                                    <a href="javascript: void(0);">About</a>
                                    <a href="javascript: void(0);">Support</a>
                                    <a href="javascript: void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>-->
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">

        <div class="rightbar-title">
            <a href="javascript:void(0);" class="right-bar-toggle float-right">
                <i class="dripicons-cross noti-icon"></i>
            </a>
            <h5 class="m-0">Settings</h5>
        </div>

        <div class="rightbar-content h-100" data-simplebar>

            <div class="p-3">
                <div class="alert alert-warning" role="alert">
                    <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
                </div>

                <!-- Settings -->
                <h5 class="mt-3">Color Scheme</h5>
                <hr class="mt-1" />

                <div class="custom-control custom-switch mb-1">
                    <input type="radio" class="custom-control-input" name="color-scheme-mode" value="light" id="light-mode-check" checked />
                    <label class="custom-control-label" for="light-mode-check">Light Mode</label>
                </div>

                <div class="custom-control custom-switch mb-1">
                    <input type="radio" class="custom-control-input" name="color-scheme-mode" value="dark" id="dark-mode-check" />
                    <label class="custom-control-label" for="dark-mode-check">Dark Mode</label>
                </div>

                <!-- Width -->
                <h5 class="mt-4">Width</h5>
                <hr class="mt-1" />
                <div class="custom-control custom-switch mb-1">
                    <input type="radio" class="custom-control-input" name="width" value="fluid" id="fluid-check" checked />
                    <label class="custom-control-label" for="fluid-check">Fluid</label>
                </div>
                <div class="custom-control custom-switch mb-1">
                    <input type="radio" class="custom-control-input" name="width" value="boxed" id="boxed-check" />
                    <label class="custom-control-label" for="boxed-check">Boxed</label>
                </div>

                <!-- Left Sidebar-->
                <h5 class="mt-4">Left Sidebar</h5>
                <hr class="mt-1" />
                <div class="custom-control custom-switch mb-1">
                    <input type="radio" class="custom-control-input" name="theme" value="default" id="default-check" checked />
                    <label class="custom-control-label" for="default-check">Default</label>
                </div>

                <div class="custom-control custom-switch mb-1">
                    <input type="radio" class="custom-control-input" name="theme" value="light" id="light-check" />
                    <label class="custom-control-label" for="light-check">Light</label>
                </div>

                <div class="custom-control custom-switch mb-3">
                    <input type="radio" class="custom-control-input" name="theme" value="dark" id="dark-check" />
                    <label class="custom-control-label" for="dark-check">Dark</label>
                </div>

                <div class="custom-control custom-switch mb-1">
                    <input type="radio" class="custom-control-input" name="compact" value="fixed" id="fixed-check" checked />
                    <label class="custom-control-label" for="fixed-check">Fixed</label>
                </div>

                <div class="custom-control custom-switch mb-1">
                    <input type="radio" class="custom-control-input" name="compact" value="condensed" id="condensed-check" />
                    <label class="custom-control-label" for="condensed-check">Condensed</label>
                </div>

                <div class="custom-control custom-switch mb-1">
                    <input type="radio" class="custom-control-input" name="compact" value="scrollable" id="scrollable-check" />
                    <label class="custom-control-label" for="scrollable-check">Scrollable</label>
                </div>

                <button class="btn btn-primary btn-block mt-4" id="resetBtn">Reset to Default</button>

                <a href="https://themes.getbootstrap.com/product/hyper-responsive-admin-dashboard-template/" class="btn btn-danger btn-block mt-3" target="_blank"><i class="mdi mdi-basket mr-1"></i> Purchase Now</a>
            </div> <!-- end padding-->

        </div>
    </div>

    <div class="rightbar-overlay"></div>
    <!-- /Right-bar -->

    <!-- bundle -->
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/app.min.js"></script>

    <!-- third party js -->
    <script src="assets/js/vendor/apexcharts.min.js"></script>
    <script src="assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
    <!-- third party js ends -->

    <!-- demo app -->
    <script src="assets/js/pages/demo.dashboard.js"></script>
    <!-- end demo js-->
</body>

<!-- Mirrored from coderthemes.com/hyper/saas/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Jul 2020 03:10:09 GMT -->

</html>