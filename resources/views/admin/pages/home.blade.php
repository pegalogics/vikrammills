@extends('layouts.masterAdmin')
@section('content')
  <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Home page</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Home</li>
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
                    
                    <form action="{{ route('home.store')}}" method='post' enctype='multipart/form-data'>
                      @csrf
                      <div class="form-group">
                        <p style='text-align:left;' for="photo"> Banner</p>
                        <input type="file" class="form-control-file mb-2" id="photo" name="banner" require>
                          <div class='output'>
                          <img src="{{ url('public/img') }}/{{ $banner->banner ?? 'banner.jpg' }}" alt="banner" class="img-thumbnail img-fluid" style='max-width:300px'>
                          </div>
                       </div>


                       <!-- slider1 -->
                        <div class="form-group">
                         <p style="text-align:left;">Slider 1</p>
                         <input type="file" class="form-control-file mb-2" id="slider1" name="slider1" require>
                          <div class='output'>
                            <img src="{{ url('uploads/slider') }}/{{ $slider1 ?? ''  }}" alt=""slider1" class="img-thumbnail img-fluid" style='max-width:300px'>
                          </div>
                        </div>
                         <!-- slider2 -->
                        <div class="form-group">
                         <p style="text-align:left;">Slider 1</p>
                         <input type="file" class="form-control-file mb-2" id="slider2" name="slider2" require>
                          <div class='output'>
                            <img src="{{ url('uploads/slider') }}/{{ $slider2 ?? ''  }}" alt=""slider2" class="img-thumbnail img-fluid" style='max-width:300px'>
                          </div>
                        </div>
                         <!-- slider3 -->
                        <div class="form-group">
                         <p style="text-align:left;">Slider 1</p>
                         <input type="file" class="form-control-file mb-2" id="slider3" name="slider3" require>
                          <div class='output'>
                            <img src="{{ url('uploads/slider') }}/{{ $slider3 ?? ''  }}" alt=""slider3" class="img-thumbnail img-fluid" style='max-width:300px'>
                          </div>
                        </div>

                        <!-- about us content -->
                       <div class="form-group">
                         <p style="text-align:left;">About us content</p>
                         <textarea class="form-control" rows="3" id="about" name="about_content"  require>{{ $about_content }}</textarea>
                       </div>

                       <!-- product_title -->
                       <div class="form-group">
                         <p style="text-align:left;">Product title</p>
                         <textarea class="form-control" rows="3" id="product_title" name="product_title"  require>{{ $product_title }}</textarea>
                       </div>

                       <!-- product_description -->
                       <div class="form-group">
                         <p style="text-align:left;">Product description</p>
                         <textarea class="form-control" rows="3" id="product_description" name="product_description"  require>{{ $product_description }}</textarea>
                       </div>

                       <!-- benefits_description -->
                       <div class="form-group">
                         <p style="text-align:left;"> benefits description</p>
                         <textarea class="form-control" rows="3" id="benefits_description" name="benefits_description"  require>{{ $benefits_description }}</textarea>
                       </div>

                       <!-- testimonial_description -->
                       <div class="form-group">
                         <p style="text-align:left;">Testimonial description</p>
                         <textarea class="form-control" rows="3" id="testimonial_description" name="testimonial_description"  require>{{ $testimonial_description }}</textarea>
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