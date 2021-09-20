@extends('layouts.masterAdmin')
@section('content')
  <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">About Us page</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">All Products</li>
          </ol>
        </div>
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
    <!-- /.content-header -->
    
   <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">About us page</h3>
                </div>
                <div class="card-body">
                     @if (Session::has('success'))
                      <div class="alert alert-success">
                        {{ Session::get('success') }}
                      </div>
                    @endif
                    @if (Session::has('error'))
                      <div class="alert alert-danger">
                        {{ Session::get('error') }}
                      </div>
                    @endif
                    
                    <form action="{{ route('banner.store')}}" method='post' enctype='multipart/form-data'>
                      @csrf
                      <div class="form-group">
                        <p style='text-align:left;' for="photo"> Banner</p>
                        <input type="file" class="form-control-file mb-2" id="photo" name="banner" require>
                          <div class='output'>
                          <img src="{{ url('uploads/banner') }}/{{ $banner->banner ?? 'banner.jpg' }}" alt="banner" class="img-thumbnail img-fluid" style='max-width:300px'>
                          </div>
                       </div>
               
                      <button type="submit" class="btn btn-success float-right"><i class="fa fa-plus"></i> Update</button>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </section>
    
</div>
@endsection