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
{{--    <link rel="stylesheet" href="{{asset('assets/vendor/css/core.css')}}" class="template-customizer-core-css" />--}}
    <link rel="stylesheet" href="{{asset('assets/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
{{--    <link rel="stylesheet" href="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />--}}

{{--    <link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}" />--}}

    <!-- Page CSS -->

    <!-- Helpers -->
{{--    <script src="{{asset('assets/vendor/js/helpers.js')}}"></script>--}}

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
{{--    <script src="{{asset('assets/js/config.js')}}"></script>--}}
</head>



{{--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">--}}
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
{{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">--}}
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
    body {
        background: #D3D9D4;
        font-family: "Open Sans", sans-serif;
    }
    h2 {
        color: #000;
        font-size: 26px;
        font-weight: 300;
        text-align: center;
        text-transform: uppercase;
        position: relative;
        margin: 30px 0 60px;
    }
    h2::after {
        content: "";
        width: 100px;
        position: absolute;
        margin: 0 auto;
        height: 4px;
        border-radius: 1px;
        background: #7ac400;
        left: 0;
        right: 0;
        bottom: -20px;
    }
    .carousel {
        margin: 50px auto;
        padding: 0 70px;
    }
    .carousel .item {
        color: #747d89;
        min-height: 325px;
        text-align: center;
        overflow: hidden;
    }
    .carousel .thumb-wrapper {
        padding: 25px 15px;
        background: #fff;
        border-radius: 6px;
        text-align: center;
        position: relative;
        box-shadow: 0 2px 3px rgba(0,0,0,0.2);
    }
    .carousel .item .img-box {
        height: 120px;
        margin-bottom: 20px;
        width: 100%;
        position: relative;
    }
    .carousel .item img {
        max-width: 100%;
        max-height: 100%;
        display: inline-block;
        position: absolute;
        bottom: 0;
        margin: 0 auto;
        left: 0;
        right: 0;
    }
    .carousel .item h4 {
        font-size: 18px;
    }
    .carousel .item h4, .carousel .item p, .carousel .item ul {
        margin-bottom: 5px;
    }
    .carousel .thumb-content .btn {
        color: #7ac400;
        font-size: 11px;
        text-transform: uppercase;
        font-weight: bold;
        background: none;
        border: 1px solid #7ac400;
        padding: 6px 14px;
        margin-top: 5px;
        line-height: 16px;
        border-radius: 20px;
    }
    .carousel .thumb-content .btn:hover, .carousel .thumb-content .btn:focus {
        color: #fff;
        background: #7ac400;
        box-shadow: none;
    }
    .carousel .thumb-content .btn i {
        font-size: 14px;
        font-weight: bold;
        margin-left: 5px;
    }
    .carousel .item-price {
        font-size: 13px;
        padding: 2px 0;
    }
    .carousel .item-price strike {
        opacity: 0.7;
        margin-right: 5px;
    }
    .carousel-control-prev, .carousel-control-next {
        height: 44px;
        width: 40px;
        background: #7ac400;
        margin: auto 0;
        border-radius: 4px;
        opacity: 0.8;
    }
    .carousel-control-prev:hover, .carousel-control-next:hover {
        background: #78bf00;
        opacity: 1;
    }
    .carousel-control-prev i, .carousel-control-next i {
        font-size: 36px;
        position: absolute;
        top: 50%;
        display: inline-block;
        margin: -19px 0 0 0;
        z-index: 5;
        left: 0;
        right: 0;
        color: #fff;
        text-shadow: none;
        font-weight: bold;
    }
    .carousel-control-prev i {
        margin-left: -2px;
    }
    .carousel-control-next i {
        margin-right: -4px;
    }
    .carousel-indicators {
        bottom: -50px;
    }
    .carousel-indicators li, .carousel-indicators li.active {
        width: 10px;
        height: 10px;
        margin: 4px;
        border-radius: 50%;
        border: none;
    }
    .carousel-indicators li {
        background: rgba(0, 0, 0, 0.2);
    }
    .carousel-indicators li.active {
        background: rgba(0, 0, 0, 0.6);
    }
    .carousel .wish-icon {
        position: absolute;
        right: 10px;
        top: 10px;
        z-index: 99;
        cursor: pointer;
        font-size: 16px;
        color: #abb0b8;
    }
    .carousel .wish-icon .fa-heart {
        color: #ff6161;
    }
    .star-rating li {
        padding: 0;
    }
    .star-rating i {
        font-size: 14px;
        color: #ffc000;
    }

</style>
<script>
    $(document).ready(function(){
        $(".wish-icon i").click(function(){
            $(this).toggleClass("fa-heart fa-heart-o");
        });
    });
</script>

<body>


<nav
    class="p-2 w-100 text-center"
    id="layout-navbar" style="background-color: #124E66; color: white">
    <div class="row">
        <div class="col-10">
            <h3 style="width: 119%;">Election Voting System</h3>
        </div>
        <div class="col-2">
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</button>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalAdmin">Admin Login</button>
        </div>
    </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                <button type="button" class="btn-close btn" data-bs-dismiss="modal" aria-label="Close">x</button>
            </div>
            <div class="modal-body w-100">
                <form>
                    <label>CNIC #</label>
                    <input type="text" class="form-control" id="cnic_number" placeholder="Enter CNIC number">
                    <div class="p-1">
                        <span id="cnic_messages"></span>
                    </div>
                    <br>
                    <button type="button" class="btn btn-primary w-25" onclick="loginUser()">LOGIN</button>
                </form>
            </div>
{{--            <div class="modal-footer">--}}
{{--                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>--}}
{{--                <button type="button" class="btn btn-primary">Save changes</button>--}}
{{--            </div>--}}
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModalAdmin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Admin Login</h5>
                <button type="button" class="btn-close btn" data-bs-dismiss="modal" aria-label="Close">x</button>
            </div>
            <div class="modal-body w-100">
                <form>
                    <label>Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Enter email address">
                    <label>Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter password">
                    <br>
                    <button type="button" class="btn btn-primary w-25" onclick="loginAdmin()">LOGIN</button>
                </form>
            </div>
            {{--            <div class="modal-footer">--}}
            {{--                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>--}}
            {{--                <button type="button" class="btn btn-primary">Save changes</button>--}}
            {{--            </div>--}}
        </div>
    </div>
</div>


<section class="">
    <div class="container">
        <div class="container-xxl">
            <div class="row">
                <div class="col-md-12 pt-2">
                    <h3 class="text-center" style="color: #124E66;">Vote your <b>Favorite Candidate</b></h3>
{{--                    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">--}}
                        <!-- Carousel indicators -->
{{--                        <ol class="carousel-indicators">--}}
{{--                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>--}}
{{--                            <li data-target="#myCarousel" data-slide-to="1"></li>--}}
{{--                            <li data-target="#myCarousel" data-slide-to="2"></li>--}}
{{--                        </ol>--}}
                        <!-- Wrapper for carousel items -->
{{--                        <div class="carousel-inner">--}}
{{--                            <div class="item carousel-item active">--}}
                                <div class="row">
                                    @foreach($candidates as $key => $candidate)
                                    <div class="col-4 p-2 rounded">
                                        <div class="bg-white p-2">
                                            <div class="thumb-wrapper">
                                                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                                <div class="text-center">
                                                    <img
                                                        src="{{$candidate['upload'] ? url($candidate['upload']['path'] .'/'. $candidate['upload']['name']) : ""}}"
                                                        class="img-fluid" style="width: 150px; height: 150px; border-radius: 50%;" alt="">
                                                </div>
                                                <div class="thumb-content text-center">
                                                    <h4><strong>{{$candidate->first_name . ' ' . $candidate->last_name}}</strong></h4>
                                                    <h6 class="item-price">{{$candidate['area']['area_type'] ?? ""}} - <b>{{$candidate['area']['area_no'] ?? ""}}</b></h6>
                                                    <a href="javascript:void(0)" onclick="castVote({{$candidate->id}})" class="btn" style="background-color: #124E66; color: white">VOTE</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
{{--                                <div class="item carousel-item">--}}
{{--                                    <div class="row">--}}
{{--                                        @foreach($candidates as $key => $candidate)--}}
{{--                                            @if($key < 4)--}}
{{--                                                <div class="col-sm-3">--}}
{{--                                                    <div class="thumb-wrapper">--}}
{{--                                                        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>--}}
{{--                                                        <div class="img-box">--}}
{{--                                                            <img--}}
{{--                                                                src="{{$candidate['upload'] ? url($candidate['upload']['path'] .'/'. $candidate['upload']['name']) : ""}}"--}}
{{--                                                                class="img-fluid" alt="">--}}
{{--                                                        </div>--}}
{{--                                                        <div class="thumb-content">--}}
{{--                                                            <h4>{{$candidate->first_name . ' ' . $candidate->last_name}}</h4>--}}
{{--                                                            <p class="item-price">NA - <b>120</b></p>--}}
{{--                                                            <a href="javascript:void(0)" onclick="castVote({{$candidate->id}})" class="btn btn-primary">VOTE</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    @endif--}}
{{--                                                </div>--}}
{{--                                                @endforeach--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                            <!-- Carousel controls -->
{{--                            <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">--}}
{{--                                <i class="bx bxs-left-arrow"></i>--}}
{{--                            </a>--}}
{{--                            <a class="carousel-control-next" href="#myCarousel" data-slide="next">--}}
{{--                                <i class="bx bxs-right-arrow"></i>--}}
{{--                            </a>--}}
                        </div>
                    </div>
                </div>
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

</section>

<script>

    function loginUser(){

        var token = "{{csrf_token()}}";

        var cnic_no = $('#cnic_number').val();

        var body = JSON.stringify({
            cnic_number: cnic_no,
        });

        $('#cnic_messages').removeClass('text-danger text-success');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': token
            }
        });

        $.ajax({
            url: "{{ url('/login_user') }}",
            type: 'POST',
            data: body,
            contentType: "application/json",
            success: function (response) {
                console.log(response);

                $('#cnic_messages').addClass('text-success');
                $('#cnic_messages').html(response.message);
            },
            error: function (xhr) {
                var html = "";

                $.each(xhr.responseJSON.errors, function (key, error){
                    html += "<li>" + error + "</li>"
                });

                $('#cnic_messages').addClass('text-danger');
                $('#cnic_messages').html(html);
            }
        });
    }

    function loginAdmin(){

        var token = "{{csrf_token()}}";

        var email = $('#email').val();

        var password = $('#password').val();

        var body = JSON.stringify({
            email : email,
            password : password
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': token
            }
        });

        $.ajax({
            url: "{{ url('/login_admin') }}",
            type: 'POST',
            data: body,
            contentType: "application/json",
            success: function (response) {
                console.log(response);

                window.location.href = "{{url('/dashboard')}}";
            },
            error: function (xhr) {

                alert(xhr.responseJSON.errors);
            }
        });
    }

    function castVote(id){
        var token = "{{csrf_token()}}";

        var body = JSON.stringify({
            candidate_id: id,
        });

        $('#cnic_messages').removeClass('text-danger text-success');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': token
            }
        });

        $.ajax({
            url: "{{ url('/cast_vote') }}",
            type: 'POST',
            data: body,
            contentType: "application/json",
            success: function (response) {
                // console.log(response);
                //
                // $('#cnic_messages').addClass('text-success');
                // $('#cnic_messages').html(response.message);

                alert(response.message);

                location.reload();
            },
            error: function (xhr) {
                var html = "";

                $.each(xhr.responseJSON.errors, function (key, error){
                    html += error
                });

                alert(html);

                // $('#cnic_messages').addClass('text-danger');
                // $('#cnic_messages').html(html);
            }
        });
    }

</script>

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
{{--<script src="{{asset('assets/vendor/libs/jquery/jquery.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendor/libs/popper/popper.js')}}"></script>--}}
<script src="{{asset('assets/vendor/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

<script src="{{asset('assets/vendor/js/menu.js')}}"></script>
<!-- endbuild -->

<!-- Vendors JS -->
{{--<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>--}}

<!-- Main JS -->
<script src="{{asset('assets/js/main.js')}}"></script>

<!-- Page JS -->
{{--<script src="{{asset('assets/js/dashboards-analytics.js')}}"></script>--}}

<!-- Place this tag in your head or just before your close body tag. -->
{{--<script async defer src="https://buttons.github.io/buttons.js"></script>--}}
</body>
</html>
