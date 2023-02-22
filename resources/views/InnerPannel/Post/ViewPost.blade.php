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
            <table  class="table table-responsive-md" >
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Post Heading</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($pageData as $key=>$val){ ?>
                        <tr>
                            <td><?php echo $val['sl']; ?></td>
                            <td><img class="rounded" width="120" src="{{ asset('storage/'.$val['image'].'')}}" alt=""></td>
                            <td><?php echo $val['postHeading']; ?></td>
                            <td><?php echo $val['createdOn']; ?></td>
                            <td><?php echo "cjnshcbnh" ?></td>
                            <td></td>
                        </tr>
                        <?php }?>
                  
                    
                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Post Heading</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Action</th>
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