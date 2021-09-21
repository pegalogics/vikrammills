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
                    
                    <form action="{{ route('about.store')}}" method='post' enctype='multipart/form-data'>
                      @csrf
                      <div class="form-group">
                        <p style='text-align:left;' for="photo"> Banner</p>
                        <input type="file" class="form-control-file mb-2" id="photo" name="about_banner" require>
                          <div class='output'>
                          <img src="{{ url('public/img/about') }}/{{ $about->about_banner ?? '' }}" alt="about_banner" class="img-thumbnail img-fluid" style='max-width:300px'>
                          </div>
                       </div>
          
                     
                       
                      
                       <!-- about us content -->
                       <div class="form-group">
                         <p style="text-align:left;">About us content</p>
                         <textarea class="form-control" rows="3" id="about" name="about_content"  require>{{ $about->about_content }}</textarea>
                       </div>


                       <!-- about us pic -->
                       <div class="form-group">
                         <p style="text-align:left;">About us pic</p>
                         <input type="file" class="form-control-file mb-2" id="about_pic" name="about_pic" require>
                          <div class='output'>
                            <img src="{{ url('public/img/about') }}/{{ $about->about_pic ?? ''  }}" alt=""about_pic" class="img-thumbnail img-fluid" style='max-width:300px'>
                          </div>
                        </div>

                       <!-- our_history_content -->
                       <div class="form-group">
                         <p style="text-align:left;">Our History content</p>
                         <textarea class="form-control" rows="3" id="our_history" name="our_history_content" require>{{ $about->our_history_content }}</textarea>
                       </div>

                       <!-- our_history_pic -->
                       <div class="form-group">
                         <p style="text-align:left;">Our History pic</p>
                         <input type="file" class="form-control-file mb-2" id="our_history_pic" name="our_history_pic" require>
                         <div class='output'>
                              <img src="{{ url('public/img/about') }}/{{ $about->our_history_pic ?? ''  }}" alt=""our_history_pic" class="img-thumbnail img-fluid" style='max-width:300px'>
                         </div>
                        </div>

                        <!-- brand_content -->
                      <div class="form-group">
                        <p style='text-align:left;'>Brand content</p>
                        <textarea class="form-control" rows="3" id="brand" name="brand_content" require> {{ $about->brand_content }}</textarea>
                      </div>

                      <!-- brand_pic -->
                      <div class="form-group">
                        <p style='text-align:left;'>Brand pic</p>
                        <input type="file" class="form-control-file mb-2" id="brand_pic" name="brand_pic" require>
                        <div class='output'>
                            <img src="{{ url('public/img/about') }}/{{ $about->brand_pic ?? ''  }}" alt=""brand_pic" class="img-thumbnail img-fluid" style='max-width:300px'>
                        </div>
                      </div>

                      <!-- why_choose_us_content -->
                      <div class="form-group">
                        <p style='text-align:left;'>Why choose us content</p>
                        <textarea class="form-control" rows="3" id="why_choose_us" name="why_choose_us_content" require> {{  $about->why_choose_us_content }}</textarea>
                      </div>

                      <!-- pic_after_why_choose_us_content -->
                      <div class="form-group">
                        <p style='text-align:left;'>Pic after why choose us content</p>
                        <input type="file" class="form-control-file mb-2" id="pic_after_why_choose_us_content" name="pic_after_why_choose_us_content" require>
                        <div class='output'>
                            <img src="{{ url('public/img/about') }}/{{ $about->pic_after_why_choose_us_content ?? ''  }}" alt=""pic_after_why_choose_us_content" class="img-thumbnail img-fluid" style='max-width:300px'>
                        </div>
                      </div>

                      <!-- our_vision_content -->
                      <div class="form-group">
                        <p style='text-align:left;'>Our Vision content</p>
                        <textarea class="form-control" rows="3" id="our_vision" name="our_vision_content" require> {{  $about->our_vision_content }}</textarea>
                      </div>

                      <!-- our_vision_background -->
                      <!-- <div class="form-group">
                        <p style='text-align:left;'>Our Vision background</p>
                        <input type="file" class="form-control-file mb-2" id="our_vision_background" name="our_vision_background" require>
                        <div class='output'>
                            <img src="{{ url('public/img/about') }}/{{ $about->our_vision_background ?? ''  }}" alt="our_vision_background" class="img-thumbnail img-fluid" style='max-width:300px'>
                        </div>
                      </div> -->


                      <!-- our_mission -->
                      <div class="form-group">
                        <p style='text-align:left;'>Our Mission</p>
                        <textarea class="form-control" rows="3" id="our_mission" name="our_mission" require> {{  $about->our_mission }}</textarea>
                      </div>

                      <!-- our_mission_background -->
                      <!-- <div class="form-group">
                        <p style='text-align:left;'>Our Mission background</p>
                        <input type="file" class="form-control-file mb-2" id="our_mission_background" name="our_mission_background" require>
                        <div class='output'>
                            <img src="{{ url('public/img/about') }}/{{ $about->our_mission_background ?? ''  }}" alt=""our_mission_background" class="img-thumbnail img-fluid" style='max-width:300px'>
                        </div>
                      </div> -->

                      <!-- our_management_content -->
                      <div class="form-group">
                        <p style='text-align:left;'>Our Management content</p>
                        <textarea class="form-control" rows="3" id="our_management" name="our_management_content" require> {{ $about->our_management_content }}</textarea>
                      </div>

                      <!-- our_management_pic -->
                      <div class="form-group">
                        <p style='text-align:left;'>Our Management pic</p>
                        <input type="file" class="form-control-file mb-2" id="our_management_pic" name="our_management_pic" require>
                        <div class='output'>
                            <img src="{{ url('public/img/about') }}/{{ $about->our_management_pic ?? ''  }}" alt=""our_management_pic" class="img-thumbnail img-fluid" style='max-width:300px'>
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