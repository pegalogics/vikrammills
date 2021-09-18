@extends('layouts.master')

@section('title',
  'About')

@section('content')
       
        @include('pages.includes.banner')

      <!-- WISHLIST AREA START -->
      <div class="liton__wishlist-area mb-105">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="shoping-cart-inner">
                          <div class="shoping-cart-table table-responsive">
                            <img src="images/faq.jpg" alt="">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- WISHLIST AREA START -->
        @include('pages.includes.feature')


@endsection
