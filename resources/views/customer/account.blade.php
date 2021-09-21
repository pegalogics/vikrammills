@extends('layouts.master')

@section('title',
  'About')

@section('content')
  @include('inc.user.banner')


  <!-- BREADCRUMB AREA START -->
  <div
    class="ltn__breadcrumb-are"
    data-bg="img/bg/4.png">
    <div
      class="container">
      <div
        class="row">
        <div
          class="col-lg-12">
          <div
            class="ltn__breadcrumb-inner ltn__breadcrumb-inner-4 justify-content-between">
            <div
              class="section-title-area">
              <br>

              <h1
                class="section-title white-color text-center">
                Your
                Account
              </h1>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- BREADCRUMB AREA END -->

  <!-- WISHLIST AREA START -->
  <div
    class="liton__wishlist-area pb-120">
    <div
      class="container">
      <div
        class="row">
        <div
          class="col-lg-12">
          <!-- PRODUCT TAB AREA START -->
          <div
            class="ltn__product-tab-area">
            <div
              class="container">
              <div
                class="row">
                <div
                  class="col-lg-4">
                  <div
                    class="ltn__tab-menu-list">
                    <div
                      class="nav">
                      <a class="active show"
                        data-toggle="tab"
                        href="#liton_tab_1_1">Profile
                        <i
                          class="fas fa-home"></i></a>
                      <a data-toggle="tab"
                        href="#liton_tab_1_2">Ordered
                        Product
                        Detail<i
                          class="fas fa-file-alt"></i></a>
                      <a data-toggle="tab"
                        href="#liton_tab_1_3">Order
                        status
                        <i
                          class="fas fa-arrow-down"></i></a>
                      <a data-toggle="tab"
                        href="#liton_tab_1_4">Payment
                        and
                        Fulfilment
                        <i
                          class="fas fa-map-marker-alt"></i></a>
                      <a data-toggle="tab"
                        href="#liton_tab_1_5">Track
                        Order
                        <i
                          class="fas fa-check-double"></i></a>
                      <a data-toggle="tab"
                        href="#liton_tab_1_6">Wishlist
                        <i
                          class="fas fa-heart"></i></a>
                      <a data-toggle="tab"
                        href="#liton_tab_1_7">Customer
                        Service<i
                          class="fas fa-user"></i></a>
                      <a
                        href="login.html">Logout
                        <i
                          class="fas fa-sign-out-alt"></i></a>
                    </div>
                  </div>
                </div>
                <div
                  class="col-lg-8">
                  <div
                    class="tab-content">
                    <div
                      class="tab-pane fade active show"
                      id="liton_tab_1_1">
                      <div
                        class="ltn__myaccount-tab-content-inner">
                        <center>
                          <img
                            src="images/icon.png"
                            height="150"
                            alt="" />
                        </center>
                        <div
                          class="ltn__form-box">
                          <form
                            action="{{ route('customers.update', $customer->id) }}"
                            method="POST"
                            enctype='multipart/form-data'>
                            @csrf
                            @method('PUT')
                            <div
                              class="row mb-50">
                              <div
                                class="col-md-6">
                                <label>First
                                  name:</label>
                                <input
                                  type="text"
                                  name="firstname"
                                  value="{{ $first_name }}"
                                  >
                              </div>
                              <div
                                class="col-md-6">
                                <label>Last
                                  name:</label>
                                <input
                                  type="text"
                                  name="lastname"
                                  value="{{ $last_name }}"
                                  >
                              </div>
                              <div
                                class="col-md-6">
                                <label>User
                                  Id:</label>
                                <input
                                  type="text"
                                  name="id"
                                  placeholder="{{ $customer->id }}"
                                  disabled>
                              </div>
                              <div
                                class="col-md-6">
                                <label>User
                                  Email:</label>
                                <input
                                  type="email"
                                  name="email"
                                  value="{{ $customer->email }}">
                              </div>
                              <div
                                class="col-md-6">
                                <label>mobile:</label>
                                <input
                                  type="text"
                                  name="mobile"
                                  value="{{ $customer->mobile }}">
                              </div>
                              <div
                                class="col-md-6">
                                <label>Address:</label>
                                <input
                                  type="text"
                                  name="address"
                                  value="{{ $customer->address }}">
                              </div>
                            </div>

                            <div
                              class="btn-wrapper">
                              <button
                                type="submit"
                                class="btn theme-btn-1 btn-effect-1 text-uppercase">Save
                                Changes</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <div
                      class="tab-pane fade"
                      id="liton_tab_1_2">
                      <div
                        class="ltn__myaccount-tab-content-inner">
                        <div
                          class="table-responsive">
                          <table
                            class="table">
                            <thead>
                              <tr>
                                <th>
                                  Order
                                </th>
                                <th>
                                  Date
                                </th>
                                <th>
                                  Status
                                </th>
                                <th>
                                  Total
                                </th>
                                <th>
                                  Action
                                </th>
                              </tr>
                            </thead>

                          </table>
                        </div>
                      </div>
                    </div>
                    <div
                      class="tab-pane fade"
                      id="liton_tab_1_3">
                      <div
                        class="ltn__myaccount-tab-content-inner">
                        <div
                          class="table-responsive">
                          <table
                            class="table">
                            <thead>
                              <tr>
                                <th>
                                  Order
                                </th>
                                <th>
                                  Date
                                </th>
                                <th>
                                  Status
                                </th>
                                <th>
                                  Total
                                </th>
                                <th>
                                  Action
                                </th>
                              </tr>
                            </thead>

                          </table>
                        </div>
                      </div>
                    </div>

                    <div
                      class="tab-pane fade"
                      id="liton_tab_1_4">
                      <div
                        class="ltn__myaccount-tab-content-inner">

                        <div
                          class="row">
                          <div
                            class="col-md-12 col-12 learts-mb-30">
                            <img
                              src="images/payment.jpg"
                              alt="" />
                          </div>

                        </div>
                      </div>
                    </div>
                    <div
                      class="tab-pane fade"
                      id="liton_tab_1_5">
                      <div
                        class="ltn__myaccount-tab-content-inner">

                        <div
                          class="ltn__form-box">
                          <h2>
                            Track
                            Order
                          </h2>
                        </div>
                      </div>
                    </div>
                    <div
                      class="tab-pane fade"
                      id="liton_tab_1_6">
                      <div
                        class="ltn__myaccount-tab-content-inner">

                        <div
                          class="ltn__form-box">
                          <h2>
                            Wishlist
                          </h2>
                        </div>
                      </div>
                    </div>
                    <div
                      class="tab-pane fade"
                      id="liton_tab_1_7">
                      <div
                        class="ltn__myaccount-tab-content-inner">

                        <div
                          class="ltn__form-box">
                          <h2>
                            Customer
                            support
                          </h2>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- PRODUCT TAB AREA END -->
        </div>
      </div>
    </div>
  </div>
  <!-- WISHLIST AREA START -->
  @include('inc.user.feature')
@endsection
