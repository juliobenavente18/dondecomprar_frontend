<!DOCTYPE html>
<?php include ("plantilla.php"); ?>
<html lang="en">

<!-- Mirrored from coderthemes.com/hyper/saas/apps-projects-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Jul 2020 03:10:59 GMT -->

<head>
    <meta charset="utf-8" />
    <title>CHIAPPE | ECOMMERCE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/logopequerojo.png">

    <!-- App css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style" />
    <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />

</head>

<body class="loading"
    data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
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
                                        <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                                        <li class="breadcrumb-item"><a href="mant_publicaciones.php">Publicaciones</a></li>
                                        <li class="breadcrumb-item active">Agregar Publicación</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Agregar Publicación</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label for="projectname">Título</label>
                                                <input type="text" id="projectname" class="form-control" placeholder="">
                                            </div>



                                            <div class="form-group">
                                                <label for="project-budget">Mensaje</label>
                                                <textarea type="text" id="project-budget" class="form-control"
                                                    placeholder="" rows="8" max-lenght=""></textarea>
                                            </div>

                                            <div class="form-group mb-2">
                                                <label for="project-overview">Estado</label>

                                                <select class="form-control select2" data-toggle="select2">
                                                    <option>Selecciona</option>
                                                    <option value="HAB">Habilitado</option>
                                                    <option value="INHAB">Inhabilitado</option>
                                                </select>

                                                <!--<div class="mt-2">
                                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme" class="d-inline-block">
                                                            <img src="assets/images/users/avatar-6.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                        </a>
                
                                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Michael Zenaty" class="d-inline-block">
                                                            <img src="assets/images/users/avatar-7.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                        </a>
                
                                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="James Anderson" class="d-inline-block">
                                                            <img src="assets/images/users/avatar-8.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                        </a>
            
                                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Lorene Block" class="d-inline-block">
                                                            <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                        </a>
                
                                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mike Baker" class="d-inline-block">
                                                            <img src="assets/images/users/avatar-5.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                        </a>
                                                    </div>-->

                                            </div>
                                            <div class="form-group mb-0">
                                                <label for="project-overview">Estado</label>

                                                <select class="form-control select2" data-toggle="select2">
                                                    <option>Selecciona</option>
                                                    <option value="uno">1</option>
                                                    <option value="dos">2</option>
                                                </select>

                                            </div>

                                        </div> <!-- end col-->

                                        <div class="col-xl-6">
                                            <div class="form-group mt-3 mt-xl-0">
                                                <label for="projectname" class="mb-0">Imagen</label>
                                                <p class="text-muted font-14">Tamaño de miniatura recomendado 40x40
                                                    (px).</p>

                                                <form action="https://coderthemes.com/" method="post" class="dropzone"
                                                    id="myAwesomeDropzone" data-plugin="dropzone"
                                                    data-previews-container="#file-previews"
                                                    data-upload-preview-template="#uploadPreviewTemplate">
                                                    <div class="fallback">
                                                        <input name="file" type="file" />
                                                    </div>

                                                    <div class="dz-message needsclick">
                                                        <i class="h3 text-muted dripicons-cloud-upload"></i>
                                                        <h4>Arrastra aquí la imagen.</h4>
                                                    </div>
                                                </form>

                                                <!-- Preview -->
                                                <div class="dropzone-previews mt-3" id="file-previews"></div>

                                                <!-- file preview template -->
                                                <div class="d-none" id="uploadPreviewTemplate">
                                                    <div class="card mt-1 mb-0 shadow-none border">
                                                        <div class="p-2">
                                                            <div class="row align-items-center">
                                                                <div class="col-auto">
                                                                    <img data-dz-thumbnail src="#"
                                                                        class="avatar-sm rounded bg-light" alt="">
                                                                </div>
                                                                <div class="col pl-0">
                                                                    <a href="javascript:void(0);"
                                                                        class="text-muted font-weight-bold"
                                                                        data-dz-name></a>
                                                                    <p class="mb-0" data-dz-size></p>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <!-- Button -->
                                                                    <a href="#" class="btn btn-link btn-lg text-muted"
                                                                        data-dz-remove>
                                                                        <i class="dripicons-cross"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end file preview template -->
                                            </div>

                                        </div> <!-- end col-->
                                    </div>
                                    <!-- end row -->
                                    <br>
                                    <div class="row mb-2">
                                        <div class="col-sm-4">
                                            <a href="#" class="btn btn-danger mb-2"><i
                                                    class="dripicons-browser-upload mr-2"></i> Guardar</a>
                                        </div>
                                        <div class="col-sm-8">

                                        </div><!-- end col-->
                                    </div>
                                </div> <!-- end card-body -->
                            </div> <!-- end card-->

                        </div> <!-- end col-->
                    </div>
                    <!-- end row-->

                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->

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
                    <input type="radio" class="custom-control-input" name="color-scheme-mode" value="light"
                        id="light-mode-check" checked />
                    <label class="custom-control-label" for="light-mode-check">Light Mode</label>
                </div>

                <div class="custom-control custom-switch mb-1">
                    <input type="radio" class="custom-control-input" name="color-scheme-mode" value="dark"
                        id="dark-mode-check" />
                    <label class="custom-control-label" for="dark-mode-check">Dark Mode</label>
                </div>

                <!-- Width -->
                <h5 class="mt-4">Width</h5>
                <hr class="mt-1" />
                <div class="custom-control custom-switch mb-1">
                    <input type="radio" class="custom-control-input" name="width" value="fluid" id="fluid-check"
                        checked />
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
                    <input type="radio" class="custom-control-input" name="theme" value="default" id="default-check"
                        checked />
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
                    <input type="radio" class="custom-control-input" name="compact" value="fixed" id="fixed-check"
                        checked />
                    <label class="custom-control-label" for="fixed-check">Fixed</label>
                </div>

                <div class="custom-control custom-switch mb-1">
                    <input type="radio" class="custom-control-input" name="compact" value="condensed"
                        id="condensed-check" />
                    <label class="custom-control-label" for="condensed-check">Condensed</label>
                </div>

                <div class="custom-control custom-switch mb-1">
                    <input type="radio" class="custom-control-input" name="compact" value="scrollable"
                        id="scrollable-check" />
                    <label class="custom-control-label" for="scrollable-check">Scrollable</label>
                </div>

                <button class="btn btn-primary btn-block mt-4" id="resetBtn">Reset to Default</button>

                <a href="https://themes.getbootstrap.com/product/hyper-responsive-admin-dashboard-template/"
                    class="btn btn-danger btn-block mt-3" target="_blank"><i class="mdi mdi-basket mr-1"></i> Purchase
                    Now</a>
            </div> <!-- end padding-->

        </div>
    </div>

    <div class="rightbar-overlay"></div>
    <!-- /Right-bar -->


    <!-- bundle -->
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/app.min.js"></script>

    <!-- plugin js -->
    <script src="assets/js/vendor/dropzone.min.js"></script>
    <!-- init js -->
    <script src="assets/js/ui/component.fileupload.js"></script>

</body>

<!-- Mirrored from coderthemes.com/hyper/saas/apps-projects-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Jul 2020 03:11:00 GMT -->

</html>