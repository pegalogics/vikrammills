@extends('layouts.master')

@section('title',
  'About')

@section('content')
       
        @include('inc.user.banner')
        <div class="liton__wishlist-area mb-105">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping-cart-inner"><br>
            <br>
            <h1>My Wishlist ❤ </h1>
                        <div class="shoping-cart-table table-responsive">
                            <table class="table" border="1">
                              
                                <tbody align="">
                                    <tr>
                                        <td align="center" class="cart-product-remove" width="100"><strong>X</strong></td>
                                        <td class="cart-product-image" width="150">
                                            <a href="product-details.html"><img src="images/bran.png" alt="#"></a>
                                        </td>
                                        <td class="cart-product-info" width="250">
                                            <p><a href="product-details.html">Atta</a></p>
                                        </td>
                                        <td class="cart-product-price">₹ 150</td>
                                        <td class="cart-product-stock">In Stock</td>
                                        <td class="cart-product-add-cart">
                                            <a class="submit-button-1" href="#" title="Add to Cart">Add to Cart</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" class="cart-product-remove" width="100"><strong>X</strong></td>
                                        <td class="cart-product-image" width="150">
                                            <a href="product-details.html"><img src="images/bran.png" alt="#"></a>
                                        </td>
                                        <td class="cart-product-info" width="250">
                                            <p><a href="product-details.html">Maida</a></p>
                                        </td>
                                        <td class="cart-product-price">₹ 150</td>
                                        <td class="cart-product-stock">In Stock</td>
                                        <td class="cart-product-add-cart">
                                            <a class="submit-button-1" href="#" title="Add to Cart">Add to Cart</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" class="cart-product-remove" width="100"><strong>X</strong></td>
                                        <td class="cart-product-image" width="150">
                                            <a href="product-details.html"><img src="images/bran.png" alt="#"></a>
                                        </td>
                                        <td class="cart-product-info" width="250">
                                            <p><a href="product-details.html">Sooji</a></p>
                                        </td>
                                        <td class="cart-product-price">₹ 150</td>
                                        <td class="cart-product-stock">In Stock</td>
                                        <td class="cart-product-add-cart">
                                            <a class="submit-button-1" href="#" title="Add to Cart">Add to Cart</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        @include('inc.user.feature')


@endsection
