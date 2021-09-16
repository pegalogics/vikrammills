@extends('layouts.master')

@section('title',
  'Login')

@section('content')
 
    @include('inc.user.Header')

    <!-- WISHLIST AREA START -->
    <div class="liton__wishlist-area pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- PRODUCT TAB AREA START -->
                    <div class="ltn__product-tab-area pt-30" >
                        <div class="container">
							<h1 align="center">Create New Account </h1>
                            <div class="row"  style="box-shadow: 5px 5px 5px 5px rgba(0,0,0,0.2);" >			
							
                              <button class="button button2">Login with Google</button>
                                <button class="button button2 but"> Login with Facebook</button><br>
                                <div class="col-lg-12  pt-30">
                                   <div class="ltn__myaccount-tab-content-inner">
                                        <div class="ltn__form-box">
                                            <form action={{ url('signup') }} method='post'>
                                            @csrf
                                              <div class="row mb-50">
                                                <div class="col-md-6">
                    
                                                  <input type="text" name="first_name" placeholder="First Name" required>
                                                  @error('first_name')
                                                    <div
                                                         class="alert alert-danger">
                                                      {{ $message }}
                                                    </div>
                                                  @enderror
                                                </div>

                                                <div class="col-md-6">
                    
                                                  <input type="text"
                                                         name="last_name"
                                                         placeholder=" Last Name"
                                                         required>
                                                  @error('last_name')
                                                    <div
                                                         class="alert alert-danger">
                                                      {{ $message }}
                                                    </div>
                                                  @enderror
                                                </div>


                                                <div class="col-md-6">
                                                  <input type="text"
                                                         name="mobile"
                                                         placeholder="Mobile"
                                                         required>
                                                  @error('mobile')
                                                    <div
                                                         class="alert alert-danger">
                                                      {{ $message }}
                                                    </div>
                                                  @enderror
                                                </div>

                                                <div class="col-md-6">
                                                  <input type="email"
                                                         name="email"
                                                         placeholder="example@example.com"
                                                         required>
                                                  @error('email')
                                                    <div
                                                         class="alert alert-danger">
                                                      {{ $message }}
                                                    </div>
                                                  @enderror
                                                </div>

                                                <div class="col-md-6">
                                                  <input id='password'
                                                         type="password"
                                                         name="password"
                                                         placeholder="Password"
                                                         required
                                                         pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                                                  @error('password')
                                                    <div
                                                         class="alert alert-danger">
                                                      {{ $message }}
                                                    </div>
                                                  @enderror
                                                  <div class="alert alert-info">
                                                    <strong>Password must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters</strong>
                                                  </div>
                                                </div>
                    
                                                <div class="col-md-6">
                    
                                                  <input id='password_confirm'
                                                         type="password"
                                                         name="password_confirm"
                                                         placeholder="Confirm Password"
                                                         required
                                                         pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                                                    
                                                    <p id='password_confirm_text'
                                                         class="mt-2 text-danger"
                                                         style='display:none;'> Password does not match
                                                    </p>
                                                </div>
                            
                                                <div class="col-md-6">
                                                  <input type="checkbox" title="" required>
                                                  I agree with the Terms and Conditions
                                                </div>
                                              </div>

                                              <div class="btn-wrapper text-center">
                                                <button id='submit_button' type="submit"
                                                        class="btn theme-btn-1 btn-effect-1 text-uppercase"
                                                        style="height: 50px;">Save
                                                  Changes</button>
                                              </div>
                                            </form>
                                            <br>
                                            <h4 align="center">Already  have  an account? <a href={{ url('login') }}>Login</a> </h4>
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
    
    @include('inc.user.footer')
  
    @include("inc/user/confirmPasswordScript")


@endsection
