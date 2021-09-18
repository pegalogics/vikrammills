<body>
  <!-- Body main wrapper start -->
  <div class="body-wrapper"> 
    <!-- HEADER AREA START (header-4) -->
    <header class="ltn__header-area ltn__header-4 ltn__header-6 ltn__header-transparent--- gradient-color-2---">
        <!-- ltn__header-top-area start -->
       <div class="ltn__header-top-area top-area-color-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="ltn__top-bar-menu">
                           
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="top-bar-right text-right">
                            <div class="ltn__top-bar-menu">
                                <ul>
                                    <li>
                                        <!-- ltn__language-menu -->
                                        <div class="ltn__drop-menu ltn__currency-menu ltn__language-menu">
                                            <ul>
                                                <li><a href="#" class="dropdown-toggle"><span class="active">English</span></a>
                                                    <ul>
                                                        <li><a href="#">Hindi</a></li>
                                                        <li><a href="#">Bengali</a></li>
                                                        <li><a href="#">Panjabi</a></li>
                                                        <li><a href="#">Tamil</a></li>
                                                        <li><a href="#">Marathi</a></li>
                                                        
                                                    </ul>
                                                </li>
												
                                            </ul>
                                        </div>
                                    </li>
									 <li>
                                        <!-- ltn__language-menu -->
                                        <div class="ltn__drop-menu ltn__currency-menu ltn__language-menu">
                                            <ul>
                                                <li  style="top: 26px;">
                                                   <form class="search" action="">
  														<input type="text" placeholder="Search.." name="search2">
													  	<button type="submit"><i class="fa fa-search"></i></button>
													</form>
                                                </li>
												
                                            </ul>
                                        </div>
                                    </li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__header-top-area end -->
       
        <!-- ltn__header-middle-area start -->
        <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-black" style=" background-color: rgba(247, 201, 157, 1); ">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-2">
                        <div class="site-logo">
                            <a href="{{url('index')}}"><img src="images/logo.png" alt="Logo"></a>
                        </div>
                    </div>
					<div class="col-lg-6 col"  >
					 	<div class="header-search-wrap" style="margin-top: 25px;">
                            <div>
									
								<form class="example" action="" style="margin:auto;max-width:550px">
										<input type="text" placeholder="Search.." name="search2">
								  	<button type="submit"><i class="fa fa-search"></i></button>
								</form>
										
					 		</div>
                               
                        </div>
                          
					</div>
				
                    <div class="col-lg-4 col header-menu-column menu-color-white---" >
                        <div class="header-menu d-none d-xl-block" >
                            <nav>
                                <div class="ltn__main-menu" >
									
                                    <ul>
										
                                        <li><a href="{{url('index')}}">Home</a></li>
										  <li class="menu-icon"><a href="product.html">Product</a>
                                            <ul class="mega-menu">
                                                @foreach($products as $product)
                                                <li>
                                                    <div class="menu-product-item">
                                                        <div class="menu-product-img">
                                                            <a href="#"><img src={{url($product->pic)}} alt="#"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <h2 class="product-title"><a href="#">{{$product->name}}</a></h2>
                                                            <div class="product-price">
                                                                 @php 
                                                                    $discount = intval($product->price) -  intval($product->discount);
                                                                @endphp
                                                                <span>&#x20B9; {{$discount}}</span>
                                                                
                                                                <del>&#x20B9;{{$product->price}}</del>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                @endforeach
             
												
                                            </ul>
                                        </li>
                                        <li><a href="recipe.html">Recipe</a></li>
                                        @if (!Session::has('user'))
                                        <li><a href="{{ url('login') }}">Log In / Register</a></li>
                                        @else
                                        <li class="menu-icon">
                                        	<a href="#"><span class="utilize-btn-icon"><i class="fa fa-user"></i></span></a>
                                        	<ul class="mega-menu" style="max-width: 120px;">
                                        		<li class="w-100"><a href="#">My Account</a></li>
                                        		<li class="w-100"><a href="#">My Orders</a></li>
                                        		<li class="w-100"><a href="{{ url('logout') }}">Logout</a></li>
                                        	</ul>
			                            </li>
			                            <li><a href="" title="Wishlist">
                            				<span class="utilize-btn-icon">
                                				<i class="fas fa-heart"></i>
                            				</span>
                                        </a></li>
			                          	@endif
                                        <li><a href="cart.html" title="Shoping Cart">
                            				<span class="utilize-btn-icon">
                                				<i class="fas fa-shopping-cart"></i>
                            				</span>
                                        </a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
						 
                    <div class="col col-lg-2">
                        <div class="ltn__header-options ltn__header-options-color-white----">
                          
                           
                            <!-- header-search-1 -->
                           
                          
                            <!-- Mobile Menu Button -->
                            <div class="mobile-menu-toggle d-xl-none">
                                <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                                    <svg viewBox="0 0 800 600">
                                        <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                        <path d="M300,320 L540,320" id="middle"></path>
                                        <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__header-middle-area end -->
    </header>
    <!-- HEADER AREA END -->

    

    <!-- Utilize Mobile Menu Start -->
    <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
        <div class="ltn__utilize-menu-inner ltn__scrollbar">
            <div class="ltn__utilize-menu-head">
                <div class="site-logo aligncenter">
                    <a href="{{url('index')}}"><img src="images/logo.png" alt="Logo"></a>
                </div>
                <button class="ltn__utilize-close">×</button>
            </div>
            <div class="ltn__utilize-menu-search-form">
                <form action="#">
                    <input type="text" placeholder="Search...">
                    <button><i class="fas fa-search"></i></button>
                </form>
            </div>
            <div class="ltn__utilize-menu">
                <ul>
                    <li><a href="{{url('index')}}">Home</a>
                 </li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="#">Product</a>
                        <ul class="sub-menu">
                            <li><a href="shop.html">Tanduri Atta</a></li>
                            <li><a href="shop-grid.html">Maida </a></li>
                            <li><a href="shop-left-sidebar.html">Sooji</a></li>
                            <li><a href="shop-right-sidebar.html">Dalia</a></li>
                            <li><a href="#">Rawa</a></li>
                            <li><a href="cart.html">Chakki Atta</a></li>
                            <li><a href="wishlist.html">India Gate Bran </a></li>
                          
                        </ul>
                    </li>
					<li> <a href="#">Recipe</a></li>
                                     
                </ul>
            </div>
            
            <div class="ltn__utilize-buttons ltn__utilize-buttons-2">
                <ul>
                	@if (!Session::has('user'))
                    <li>
                        <a href="{{ url('login') }}" title="Login">
                            <span class="utilize-btn-icon">
                                <i class="far fa-user"></i>
                            </span>
                            Login / Register
                        </a>
                    </li>
                    @else
                    <li>
                        <a href="{{ url('login') }}" title="Login">
                            <span class="utilize-btn-icon">
                                <i class="far fa-user"></i>
                            </span>
                            My Account
                        </a>
                        <ul class="sub-menu">
                        	<li><a href="#">My Account</a></li>
                    		<li><a href="#">My Orders</a></li>
                    		<li><a href="{{ url('logout') }}">Logout</a></li>
                        </ul>
                    </li>
                    @endif
                    <li>
                        <a href="cart.html" title="Shoping Cart">
                            <span class="utilize-btn-icon">
                                <i class="fas fa-shopping-cart"></i>
                            </span>
                            Shoping Cart
                        </a>
                    </li>
                </ul>
            </div>
            <div class="ltn__social-media-2">
                <ul>
                    <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                    
                </ul>
            </div>
        </div>
    </div>
    <!-- Utilize Mobile Menu End -->

    <div class="ltn__utilize-overlay"></div>

    