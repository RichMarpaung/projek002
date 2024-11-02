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
                        <form method="post" action="">
                            @csrf
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 field-column">
                                    <div class="form-group">
                                        <label>Name<span>*</span></label>
                                        <input type="text" name="name" value="{{ $bookingDetails['name'] ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 field-column">
                                    <div class="form-group">
                                        <label>Email<span>*</span></label>
                                        <input type="email" name="email" value="{{ $bookingDetails['email'] ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 field-column">
                                    <div class="form-group">
                                        <label>Start Rent<span>*</span></label>
                                        <input type="time" name="time-start" value="{{ $bookingDetails['time-start'] ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 field-column">
                                    <div class="form-group">
                                        <label>End Rent<span>*</span></label>
                                        <input type="time" name="time-end" value="{{ $bookingDetails['time-end'] ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 field-column">
                                    <div class="form-group">
                                        <label>Phone Number<span>*</span></label>
                                        <input type="text" name="phone" value="{{ $bookingDetails['phone'] ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 field-column">
                                    <div class="form-group">
                                        <label>Jaminan KTP<span>*</span></label>
                                        <input type="file" name="jaminan_ktp" accept="image/*" required>
                                    </div>
                                </div>
                                <!-- Additional fields for other booking details -->
                                <div class="btn-box pt_50">
                                    <button type="submit" class="theme-btn btn-one">Make Payment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 order-column">
                <!-- Order Summary Section -->
                <!-- Similar modifications can be applied to populate summary details if needed -->
            </div>
        </div>
    </div>
</section>

@endsection
