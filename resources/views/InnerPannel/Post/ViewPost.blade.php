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
                            <td></td>
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
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

<script>
  
</script>

@endsection