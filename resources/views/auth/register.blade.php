<!DOCTYPE html>
<html lang="en" class="h-100">



<head>
    <meta charset="utf-8">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    {{-- <meta name="description" content="Zenix - Crypto Admin Dashboard" />
	<meta property="og:title" content="Zenix - Crypto Admin Dashboard" />
	<meta property="og:description" content="Zenix - Crypto Admin Dashboard" />
	<meta property="og:image" content="page-error-404.html" />
	<meta name="format-detection" content="telephone=no"> --}}
    <title>SAFE69 </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="{{ asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="vh-100" style="background :  center / cover no-repeat url('{{asset('landingPage/images/banner/bg-3.jpg')}}')">
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="/" class="brand-logo">
                                            Place for logo
                                        </a>
                                    </div>
                                    <h4 class="text-center mb-4">Sign up your account</h4>
                                    <div class="form-group">
                                        <label class="mb-1"><strong>Username</strong></label>
                                        <input type="text" id="name" class="form-control"
                                            placeholder="Enter Your Name">
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-1"><strong>Email</strong></label>
                                        <input type="email" id="email" class="form-control"
                                            placeholder="Enter Your Email">
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-1"><strong>Confirm Email</strong></label>
                                        <input type="email" id="confirmEmail" class="form-control"
                                            placeholder="Confirm Your Email">
                                    </div>
                                    <div class="text-center mt-4">
                                        <button class="btn btn-primary btn-block" id="resisterButton">Sign me
                                            up</button>
                                    </div>
                                    <div class="new-account mt-3">
                                        <p>Already have an account? <a class="text-primary" href="/login">Sign in</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
 Scripts
***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>
    <script src="js/custom.js"></script>
    <script src="js/main.js"></script>
    <script>
        $(document).ready(function() {
            $('#resisterButton').on('click', function() {
                var name = $('#name').val();
                var email = $('#email').val();
                var confirmEmail = $('#confirmEmail').val();
                if (name == "") {
                    errorAlert("Required", "Please Enter Your Name", "name");
                    return false;
                }
                if (email == "") {
                    errorAlert("Required", "Please Enter Your Email", "email");
                    return false;
                }
                if (confirmEmail == "") {
                    errorAlert("Required", "Please Confirm Your Email", "confirmEmail");
                    return false;
                }
                if (confirmEmail != email) {
                    errorAlert("Invalid", "Email Matching Eror", "confirmEmail");
                    return false;
                }
                swal({
                        title: "Are you sure?",
                        text: "Are you Sure You want to register",
                        type: "info",
                        showCancelButton: !0,
                        closeOnConfirm: !1,
                        showLoaderOnConfirm: !0
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            $('#preloader').fadeIn();
                            $.ajax({
                                url: "{{ url('/registerUser') }}",
                                data: {
                                    name: name,
                                    email: email
                                },
                                success: function(res) {
                                    $('#preloader').fadeOut();
                                    if (res.status == true) {
                                        swal("Successfull", res.message, "success")
                                            .then(function(res) {
                                                if (res) {
                                                    var loc = window.location;
                                                    window.location = loc
                                                        .origin +
                                                        "/register"
                                                }
                                            });
                                    } else {

                                        swal("Error", res.message, "error")
                                    }
                                }
                            });

                        }
                    });
            })


        })
    </script>
    {{-- <script src="js/styleSwitcher.js"></script> --}}
</body>

</html>
