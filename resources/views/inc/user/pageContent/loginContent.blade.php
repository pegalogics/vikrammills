<body>
  <!-- Body main wrapper start -->
  <div
       class="body-wrapper">


    @include("inc.user.Header")

    <!-- Utilize Mobile Menu Start -->
    <div id="ltn__utilize-mobile-menu"
         class="ltn__utilize ltn__utilize-mobile-menu">

      <div
           class="ltn__utilize-menu-inner ltn__scrollbar">
        <div
             class="ltn__utilize-menu-head">
          <div
               class="site-logo aligncenter">
            <a
               href="index-2.html"><img
                   src="images/logo.png"
                   alt="Logo"></a>
          </div>
          <button
                  class="ltn__utilize-close">×</button>
        </div>
        <div
             class="ltn__utilize-menu-search-form">
          <form
                action="#">
            <input type="text"
                   placeholder="Search...">
            <button><i
                 class="fas fa-search"></i></button>
          </form>
        </div>
        <div
             class="ltn__utilize-menu">
          <ul>
            <li>
              <a
                 href="#">Home</a>
            </li>
            <li>
              <a
                 href="about.html">About</a>
            </li>
            <li>
              <a
                 href="#">Product</a>
              <ul
                  class="sub-menu">
                <li>
                  <a
                     href="shop.html">Tanduri
                    Atta</a>
                </li>
                <li>
                  <a
                     href="shop-grid.html">Maida
                  </a>
                </li>
                <li>
                  <a
                     href="shop-left-sidebar.html">Sooji</a>
                </li>
                <li>
                  <a
                     href="shop-right-sidebar.html">Dalia</a>
                </li>
                <li>
                  <a
                     href="#">Rawa</a>
                </li>
                <li>
                  <a
                     href="cart.html">Chakki
                    Atta</a>
                </li>
                <li>
                  <a
                     href="wishlist.html">India
                    Gate
                    Bran
                  </a>
                </li>

              </ul>
            </li>
            <li>
              <a
                 href="#">Recipe</a>
            </li>

          </ul>
        </div>
        <div
             class="ltn__utilize-buttons ltn__utilize-buttons-2">
          <ul>
            <li>
              <a href={{ url('signup') }}
                 title="Login">
                <span
                      class="utilize-btn-icon">
                  <i
                     class="far fa-user"></i>
                </span>
                Register
              </a>
            </li>

            <li>
              <a href="cart.html"
                 title="Shoping Cart">
                <span
                      class="utilize-btn-icon">
                  <i
                     class="fas fa-shopping-cart"></i>

                </span>
                Shoping
                Cart
              </a>
            </li>
          </ul>
        </div>
        <div
             class="ltn__social-media-2">
          <ul>
            <li>
              <a href="#"
                 title="Facebook"><i
                   class="fab fa-facebook-f"></i></a>
            </li>
            <li>
              <a href="#"
                 title="Twitter"><i
                   class="fab fa-twitter"></i></a>
            </li>
            <li>
              <a href="#"
                 title="Linkedin"><i
                   class="fab fa-linkedin"></i></a>
            </li>
            <li>
              <a href="#"
                 title="Instagram"><i
                   class="fab fa-instagram"></i></a>
            </li>

          </ul>
        </div>
      </div>
    </div>
    <!-- Utilize Mobile Menu End -->

    <div
         class="ltn__utilize-overlay">
    </div>

    <!--LOGIN AREA PART START-->

    <!-- WISHLIST AREA START -->
    <div
         class="liton__wishlist-area pb-120">
      <div
           class="container">
        <div
             class="row">
          <div
               class="col-lg-12 ">
            <!-- PRODUCT TAB AREA START -->
            <div
                 class="ltn__product-tab-area pt-30">
              <div
                   class="container">
                @if (Session::has('success'))
                  <div
                       class="alert alert-success">
                    {{ Session::get('success') }}
                  </div>
                @endif
                <h1
                    align="center">
                  Sign
                  in
                </h1>

                <div align="right"
                     class="row "
                     style="box-shadow: 5px 5px 5px 5px rgba(0,0,0,0.2);">

                  <!--<input type="button" class="google" value="Login with Google">  <button class="face "> Login with Facebook</button>-->
                  <button
                          class="button button2">Login
                    with
                    Google</button>
                  <button
                          class="button button2 but">
                    Login
                    with
                    Facebook</button><br>
                  <div
                       class="col-lg-12  pt-30">

                    <br>

                    <div
                         class="ltn__myaccount-tab-content-inner">

                      <div
                           class="ltn__form-box">
                        <form method="POST"
                              action="{{ url('login') }}">
                          @csrf
                          <div
                               class="row mb-50">

                            <div
                                 class="col-md-12">

                              <input type="text"
                                     name="email"
                                     placeholder="Email"
                                     required>
                            </div>
                            <div
                                 class="col-md-12">

                              <input type="password"
                                     name="password"
                                     placeholder="Password"
                                     required>
                            </div>
                            @if (Session::has('error'))
                              <div
                                   class="alert alert-success">
                                {{ Session::get('error') }}
                              </div>
                            @endif

                            <div align="left"
                                 class="col-md-12">
                              <div
                                   class="col-lg-6">
                                <a    
                                   href="#"><strong>Forgot
                                    Password?</strong></a>
                              </div>

                            </div>
                          </div>

                          <div
                               class="btn-wrapper text-center">
                            <button type="submit"
                                    class="btn theme-btn-1 btn-effect-1 text-uppercase"
                                    style="height: 50px;">Save
                              Changes</button>
                          </div>
                        </form>
                        <br>
                        <h4
                            align="center">
                          Don't
                          have
                          an
                          account?
                          <a
                             href={{ url('signup') }}>Create
                            One</a>
                        </h4>
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

    <!--LOGIN AREA PART END-->



    <!-- OUR HISTORY AREA START -->

    <!-- FEATURE AREA START ( Feature - 3) -->
    <div
         class="ltn__feature-area before-bg-bottom-2 mb--30--- plr--5">
      <div
           class="container-fluid">
        <div
             class="row">
          <div
               class="col-lg-12">
            <div
                 class="ltn__feature-item-box-wrap ltn__border-between-column white-bg">
              <div
                   class="row">
                <div
                     class="col-xl-3 col-md-6 col-12">
                  <div
                       class="ltn__feature-item ltn__feature-item-8">
                    <div
                         class="ltn__feature-icon">
                      <img src="img/icons/svg/4-track.svg"
                           alt="#">
                    </div>
                    <div
                         class="ltn__feature-info">
                      <h4>
                        Free
                        home
                        delivery
                      </h4>
                      <p>
                        Provide
                        free
                        home
                        delivery
                        for
                        all
                        product
                        over
                        $100
                      </p>
                    </div>
                  </div>
                </div>
                <div
                     class="col-xl-3 col-md-6 col-12">
                  <div
                       class="ltn__feature-item ltn__feature-item-8">
                    <div
                         class="ltn__feature-icon">
                      <img src="img/icons/svg/5-madel.svg"
                           alt="#">
                    </div>
                    <div
                         class="ltn__feature-info">
                      <h4>
                        Quality
                        Products
                      </h4>
                      <p>
                        We
                        ensure
                        the
                        product
                        quality
                        that
                        is
                        our
                        main
                        goal
                      </p>
                    </div>
                  </div>
                </div>
                <div
                     class="col-xl-3 col-md-6 col-12">
                  <div
                       class="ltn__feature-item ltn__feature-item-8">
                    <div
                         class="ltn__feature-icon">
                      <img src="img/icons/svg/6-return.svg"
                           alt="#">
                    </div>
                    <div
                         class="ltn__feature-info">
                      <h4>
                        3
                        Days
                        Return
                      </h4>
                      <p>
                        Return
                        product
                        within
                        3
                        days
                        for
                        any
                        product
                        you
                        buy
                      </p>
                    </div>
                  </div>
                </div>
                <div
                     class="col-xl-3 col-md-6 col-12">
                  <div
                       class="ltn__feature-item ltn__feature-item-8">
                    <div
                         class="ltn__feature-icon">
                      <img src="img/icons/svg/7-support.svg"
                           alt="#">
                    </div>
                    <div
                         class="ltn__feature-info">
                      <h4>
                        Online
                        Support
                      </h4>
                      <p>
                        We
                        ensure
                        the
                        product
                        quality
                        that
                        you
                        can
                        trust
                        easily
                      </p>
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
    @include("inc.user.footer")
  </div>
  <!-- Body main wrapper end -->

  <!-- preloader area start -->
  <div class="preloader d-none"
       id="preloader">
    <div
         class="preloader-inner">
      <div
           class="spinner">
        <div
             class="dot1">
        </div>
        <div
             class="dot2">
        </div>
      </div>
    </div>
  </div>
  <!-- preloader area end -->

  @include("inc.user.script")
