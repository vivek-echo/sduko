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
            <table id="example" class="display" style="min-width: 845px">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Post Heading</th>
                        <th>Type</th>
                        <th>Region</th>
                        <th>City</th>
                        <th>Age(Yrs)</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><img class="rounded" width="80" src="images/profile/small/pic1.jpg" alt=""></td>
                        <td>Test Heading</td>
                        <td>Escorts</td>
                        <td>Jharkhand</td>
                        <td>Ranchi</td>
                        <td>25</td>
                        <td>22/02/2023</td>
                        <td>
                            <div class="d-flex">
                                <a href="#" title="Edit" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                <a href="#" title="View" class="btn btn-info shadow btn-xs sharp me-1"><i class="fas fa-eye"></i></a>
                                <a href="#" title="Delete" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                            </div>												
                        </td>	
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><img class="rounded" width="80" src="images/profile/small/pic1.jpg" alt=""></td>
                        <td>Test Heading</td>
                        <td>Escorts</td>
                        <td>Jharkhand</td>
                        <td>Ranchi</td>
                        <td>25</td>
                        <td>22/02/2023</td>
                        <td>
                            <div class="d-flex">
                                <a href="#" title="Edit" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                <a href="#" title="View" class="btn btn-info shadow btn-xs sharp me-1"><i class="fas fa-eye"></i></a>
                                <a href="#" title="Delete" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                            </div>												
                        </td>	
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><img class="rounded" width="80" src="images/profile/small/pic1.jpg" alt=""></td>
                        <td>Test Heading</td>
                        <td>Escorts</td>
                        <td>Jharkhand</td>
                        <td>Ranchi</td>
                        <td>25</td>
                        <td>22/02/2023</td>
                        <td>
                            <div class="d-flex">
                                <a href="#" title="Edit" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                <a href="#" title="View" class="btn btn-info shadow btn-xs sharp me-1"><i class="fas fa-eye"></i></a>
                                <a href="#" title="Delete" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                            </div>												
                        </td>	
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Heading</th>
                        <th>Type</th>
                        <th>Region</th>
                        <th>City</th>
                        <th>Age(Yrs)</th>
                        <th>Date</th>
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