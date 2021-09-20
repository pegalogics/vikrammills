@extends('layouts.master')

@section('title',
  'Login')

@section('content')
 
    



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
                <h1 align="center" class="section-title">Sign In <br>To  Your Account</h1>

                <div align="right" class="row " style="box-shadow: 5px 5px 5px 5px rgba(0,0,0,0.2);">

                  
                  <div class="col-lg-12  pt-30">
                    <br>

                    <div class="ltn__myaccount-tab-content-inner">

                      <div class="ltn__form-box">
                        <form method="POST" action="{{ url('login') }}" class="ltn__form-box contact-form-box">
                          @csrf
                          <div class="row mb-50">

                            <div class="col-md-12">

                                <input type="text" name="mobile" placeholder="Mobile*" required>
                            </div>
                            <div class="col-md-12">

                                <input type="password" name="password" placeholder="Enter the code we just send on your mobile phone*" required>
                            </div>
                            
                            <div class="col-12 btn-wrapper mt-0 text-center">
                                <button class="btn btn-outline-warning text-uppercase" type="submit" style="height: 50px;"> Don't receive the code?</button>
								<button class="btn btn-outline-danger text-uppercase" type="submit" style="height: 50px;"> Resend</button>
                            </div>
                            
                            @if (Session::has('error'))
                            <div class="col-md-12">
                              <div class="alert alert-danger text">
                                {{ Session::get('error') }}
                              </div>
                            </div>
                            @endif
                            
                            <div class="col-12 btn-wrapper text-center">
                                <button type="submit" class="theme-btn-1 btn btn-block text-uppercase" style="height: 50px;"> Verified</button>
                            </div>

                          </div>

                          
                        </form>
                        <br>
                        <div class="account-create text-center pb-40">
                            <h4>DON'T HAVE AN ACCOUNT?</h4>
                            <a href="{{ url('signup') }}" class="btn btn-danger text-uppercase">CREATE ACCOUNT</a>
                          
                        </div>
                        
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




    <!-- OUR HISTORY AREA START -->

    @include('inc.user.feature')
    
    
 
  

@endsection
