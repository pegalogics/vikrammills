@extends('layouts.master')
@section('title',
  'About')

@section('title',
  'About')

@section('content')
    @include('inc.user.banner')
    <!-- ABOUT US AREA START -->
    <div class="ltn__about-us-area pb-120" >
        <div class="container" >
            <div class="row">
                <div class="col-lg-12 col-md-12 align-self-center">
                    <div class="about-us-info-wrap pt-10 pb-30" >
                    <p align="center">Vikram Roller Flour Mills, we are continuously committed to making the order placement, Billing system, packaging, loading, and shipping process simple and hassle-free. We believe in investing the time in nurturing the relationship with you. And so, we ensure that every requirement or fulfillment of yours is always at the priority. Our order processing and delivery processes have been simplified so that you can spend more time focusing on important things, and no time in worrying. Following is the summary of how a typical bulk order is fulfilled by the Vikram Roller Flour Mills.</p>
                </div>
            </div>
        </div>
    </div>
        
    <!-- ABOUT US AREA END -->
		
	<!-- ABOUT US AREA START -->
    <div class="ltn__about-us-area pb-120">
        <div class="container" >
            <div class="row">
                <div align="center" class="col-lg-12 col-md-12 align-self-center">
                    <div class="about-us-info-wrap pt-10 pb-30" >
						<h1>Products to Offer</h1>
						<h4>You can buy the following assured quality products from us</h4>
                        <p align="center">With a wave of digitization and modernization, Vikram rollar flour mills has made it easier than ever to place orders. You can place the order in any quantity for the following products.</p>			
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT US AREA END -->
    
    <!-- PRODUCT DETAILS AREA START -->
	<div class="ltn__banner-area section-bg-1 mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__shop-options"><br><br>
                        <ul>
                          
                            <li>
                               <div class="short-by text-center">
                                    <select class="nice-select">
                                        <option>Sort By</option>
                                        <option>By Kilogram</option>
                                        <option>By Item</option>

                                    </select>
                                </div> 
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_product_grid">
                            <div class="ltn__product-tab-content-inner ltn__product-grid-view">
                                <div class="row">
                                    <!-- ltn__product-item -->
                                    <div class="col-xl-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="images/tanduri.png" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">For 10Kg / 5Kg</li>
                                                    </ul>
                                                </div>
                                             
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="product-details.html">Tandoori Atta</a></h2>
                                                <div class="product-price">
                                                    <span>&#x20B9; 350</span>
                                                    <del>&#x20B9; 400</del>
													
                                                </div>
												<div class="ltn__product-details-menu-2">
                                        <ul>
                                            <li>
                                                <div class="cart-plus-minus">
                                                    <input type="text" value="01" name="qtybutton" class="cart-plus-minus-box">
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#" class="theme-btn-1 btn btn-effect-1" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal" style="height: 43px; padding-top: 10px; margin-top: -4px;">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span>ADD TO CART</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                  <!-- ltn__product-item -->
                                    <div class="col-xl-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="images/product3.webp" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">For 500g / 50Kg</li>
                                                    </ul>
                                                </div>
                                                
                                            </div>
                                             <div class="product-info">
                                                <h2 class="product-title"><a href="product-details.html">Sooji</a></h2>
                                                <div class="product-price">
                                                    <span>&#x20B9; 350</span>
                                                    <del>&#x20B9; 400</del>
													
                                                </div>
												<div class="ltn__product-details-menu-2">
                                        <ul>
                                            <li>
                                                <div class="cart-plus-minus">
                                                    <input type="text" value="01" name="qtybutton" class="cart-plus-minus-box">
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#" class="theme-btn-1 btn btn-effect-1" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal" style="height: 43px; padding-top: 10px; margin-top: -4px;">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span>ADD TO CART</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
									                     <!-- ltn__product-item -->
                                    <div class="col-xl-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="images/product4.webp" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">For 10Kg / 5Kg</li>
                                                    </ul>
                                                </div>
                                            
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="product-details.html">Maida</a></h2>
                                                <div class="product-price">
                                                    <span>&#x20B9; 350</span>
                                                    <del>&#x20B9; 400</del>
                                                </div>
												<div class="ltn__product-details-menu-2">
                                        <ul>
                                            <li>
                                                <div class="cart-plus-minus">
                                                    <input type="text" value="01" name="qtybutton" class="cart-plus-minus-box">
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#" class="theme-btn-1 btn btn-effect-1" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal" style="height: 43px; padding-top: 10px; margin-top: -4px;">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span>ADD TO CART</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
									                     <!-- ltn__product-item -->
                                    <div class="col-xl-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="images/product1.webp" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">For 10Kg / 5Kg</li>
                                                    </ul>
                                                </div>
                                                
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="product-details.html">Rawa Atta</a></h2>
                                                <div class="product-price">
                                                    <span>&#x20B9; 350</span>
                                                    <del>&#x20B9; 400</del>
                                                </div>
												<div class="ltn__product-details-menu-2">
                                        <ul>
                                            <li>
                                                <div class="cart-plus-minus">
                                                    <input type="text" value="01" name="qtybutton" class="cart-plus-minus-box">
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#" class="theme-btn-1 btn btn-effect-1" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal" style="height: 43px; padding-top: 10px; margin-top: -4px;">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span>ADD TO CART</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
									    <!-- ltn__product-item -->
                                    <div class="col-xl-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="images/product2.webp" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">For 10Kg / 5Kg</li>
                                                    </ul>
                                                </div>
                                                
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="product-details.html">Dalia</a></h2>
                                                <div class="product-price">
                                                    <span>&#x20B9; 350</span>
                                                    <del>&#x20B9; 400</del>
                                                </div>
												<div class="ltn__product-details-menu-2">
                                        <ul>
                                            <li>
                                                <div class="cart-plus-minus">
                                                    <input type="text" value="01" name="qtybutton" class="cart-plus-minus-box">
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#" class="theme-btn-1 btn btn-effect-1" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal" style="height: 43px; padding-top: 10px; margin-top: -4px;">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span>ADD TO CART</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
									                     <!-- ltn__product-item -->
                                    <div class="col-xl-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="images/fresh-cakki.webp" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">For 10Kg / 5Kg</li>
                                                    </ul>
                                                </div>
                                               
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="product-details.html">Chakki Atta</a></h2>

                                                <div class="product-price">
                                                    <span>&#x20B9; 350</span>
                                                    <del>&#x20B9; 400</del>
                                                </div>
												<div class="ltn__product-details-menu-2">
                                        <ul>
                                            <li>
                                                <div class="cart-plus-minus">
                                                    <input type="text" value="01" name="qtybutton" class="cart-plus-minus-box">
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#" class="theme-btn-1 btn btn-effect-1" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal" style="height: 43px; padding-top: 10px; margin-top: -4px;">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span>ADD TO CART</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
									                     <!-- ltn__product-item -->
                                    <div class="col-xl-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="images/bran.png" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">For 49Kg</li>
                                                    </ul>
                                                </div>
                                                
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="product-details.html">India Gate Bran </a></h2>
                                                <div class="product-price">
                                                    <span>&#x20B9; 350</span>
                                                    <del>&#x20B9; 400</del>
                                                </div>
												<div class="ltn__product-details-menu-2">
                                        <ul>
                                            <li>
                                                <div class="cart-plus-minus">
                                                    <input type="text" value="01" name="qtybutton" class="cart-plus-minus-box">
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#" class="theme-btn-1 btn btn-effect-1" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal" style="height: 43px; padding-top: 10px; margin-top: -4px;">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span>ADD TO CART</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
									                 
                                    <!--  -->
                                </div>
                            </div>
                        </div>
                       
                    </div>
                
                </div>
              
            </div>
        </div>
    </div>
    <!-- PRODUCT DETAILS AREA END -->
    @include('inc.user.feature')
@endsection
