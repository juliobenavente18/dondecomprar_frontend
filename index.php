<!DOCTYPE html>
<?php include ("admin/plantilla.php"); ?>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/hyper/saas/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Jul 2020 03:11:09 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Log In | Hyper - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="admin/assets/images/favicon.ico">

        <!-- App css -->
        <link href="admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style" />
        <link href="admin/assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />

    </head>

    <body class="loading authentication-bg" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card">

                            <!-- Logo -->
                            <div class="card-header pt-4 pb-4 text-center bg-primary">
                                <a href="index.html">
                                    <span><img src="admin/assets/images/logo.png" alt="" height="18"></span>
                                </a>
                            </div>

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center mt-0 font-weight-bold">INICIAR SESIÓN</h4>
                                    <p class="text-muted mb-4">Ingresa tu correo y contraseña para acceder al sistema.</p>
                                </div>

                                <form action="#">

                                    <div class="form-group">
                                        <label for="emailaddress">Correo</label>
                                        <input class="form-control" type="email" id="emailaddress" required="" placeholder="Ingresa tu correo">
                                    </div>

                                    <div class="form-group">
                                        <a href="pages-recoverpw.html" class="text-muted float-right"><small>¿Olvidaste tu contraseña?</small></a>
                                        <label for="password">Contraseña</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password" class="form-control" placeholder="Ingresa tu contraseña">
                                            <div class="input-group-append" data-password="false">
                                                <div class="input-group-text">
                                                    <span class="password-eye"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                                            <label class="custom-control-label" for="checkbox-signin">Recuerdame</label>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <a href="admin/index.php" class="btn btn-primary" type="submit"> Ingresar </a>
                                    </div>

                                </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-muted">¿No estás registrado? <a href="pages-register.php" class="text-muted ml-1"><b>Regístrate</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->


        <!-- bundle -->
        <script src="admin/assets/js/vendor.min.js"></script>
        <script src="admin/assets/js/app.min.js"></script>
        
    </body>

<!-- Mirrored from coderthemes.com/hyper/saas/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Jul 2020 03:11:09 GMT -->
</html>
