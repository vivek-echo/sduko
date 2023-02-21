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

    <style>
        .layout-image {
            position: absolute;
            bottom: 0;
            left: 10%;
            z-index: -1;
        }
    </style>

</head>

<body class="vh-100 position-relative" style="background :  center / cover no-repeat url('{{asset('landingPage/images/banner/bg-3.jpg')}}')">
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <div class="layout-image">
         <img src="{{asset('landingPage/images/banner/ss.png')}}" alt="" width="40%">
    </div>
    <div class="authincation h-100">
       
        <div class="container h-100">
            <div class="row justify-content-end h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="text-center mb-3">
                                            <a href="/" class="brand-logo">
                                                <img src="{{asset('images/safe69-dark.png')}}" alt="" style="height:50px">
                                            </a>
                                        </div>
                                        <h4 class="text-center mb-4">Login to your account</h4>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Username</strong></label>
                                            <div class="input-group">
                                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                <input id="validationCustomUsername" type="email"
                                                    class="form-control border-left-end @error('email') is-invalid @enderror"
                                                    name="email" value="{{ old('email') }}" autocomplete="email"
                                                    autofocus placeholder="Enter a username.." required>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <div class="input-group transparent-append">
                                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                                <input placeholder="Enter Password.." id="dz-password" type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" required autocomplete="current-password">
                                                <span class="input-group-text show-pass border-left-end">
                                                    <i class="fa fa-eye-slash"></i>
                                                    <i class="fa fa-eye"></i>
                                                </span>
                                                <div class="invalid-feedback">
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>


                                        </div>

                                        <div class="text-center mt-4">
                                            <button class="btn btn-primary btn-block" type="submit">Login</button>
                                        </div>
                                        <div class="new-account mt-3">
                                            <p>Don't have an account? <a class="text-primary" href="/register">Register
                                                    Here</a>
                                            </p>
                                        </div>
                                    </form>
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

    {{-- <script src="js/styleSwitcher.js"></script> --}}
</body>

</html>
