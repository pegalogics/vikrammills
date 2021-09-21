@extends('layouts.master')

@section('title',
  'About')

@section('content')
       
        @include('inc.user.banner')
      <div class="container py-5 my-5">
            <div class="row">
                <div class="col-12">
                    <!-- Title -->
                	  <div class="title">
                	    Shopping Cart
                	  </div>
                </div>
                <div class="col-lg-9 col-md-8 p-3">
                    <div class="shopping-cart">
        
                	  
                	 
                	  <!-- Product #1 -->
                	  <div class="item">
                	    <div class="buttons">
                	      <span class="delete-btn"></span>
                	      <span class="like-btn"></span>
                	    </div>
                	 
                	    <div class="image">
                	      <img src="http://vikrammills.webdevelopmentagency.in/product4.webp" alt="" />
                	    </div>
                	 
                	    <div class="description">
                	      <span>Common Projects</span>
                	      <span>Bball High</span>
                	      <span>White</span>
                	    </div>
                	 
                	    <div class="quantity">
                	      <button class="plus-btn" type="button" name="button">
                	        <img src="{{ asset('img/icons/plus.svg') }}" alt="" />
                	      </button>
                	      <input type="text" name="name" value="1">
                	      <button class="minus-btn" type="button" name="button">
                	        <img src="{{ asset('img/icons/minus.svg') }}" alt="" />
                	      </button>
                	    </div>
                	 
                        <div class="total-price">1 KG</div>
                        <div class="total-price"><del>$549</del></div>
                	    <div class="total-price">$549</div>
                	  </div>
                	  
                	</div>
                	<a href="{{url('products') }}" class="btn btn-dark px-3 py-2 rounded mt-4">Continue Shopping</a>
                </div>
                <div class="col-lg-3 col-md-4 p-3">
                    <div class="bg-light p-3 border rounded">
                        <h3>Order Summery</h3>
                        <table class="table">
                            <tr>
                                <td colspan="2">
                                    <label>Coupon Code</label>
                                    <input type="text" class="form-control" name="coupon" placeholder="Enter code">
                                </td>
                            </tr>
                            <tr>
                                <th>Sub Total</th><th class="text-right">INR 200.00</th>
                            </tr>
                            <tr>
                                <th>Discount</th><th class="text-warning text-right">INR 50.00</th>
                            </tr>
                            <tr class="border-top">
                                <th>Total</th><th class="text-dark text-right">INR 150.00</th>
                            </tr>
                        </table>
                        <a href="{{url('') }}" class="btn btn-success btn-block px-3 py-2 rounded">Proceed to Checkout</a>
                    </div>
                    
                </div>
            </div>
        	
        </div>
        
        @include('inc.user.feature')


@endsection
