@extends('InnerPannel.Layout.MainLayout')

@section('content')
    <link href="{{ asset('vendor/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">
    <div class="card">

        <div class="card-header">
            <h5 class="card-title">Post Your Ads</h5>
        </div>
        <div class="card-body custom-tab-1">
            <ul class="nav nav-tabs card-body-tabs mb-3">
                <li class="nav-item"><a class="nav-link " href="/viewPost">View Post</a>
                </li>
                <li class="nav-item"><a class="nav-link active" href="javascript:void(0);">Add Post</a>
                </li>

            </ul>
            <div class="col-xl-8 col-lg-12">
                <div class="card">
                    <div class="alert alert-dismissible alert-alt fade show  <?php if (Session::get('status') == 1) {
                        echo 'alert-success';
                    }
                    if (Session::get('status') == 2) {
                        echo 'alert-danger ';
                    } ?>" style="display:<?php  if(Session::get('status') ) { echo "block"; } else { echo "none" ; } ?> ;">

                        <?php if(Session::get('status') == 1){ ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                        </button>
                        <strong>Success!</strong> {!! Session::has('msg') ? Session::get('msg') : '' !!}
                        <?php }if(Session::get('status') == 2){  ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                        </button>
                        <strong>Error!</strong> {!! Session::has('msg') ? Session::get('msg') : '' !!}
                        <?php } ?>
                    </div>

                    {{-- <div class="card-header">
                        <h4 class="card-title">Vertical Form</h4>
                    </div> --}}
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="POST" action="/uploadData" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label text-start">Service Type</label>
                                    <div class="col-sm-9">
                                        <select name="serviceType" id="serviceType" class="form-select">
                                            <option value="">--Select--</option>
                                            <option value="1">Massage</option>
                                            <option value="2">Male Escort</option>
                                            <option value="3">Female Escort</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label text-start">Select Region</label>
                                    <div class="col-sm-9">
                                        <select name="stateId" id="stateId" class="form-select">
                                            <option value="">Loading .....</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label text-start">Select City</label>
                                    <div class="col-sm-9">
                                        <select name="cityId" id="cityId" class="form-select">
                                            <option value="">--Select--</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label text-start">Post Heading</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="postHeading" name="postHeading">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label text-start">Post Description</label>
                                    <div class="col-sm-9">
                                        <textarea rows="4" cols="50" class="form-control" id="postDescription" name="postDescription"></textarea>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label text-start">Model Age</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="modelAge" name="modelAge">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label text-start">Phone Number</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="phoneNo" name="phoneNo">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label text-start">WhatsApp Number</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="WhatsApp" id="WhatsApp">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label text-start">Upload Image</label>
                                    <div class="col-sm-9">
                                        <div class="form-file">
                                            <input type="file" id="chooseFiledum" name="chooseFiledum[]"
                                                multiple="multiple" class="form-file-input form-control"
                                                accept="image/jpeg, image/png, image/jpg">
                                        </div>
                                        <code>Note - Upload single image or multiple images.</code>
                                    </div>
                                </div>
                                <div id="uploadedImages" class="mb-3 row" style="display: none;">
                                    <label class="col-sm-3 col-form-label text-start">Uploaded Images</label>
                                    <div class="col-sm-9">
                                        <div id="outFile" class="row">

                                        </div>

                                    </div>
                                </div>
                            </form>
                            <button type="submit" id="subButton" class="btn btn-primary float-start mt-3">Post</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="{{ asset('vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>
        <script src="js/main.js"></script>
        <script>
            const output = document.getElementById("output")
            const input = document.getElementById("chooseFiledum")
            let imagesArray = [];
            input.addEventListener("change", () => {
                imagesArray = [];
                const files = input.files
                for (let i = 0; i < files.length; i++) {
                    imagesArray.push(files[i])
                }
                displayImages()
            })



            function displayImages() {
                $('#uploadedImages').show();
                let images = ""
                imagesArray.forEach((image, index) => {
                    images += `<div class="col-sm-3 image position-relative">
                <img class="img-thumbnail" src="${URL.createObjectURL(image)}" width="200" alt="image">
                <a class="position-custom-cross btn-close" onclick="deleteImage(${index})" href="javascript:void(0)"></a>
              </div>`
                })
                $(document).ready(function() {
                    $('#outFile').html(images)
                })
            }

            function deleteImage(index) {
                imagesArray.splice(index, 1)
                displayImages()

                $(document).ready(function() {
                    if (index == 0) {
                        $('#chooseFiledum').val('');
                        $('#uploadedImages').hide();
                    }
                })

            }



            $(document).ready(function() {
                $('#subButton').on('click', function() {
                    var serviceType = $('#serviceType').val();
                    var stateId = $('#stateId').val();
                    var cityId = $('#cityId').val();
                    var postHeading = $('#postHeading').val();
                    var postDescription = $('#postDescription').val();
                    var modelAge = $('#modelAge').val();
                    var phoneNo = $('#phoneNo').val();
                    var WhatsApp = $('#WhatsApp').val();
                    var chooseFiledum = $('#chooseFiledum').val();

                    if (serviceType == "") {
                        errorAlert("Required", "Please select service Type", "serviceType");
                        return false;
                    }
                    if (stateId == "") {
                        errorAlert("Required", "Please select state", "stateId");
                        return false;
                    }
                    if (cityId == "") {
                        errorAlert("Required", "Please select city", "cityId");
                        return false;
                    }
                    if (postHeading == "") {
                        errorAlert("Required", "Please Enter Your Post Heading", "postHeading");
                        return false;
                    }
                    if (postDescription == "") {
                        errorAlert("Required", "Please Enter Your Post Description ", "postDescription");
                        return false;
                    }
                    if (modelAge == "") {
                        errorAlert("Required", "Please Enter Model Age", "modelAge");
                        return false;
                    }
                    if (phoneNo == "") {
                        errorAlert("Required", "Please Enter Your phone number", "phoneNo");
                        return false;
                    }
                    if (WhatsApp == "") {
                        errorAlert("Required", "Please Enter your whatsApp number", "WhatsApp");
                        return false;
                    }
                    if (chooseFiledum == "") {
                        errorAlert("Required", "Please Choose at least one image", "chooseFiledum");
                        return false;
                    }
                    swal({
                            title: "Are you sure?",
                            text: "Are you Sure You want to Post this add?",
                            type: "info",
                            showCancelButton: !0,
                            closeOnConfirm: !1,
                            showLoaderOnConfirm: !0
                        })
                        .then((willDelete) => {
                            if (willDelete) {

                                $('form').submit();
                            }
                        });
                })

                $.ajax({
                    url: "{{ url('/getState') }}",
                    success: function(res) {
                        var optionState = [
                            '<option value="" >--Select Religion--</option>'
                        ];
                        var optionLengthState = res['data'].length;

                        for (var i = 0; i < optionLengthState; i++) {
                            var resOptionState = '<option value="' + res['data'][i]['state_name'] + '" >' +
                                res['data'][i]['state_name'] + '</option>'
                            optionState.push(resOptionState);
                        }
                        $('#stateId').html(optionState.join(" "));
                    }
                });

                $('#stateId').on('change', function() {
                    var optionCity = '<option value="" >Loading....</option>';
                    $('#cityId').html(optionCity);
                    var stateId = $('#stateId').val();
                    $.ajax({
                        url: "{{ url('/getCity') }}",
                        data: {
                            stateId: stateId
                        },
                        success: function(res) {
                            optionCity = [
                                '<option value="" >--Select City--</option>'
                            ];
                            var optionLengthCity = res['data'].length;

                            for (var i = 0; i < optionLengthCity; i++) {
                                var resOptionCity = '<option value="' + res['data'][i][
                                    'city_name'
                                ] + '" >' + res['data'][i]['city_name'] + '</option>'
                                optionCity.push(resOptionCity);
                            }

                            $('#cityId').html(optionCity.join(" "));
                        }
                    });
                })
            });
        </script>
    @endsection
