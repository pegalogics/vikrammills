@extends('layouts.master')

@section('title',
  'About')

@section('content')   
        @include('inc.user.banner')
        <!-- SHOP DETAILS AREA START -->
        <!-- line -->
        <div class="ltn__shop-details-area pt-120 pb-85">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="ltn__shop-details-inner mb-60">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="ltn__shop-details-img-gallery">
                                        <div class="ltn__shop-details-large-img">
                                            <div class="single-large-img text-center">

                                                <img src="images/fresh-cakki.jpg" alt="Image">

                                            </div>
                                        </div>
                                        <div class="ltn__shop-details-small-img slick-arrow-2">
                                            <div class="single-small-img">
                                                <img src="images/fresh-cakki.webp" alt="Image">
                                            </div>
                                            <div class="single-small-img">
                                                <img src="images/fresh-cakki.webp" alt="Image">
                                            </div>
                                            <div class="single-small-img">
                                                <img src="images/fresh-cakki.webp" alt="Image">
                                            </div>
                                            <div class="single-small-img">
                                                <img src="images/fresh-cakki.webp" alt="Image">
                                            </div>
                                            <div class="single-small-img">
                                                <img src="images/fresh-cakki.webp" alt="Image">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="modal-product-info shop-details-info pl-0">
                                        <div class="product-ratting">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                <li class="review-total"> <a href="#"> ( 05 Reviews )</a></li>
                                            </ul>
                                        </div>
                                        <h1>Tandoori Atta</h1>
                                        <div class="product-price">
                                            <span>&#x20B9; 350</span>
                                            <del style="color:#c0c0c0;"> &#x20B9;400</del><br>

                                            <span style="font-size: 12px; color: black">(inclusive of all taxes)</span>
                                        </div>



                                        <div class="ltn__product-details-menu-2">
                                            <ul>
                                                <li>
                                                    <div class="cart-plus-minus">
                                                        <input type="text" value="01" name="qtybutton"
                                                            class="cart-plus-minus-box">
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="#" class="theme-btn-1 btn btn-effect-1" title="Add to Cart"
                                                        data-toggle="modal" data-target="#add_to_cart_modal"
                                                        style="height: 43px; padding-top: 10px; margin-top: -4px;">
                                                        <i class="fas fa-shopping-cart"></i>
                                                        <span>ADD TO CART</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="theme-btn-1 btn btn-effect-1" title="Add to Cart"
                                                        data-toggle="modal" data-target="#add_to_cart_modal"
                                                        style="height: 43px; padding-top: 10px; margin-top: -4px;">
                                                        <i class="fas fa-bolt"></i>
                                                        <span>Buy Now</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ltn__product-details-menu-3">
                                            <ul>
                                                <li>
                                                    <a href="#" class="" title="Wishlist" data-toggle="modal"
                                                        data-target="#liton_wishlist_modal">
                                                        <i class="far fa-heart"></i>
                                                        <span>Add to Wishlist</span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                        <hr>
                                        <!-- Shop Tab Start -->
                                        <div class="ltn__shop-details-tab-inner ltn__shop-details-tab-inner-2">
                                            <div class="ltn__shop-details-tab-menu">
                                                <div class="nav">
                                                    <h3> Product Details</h3>

                                                </div>
                                            </div>
                                            <div class="tab-content">
                                                <div class="tab-pane fade active show" id="liton_tab_details_1_1">
                                                    <div class="ltn__shop-details-tab-content-inner">

                                                        <p>Processing of Vikram Mills fresh wheat flour or Atta begins
                                                            with picking the best-quality wheat grains. Numerous quality
                                                            checks, washing, and filtration ensure the cleanest wheat
                                                            before stone grinding it. Our wheat flour is neither too
                                                            coarse nor too fine, representing the best consistency
                                                            required for wheat flour. Maida content in wheat flour is
                                                            zero, and Vikram roller flour mills atta can be easily
                                                            differentiated by its taste, softness, sweet aroma, and
                                                            fluffiness.</p>

                                                        <ul>
                                                            <li>Baked items like Cakes, Biscuits, Muffins, PanCakes,
                                                                etc.</li>
                                                            <li>Snacks like Samosa, Bhajiya, Jalebi, Spaghetti,
                                                                Vermicelli, Macaroni, Pasta, etc.</li>
                                                        </ul>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Shop Tab End -->

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Shop Tab Start -->
                        <div class="ltn__shop-details-tab-inner ltn__shop-details-tab-inner-2">
                            <div class="tab-content">
                                <div class="tab-pane fade active show">
                                    <div class="ltn__shop-details-tab-content-inner">
                                        <h3><strong>Vikram Roller Flour Mills Types of Wheat Flour</strong></h3>

                                        <p>At Vikram Roller Flour Mills we produce two major types of wheat flour
                                            (Atta);</p>

                                        <p><strong>Chakki Atta</strong></p>

                                        <p>Vikram Mills Chakki atta contains higher bran and fiber content and is
                                            perfect to be used for Chapatis, Naans, Paranthas, and Pooris.</p>

                                        <p><strong>Mill Atta</strong></p>

                                        <p>Our&nbsp;Mill Atta contains a lesser amount of fiber and bran, making it
                                            easier to digest and light on the diet.</p>

                                        <p><strong>Both the type of flours come in Branded and Non-branded
                                                packaging.</strong></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Shop Tab End -->
                        <div class="ltn__shop-details-tab-inner ltn__shop-details-tab-inner-2">
                            <div class="tab-content">
                                <div class="tab-pane fade active show">
                                    <div class="ltn__shop-details-tab-content-inner">
                                        <img src="img/product/2.jpg" alt="" />
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Shop Tab End -->
                    </div>

                </div>
            </div>
        </div>
        <!-- SHOP DETAILS AREA END -->
        @include('inc.user.feature')


@endsection
