@extends('template.master')
@section('body')
  <!-- page-title -->
  <section class="page-title centred pt_190 pb_190">
    <div class="bg-layer" style="background-image: url(assets/images/background/page-title.jpg);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Checkout</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index-2.html">Home</a></li>
                <li>Checkout</li>
            </ul>
        </div>
    </div>
</section>
<!-- checkout-section -->
<section class="checkout-section pt_150 pb_150">
    <div class="large-container">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12 billing-column">
                <div class="billing-content">
                    <h3>Billing Details</h3>
                    <div class="form-inner">
                        <form method="post" action="#">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 field-column">
                                    <div class="form-group">
                                        <label>Name<span>*</span></label>
                                        <input type="text" name="name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 field-column">
                                    <div class="form-group">
                                        <label>Email<span>*</span></label>
                                        <input type="email" name="email">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 field-column">
                                    <div class="form-group">
                                        <label>Start Rent<span>*</span></label>
                                        <input type="time" name="time-start">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 field-column">
                                    <div class="form-group">
                                        <label>End Rent<span>*</span></label>
                                        <input type="time" name="time-end">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 field-column">
                                    <div class="form-group">
                                        <label>Phone Number<span>*</span></label>
                                        <input type="text" name="phone">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 field-column">
                                    <div class="form-group">
                                        <label>Jaminan KTP<span>*</span></label>
                                        <input type="file" name="phone">
                                    </div>
                                </div>


                                <div class="btn-box pt_50">
                                    <button type="submit" class="theme-btn btn-one">Make Payment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="other-address">
                        <h3>Shipping Address</h3>
                        <div class="check-box">
                            <input class="check" type="checkbox" id="checkbox2">
                            <label for="checkbox2">Ship to a different address</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 order-column">
                <div class="order-box">
                    <h3>Order Summary</h3>
                    <div class="order-info">
                        <div class="title-box mb_20">
                            <span class="text">Products</span>
                            <span class="text">total</span>
                        </div>
                        <div class="order-product">
                            <div class="single-item">
                                <div class="product-box">
                                    <h6>Half Sleeve Polo Neck <br />Golf T- Shirts X 1</h6>
                                </div>
                                <h4>$12.00</h4>
                            </div>
                            <div class="single-item">
                                <div class="product-box">
                                    <h6>Classic Men & Women <br />Golf Cap X 1</h6>
                                </div>
                                <h4>$06.00</h4>
                            </div>
                            <div class="single-item">
                                <div class="product-box">
                                    <h6>Callaway Golf Chev LS <br />Waterproof Golf X 1</h6>
                                </div>
                                <h4>$10.00</h4>
                            </div>
                        </div>
                        <ul class="cost-box">
                            <li><h4>Subtotal</h4><span>$28.00</span></li>
                            <li><h4>Free Shipping</h4><span>$0</span></li>
                            <li><h4>Total</h4><span class="color">$28.00</span></li>
                        </ul>
                        <div class="payment-option">
                            <div class="bank-payment">
                                <p>Selet Your Credit/Debit Cards or Paypal</p>
                                <ul class="card-list">
                                    <li>
                                        <div class="check-box-three">
                                            <input class="check" type="radio" id="checkbox6" name="same">
                                            <label for="checkbox6"><img src="assets/images/icons/card-1.png" alt=""></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="check-box-three">
                                            <input class="check" type="radio" id="checkbox7" name="same">
                                            <label for="checkbox7"><img src="assets/images/icons/card-2.png" alt=""></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="check-box-three">
                                            <input class="check" type="radio" id="checkbox8" name="same">
                                            <label for="checkbox8"><img src="assets/images/icons/card-3.png" alt=""></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="check-box-three">
                                            <input class="check" type="radio" id="checkbox9" name="same">
                                            <label for="checkbox9"><img src="assets/images/icons/card-4.png" alt=""></label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <ul class="other-payment">
                                <li>
                                    <div class="check-box-three mb_8">
                                        <input class="check" type="radio" id="checkbox4" name="same">
                                        <label for="checkbox4">Cash on Delivery</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="check-box-three">
                                        <input class="check" type="radio" id="checkbox5" name="same">
                                        <label for="checkbox5">Direct Bank Transfer</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="btn-box pt_50">
                            <button type="submit" class="theme-btn btn-one">Make Payment</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- checkout-section end -->


@endsection
