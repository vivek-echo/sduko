@extends('InnerPannel.Layout.MainLayout')

@section('content')

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
            <table  class="table table-bordered table-responsive-md" >
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
                            <td class="text-center"><img class="rounded" width="120" src="{{ asset('storage/'.$val['image'].'')}}" alt=""></td>
                            <td class="text-center"><?php echo $val['postHeading']; ?></td>
                            <td class="text-center"><?php echo $val['createdOn']; ?></td>
                            <td class="text-center"><?php 
                                if($val['status'] == 0){
                                    echo "Pending";
                                }elseif ($val['status'] == 1) {
                                    echo "Approved";
                                }elseif($val['status'] == 1)
                                {
                                    echo "Rejected";
                                }
                            
                            ?></td>
                            <td >
                                <div class="d-flex justify-content-center">
                                    <a href="javascript:void(0);" title="View" class="btn btn-info shadow btn-xs sharp me-1" data-bs-toggle="modal" data-bs-target=".view-Modal" onclick="viewPostModal(<?php echo $val['pId'] ; ?>)"><i class="fas fa-eye"></i></a>
                                    <a href="#" title="Delete" class="btn btn-danger shadow btn-xs sharp me-1"><i class="fa fa-trash"></i></a>
                                    <a href="#" title="Take Action" class="btn btn-primary shadow btn-xs sharp"><i class="fas fa-cog"></i></a>
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
                                <label class="col-form-label fw-bold text-white" ><span id="Loading....modalService"></span></label>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Region</label>
                            <label class="col-sm-1 col-form-label">:</label>
                            <div class="col-sm-9">
                                <label class="col-form-label fw-bold text-white"><span id="modalState">Loading....</span></label>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">City</label>
                            <label class="col-sm-1 col-form-label">:</label>
                            <div class="col-sm-9">
                                <label class="col-form-label fw-bold text-white" ><span id="modalCity">Loading....</span></label>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Post Heading</label>
                            <label class="col-sm-1 col-form-label">:</label>
                            <div class="col-sm-9">
                                <label class="col-form-label fw-bold text-white"><span id="modalPostHeading">Loading....</span></label>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Post Description</label>
                            <label class="col-sm-1 col-form-label">:</label>
                            <div class="col-sm-9">
                                <label class="col-form-label fw-bold text-white"><span id="modalPostDesc">Loading....</span></label>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Model Age</label>
                            <label class="col-sm-1 col-form-label">:</label>
                            <div class="col-sm-9">
                                <label class="col-form-label fw-bold text-white"><span id="modalAge">Loading....</span></label>
                            </div>
                        </div>
                       
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Images</label>
                            <label class="col-sm-1 col-form-label">:</label>
                            <div class="col-sm-9">
                                <div class="card-body px-0 pt-3 image-grid">
                                    <div id="lightgallery" class="row gap-3">
                                        <a href="{{ asset('images/10.jpg') }}" data-exthumbimage="{{ asset('images/10.jpg') }}" data-src="{{ asset('images/10.jpg') }}" class="col-lg-3 col-md-6 mb-4">
                                            <img class="img-thumbnail" src="{{ asset('images/10.jpg') }}" alt="" style="width:100%;"/>
                                        </a>
                                        <a href="{{ asset('images/11.jpg') }}" data-exthumbimage="{{ asset('images/11.jpg') }}" data-src="{{ asset('images/11.jpg') }}" class="col-lg-3 col-md-6 mb-4">
                                            <img class="img-thumbnail" src="{{ asset('images/11.jpg') }}" alt="" style="width:100%;" />
                                        </a>
                                        <a href="{{ asset('images/12.jpg') }}" data-exthumbimage="{{ asset('images/12.jpg') }}" data-src="{{ asset('images/12.jpg') }}" class="col-lg-3 col-md-6 mb-4">
                                            <img class="img-thumbnail" src="{{ asset('images/12.jpg') }}" alt="" style="width:100%;" />
                                        </a>
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
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

<script>
    
        function viewPostModal(param){
            $(document).ready(function(){
                
            $.ajax({
                        url: "{{ url('/viewPostData') }}",
                        data: {
                            id: param
                        },
                        success: function(res) {
                            var dataGh = res.data;
                            var serv = "";
                            if(res.data.serviceType == 1)
                            {
                                serv ="Massage";
                            }else if(res.data.serviceType == 2){
                                serv ="Male Escort";
                            }else if(res.data.serviceType == 3){
                                serv ="Female Escort";
                            }
                            $('#modalService').html(serv);
                            $('#modalState').html(res.data.state);
                            $('#modalCity').html(res.data.city);
                            $('#modalPostHeading').html(res.data.postHeading);
                            $('#modalPostDesc').html(res.data.postDesc);
                            $('#modalAge').html(res.data.modelAge);

                        }
                    });
                })
        }
    
  viewPostModal
</script>

@endsection