@extends('InnerPannel.Layout.MainLayout')

@section('content')
<div class="card text-center">
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

        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a href="javascript:void(0);" class="btn btn-primary btn-card">Go somewhere</a>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script>
  
</script>
@endsection