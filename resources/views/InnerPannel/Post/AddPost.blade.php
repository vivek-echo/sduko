@extends('InnerPannel.Layout.MainLayout')

@section('content')
    <div class="card text-center">
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
                    <div class="card-header">
                        <h4 class="card-title">Vertical Form</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">

                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Service Type</label>
                                <div class="col-sm-9">
                                    <select name="" id="serviceType" class="form-select">
                                        <option value="">--Select--</option>
                                        <option value="1">Massage</option>
                                        <option value="2">Male Escort</option>
                                        <option value="3">Female Escort</option>

                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Select Region</label>
                                <div class="col-sm-9">
                                    <select name="stateId" id="stateId" class="form-select">
                                        <option value="">Loading .....</option>

                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Select City</label>
                                <div class="col-sm-9">
                                    <select name="cityId" id="cityId" class="form-select">
                                        <option value="">--Select--</option>

                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Post Heading</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="postHeading">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Post Description</label>
                                <div class="col-sm-9">
                                    <textarea rows="4" cols="50" class="form-control" id="postDescription"></textarea>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Model Age</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="modelAge">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Phone Number</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="phoneNo">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">WhatsApp Number</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="WhatsApp">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <input type="file" id="chooseFiledum" multiple="multiple"
                                    accept="image/jpeg, image/png, image/jpg">
                                <div id="outFile">

                                </div>
                            </div>

                            <div class="mb-3 row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Sign in</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

        <script>
            const output = document.getElementById("output")
            const input = document.getElementById("chooseFiledum")
            let imagesArray = []
            input.addEventListener("change", () => {
                const files = input.files
                for (let i = 0; i < files.length; i++) {
                    imagesArray.push(files[i])
                }
                displayImages()
            })

           

            function displayImages() {
                let images = ""
                imagesArray.forEach((image, index) => {
                    images += `<div class="image">
                <img src="${URL.createObjectURL(image)}" alt="image">
                <a onclick="deleteImage(${index})" href="javascript:void(0)">&times;</a>
              </div>`
                })
                $(document).ready(function() {
                    $('#outFile').html(images)
                })
            }
            function deleteImage(index) {
                imagesArray.splice(index, 1)
                displayImages()
            }

            $(document).ready(function() {

                $.ajax({
                    url: "{{ url('/getState') }}",
                    success: function(res) {
                        var optionState = [
                            '<option value="0" >--Select Religion--</option>'
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
                                '<option value="0" >--Select Religion--</option>'
                            ];
                            var optionLengthCity = res['data'].length;

                            for (var i = 0; i < optionLengthCity; i++) {
                                var resOptionCity = '<option value="' + res['data'][i][
                                    'city_name'
                                ] + '" >' + res['data'][i]['city_name'] + '</option>'
                                optionCity.push(resOptionCity);
                            }
                            console.log(optionCity.join(" "));
                            $('#cityId').html(optionCity.join(" "));
                        }
                    });
                })
            });
        </script>
    @endsection
