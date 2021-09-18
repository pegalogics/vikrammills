
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vikram Mills</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets_admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('assets_admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets_admin/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>Vikram Mills</b>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="{{ url('admin/login') }}" method='post' novalidate="novalidate">
      	@csrf
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        @error('email')
	      <div class='alert alert-danger'>
	        {{ $message }}
	      </div>
	    @enderror
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" autocomplete="off" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        @error('password')
	      <div class='alert alert-danger'>
	        {{ $message }}
	      </div>
	    @enderror
        <div class="row">
          <div class="col-8">
            <a href="#">Forgot Password ?</a>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
          @if (Session::has('error'))
          	<div class="col-12">
              <div class="alert alert-danger mt-2">
                {{ Session::get('error') }}
              </div>
            </div>
          @endif
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
  <p class="mt-3 text-center text-secondary">Need any help? <a href="mailto:">Email us</a></p>
  <p class="mt-3 text-center text-secondary"><small>Copyright &copy; 2021, Vikram Mills | All Rights Reserved</small></p>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('assets_admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets_admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets_admin/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
