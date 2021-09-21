@extends('layouts.master')

@section('title',
  'Login')

@section('content')

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
							
                                <div class="col-lg-12  pt-30">
                                   <div class="ltn__myaccount-tab-content-inner">
                                        <div class="ltn__form-box">
                                            <form action={{ url('signup') }} method='post'  class="ltn__form-box contact-form-box">
                                            @csrf
                                              <div class="row">
                                                <div class="col-12">
                    
                                                  <input type="text" name="first_name" placeholder="First Name" required>
                                                  @error('first_name')
                                                    <div
                                                         class="alert alert-danger">
                                                      {{ $message }}
                                                    </div>
                                                  @enderror
                                                </div>

                                                <div class="col-12">
                    
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
                                                
                                                <div class="col-12">
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

                                                <div class="col-12">
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

                                                

                                                <div class="col-12">
                                                  <input id='password'
                                                         type="password"
                                                         name="password"
                                                         placeholder="Enter the code we just send on your mobile phone*"
                                                         required>
                                                  @error('password')
                                                    <div
                                                         class="alert alert-danger">
                                                      {{ $message }}
                                                    </div>
                                                  @enderror
                                                  
                                                </div>
                    
                                                
                            
                                                <div class="col-12">
                                                  <input type="checkbox" title="" required>
                                                  I agree with the Terms and Conditions
                                                </div>
                                                
                                                <div class="col-12 btn-wrapper">
                                                  <button id='submit_button' class="theme-btn-1 btn reverse-color btn-block" type="submit" style="height: 50px;">CREATE ACCOUNT</button>
                                                
                                                </div>
                                              </div>

                                              
                                            </form>
                                            <center>  <h2 align="center">Already have an account? <a href="{{ url('login') }}" class="btn btn-danger text-uppercase">Login</a></h2></center>
                                            

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

    @include('inc.user.feature')
    
    @include('inc.user.footer')
  
    @include("inc/user/confirmPasswordScript")


@endsection
