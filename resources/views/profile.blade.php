@extends('template.master')
@section('style')
<link rel="stylesheet" href="{{ asset('assets/libs/jsvectormap/css/jsvectormap.min.css') }}">

<link href="{{ asset('assets/libs/simple-datatables/style.css') }}" rel="stylesheet" type="text/css" />
<!-- App css -->
<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

@endsection
@section('body')

<div class="container-xxl">
            <div class="row justify-content-center mt-5">
        <div class="col-5">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-5 align-self-center mb-3 mb-lg-0">
                            <div class="d-flex align-items-center flex-row flex-wrap">

                                <div class="">
                                    <h5 class="fw-semibold fs-22 mb-1">Nama : </h5>
                                    <h4 class="mb-4">{{ Auth::user()->name }}</h4>
                                    <p class="mb-0 text-muted fw-medium">Email : {{ Auth::user()->email }}</p>
                                    <p class="mb-0 text-muted fw-medium">Phone :{{ Auth::user()->phone }}</p>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col align-self-center">
                            <form id="logout-form" action="{{ route('logout') }}" method="GET">
                                @csrf
                                <button type="submit" class="btn btn-danger d-inline-block">Log Out</button>
                            </form>
                        </div>
                    </div><!--end row-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div> <!--end col-->
        {{-- <div class="col-md-6 col-lg-6"> --}}
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="card-title">Bordered Table</h4>
                        </div><!--end col-->
                    </div>  <!--end row-->
                </div><!--end card-header-->
                <div class="card-body pt-0">
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0 table-centered">
                            <thead>
                            <tr>
                                <th>Reservasi Code</th>
                                <th>Product</th>
                                <th>Harga</th>
                                <th>Awal Sewa</th>
                                <th>Akhir Sewa</th>
                                <th>Order Status</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($reservations as $item)


                            <tr>
                                <td>{{ $item-> code_reservasi}}</td>
                                <td>{{ $item->payment->product->name }}</td>
                                <td>Rp.{{ number_format($item->payment->total_payment, 0, ',', '.') }}</td>
                                <td>{{ $item->payment->awal_sewa }}</td>
                                <td>{{ $item->payment->akhir_sewa }}</td>
                                <td> @if($item->status == 'Pending')
                                    <span class="badge rounded-pill bg-danger-subtle text-danger">{{ $item->status }}</span>
                                    @elseif($item->status == 'Rental')
                                    <span class="badge rounded-pill bg-warning-subtle text-warning">{{ $item->status }}</span>
                                    @elseif($item->status == 'Returned')
                                    <span class="badge rounded-pill bg-success-subtle text-success">{{ $item->status }}</span>
                                    @else
                                    <span class="badge rounded-pill bg-secondary-subtle text-secondary">{{ $item->status }}</span>
                                    @endif
                                </td>

                            </tr>
                            @endforeach
                            </tbody>
                        </table><!--end /table-->
                    </div><!--end /tableresponsive-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div>
    </div>
    </div><!--end row-->

<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>

    <script src="{{ asset('assets/libs/simple-datatables/umd/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/js/pages/datatable.init.js') }}"></script>

    <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/data/stock-prices.js') }}"></script>
    <script src="{{ asset('assets/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jsvectormap/maps/world.js') }}"></script>
    <script src="{{ asset('assets/js/pages/index.init.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/libs/chart.js/chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/chartjs.init.js') }}"></script>

@endsection
