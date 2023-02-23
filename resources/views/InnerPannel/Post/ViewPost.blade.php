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
                            <td>
                                <div class="d-flex">
                                    <a href="#" title="View" class="btn btn-info shadow btn-xs sharp me-1" data-bs-toggle="modal" data-bs-target=".view-Modal"><i class="fas fa-eye"></i></a>
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
                                <label class="col-form-label fw-bold text-white">Escorts</label>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Region</label>
                            <label class="col-sm-1 col-form-label">:</label>
                            <div class="col-sm-9">
                                <label class="col-form-label fw-bold text-white">Delhi</label>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">City</label>
                            <label class="col-sm-1 col-form-label">:</label>
                            <div class="col-sm-9">
                                <label class="col-form-label fw-bold text-white">New Delhi</label>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Post Heading</label>
                            <label class="col-sm-1 col-form-label">:</label>
                            <div class="col-sm-9">
                                <label class="col-form-label fw-bold text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti debitis, doloremque hic, quam tempore suscipit delectus mollitia provident maiores accusamus laboriosam.</label>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Post Description</label>
                            <label class="col-sm-1 col-form-label">:</label>
                            <div class="col-sm-9">
                                <label class="col-form-label fw-bold text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti debitis, doloremque hic, quam tempore suscipit delectus mollitia provident maiores accusamus laboriosam.</label>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Model Age</label>
                            <label class="col-sm-1 col-form-label">:</label>
                            <div class="col-sm-9">
                                <label class="col-form-label fw-bold text-white">25</label>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Phone Number</label>
                            <label class="col-sm-1 col-form-label">:</label>
                            <div class="col-sm-9">
                                <label class="col-form-label fw-bold text-white">2225554789</label>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">WhatsApp Number</label>
                            <label class="col-sm-1 col-form-label">:</label>
                            <div class="col-sm-9">
                                <label class="col-form-label fw-bold text-white">2225554789</label>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Images</label>
                            <label class="col-sm-1 col-form-label">:</label>
                            <div class="col-sm-9">
                                <div id="outFile" class="row"><div class="col-sm-3 image position-relative">
                                    <img class="img-thumbnail" src="{{asset('images/10.jpg')}}" width="200" alt="image">
                                  </div><div class="col-sm-3 image position-relative">
                                    <img class="img-thumbnail" src="{{asset('images/11.jpg')}}" width="200" alt="image">
                                  </div><div class="col-sm-3 image position-relative">
                                    <img class="img-thumbnail" src="{{asset('images/12.jpg')}}" width="200" alt="image">
                                  </div></div>
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
  
</script>

@endsection