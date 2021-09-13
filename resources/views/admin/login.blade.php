<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
  <base href="../../../">
  <meta charset="utf-8" />
  <title>Pegalogics Theme | </title>
   <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!--begin::Fonts-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
  <!--end::Fonts-->
  <!--begin::Global Stylesheets Bundle(used by all pages)-->
  <link href="assets_admin/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
  <link href="assets_admin/css/style.bundle.css" rel="stylesheet" type="text/css" />
  <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="bg-white header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
  <!--begin::Main-->
  <div class="d-flex flex-column flex-root">
    <!--begin::Authentication - Sign-in -->
    <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-size1: 100% 50%; background-image: url(assets_admin/media/svg/illustrations/progress.svg)">
      <!--begin::Content-->
      <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
        <!--begin::Logo-->
        <!-- <a href="index.html" class="mb-12">
          <img alt="Logo" src="assets/media/logos/logo-2-dark.svg" class="h-45px" />
        </a> -->
        <h1>Vikram Mills</h1>
        <!--end::Logo-->
        <!--begin::Wrapper-->
        <div class="w-lg-500px bg-white rounded shadow-sm p-10 p-lg-15 mx-auto">
          <!--begin::Form-->
          <form action="{{ url('admin/login') }}" method='post' class="form w-100" novalidate="novalidate" id="kt_sign_in_form" action="admin/index">
            <!--begin::Heading-->
            @csrf
            <div class="text-center mb-10">
              <!--begin::Title-->
              <h1 class="text-dark mb-3">Sign In to Admin Panle</h1>
              <!--end::Title-->
              <!--begin::Link-->
              <!-- <div class="text-gray-400 fw-bold fs-4">New Here?
                <a href="authentication/flows/basic/sign-up.html" class="link-primary fw-bolder">Create an Account</a>
              </div> -->
              <!--end::Link-->
            </div>
            <!--begin::Heading-->
            <!--begin::Input group-->
            <div class="fv-row mb-10">
              <!--begin::Label-->
              <label class="form-label fs-6 fw-bolder text-dark">Email</label>
              <!--end::Label-->
              <!--begin::Input-->
              <input class="form-control form-control-lg form-control-solid" type="text" name="email" autocomplete="off" />
              @error('email')
              <div class='alert alert-danger'>
                {{ $message }}
              </div>
              @enderror
              <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="fv-row mb-10">
              <!--begin::Wrapper-->
              <div class="d-flex flex-stack mb-2">
                <!--begin::Label-->
                <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                <!--end::Label-->
                <!--begin::Link-->
                <a href="authentication/flows/basic/password-reset.html" class="link-primary fs-6 fw-bolder">Forgot Password ?</a>
                <!--end::Link-->
              </div>
              <!--end::Wrapper-->
              <!--begin::Input-->
              <input class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off" />
              @error('password')
              <div class='alert alert-danger'>
                {{ $message }}
              </div>
              @enderror
              <!--end::Input-->
            </div>
            @if (Session::has('error'))
              <div class="alert alert-danger">
                {{ Session::get('error') }}
              </div>
            @endif
            <!--end::Input group-->
            <!--begin::Actions-->
            <div class="text-center">
              <!--begin::Submit button-->
              <button type="submit" class="btn btn-lg btn-primary fw-bolder me-3 my-2">
                <span class="indicator-label">Sign In</span>
                <span class="indicator-progress">Please wait...
                  <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
              </button>
              <!--end::Submit button-->
              <!--begin::Google link-->
              <a href="#" class="btn btn-light-primary btn-lg fw-bolder my-2">
                <img alt="Logo" src="assets_admin/media/svg/social-icons/google.svg" class="h-20px me-3" />Sign in with Google</a>
              <!--end::Google link-->
            </div>
            <!--end::Actions-->
          </form>
          <!--end::Form-->
        </div>
        <!--end::Wrapper-->
      </div>
      <!--end::Content-->
      <!--begin::Footer-->
      <div class="d-flex flex-center flex-column-auto p-10">
        <!--begin::Links-->
        <div class="d-flex align-items-center fw-bold fs-6">
          <a href="#" class="text-muted text-hover-primary px-2">About</a>
          <a href="#" class="text-muted text-hover-primary px-2">Contact</a>
          <a href="#" class="text-muted text-hover-primary px-2">Contact Us</a>
        </div>
        <!--end::Links-->
      </div>
      <!--end::Footer-->
    </div>
    <!--end::Authentication - Sign-in-->
  </div>
  <!--end::Main-->
  <!--begin::Javascript-->
  <!--begin::Global Javascript Bundle(used by all pages)-->
  <script src="assets_admin/plugins/global/plugins.bundle.js"></script>
  <script src="assets_admin/js/scripts.bundle.js"></script>
  <!--end::Global Javascript Bundle-->
  <!--begin::Page Custom Javascript(used by this page)-->
  <script src="assets_admin/js/custom/authentication/sign-in/general.js"></script>
  <!--end::Page Custom Javascript-->
  <!--end::Javascript-->
</body>
<!--end::Body-->
</html>