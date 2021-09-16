

    <!-- HEADER AREA START (header-4) -->
    @include("inc.user.Header")
    <!-- HEADER AREA END -->



    <!-- SLIDER AREA START (slider-1) -->
    <div class="ltn__slider-area  mb-120">
        <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1">
            <!-- ltn__slide-item -->
            <div class="ltn__slide-item section-bg-1">
                <div class="ltn__slide-item-inner">
					<img src="images/vikram-mills-banner.webp" alt="Image">
                    
                </div>
            </div>
            <!-- ltn__slide-item -->
            <div class="ltn__slide-item section-bg-1">
                <div class="ltn__slide-item-inner">
                  <img src="images/about-middel.jpg" alt="Image">
                </div>
            </div>
        </div>
    </div>
    <!-- SLIDER AREA END -->

    <!-- ABOUT US AREA START -->
    <div class="ltn__about-us-area pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 align-self-center">
                    <div class="about-us-info-wrap pt-30 pb-30">
                       
                        <h1>About us</h1>
                        <p>Vikram Roller Flour Mills Limited is among the pioneers of Agro-products manufacturing, specialized in the best quality of wheat products manufacturing. Vikram roller flour mills were incepted four decades back in 1973 in National Capital – New Delhi. In these glorious 46 years, the company has grown as one of the leading manufacturing of wheat products like – Wheat Flour (Atta), White Flour (Maida), Semolina (Suji), Bran (Chokar) and Broken Wheat (Dallia), etc. <a href="about.html" class="btn btn-link">- Read More</a></p>

                      
                    </div>
                </div>
            
                </div>
            </div>
        
  
    <!-- ABOUT US AREA END -->

     <!-- PRODUCT AREA START -->
    <div class="ltn__product-area pb-10" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area text-center"><br>
						<br>

                        <h1 class="section-title-product">Products</h1>
						<h4 style="color: aliceblue">You can buy the following assured quality products from us</h4>

						<p style="color: aliceblue;">With a wave of digitization and modernization, Vikram rollar flour mills has made it easier than ever to place orders. You can place the order in any quantity for the following products.</p>
                        
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <!-- ltn__product-item -->
                @foreach($products as $product)
                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                    <div class="ltn__product-item ltn__product-item-3 text-center">
                        <div class="product-img">
                            <a href="product.html"><img src={{url($product->pic)}} alt="#"></a>
                      </div>
                        
                    </div>
                </div>
                @endforeach
                
				
            </div>
        </div>
    </div>
    <!-- PRODUCT SLIDER AREA END -->
		
    <!-- MODAL AREA START (Quick View Modal) -->
    <div class="ltn__modal-area ltn__quick-view-modal-area">
        <div class="modal fade" id="quick_view_modal">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <!-- <i class="fas fa-times"></i> -->
							
                        </button>
                    </div>
                    <div class="modal-body" align="center">
                         <div class="ltn__quick-view-modal-inner">
                             <div class="modal-product-item">
                                <div class="row">
                                    <div class="col-lg-12 col-12">
                                        <div class="modal-product-img">
                                            <img src="images/tanduri.jpg" height="" alt="#">
                                        </div>
                                    </div>
                                
                                </div>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL AREA END -->

    <!-- MODAL AREA START (Quick View Modal) -->
    <div class="ltn__modal-area ltn__quick-view-modal-area">
        <div class="modal fade" id="quick_view_modal1">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <!-- <i class="fas fa-times"></i> -->
							
                        </button>
                    </div>
                    <div class="modal-body" align="center">
                         <div class="ltn__quick-view-modal-inner">
                             <div class="modal-product-item">
                                <div class="row">
                                    <div class="col-lg-12 col-12">
                                        <div class="modal-product-img">
                                            <img src="images/maida.jpg" height="" alt="#">
                                        </div>
                                    </div>
                                
                                </div>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL AREA END -->

    <!-- MODAL AREA START (Quick View Modal) -->
    <div class="ltn__modal-area ltn__quick-view-modal-area">
        <div class="modal fade" id="quick_view_modal3">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <!-- <i class="fas fa-times"></i> -->
							
                        </button>
                    </div>
                    <div class="modal-body" align="center">
                         <div class="ltn__quick-view-modal-inner">
                             <div class="modal-product-item">
                                <div class="row">
                                    <div class="col-lg-12 col-12">
                                        <div class="modal-product-img">
                                            <img src="images/dalia.jpg" height="" alt="#">
                                        </div>
                                    </div>
                                
                                </div>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL AREA END -->
		
		 <!-- MODAL AREA START (Quick View Modal) -->
    <div class="ltn__modal-area ltn__quick-view-modal-area">
        <div class="modal fade" id="quick_view_modal4">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria	-hidden="true">&times;</span>
                            <!-- <i class="fas fa-times"></i> -->
							
                        </button>
                    </div>
                    <div class="modal-body" align="center">
                         <div class="ltn__quick-view-modal-inner">
                             <div class="modal-product-item">
                                <div class="row">
                                    <div class="col-lg-12 col-12">
                                        <div class="modal-product-img">
                                            <img src="images/sooji.jpg" height="" alt="#">
                                        </div>
                                    </div>
                                
                                </div>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL AREA END -->
	

    <!-- CALL TO ACTION START (call-to-action-1) -->
    <div class="call-to-action-area call-to-action-1 bg-image section-bg-2 pt-220 " data-bg="images/banner.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-9">
                    <div class="call-to-action-inner benefits ">
                        <h1>Benefits of Product</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <div class="btn-wrapper">
                            <a class="theme-btn-1 btn btn-effect-1 text-uppercase" href="product.html">View More</a>
                        </div>
                    </div>
                    <div class="ltn__feature-area pt-80 pb-10">
                        <div class="container-fluid">
                            <div class="row" >
                                <div class="col-lg-12">
                					
                                   <div class="ltn__border-between-column ">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-6 col-12">
                                               <div class="do1t" style="padding-top: 19px;">
                								 <img src="img/icons/11.png" height="60" alt="#"><br>
                                                   </div>
                                              <p class="prod" style="color: black;">Incorporates the most modern mechanisms and trends for the finest quality wheat produce</p>
                								
                                            </div>
                							 <div class="col-lg-3 col-md-6 col-12">
                                               <div class="do1t">
                								 <img src="img/icons/12.png" height="70"  alt="#"><br>
                                                   </div>
                                             <p class="prod"  style="color: black;">Hassle-free branded & <br> unbranded packaging and delivery processes</p>
                								
                                            </div>
                							 <div class="col-lg-3 col-md-6 col-12">
                                               <div align="center" class="do1t">
                								 <img src="img/icons/14.png" height="70" alt="#"><br>
                                                   </div>
                                              <p class="prod" style="color: black;">Production capacity <br> of 200 MT</p>
                								
                                            </div>
                							 <div class="col-lg-3 col-md-6 col-12">
                                               <div class="do1t">
                								 <img src="img/icons/15.png" height="70" alt="#"><br>
                                                   </div>
                                             <p class="prod" style="color: black;">Abides by standards of <br> hygiene and purity set by the government.   </p>
                								
                                            </div>
                                         
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CALL TO ACTION END -->

    <!-- PRODUCT AREA START -->
    <div class="ltn__testimonial-area pb-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area text-center"><br>
						<br>
						<h1>Testimonial</h1>
                        <p>There are many variations of passages of Lorem Ipsum available.</p>
                    </div>
                </div>
            </div>
           <!-- <div class="row justify-content-center ">-->
			
			 <div class="row  ltn__testimonial-item-4 ltn__testimonial-slider-2-active slick-arrow-1 slick-arrow-1 content-center">
                <!-- ltn__testimoial-item -->
                @foreach($testimonials as $testimonial)
                <div class="col-12">
                    <div class="ltn__product-item ltn__product-item-3" style="padding: 5px;">

                        <div class="product-img">
                       <center>    <a href="#"><img src="{{$testimonial->pic}}"  style="width: 100%;height: auto;" alt="#"></a>
                         </center>  
                        </div>
                        <div class="testimonial pt-2">
                            <p class='pb-2'>"{{ $testimonial->message}}"</p>
                            <h4 class="animated fadeIn text-center">__ By {{$testimonial->name}} __</h4>
                        </div>
                    </div>
                </div>
                @endforeach
				 
            </div>
        </div>
    </div>
    <!-- PRODUCT SLIDER AREA END -->

    <!-- TESTIMONIAL AREA START -->
    <div class="ltn__product-area1  pb-70">
        <div class="container">
            <div class="row d-none">
                <div class="col-lg-12">
                    <div class="section-title-area text-center">
                        <h1 class="section-title ">Recipe</h1>
                      </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
								<br>
								<br>
								<br>
                            	<img src="images/recipe.jpg" alt="">
                                
                            </div>
                        </div>
                 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TESTIMONIAL AREA END -->

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
    
    <!-- HEADER AREA START (header-4) -->
    @include("inc.user.footer")
    <!-- HEADER AREA END -->