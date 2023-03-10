@extends('InnerPannel.Layout.MainLayout')

@section('content')
    <link href="{{ asset('vendor/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">

    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Post Your Ads</h5>
        </div>
        <div class="card-body custom-tab-1">
            <ul class="nav nav-tabs card-body-tabs mb-3">
                <li class="nav-item"><a class="nav-link active" href="javascript:void(0);">View Post</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="/AddPost">Add Post</a>
                </li>

            </ul>

            <div class="table-responsive mt-4">
                <table class="table table-bordered table-responsive-md">
                    <thead>
                        <tr>
                            <th class="text-center"><b>#</b></th>
                            <th class="text-center"><b>Image</b></th>
                            <th class="text-center"><b>Post Heading<b></th>
                            <th class="text-center"><b>Date<b></th>
                            <th class="text-center"><b>Status</b></th>
                            <th class="text-center"><b>Action</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($pageData as $key=>$val){ ?>
                        <tr>
                            <td class="text-center"><?php echo $val['sl']; ?></td>
                            <td class="text-center"><img class="rounded" width="120"
                                    src="{{ asset('uploads/PostImages/' . $val['image'] . '') }}" alt=""></td>
                            <td class="text-center"><?php echo $val['postHeading']; ?></td>
                            <td class="text-center"><?php echo $val['createdOn']; ?></td>
                            <td class="text-center"><?php
                            if ($val['status'] == 0) {
                                echo 'Pending';
                            } elseif ($val['status'] == 1) {
                                echo 'Approved';
                            } elseif ($val['status'] == 2) {
                                echo 'Rejected';
                            }
                            
                            ?></td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="javascript:void(0);" title="View"
                                        class="btn btn-info shadow btn-xs sharp me-1" data-bs-toggle="modal"
                                        data-bs-target=".view-Modal" onclick="viewPostModal(<?php echo $val['pId']; ?>)"><i
                                            class="fas fa-eye"></i></a>
                                    <?php if($val['userIdPost'] == $val['userId']){ ?>
                                    <a href="javascript:void(0);" title="Delete"
                                        onclick="viewDeleteModal(<?php echo $val['pId']; ?>)"
                                        class="btn btn-danger shadow btn-xs sharp me-1"><i class="fa fa-trash"></i></a>
                                    <?php } ?>
                                    {{--&& $val['status'] == 0 --}}
                                    <?php if($val['userType'] == 1 ){ ?>
                                    <a href="javascript:void(0);" title="Take Action"
                                        class="btn btn-primary shadow btn-xs sharp"
                                        onclick="actionModalShaow(<?php echo $val['pId']; ?>)"><i class="fas fa-cog"></i></a>
                                    <?php } ?>

                                </div>
                            </td>
                        </tr>

                        <?php }?>


                    </tbody>

                    <tfoot>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Image</th>
                            <th class="text-center">Post Heading</th>
                            <th class="text-center">Date</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>


    <div class="modal fade view-Modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div id="fullpage" onclick="this.style.display='none';" witdth="200px">
                    <div class="btn-align-right">
                        <a href="javascript:void(0);" onclick="closeFullScreen()"><button class="btn-close"></button> </a>
                    </div>
                </div>
                <div class="modal-header">
                    <h5 class="modal-title">Ad Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="basic-form">
                        <form>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Service Type</label>
                                <label class="col-sm-1 col-form-label">:</label>
                                <div class="col-sm-9">
                                    <label class="col-form-label fw-bold text-white"><span
                                            id="Loading....modalService"></span></label>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Region</label>
                                <label class="col-sm-1 col-form-label">:</label>
                                <div class="col-sm-9">
                                    <label class="col-form-label fw-bold text-white"><span
                                            id="modalState">Loading....</span></label>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">City</label>
                                <label class="col-sm-1 col-form-label">:</label>
                                <div class="col-sm-9">
                                    <label class="col-form-label fw-bold text-white"><span
                                            id="modalCity">Loading....</span></label>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Post Heading</label>
                                <label class="col-sm-1 col-form-label">:</label>
                                <div class="col-sm-9">
                                    <label class="col-form-label fw-bold text-white"><span
                                            id="modalPostHeading">Loading....</span></label>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Post Description</label>
                                <label class="col-sm-1 col-form-label">:</label>
                                <div class="col-sm-9">
                                    <label class="col-form-label fw-bold text-white"><span
                                            id="modalPostDesc">Loading....</span></label>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Model Age</label>
                                <label class="col-sm-1 col-form-label">:</label>
                                <div class="col-sm-9">
                                    <label class="col-form-label fw-bold text-white"><span
                                            id="modalAge">Loading....</span></label>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Images</label>
                                <label class="col-sm-1 col-form-label">:</label>
                                <div class="col-sm-9">
                                    <div class="card-body px-0 pt-3 image-grid">
                                        <div class="row gap-3 lightgallery">
                                            {{-- <a href="{{ asset('images/10.jpg') }}"
                                                data-exthumbimage="{{ asset('images/10.jpg') }}"
                                                data-src="{{ asset('images/10.jpg') }}" class="col-lg-3 col-md-6 mb-4">
                                                <img class="img-thumbnail" src="{{ asset('images/10.jpg') }}"
                                                    alt="" style="width:100%;" />
                                            </a>
                                            <a href="{{ asset('images/11.jpg') }}"
                                                data-exthumbimage="{{ asset('images/11.jpg') }}"
                                                data-src="{{ asset('images/11.jpg') }}" class="col-lg-3 col-md-6 mb-4">
                                                <img class="img-thumbnail" src="{{ asset('images/11.jpg') }}"
                                                    alt="" style="width:100%;" />
                                            </a>
                                            <a href="{{ asset('images/12.jpg') }}"
                                                data-exthumbimage="{{ asset('images/12.jpg') }}"
                                                data-src="{{ asset('images/12.jpg') }}" class="col-lg-3 col-md-6 mb-4">
                                                <img class="img-thumbnail" src="{{ asset('images/12.jpg') }}"
                                                    alt="" style="width:100%;" />
                                            </a> --}}
                                        </div>
                                    </div>
                                    {{-- <div class="row image-grid">
                                    <div class="col-sm-3 position-relative">
                                        <div class="image">
                                            <img class="" src="{{ asset('images/10.jpg') }}" width="200"
                                                alt="image">
                                        </div>
                                    </div>
                                    <div class="col-sm-3 position-relative">
                                        <div class="image">
                                            <img class="" src="{{ asset('images/11.jpg') }}" width="200"
                                                alt="image">
                                        </div>
                                    </div>
                                    <div class="col-sm-3 position-relative">
                                        <div class="image">
                                            <img class="" src="{{ asset('images/12.jpg') }}" width="200"
                                                alt="image">
                                        </div>
                                    </div>
                                </div> --}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>

    </div>

    {{-- VIEW ACTION MODAL --}}
    <div class="modal fade view-action" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Take Action</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="basic-form">
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Status</label>
                            <label class="col-sm-1 col-form-label">:</label>
                            <div class="col-sm-9">
                                <select name="statusType" id="statusType" class="form-select">
                                    <option value="0">--Select--</option>
                                    <option value="1">Approved</option>
                                    <option value="2">Rejected</option>
                                </select>
                            </div>
                        </div>
                        <input type="hidden" id="postId">
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Remarks</label>
                            <label class="col-sm-1 col-form-label">:</label>
                            <div class="col-sm-9">
                                <textarea rows="4" class="form-control" id="remarks" name="remarks"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <a type="button" class="btn btn-primary" href="javascript:void(0);" id="submitRemark">Submit</a>
                </div>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="{{ asset('vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>
    <script src="js/main.js"></script>

    <script>
        function actionModalShaow(paramId) {
            $(document).ready(function() {
                $('#statusType').val(0);
                $('#remarks').val('');
                $('#postId').val('');
                $('#postId').val(paramId);
                $('.view-action').modal('show');
            })

        }
        $(document).ready(function() {
            $('#submitRemark').on('click', function() {
                var statusType = $('#statusType').val();
                var remarks = $('#remarks').val();
                var postId = $('#postId').val();

                if (statusType == 0) {
                    errorAlert("Required", "Please Select Status Type", "statusType");
                    return false;
                }

                if (remarks == "") {
                    errorAlert("Required", "Please Enter Your remarks", "remarks");
                    return false;
                }
                var stst = (statusType == 1) ? "Approve" : "Reject";
                swal({
                        title: "Are you sure?",
                        text: 'Are you Sure You want to ' + stst + ' this Post?',
                        type: "info",
                        showCancelButton: !0,
                        closeOnConfirm: !1,
                        showLoaderOnConfirm: !0
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            $('#preloader').show();
                            $.ajax({
                                url: "{{ url('/actionPost') }}",
                                data: {
                                    'postId': postId,
                                    'statusType': statusType,
                                    'remarks': remarks
                                },
                                success: function(res) {
                                    $('#preloader').hide();
                                    if (res.status == true) {
                                        swal("Successfull", res.message, "success")
                                            .then(function(res) {
                                                if (res) {
                                                    var loc = window.location;
                                                    window.location = loc
                                                        .origin +
                                                        "/viewPost"
                                                }
                                            });
                                    } else {

                                        swal("Error", res.message, "error")
                                    }
                                }
                            });
                        }
                    })

            })
        });

        function viewDeleteModal(param) {
            $(document).ready(function() {
                swal({
                        title: "Are you sure?",
                        text: "Are you Sure You want to Delete this Post?",
                        type: "info",
                        showCancelButton: !0,
                        closeOnConfirm: !1,
                        showLoaderOnConfirm: !0
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            $.ajax({
                                url: "{{ url('/deleteAdd') }}",
                                data: {
                                    id: param
                                },
                                success: function(res) {
                                    if (res.status == true) {
                                        swal("Successfull", res.message, "success")
                                            .then(function(res) {
                                                if (res) {
                                                    var loc = window.location;
                                                    window.location = loc
                                                        .origin +
                                                        "/viewPost"
                                                }
                                            });
                                    } else {

                                        swal("Error", res.message, "error")
                                    }
                                }
                            });
                        }
                    })
            })

        }

        function viewPostModal(param) {
            $(document).ready(function() {

                $.ajax({
                    url: "{{ url('/viewPostData') }}",
                    data: {
                        id: param
                    },
                    success: function(res) {
                        var dataGh = res.data;
                        var serv = "";
                        if (res.data.serviceType == 1) {
                            serv = "Massage";
                        } else if (res.data.serviceType == 2) {
                            serv = "Male Escort";
                        } else if (res.data.serviceType == 3) {
                            serv = "Female Escort";
                        }
                        $('#modalService').html(serv);
                        $('#modalState').html(res.data.state);
                        $('#modalCity').html(res.data.city);
                        $('#modalPostHeading').html(res.data.postHeading);
                        $('#modalPostDesc').html(res.data.postDesc);
                        $('#modalAge').html(res.data.modelAge);

                        var imageDataLength = res.images.length;
                        var imageBindArr = [];
                        for (var i = 0; i < imageDataLength; i++) {
                            var imageLink = 'uploads/PostImages' + '/' + res.images[i].image + '';
                            var img = '<img class="img-thumbnail" src="' + imageLink +
                                '" style="width:100%;"  alt="image"/>'
                            var imageBin =
                                '<a href="javascript:void(0);" onclick="getPics()" data-exthumbimage="' +
                                imageLink + '" data-src="' + imageLink +
                                '" class="col-lg-3 col-md-6 mb-4"> ' + img + ' </a>';
                            imageBindArr.push(imageBin);
                        }
                        $('.lightgallery').html(imageBindArr.join(" "));

                    }
                });
            })
        }

        function getPics() { //just for this demo
            const imgs = document.querySelectorAll('.lightgallery img');
            const fullPage = document.querySelector('#fullpage');

            imgs.forEach(img => {
                img.addEventListener('click', function() {
                    fullPage.style.backgroundImage = 'url(' + img.src + ')';
                    fullPage.style.display = 'block';
                });
            });
        }

        function closeFullScreen() {
            $(document).ready(function() {
                $('#fullpage').css('display', 'none');
            });
        }
    </script>
    <script src="vendor/lightgallery/js/lightgallery-all.min.js"></script>
@endsection
