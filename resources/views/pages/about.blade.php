@extends('layouts.master')

@section('title',
  'About')

@section('content')
       <!-- Utilize Mobile Menu Start -->
        <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
            <div class="ltn__utilize-menu-inner ltn__scrollbar">
                <div class="ltn__utilize-menu-head">
                    <div class="site-logo aligncenter">
                        <a href="index-2.html"><img src="images/logo.png" alt="Logo"></a>
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
                        <li><a href="#">Home</a>
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
                        <li>
                            <a href="login.html" title="Login">
                                <span class="utilize-btn-icon">
                                    <i class="far fa-user"></i>
                                </span> Login / Register
                            </a>
                        </li>

                        <li>
                            <a href="cart.html" title="Shoping Cart">
                                <span class="utilize-btn-icon">
                                    <i class="fas fa-shopping-cart"></i>

                                </span> Shoping Cart
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

        <!-- BREADCRUMB AREA START -->
        <div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 bg-overlay-theme-10--- bg-image" data-bg="{{ url('public/img/about') }}/{{ $about->about_banner ?? '' }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-4 justify-content-between">


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMB AREA END -->

        <!-- ABOUT US AREA START -->
        <div class="ltn__about-us-area pt-50-- pb-120 col-lg-12">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-6 align-self-center">
                        <div class="about-us-info-wrap pt-30 pb-30">
                            <h1>About us</h1>

                            <p align="justify" style="width: 650px; float: left">{{ $about->about_content }}</p>
                            <img src="{{ url('public/img/about') }}/{{ $about->about_pic ?? ''  }}" alt="Banner Image" class="about-images">

                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 align-self-center">
                        <div class="about-us-info-wrap pt-30 pb-30">
                            <h1>Our History</h1>

                            <p align="justify" style="width: 650px; float: right">
                        {{ $about->our_history_content }}      
                        </p>
                            <img src="{{ url('public/img/about') }}/{{ $about->our_history_pic ?? ''  }}" alt="Banner Image" class="about-images1">

                        </div>
                    </div>

                    <div class="col-lg-12 col-md-6 align-self-center" style="margin-top: 50px;">
                        <div class="about-us-info-wrap pt-30 pb-30">
                            <h1>The Brand</h1>

                            <p align="justify" style="width: 650px; float: left">{{ $about->brand_content }}</p>
                            
                            <img src="{{ url('public/img/about') }}/{{ $about->brand_pic ?? ''  }}" alt="Banner Image" class="about-images">

                        </div>
                    </div>

                    <div class="col-lg-12 col-md-6 align-self-center" style="margin-top: 50px;">
                        <div class="about-us-info-wrap pt-30 pb-30">
                            <h1>Why Choose us</h1>

                            <p align="justify">{{  $about->why_choose_us_content }}</p>

                        </div>
                    </div>
                    <!--<div class="col-lg-3 col-md-6 align-self-center">
                    <div class="about-us-img-wrap about-img-right">
                        <img src="img/bg/about1.jpg" alt="Banner Image" style="height: 400px; width: 500px !important;">
                    </div>
                </div>-->
                </div>
            </div>
        </div>
        <!-- ABOUT US AREA END -->

        <!-- OUR HISTORY AREA START -->
        @php
         $pic =  url('public/img/about'). '/' . $about->pic_after_why_choose_us_content ;
        @endphp
        <div class="col-lg-12" style="background:url('{{$pic}}') center; height: 750px;">
            <div class="container">
                <div>

                </div>
            </div>
        </div>
        <!-- OUR HISTORY AREA END -->
        
        <!-- ABOUT US AREA START -->
        <div class="ltn__about-us-area pt-120-- pb-120">
            <div class="container-fluid" style="background:url('img/bg/mission-vission.jpg') top; height: 500px;">
                <div class="row ">
                    <div class="col-lg-6 col-md-6 align-self-center ">
                        <div class="about-us-info-wrap pt-30 pb-30 col-lg-10" style="left:80px;">

                            <h1 class="vission">Our Vission</h1>
                            <p style="color:white">{{  $about->our_vision_content }}</p>

                        </div>
                    </div>
                    <div>&nbsp;</div>
                    <div class="col-lg-5 col-md-6 align-self-center">
                        <div class="about-us-img-wrap about-img-right">

                            <h1 class="mission">Our Mission</h1>
                            <p style="color:white; font-size: 16px;">{{  $about->our_mission }}</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ABOUT US AREA END -->

        <!-- PRODUCT AREA START -->
        <div class="ltn__product-area pb-10">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-area text-center"><br>
                            <br>

                            <h1 class="section-title-product">Our Pestel Analysis</h1>
                            <p style="color: white">Know Us Better</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <!-- ltn__product-item -->
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                        <div class="ltn__product-item ltn__product-item-3 text-left" style="height: 520px;">
                            <div class="product-img">
                                <a href="product-details.html"><img src="img/p.jpg" alt="#"></a>


                            </div>
                            <div class="product-info">
                                <div class="product-price1">
                                    <ul>
                                        <li>Government Policy</li>
                                        <li>Political Stability</li>
                                        <li>Corruption</li>
                                        <li>Tax Policy</li>
                                        <li>Law Policy</li>
                                        <li>Trade restriction</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ltn__product-item -->
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                        <div class="ltn__product-item ltn__product-item-3 text-left" style="height: 520px;">
                            <div class="product-img">
                                <a href="product-details.html"><img src="img/e.jpg" alt="#"></a>

                            </div>
                            <div class="product-info">
                                <div class="product-price1">
                                    <ul>
                                        <li>Economic Growth</li>
                                        <li>Exchnage Rate</li>
                                        <li>Interest Rate</li>
                                        <li>Inflation Rate</li>
                                        <li>Disposable Income</li>
                                        <li>Unemployment Rate</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ltn__product-item -->
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                        <div class="ltn__product-item ltn__product-item-3 text-left" style="height: 520px;">
                            <div class="product-img">
                                <a href="product-details.html"><img src="img/s.jpg" alt="#"></a>


                            </div>
                            <div class="product-info">
                                <div class="product-price1">
                                    <ul>
                                        <li>Population Growth Rate</li>
                                        <li>Age Distribution</li>
                                        <li>Career Attitude</li>
                                        <li>Safety Emphasis</li>
                                        <li>Health Consciousenss</li>
                                        <li>Lifestyle Attitude</li>
                                        <li>Culture Barriers</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ltn__product-item -->
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                        <div class="ltn__product-item ltn__product-item-3 text-left" style="height: 520px;">
                            <div class="product-img">
                                <a href="product-details.html"><img src="img/t.jpg" alt="#"></a>


                            </div>
                            <div class="product-info">
                                <div class="product-price1">
                                    <ul>
                                        <li>Technology Incentives</li>
                                        <li>Level of Innocation</li>
                                        <li>Automation</li>
                                        <li>R&D Activity</li>
                                        <li>Technological chnage</li>
                                        <li>Technological awarness</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ltn__product-item -->
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                        <div class="ltn__product-item ltn__product-item-3 text-left" style="height: 520px;">
                            <div class="product-img">
                                <a href="product-details.html"><img src="img/e1.jpg" alt="#"></a>


                            </div>
                            <div class="product-info">
                                <div class="product-price1">
                                    <ul>
                                        <li>Government Policy</li>
                                        <li>Political Stability</li>
                                        <li>Corruption</li>
                                        <li>Tax Policy</li>
                                        <li>Law Policy</li>
                                        <li>Trade restriction</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ltn__product-item -->
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                        <div class="ltn__product-item ltn__product-item-3 text-left" style="height: 520px;">
                            <div class="product-img">
                                <a href="product-details.html"><img src="img/l.jpg" alt="#"></a>


                            </div>
                            <div class="product-info">
                                <div class="product-price1">
                                    <ul>
                                        <li>Government Policy</li>
                                        <li>Political Stability</li>
                                        <li>Corruption</li>
                                        <li>Tax Policy</li>
                                        <li>Law Policy</li>
                                        <li>Trade restriction</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ltn__product-item -->
                    <p align="center" style="color: white; font-size: 14px">The PESTEL analysis of any organization reflects its position and function in the current state in context with the Political, Economic, Social, Technological, Environmental, and Legal factors. Here is the PESTEL analysis for vikram
                        roller flour mills so that you can know it better</p>
                </div>
            </div>
        </div>
        <!-- PRODUCT SLIDER AREA END -->


        <div class="ltn__about-us-area pt-50-- pb-120 col-lg-12">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="about-us-info-wrap pt-0">
                            <div style="background: #5e653b url('img/p.png') left top no-repeat; padding: 10px 30px 20px 70px; ">
                                <p align="justify" style="color: #fff;"><strong>Political</strong>: the Current political scenario of vikram roller flour mills operational locations indicate continuous stability without major threats. The company operates within the bounds of laws and regulations
                                    set by the government and constitution of India, thereby making us a trustworthy enterprise.<br>
                                    <br>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="about-us-info-wrap pt-0">
                            <div style="background: #812822 url('img/e.png') left top no-repeat; padding: 10px 30px 20px 70px; margin-left: -25px;">
                                <p align="justify" style="color: #fff;"><strong>Economic</strong>: As the Indian demographic is changing, and people are demanding quality food products, vikram roller flour mills sees a direct opportunity to grab a fair share in the FMCG market. The per capita
                                    earning potential of people has enhanced over the past few years. Vikram Roller Mills plans to capitalize on this factor by fulfilling the demand of wheat products where it is much required.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="about-us-info-wrap pt-0">
                            <div style="background: #84afb5 url('img/s.png') left top no-repeat; padding: 10px 30px 20px 70px;">
                                <p align="justify" style="color: #000;"><strong>Social</strong>: Vikram roller flour mills has always been a keen and active organization when it comes to the social responsibilities. Besides working closely with numerous charitable organizations and public welfare
                                    institutions, Vikram roller flour mills also makes sure that its own mill workers are nurtured with personal development. The company actively takes part in drives for social impacts and encourages its employees to
                                    do the same.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="about-us-info-wrap pt-0">
                            <div style="background: #cf992b url('img/t.png') left top no-repeat; padding: 10px 30px 20px 70px; margin-left: -25px;">
                                <p align="justify" style="color: #000;"><strong>Technical</strong>: Technology is one of the most crucial factors that has significantly affected vikram roller flour mills. Earlier, the machines and equipment were operated manually which made is hard to drive
                                    the plant's capacity. Now, the plant is fully automated and equipped with the latest machines from Sweden and Turkey. Since the automation, plant's capacity has boosted while minimizing the wastage and functioning with
                                    more eco-friendliness.<br>
                                    <br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="about-us-info-wrap pt-0">
                            <div style="background: #d14e3a url('img/e.png') left top no-repeat; padding: 10px 30px 20px 70px; ">
                                <p align="justify" style="color: #fff;"><strong>Environmental</strong>: Being a manufacturer in the supply-chain economy, vikram roller flour mills takes environmental issues seriously. We comply with all the regulations set for 'Green Industrial Operations'
                                    by the government. Vikram roller flour mills also undertakes monthly cleanliness initiatives under the aegis of 'Swaccha Bharat Abhiyan' to clean suburbs of the Delhi. The company is also known for its contributions
                                    towards plantation drives, whereby every quarter of the year, the company plants trees with its employees and funds the activists working for the cause.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="about-us-info-wrap pt-0">
                            <div style="background: #163837 url('img/l.png') left top no-repeat; padding: 10px 30px 20px 70px; margin-left: -25px;">
                                <p align="justify" style="color: #fff;"><strong>Legal</strong>: Vikram roller flour mills ensures that it always functions with the laws and regulations set for producing Wheat-flour products in the country. It holds all the necessary certifications like the
                                    FSSAI and ISO 22000:2005 mandatory for such industrial activities. The company strictly adheres to the Employment Act, Industrial Safety Act, Industrial Production and Trading act enlisted in the law of India.<br>
                                    <br>
                                    <br>
                                    <br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ltn__about-us-area pt-50-- pb-120 col-lg-12">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-6 align-self-center">
                        <div class="about-us-info-wrap pt-30 pb-30">
                            <h1>Our Management</h1>

                            <p align="justify" style="width: 650px; float: left">{{ $about->our_management_content }}</p>
                            <img src="{{ url('public/img/about') }}/{{ $about->our_management_pic ?? ''  }}" alt="Banner Image" class="about-images">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- gallery -->


        <div class=" pb-10">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-area text-center"><br>
                            <br>

                            <h1>Gallery</h1>

                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <!-- ltn__product-item -->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="ltn__product-item ltn__product-item-3 text-center">
                            <div class="product-img">
                                <img src="img/gallery/1.jpg" alt="#">
                            </div>
                        </div>
                    </div>
                    <!-- ltn__product-item -->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="ltn__product-item ltn__product-item-3 text-center">
                            <div class="product-img">
                                <img src="img/gallery/2.jpg" alt="#">
                            </div>
                        </div>
                    </div>
                    <!-- ltn__product-item -->

                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="ltn__product-item ltn__product-item-3 text-center">
                            <div class="product-img">
                                <img src="img/gallery/3.jpg" alt="#">
                            </div>
                        </div>
                    </div>

                    <!-- ltn__product-item -->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="ltn__product-item ltn__product-item-3 text-center">
                            <div class="product-img">
                                <img src="img/gallery/4.jpg" alt="#">
                            </div>
                        </div>
                    </div>
                    <!-- ltn__product-item -->

                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="ltn__product-item ltn__product-item-3 text-center">
                            <div class="product-img">
                                <img src="img/gallery/5.jpg" alt="#">
                            </div>
                        </div>
                    </div>
                    <!-- ltn__product-item -->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="ltn__product-item ltn__product-item-3 text-center">
                            <div class="product-img">
                                <img src="img/gallery/6.jpg" alt="#">
                            </div>
                        </div>
                    </div>

                    <!-- ltn__product-item -->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="ltn__product-item ltn__product-item-3 text-center">
                            <div class="product-img">
                                <img src="img/gallery/7.jpg" alt="#">
                            </div>
                        </div>
                    </div>
                    <!-- ltn__product-item -->

                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="ltn__product-item ltn__product-item-3 text-center">
                            <div class="product-img">
                                <img src="img/gallery/8.jpg" alt="#">
                            </div>
                        </div>
                    </div>
                    <!-- ltn__product-item -->


                </div>
            </div>
        </div>


        <!-- gallery END -->

        <!-- ABOUT US AREA START -->
        <div class="ltn__banner-area section-bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 align-self-center" style="margin-top: 0px;">
                        <div class="banner-info-wrap vikram-kit">
                            <h2>Grading the Wheat</h2>
                            <p align="justify" style="font-size: 14px;">1 : Wheat arrives at our flour mill. Samples are then taken from the wheat for chemical and physical analysis. It is graded majorly on the basis of protein content and stored in Silos for further use.<br>
                                <br> 2 : Before grinding, it is essential to clean the wheat. Raw wheat passes through several cleansing processes before finally arriving at the separator. Strict quality checks are followed to ensure supreme quality wheat
                                products.
                                <br>
                                <br> 3 : The separator machine then separates wheat grains from other impurities via a metal screen. Impurities larger than the wheat grain size are instantly removed.
                                <br>
                                <br> 4 : The wheat then moves on to an Aspirator. The Aspirator is like a vacuum cleaner, sucking up the impurities lighter than wheat particles efficiently.
                                <br>
                                <br> 5 : A Disk separator then moves the wheat over a series of disks (with indentations). This machine removes the particles that have the same size as that of the wheat particles.
                                <br>
                                <br> 6 : Another machine, the Spiral Seed Separator singles out the seeds of other plants. This machine exploits the fact that wheat is oval in shape, while most other seeds are round in shape. While spinning, Oval wheat
                                moves towards the center of the cylinder, while the round seeds/particles move outwards.
                                <br>
                                <br> 7 : Another uncommon method vikram roller flour mills employ to purify the wheat is the usage of Magnets. Powerful magnets easily remove metal particles that may have been missed in the earlier stages.
                                <br>
                                <br> 8 : A scourer scrapes-off dirt and hair, while a color sorting machine removes material which does not match with the color of the wheat.
                            </p>

                            <h2>Processing The Flour</h2>
                            <p align="justify" style="font-size: 14px;"><strong>Quality Assurance</strong> Vikram roller flour mills takes quality control as the top priority during the milling process. We ensure that -<br>
                                <br> 1 : As soon as the Whole Wheat is received at the flour mill, it is tested for protein content via chemical and physical analysis.
                                <br>
                                <br> 2 : It is thoroughly checked for the ash content that remains after burning.
                                <br>
                                <br> 3 : During each stage of purification and processing, samples are taken by our quality management officers and millers to check quality consistency.
                                <br>
                                <br> 4 : All the milling machinery and equipment are thoroughly cleaned, disinfected and sterilized by anti-fungal and anti-bacterial agents.
                                <br>
                                <br> 5 : The plant machines and equipment are then treated with hot water to remove the traces of the cleaning agents.
                                <br>
                                <br> 6 : The final product undergoes the minerals & vitamins test, cooking test, and additives test in compliance with the government regulatory standards.Vikram roller flour mills monitors its manufacturing process, quality,
                                and customer delivery very closely. Your loyalty and trust is our biggest reward.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 align-self-center">
                        <div class="banner-info-wrap vikram-kit text-left bg-image" data-bg="img/banner/10.html">
                            <h2>Preparation for Grinding</h2>
                            <p align="justify" style="font-size: 14px;">1 : Purified wheat is washed with warm water before placing it in a centrifuge dryer. Any remnant impurities get removed during this stage.
                                <br>
                                <br> 2 : Next comes what we call 'Tempering' or 'Conditioning' of the wheat. In this step, the moisture of the wheat is controlled to allow for removal of Bran layer and efficient grinding. This usually involves the addition
                                of moisture rather than removal.
                                <br>
                                <br> 3 : Wheat of different grades is blended together, depending upon the type of product to be manufactured.
                                <br>
                                <br> 4 : The batch is then moved into the 'Entoleter,' a trade name of a device having rapid spinning disks. It crushes the wheat grains against small metal pins. Cracked grains get removed in this process as they are unsuitable
                                for grinding.
                                <br>
                                <br> 5 : The wheat batch then moves to the Breaker Rolls. These are two large metal rollers of different sizes moving at two different speeds. The spiral grooves in these breaker rolls crack open the grains of wheat and
                                separate the interior from the outer bran layer. The cracked-wheat from Breaker rolls passes through metal sieves, and separated as -
                                <br> * : Fine material (Known as Coarse Flour of Farina)
                                <br> * : Larger pieces of the interior are called Semolina (Dalia)
                                <br> * : The third product is Farina that is still attached to the Bran.
                                <br>
                                <br> 6 : Farina or Middlings are moved to the 'Middlings Purifier' and the remaining material moves to another pair of breaker rolls.
                                <br>
                                <br> 7 : Middlings purifier then moves places middlings over a vibration screen. Blowing air over the screen removes the lighter bran particles. Middling moves through the screen for further fine grinding.
                                <br>
                                <br> 8 : Middlings are ground into flour by pairs of giant metal rollers. Every time the flour is ground, it moves through the sieves to separate it into flours of different fineness.
                                <br>
                                <br> 9 : By sifting, separating, and regrinding the flour, different grades of it can be produced. These are then combined as per the need to produce the final product.
                            </p>

                            <center> <img src="images/guarantee.png" alt="" height="380px"></center>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- ABOUT US AREA END -->
        <div class="container">
            <div class="col-lg-12 col-md-6 align-self-center text-center" style="margin-top: 50px;">
                <div class="about-us-info-wrap pt-30 pb-30">
                    <h1>Corporate Social Responsibility</h1>

                    <p align="justify">Vikram roller flour mills has its primary resource as wheat, which is produced from the land where has been compared to mother and called as Mother Earth. As a responsible organization, vikram roller flour mills has always focused
                        for being environment friendly. The company believes that it the responsibility of this generation to keep the nature clean for our future generation so that they can live a healthy life and can cultivate and harvest healthy food
                        products from the fields. Vikram roller flour mills does many CSR activities in India conducting different programs, which can contribute a little towards the betterment of the society. In last five years, we have run these campaigns
                    </p>

                    <h3>Cleanliness Drives</h3>
                    <p>Supporting the Swachh Baharat Abhiyan, we run cleanliness campaigns every month where entire vikram roller flour mills team acts together to clean the nearby localities in the suburbs of Delhi.
                    </p>

                    <h3>Plantation Drives</h3>
                    <p>Vikram roller flour mills has another goal to actively continue and expand the implementation of green practices in the future. Every quarter of the year, the company conducts plantation drive in the city with its employees to support
                        and empower many activists working on this cause to make India greener than ever.</p>
                </div>
            </div>
        </div>
        <center><img src="img/bg/footer.png" alt="" /></center>
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
                                            <p>Provide free home delivery for all product over $100</p>
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
                                            <p>We ensure the product quality that is our main goal</p>
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
                                            <p>Return product within 3 days for any product you buy</p>
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
                                            <p>We ensure the product quality that you can trust easily</p>
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
