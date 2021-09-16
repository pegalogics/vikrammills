@extends('layouts.master')

@section('title',
  'Login')

@section('content')
 
    


    <!--LOGIN AREA PART START-->

    <!-- WISHLIST AREA START -->
    <div class="liton__wishlist-area pb-120">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 ">
            <!-- PRODUCT TAB AREA START -->
            <div class="ltn__product-tab-area pt-30">
              <div class="container">
                @if (Session::has('success'))
                  <div class="alert alert-success">
                    {{ Session::get('success') }}
                  </div>
                @endif
                <h1 align="center">Sign in </h1>

                <div align="right" class="row " style="box-shadow: 5px 5px 5px 5px rgba(0,0,0,0.2);">

                  <!--<input type="button" class="google" value="Login with Google">  <button class="face "> Login with Facebook</button>-->
                  <button class="button button2">Login with Google</button>
                  <button class="button button2 but">Login with Facebook</button><br>
                  <div class="col-lg-12  pt-30">
                    <br>

                    <div class="ltn__myaccount-tab-content-inner">

                      <div class="ltn__form-box">
                        <form method="POST" action="{{ url('login') }}">
                          @csrf
                          <div class="row mb-50">

                            <div class="col-md-12">

                                <input type="text" name="email" placeholder="Email" required>
                            </div>
                            <div class="col-md-12">

                                <input type="password" name="password" placeholder="Password" required>
                            </div>
                            @if (Session::has('error'))
                            <div class="col-md-12">
                              <div class="alert alert-danger text">
                                {{ Session::get('error') }}
                              </div>
                            </div>
                            @endif

                            <div align="left" class="col-md-12">
                              <div class="col-lg-6">
                                <a href="#"><strong>Forgot Password?</strong></a>
                              </div>

                            </div>
                          </div>

                          <div class="btn-wrapper text-center">
                            <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase" style="height: 50px;">Save Changes</button>
                          </div>
                        </form>
                        <br>
                        <h4 align="center"> Don't have an account?
                          <a href={{ url('signup') }}>Create One</a>
                        </h4>
                        <br>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- PRODUCT TAB AREA END --><br>
            <br>

          </div>
        </div>
      </div>
    </div>
    <!-- WISHLIST AREA START -->

    <!--LOGIN AREA PART END-->



    <!-- OUR HISTORY AREA START -->

    <!-- FEATURE AREA START ( Feature - 3) -->
    <div class="ltn__feature-area before-bg-bottom-2 mb--30--- plr--5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__feature-item-box-wrap ltn__border-between-column white-bg">
                        <div class="row">
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="ltn__feature-item ltn__feature-item-8">
                                    <div class="ltn__feature-icon">
                                        <img src="img/icons/svg/4-track.svg" alt="#">
                                    </div>
                                    <div class="ltn__feature-info">
                                        <h4>Free home delivery</h4>
                                        <p>Provide free home delivery for
                                            all product over $100</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="ltn__feature-item ltn__feature-item-8">
                                    <div class="ltn__feature-icon">
                                        <img src="img/icons/svg/5-madel.svg" alt="#">
                                    </div>
                                    <div class="ltn__feature-info">
                                        <h4>Quality Products</h4>
                                        <p>We ensure the product quality
                                            that is our main goal</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="ltn__feature-item ltn__feature-item-8">
                                    <div class="ltn__feature-icon">
                                        <img src="img/icons/svg/6-return.svg" alt="#">
                                    </div>
                                    <div class="ltn__feature-info">
                                        <h4>3 Days Return</h4>
                                        <p>Return product within 3 days
                                            for any product you buy</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="ltn__feature-item ltn__feature-item-8">
                                    <div class="ltn__feature-icon">
                                        <img src="img/icons/svg/7-support.svg" alt="#">
                                    </div>
                                    <div class="ltn__feature-info">
                                        <h4>Online Support</h4>
                                        <p>We ensure the product quality
                                            that you can trust easily</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FEATURE AREA END -->
    
    
 
  

@endsection
