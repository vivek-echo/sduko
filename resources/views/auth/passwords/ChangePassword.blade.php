<html>
<body>
    <input type="text" placeholder="Enter password" id="password">
    <input type="hidden" placeholder="Enter password" value="{{$id}}"  id="userId">
    <input type="text" placeholder="Confirm password" id="confirmPassword">
    <button id="regButton">Register</button>
</body>
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
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            $.ajax({
                                url: "{{ url('/updatePassword') }}",
                                data:{
                                    password:password,
                                    userId:userId
                                },
                                success: function(res) {
                                    if (res.status == true) {
                                            swal("Successfull", res.message, "success")
                                                .then(function(res) {
                                                    if (res) {
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
</html>