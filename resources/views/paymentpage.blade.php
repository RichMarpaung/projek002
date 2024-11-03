@extends('template.master')
@section('body')
<section class="checkout-section pt_10 pb_150">
    <div class="large-container">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12 billing-column">
                <div class="billing-content">
                    <h3>Billing Details</h3>
                    <div class="form-inner">
                        <form method="post" action="">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ $bookingDetails['user_id'] ?? '' }}" disabled>
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 field-column">
                                    <div class="form-group">
                                        <label>Name<span>*</span></label>
                                        <input type="text" name="name" value="{{ $bookingDetails['name'] ?? '' }}" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 field-column">
                                    <div class="form-group">
                                        <label>Email<span>*</span></label>
                                        <input type="email" name="email" value="{{ $bookingDetails['email'] ?? '' }}" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 field-column">
                                    <div class="form-group">
                                        <label>Start Rent<span>*</span></label>
                                        <input type="date" name="date-start" value="{{ $bookingDetails['time-start'] ?? '' }}" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 field-column">
                                    <div class="form-group">
                                        <label>End Rent<span>*</span></label>
                                        <input type="date" name="date-end" value="{{ $bookingDetails['time-end'] ?? '' }}" disabled>
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
                                {{-- <div class="btn-box pt_50">
                                    <button type="submit" class="theme-btn btn-one">Make Payment</button>
                                </div> --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 col-sm-12 order-column">
                <!-- Order Summary Section -->
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
                                    <h6>{{ $product->name }} </h6>
                                </div>
                                <h4>Rp. {{ $product->price }}</h4>
                            </div>

                        </div>
                        <ul class="cost-box">
                            <li><h6>Hari</h6><span class="color">X {{ $bookingDetails['days'] }}</span></li>
                            <li><h4>Total</h4><span class="color">Rp. {{ $bookingDetails['total_price'] }}</span></li>
                        </ul>


                        <div class="btn-box pt_20">
                            <button type="submit" class="theme-btn btn-one">Make Payment</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
