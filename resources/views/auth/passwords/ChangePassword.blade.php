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

<body class="vh-100">
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

                                    <h4 class="text-center mb-4">Set Your Password</h4>
                                    <div class="form-group">
                                        <label class="mb-1"><strong>Password</strong></label>
                                        <input type="password" id="password" class="form-control"
                                            placeholder="Enter Your Password">
                                        <input type="hidden" id="userId" class="form-control"
                                            value="{{ $id }}">
                                    </div>

                                    <div class="form-group">
                                        <label class="mb-1"><strong>Confirm Password</strong></label>
                                        <input type="password" id="confirmPassword" class="form-control"
                                            placeholder="Confirm Your Password">
                                    </div>
                                    <div class="text-center mt-4">
                                        <button class="btn btn-primary btn-block" id="regButton">Activate
                                            Account</button>
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
    {{-- <script src="js/deznav-init.js"></script>  --}}
    <script src="js/main.js"></script>
    <script>
        $(document).ready(function() {
            $('#regButton').on('click', function() {
                var password = $('#password').val();
                var userId = $('#userId').val();
                var confirmPassword = $('#confirmPassword').val();
                if (password == "") {
                    errorAlert("Required", "Please Enter Your Password", "password");
                    return false;
                }
                if (confirmPassword == "") {
                    errorAlert("Required", "Please Confirm your password", "confirmPassword");
                    return false;
                }

                if (confirmPassword != password) {
                    errorAlert("Invalid", "Password does not match", "confirmEmail");
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
                                url: "{{ url('/updatePassword') }}",
                                data: {
                                    password: password,
                                    userId: userId
                                },
                                success: function(res) {
                                    $('#preloader').fadeOut();
                                    if (res.status == true) {
                                        swal("Successfull", res.message, "success")
                                            .then(function(res) {
                                                if (res) {
                                                    $('#preloader').fadeIn();
                                                    var loc = window.location;
                                                    window.location = loc
                                                        .origin +
                                                        "/login"
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
