@extends('layouts.master')

@section('title',
  'About')

@section('content')

  @include('inc.user.banner')
  <div
    class="ltn__checkout-area mb-120">
    <div
      class="container">
      <div
        class="row">
        <div
          class="col-lg-12">
          <br>
          <br>
          <h1>
            Checkout
          </h1>
          <div
            class="ltn__checkout-inner">
            <div
              class="ltn__checkout-single-content ltn__returning-customer-wrap">
              <p>
                <strong>Customer
                  Name:
                </strong>
                9876543210
                <span
                  style="float: right"><a
                    class="btn btn-danger text-uppercase"
                    href="login.html">Change</a></span>
              </p>
            </div>
            <div
              class="ltn__checkout-single-content ltn__coupon-code-wrap">
              <p>
                Have
                a
                coupon?
                <a class="ltn__secondary-color"
                  href="#ltn__coupon-code"
                  data-toggle="collapse">Click
                  here
                  to
                  enter
                  your
                  code</a>
              </p>
              <div
                id="ltn__coupon-code"
                class="collapse ltn__checkout-single-content-info">
                <div
                  class="ltn__coupon-code-form">
                  <p>
                    If
                    you
                    have
                    a
                    coupon
                    code,
                    please
                    apply
                    it
                    below.
                  </p>
                  <form
                    action="#">
                    <input
                      type="text"
                      name="coupon-code"
                      placeholder="Coupon code">
                    <button
                      class="btn theme-btn-2 btn-effect-2 text-uppercase">Apply
                      Coupon</button>
                  </form>
                </div>
              </div>
            </div>
            <div
              class="ltn__checkout-single-content mt-50">
              <h2
                class="title-2">
                Billing
                Details
              </h2>
              <div
                class="ltn__checkout-single-content-info">
                <form
                  action="#">
                  <p>
                    Personal
                    Information
                  </p>
                  <div
                    class="row">
                    <div
                      class="col-md-6">
                      <div
                        class="input-item input-item-name ltn__custom-icon">
                        <input
                          type="text"
                          name="ltn__name"
                          placeholder="First name">
                      </div>
                    </div>
                    <div
                      class="col-md-6">
                      <div
                        class="input-item input-item-name ltn__custom-icon">
                        <input
                          type="text"
                          name="ltn__lastname"
                          placeholder="Last name">
                      </div>
                    </div>
                    <div
                      class="col-md-6">
                      <div
                        class="input-item input-item-email ltn__custom-icon">
                        <input
                          type="email"
                          name="ltn__email"
                          placeholder="email address">
                      </div>
                    </div>
                    <div
                      class="col-md-6">
                      <div
                        class="input-item input-item-phone ltn__custom-icon">
                        <input
                          type="text"
                          name="ltn__phone"
                          placeholder="phone number">
                      </div>
                    </div>
                    <div
                      class="col-lg-6 col-md-6">

                      <div
                        class="input-item">
                        <input
                          type="text"
                          placeholder="Landmark (optional)">
                      </div>
                    </div>
                    <div
                      class="col-lg-6 col-md-6">

                      <div
                        class="input-item">
                        <input
                          type="text"
                          placeholder="Alternate Phone no.">
                      </div>
                    </div>


                    <div
                      class="col-lg-6 col-md-6">
                      <p>
                        State
                      </p>
                      <div
                        class="input-item">
                        <select
                          class="nice-select"
                          style="display: none;">
                          <option>
                            Select
                            State
                          </option>
                          <option>
                            Delhi
                          </option>
                          <option>
                            Uttar
                            Pradesh
                          </option>
                          <option>
                            Arunachal
                            Pradesh
                          </option>
                          <option>
                            Haryana
                          </option>
                          <option>
                            Punjab
                          </option>
                          <option>
                            Uttarakhand
                          </option>
                          <option>
                            West
                            Bengal
                          </option>
                        </select>
                        <div
                          class="nice-select"
                          tabindex="0">
                          <span
                            class="current">Select
                            State</span>
                          <ul
                            class="list">
                            <li
                              data-value="Select State"
                              class="option selected">
                              Select
                              State
                            </li>
                            <li
                              data-value="Delhi"
                              class="option">
                              Delhi
                            </li>
                            <li
                              data-value="Uttar Pradesh"
                              class="option">
                              Uttar
                              Pradesh
                            </li>
                            <li
                              data-value="Arunachal Pradesh"
                              class="option">
                              Arunachal
                              Pradesh
                            </li>
                            <li
                              data-value="Haryana"
                              class="option">
                              Haryana
                            </li>
                            <li
                              data-value="Punjab"
                              class="option">
                              Punjab
                            </li>
                            <li
                              data-value="Uttarakhand"
                              class="option">
                              Uttarakhand
                            </li>
                            <li
                              data-value="West Bengal"
                              class="option">
                              West
                              Bengal
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div
                      class="col-lg-6 col-md-6">
                      <p>
                        City/District/Town
                      </p>
                      <div
                        class="input-item">
                        <select
                          class="nice-select"
                          style="display: none;">
                          <option>
                            Select
                            City/District/Town
                          </option>
                          <option>
                            East
                            Delhi
                          </option>
                          <option>
                            East
                            Delhi
                          </option>
                          <option>
                            West
                            Delhi
                          </option>
                          <option>
                            Central
                            Delhi
                          </option>
                          <option>
                            North
                            Delhi
                          </option>
                          <option>
                            South
                            Delhi
                          </option>
                        </select>
                        <div
                          class="nice-select"
                          tabindex="0">
                          <span
                            class="current">Select
                            City/District/Town</span>
                          <ul
                            class="list">
                            <li
                              data-value="Select City/District/Town"
                              class="option selected">
                              Select
                              City/District/Town
                            </li>
                            <li
                              data-value="East Delhi"
                              class="option">
                              East
                              Delhi
                            </li>
                            <li
                              data-value="East Delhi"
                              class="option">
                              East
                              Delhi
                            </li>
                            <li
                              data-value="West Delhi"
                              class="option">
                              West
                              Delhi
                            </li>
                            <li
                              data-value="Central Delhi"
                              class="option">
                              Central
                              Delhi
                            </li>
                            <li
                              data-value="North Delhi"
                              class="option">
                              North
                              Delhi
                            </li>
                            <li
                              data-value="South Delhi"
                              class="option">
                              South
                              Delhi
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>

                    <div
                      class="col-lg-12 col-md-6">
                      <div
                        class="input-item">
                        <textarea
                          name="address"
                          placeholder="Address (Area &amp; Street)"></textarea>

                      </div>
                    </div>
                    <div
                      class="col-lg-6 col-md-6">
                      <div
                        class="input-item">
                        <input
                          type="text"
                          placeholder="Zip">
                      </div>
                    </div>
                    <div
                      class="col-lg-6 col-md-6">
                      <div
                        class="input-item">
                        <input
                          type="text"
                          placeholder="Locality">
                      </div>
                    </div>



                  </div>
                  <p>
                    Address
                    Type
                  </p>
                  <p>
                    <label
                      class="input-info-save mb-0"><input
                        type="radio"
                        name="agree">
                      Home
                      (All
                      Day
                      Delivery)
                    </label>
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    <label
                      class="input-info-save mb-0"><input
                        type="radio"
                        name="agree">
                      Work(Monday
                      to
                      Friday
                      bettween
                      10
                      AM
                      to
                      5
                      PM)
                    </label>
                  </p>

                  <p>
                    <a href="#"
                      class="btn theme-btn-1 btn-effect-1 text-uppercase"
                      style="height: 35px; font-size: 20px;">
                      Save
                      AND
                      Deliver
                      Here</a>
                  </p>

                </form>
              </div>
            </div>
          </div>
        </div>
        <div
          class="col-lg-6">
          <div
            class="ltn__checkout-payment-method mt-50">
            <p
              class="title-2">
              Payment
              Method
            </p>
            <div
              id="checkout_accordion_1">
              <!-- card -->
              <div
                class="card">
                <p class="collapsed ltn__card-title"
                  data-toggle="collapse"
                  data-target="#faq-item-2-1"
                  aria-expanded="true">
                  <img
                    src="images/upi.gif"
                    alt=""
                    height="10">
                  &nbsp;
                  UPI
                </p>
                <div
                  id="faq-item-2-1"
                  class="collapse"
                  data-parent="#checkout_accordion_1">
                  <div
                    class="card-body">
                    <p>
                      <input
                        type="text"
                        name=""
                        placeholder="UPI ID">
                    </p>
                  </div>
                </div>

              </div>
              <!-- card -->
              <div
                class="card">
                <p class="ltn__card-title"
                  data-toggle="collapse"
                  data-target="#faq-item-2-2"
                  aria-expanded="false">
                  <img
                    src="images/qr.png"
                    alt=""
                    height="5">
                  QR
                  CODE
                </p>
                <div
                  id="faq-item-2-2"
                  class="collapse"
                  data-parent="#checkout_accordion_1">
                  <div
                    class="card-body">
                    <p
                      align="center">
                      QR
                      CODE
                    </p>
                  </div>
                </div>
              </div>
              <!-- card -->
              <div
                class="card">
                <p class="collapsed ltn__card-title"
                  data-toggle="collapse"
                  data-target="#faq-item-2-3"
                  aria-expanded="false">
                  <img
                    src="images/ccavenue.png"
                    alt="#"
                    style="height: 15px;">
                </p>
                <div
                  id="faq-item-2-3"
                  class="collapse"
                  data-parent="#checkout_accordion_1">
                  <div
                    class="card-body">
                    <p>
                      Pay
                      via
                      CCAVenue.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="ltn__payment-note mt-30 mb-30">
              <p>
                Your
                personal
                data
                will
                be
                used
                to
                process
                your
                order,
                support
                your
                experience
                throughout
                this
                website,
                and
                for
                other
                purposes
                described
                in
                our
                privacy
                policy.
              </p>
            </div>
            <button
              class="btn theme-btn-1 btn-effect-1 text-uppercase"
              type="submit">Place
              order</button>
          </div>
        </div>
        <div
          class="col-lg-6">
          <div
            class="shoping-cart-total mt-50">
            <p
              class="title-2">
              Cart
              Totals
            </p>
            <table
              class="table">
              <tbody>
                <tr>
                  <td>
                    Atta
                    <strong>×
                      2</strong>
                  </td>
                  <td>
                    ₹
                    298.00
                  </td>
                </tr>
                <tr>
                  <td>
                    Suji
                    <strong>×
                      2</strong>
                  </td>
                  <td>
                    ₹
                    170.00
                  </td>
                </tr>
                <tr>
                  <td>
                    Maida
                    <strong>×
                      2</strong>
                  </td>
                  <td>
                    ₹
                    150.00
                  </td>
                </tr>

                <tr>
                  <td>
                    <strong>Order
                      Total</strong>
                  </td>
                  <td>
                    <strong>₹
                      633.00</strong>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('inc.user.feature')


@endsection
