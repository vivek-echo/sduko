@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        {{-- <form method="POST" action="{{ route('register') }}">
                            @csrf --}}

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class=" form-control name">

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Email Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control email">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Confirm Email Address </label>

                            <div class="col-md-6">
                                <input id="confirmEmail" type="email" class="form-control confirmEmail">
                            </div>
                        </div>

                        {{-- <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div> --}}

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" id="resisterButton">Register
                                </button>
                                {{-- <a href="https://api.whatsapp.com/send?phone=7004415440">Send Message</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        function errorAlert(name, sentense, ctrlId) {
            swal(name, sentense, "error").then(function(res) {
                if (res) {
                    $('#' + ctrlId).css({
                        'border-color': 'red',
                        'box-shadow': '0px 0px 5px 2px #ff000045'
                    });
                    setTimeout(function() {
                        $('#' + ctrlId).css({
                            'border-color': '',
                            'box-shadow': ''
                        });
                    }, 1000)
                }
            });
        }

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
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            $.ajax({
                                url: "{{ url('/registerUser') }}",
                                data:{
                                    name:name,
                                    email:email
                                },
                                success: function(res) {
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
@endsection
