@extends('layouts.masterAdmin')
@section('content')
  <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Contact Us</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Contact Us</li>
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
                    <h3 class="card-title">Contact us</h3>
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
                    
                    <form action="{{ route('contactPage.store')}}" method='post' enctype='multipart/form-data'>
                      @csrf            
                       <!-- description -->
                       <div class="form-group">
                         <p style="text-align:left;">Description</p>
                         <textarea class="form-control" rows="3" id="description" name="description"  require>{{  $contactPage->description ?? '' }}
                         </textarea>
                       </div>

                        <!-- address -->
                        <div class="form-group">
                          <p style='text-align:left;' for="address">
                                        Address*
                          </p>
                            <input
                            type="text"
                            class="form-control"
                            name="address"
                            value="{{ $contactPage->address ?? '' }}">
                        </div>

                        <!-- email -->
                        <div class="form-group">
                          <p style='text-align:left;' for="email">
                                Email*
                          </p>
                            <input
                            type="email"
                            class="form-control"
                            name="email"
                            value="{{ $contactPage->email ?? '' }}">
                        </div>

                        <!-- phone -->
                        <div class="form-group">
                          <p style='text-align:left;' for="phone">
                            Phone*
                          </p>
                          <input
                          type="number"
                          class="form-control"
                          name="phone"
                          value="{{ $contactPage->phone ?? '' }}">
                        </div>

                        <!-- facebook -->
                        <div class="form-group">
                          <p style='text-align:left;' for="facebook">
                            Facebook*
                          </p>
                          <input
                          type="url"
                          class="form-control"
                          name="facebook"
                          value="{{ $contactPage->facebook ?? '' }}">
                        </div>  
                        
                        <!-- twitter -->
                        <div class="form-group">
                          <p style='text-align:left;' for="twitter">
                            Twitter*
                          </p>
                          <input
                          type="url"
                          class="form-control"
                          name="twitter"
                          value="{{ $contactPage->twitter ?? '' }}">
                        </div>

                        <!-- instagram -->
                        <div class="form-group">
                          <p style='text-align:left;' for="instagram">
                            Instagram*
                          </p>
                          <input
                          type="url"
                          class="form-control"
                          name="instagram"
                          value="{{ $contactPage->instagram ?? '' }}">
                        </div>

                        <!-- linkedin -->
                        <div class="form-group">
                          <p style='text-align:left;' for="linkedin">
                            Linkedin*
                          </p>
                          <input
                          type="url"
                          class="form-control"
                          name="linkedin"
                          value="{{ $contactPage->linkedin ?? '' }}">
                        </div>

                        <!-- youtube -->
                        <div class="form-group">
                          <p style='text-align:left;' for="youtube">
                          Youtube*
                          </p>
                          <input
                          type="url"
                          class="form-control"
                          name="youtube"
                          value="{{ $contactPage->youtube ?? '' }}">
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