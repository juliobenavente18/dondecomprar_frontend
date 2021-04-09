<!DOCTYPE html>
<?php include("plantilla.php"); ?>
<html lang="en">

<!-- Mirrored from coderthemes.com/hyper/saas/apps-ecommerce-customers.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Jul 2020 03:10:48 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Customers | Hyper - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- third party css -->
    <link href="assets/css/vendor/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/vendor/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
    <!-- third party css end -->

    <!-- App css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style" />
    <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />

</head>

<body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
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
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Inicio</a></li>
                                        <li class="breadcrumb-item active">Usuarios</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Usuarios</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mb-2">
                                        <div class="col-sm-4">
                                            <a href="javascript:void(0);" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle mr-2"></i> Exportar Lista</a>
                                        </div>
                                        <!-- end col-->
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-centered table-striped dt-responsive nowrap w-100" id="products-datatable">
                                            <thead>
                                                <tr>
                                                    <th style="width: 20px;">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                            <label class="custom-control-label" for="customCheck1">&nbsp;</label>
                                                        </div>
                                                    </th>
                                                    <th>Cliente</th>
                                                    <th>Telefono</th>
                                                    <th>Correo</th>
                                                    <th>Ciudad</th>
                                                    <th>Fecha de Registro</th>
                                                    <th>Estado</th>
                                                    <th style="width: 75px;">Acción</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                            <label class="custom-control-label" for="customCheck2">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-4.jpg" alt="table-user" class="mr-2 rounded-circle">
                                                        <a href="javascript:void(0);" class="text-body font-weight-semibold">Paul J. Friend</a>
                                                    </td>
                                                    <td>
                                                        937-330-1634
                                                    </td>
                                                    <td>
                                                        pauljfrnd@jourrapide.com
                                                    </td>
                                                    <td>
                                                        New York
                                                    </td>
                                                    <td>
                                                        07/07/2018
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-success-lighten">Habilitado</span>
                                                    </td>

                                                    <td>
                                                        <!--<a href="#editar-modal" class="action-icon" data-toggle="modal">
                                                            <i class="mdi mdi-square-edit-outline"></i></a>-->
                                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                            <label class="custom-control-label" for="customCheck3">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-3.jpg" alt="table-user" class="mr-2 rounded-circle">
                                                        <a href="javascript:void(0);" class="text-body font-weight-semibold">Bryan J. Luellen</a>
                                                    </td>
                                                    <td>
                                                        215-302-3376
                                                    </td>
                                                    <td>
                                                        bryuellen@dayrep.com
                                                    </td>
                                                    <td>
                                                        New York
                                                    </td>
                                                    <td>
                                                        09/12/2018
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-success-lighten">Habilitado</span>
                                                    </td>

                                                    <td>
                                                        <!--<a href="#editar-modal" class="action-icon" data-toggle="modal">
                                                            <i class="mdi mdi-square-edit-outline"></i></a>-->
                                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                            <label class="custom-control-label" for="customCheck4">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-3.jpg" alt="table-user" class="mr-2 rounded-circle">
                                                        <a href="javascript:void(0);" class="text-body font-weight-semibold">Kathryn S.
                                                            Collier</a>
                                                    </td>
                                                    <td>
                                                        828-216-2190
                                                    </td>
                                                    <td>
                                                        collier@jourrapide.com
                                                    </td>
                                                    <td>
                                                        Canada
                                                    </td>
                                                    <td>
                                                        06/30/2018
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-danger-lighten">Inhabilitado</span>
                                                    </td>

                                                    <td>
                                                        <!--<a href="#editar-modal" class="action-icon" data-toggle="modal">
                                                            <i class="mdi mdi-square-edit-outline"></i></a>-->
                                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck5">
                                                            <label class="custom-control-label" for="customCheck5">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-1.jpg" alt="table-user" class="mr-2 rounded-circle">
                                                        <a href="javascript:void(0);" class="text-body font-weight-semibold">Timothy Kauper</a>
                                                    </td>
                                                    <td>
                                                        (216) 75 612 706
                                                    </td>
                                                    <td>
                                                        thykauper@rhyta.com
                                                    </td>
                                                    <td>
                                                        Denmark
                                                    </td>
                                                    <td>
                                                        09/08/2018
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-danger-lighten">Inhabilitado</span>
                                                    </td>

                                                    <td>
                                                        <!--<a href="#editar-modal" class="action-icon" data-toggle="modal">
                                                            <i class="mdi mdi-square-edit-outline"></i></a>-->
                                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck6">
                                                            <label class="custom-control-label" for="customCheck6">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-5.jpg" alt="table-user" class="mr-2 rounded-circle">
                                                        <a href="javascript:void(0);" class="text-body font-weight-semibold">Zara Raws</a>
                                                    </td>
                                                    <td>
                                                        (02) 75 150 655
                                                    </td>
                                                    <td>
                                                        austin@dayrep.com
                                                    </td>
                                                    <td>
                                                        Germany
                                                    </td>
                                                    <td>
                                                        07/15/2018
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-success-lighten">Habilitado</span>
                                                    </td>

                                                    <td>
                                                        <!--<a href="#editar-modal" class="action-icon" data-toggle="modal">
                                                            <i class="mdi mdi-square-edit-outline"></i></a>-->
                                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck7">
                                                            <label class="custom-control-label" for="customCheck7">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-6.jpg" alt="table-user" class="mr-2 rounded-circle">
                                                        <a href="javascript:void(0);" class="text-body font-weight-semibold">Annette P. Kelsch</a>
                                                    </td>
                                                    <td>
                                                        (+15) 73 483 758
                                                    </td>
                                                    <td>
                                                        annette@email.net
                                                    </td>
                                                    <td>
                                                        India
                                                    </td>
                                                    <td>
                                                        09/05/2018
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-success-lighten">Habilitado</span>
                                                    </td>

                                                    <td>
                                                        <!--<a href="#editar-modal" class="action-icon" data-toggle="modal">
                                                            <i class="mdi mdi-square-edit-outline"></i></a>-->
                                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck8">
                                                            <label class="custom-control-label" for="customCheck8">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-7.jpg" alt="table-user" class="mr-2 rounded-circle">
                                                        <a href="javascript:void(0);" class="text-body font-weight-semibold">Jenny C. Gero</a>
                                                    </td>
                                                    <td>
                                                        078 7173 9261
                                                    </td>
                                                    <td>
                                                        jennygero@teleworm.us
                                                    </td>
                                                    <td>
                                                        Lesotho
                                                    </td>
                                                    <td>
                                                        08/02/2018
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-danger-lighten">Inhabilitado</span>
                                                    </td>

                                                    <td>
                                                        <!--<a href="#editar-modal" class="action-icon" data-toggle="modal">
                                                            <i class="mdi mdi-square-edit-outline"></i></a>-->
                                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck9">
                                                            <label class="custom-control-label" for="customCheck9">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-8.jpg" alt="table-user" class="mr-2 rounded-circle">
                                                        <a href="javascript:void(0);" class="text-body font-weight-semibold">Edward Roseby</a>
                                                    </td>
                                                    <td>
                                                        078 6013 3854
                                                    </td>
                                                    <td>
                                                        edwardR@armyspy.com
                                                    </td>
                                                    <td>
                                                        Monaco
                                                    </td>
                                                    <td>
                                                        08/23/2018
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-success-lighten">Habilitado</span>
                                                    </td>

                                                    <td>
                                                        <!--<a href="#editar-modal" class="action-icon" data-toggle="modal">
                                                            <i class="mdi mdi-square-edit-outline"></i></a>-->
                                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck10">
                                                            <label class="custom-control-label" for="customCheck10">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-9.jpg" alt="table-user" class="mr-2 rounded-circle">
                                                        <a href="javascript:void(0);" class="text-body font-weight-semibold">Anna Ciantar</a>
                                                    </td>
                                                    <td>
                                                        (216) 76 298 896
                                                    </td>
                                                    <td>
                                                        annac@hotmai.us
                                                    </td>
                                                    <td>
                                                        Philippines
                                                    </td>
                                                    <td>
                                                        05/06/2018
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-success-lighten">Habilitado</span>
                                                    </td>

                                                    <td>
                                                        <!--<a href="#editar-modal" class="action-icon" data-toggle="modal">
                                                            <i class="mdi mdi-square-edit-outline"></i></a>-->
                                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck11">
                                                            <label class="custom-control-label" for="customCheck11">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-10.jpg" alt="table-user" class="mr-2 rounded-circle">
                                                        <a href="javascript:void(0);" class="text-body font-weight-semibold">Dean Smithies</a>
                                                    </td>
                                                    <td>
                                                        077 6157 4248
                                                    </td>
                                                    <td>
                                                        deanes@dayrep.com
                                                    </td>
                                                    <td>
                                                        Singapore
                                                    </td>
                                                    <td>
                                                        04/09/2018
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-success-lighten">Habilitado</span>
                                                    </td>

                                                    <td>
                                                        <!--<a href="#editar-modal" class="action-icon" data-toggle="modal">
                                                            <i class="mdi mdi-square-edit-outline"></i></a>-->
                                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck12">
                                                            <label class="custom-control-label" for="customCheck12">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-1.jpg" alt="table-user" class="mr-2 rounded-circle">
                                                        <a href="javascript:void(0);" class="text-body font-weight-semibold">Labeeb Ghali</a>
                                                    </td>
                                                    <td>
                                                        050 414 8778
                                                    </td>
                                                    <td>
                                                        labebswad@teleworm.us
                                                    </td>
                                                    <td>
                                                        United Kingdom
                                                    </td>
                                                    <td>
                                                        06/19/2018
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-success-lighten">Habilitado</span>
                                                    </td>

                                                    <td>
                                                        <!--<a href="#editar-modal" class="action-icon" data-toggle="modal">
                                                            <i class="mdi mdi-square-edit-outline"></i></a>-->
                                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck13">
                                                            <label class="custom-control-label" for="customCheck13">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-2.jpg" alt="table-user" class="mr-2 rounded-circle">
                                                        <a href="javascript:void(0);" class="text-body font-weight-semibold">Rory Seekamp</a>
                                                    </td>
                                                    <td>
                                                        078 5054 8877
                                                    </td>
                                                    <td>
                                                        roryamp@dayrep.com
                                                    </td>
                                                    <td>
                                                        United States
                                                    </td>
                                                    <td>
                                                        03/24/2018
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-danger-lighten">Inhabilitado</span>
                                                    </td>

                                                    <td>
                                                        <!--<a href="#editar-modal" class="action-icon" data-toggle="modal">
                                                            <i class="mdi mdi-square-edit-outline"></i></a>-->
                                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- container -->

            </div> <!-- content -->



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
    <script src="assets/js/vendor/jquery.dataTables.min.js"></script>
    <script src="assets/js/vendor/dataTables.bootstrap4.js"></script>
    <script src="assets/js/vendor/dataTables.responsive.min.js"></script>
    <script src="assets/js/vendor/responsive.bootstrap4.min.js"></script>
    <script src="assets/js/vendor/dataTables.checkboxes.min.js"></script>
    <!-- third party js ends -->

    <!-- demo app -->
    <script src="assets/js/pages/demo.customers.js"></script>
    <!-- end demo js-->

</body>

<!-- Mirrored from coderthemes.com/hyper/saas/apps-ecommerce-customers.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Jul 2020 03:10:49 GMT -->

</html>