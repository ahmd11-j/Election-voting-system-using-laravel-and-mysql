<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
    lang="en"
    class="light-style layout-menu-fixed"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="../assets/"
    data-template="vertical-menu-template-free"
>
<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Dashboard - Analytics | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{asset('assets/vendor/fonts/boxicons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('assets/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{asset('assets/vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('assets/js/config.js')}}"></script>
</head>

<body>


<nav
    class="p-2 bg-navbar-theme w-100 text-center"
    id="layout-navbar">
    <div class="row">
        <div class="col-10">
            <h2>Online Voting System</h2>
        </div>
        <div class="col-2">
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">SignIn</button>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Admin SignIn</button>
        </div>
    </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Signup</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body w-100">
                <form>
                    <label>CNIC #</label>
                    <input type="text" class="form-control" placeholder="Enter CNIC number">
                    <br>
                    <button class="btn btn-primary w-25">LOGIN</button>
                </form>
            </div>
{{--            <div class="modal-footer">--}}
{{--                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>--}}
{{--                <button type="button" class="btn btn-primary">Save changes</button>--}}
{{--            </div>--}}
        </div>
    </div>
</div>


<section class="bg-dark">
    <div class="container-fluid">
        <div class="row pt-3">
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                        <img
                            class="img-fluid d-flex mx-auto my-4"
{{--                            src="../assets/img/elements/4.jpg"--}}
                            alt="Card image cap"
                        />
                        <p class="card-text">Bear claw sesame snaps gummies chocolate.</p>
                        <a href="javascript:void(0);" class="card-link">Card link</a>
                        <a href="javascript:void(0);" class="card-link">Another link</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                        <img
                            class="img-fluid d-flex mx-auto my-4"
                            {{--                            src="../assets/img/elements/4.jpg"--}}
                            alt="Card image cap"
                        />
                        <p class="card-text">Bear claw sesame snaps gummies chocolate.</p>
                        <a href="javascript:void(0);" class="card-link">Card link</a>
                        <a href="javascript:void(0);" class="card-link">Another link</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                        <img
                            class="img-fluid d-flex mx-auto my-4"
                            {{--                            src="../assets/img/elements/4.jpg"--}}
                            alt="Card image cap"
                        />
                        <p class="card-text">Bear claw sesame snaps gummies chocolate.</p>
                        <a href="javascript:void(0);" class="card-link">Card link</a>
                        <a href="javascript:void(0);" class="card-link">Another link</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                        <img
                            class="img-fluid d-flex mx-auto my-4"
                            {{--                            src="../assets/img/elements/4.jpg"--}}
                            alt="Card image cap"
                        />
                        <p class="card-text">Bear claw sesame snaps gummies chocolate.</p>
                        <a href="javascript:void(0);" class="card-link">Card link</a>
                        <a href="javascript:void(0);" class="card-link">Another link</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                        <img
                            class="img-fluid d-flex mx-auto my-4"
                            {{--                            src="../assets/img/elements/4.jpg"--}}
                            alt="Card image cap"
                        />
                        <p class="card-text">Bear claw sesame snaps gummies chocolate.</p>
                        <a href="javascript:void(0);" class="card-link">Card link</a>
                        <a href="javascript:void(0);" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{asset('assets/vendor/libs/jquery/jquery.js')}}"></script>
<script src="{{asset('assets/vendor/libs/popper/popper.js')}}"></script>
<script src="{{asset('assets/vendor/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

<script src="{{asset('assets/vendor/js/menu.js')}}"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>

<!-- Main JS -->
<script src="{{asset('assets/js/main.js')}}"></script>

<!-- Page JS -->
<script src="{{asset('assets/js/dashboards-analytics.js')}}"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>
