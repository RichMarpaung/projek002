@extends('Admin.master')
@section('body')
<div class="col-md-6 col-lg-4">
    <div class="card">
        <div class="card-body">
            <div class="row d-flex justify-content-center border-dashed-bottom pb-3">
                <div class="col-9">
                    <p class="text-dark mb-0 fw-semibold fs-14">Total Pendapatan</p>
                    <h3 class="mt-2 mb-0 fw-bold">Rp. {{ number_format($totalPayment, 0, ',', '.') }}</h3>
                </div>
                <!--end col-->
                <div class="col-3 align-self-center">
                    <div
                        class="d-flex justify-content-center align-items-center thumb-xl bg-light rounded-circle mx-auto">
                        <i class="iconoir-dollar-circle h1 align-self-center mb-0 text-secondary"></i>
                    </div>
                </div>
                <!--end col-->
            </div>

        </div>
        <!--end card-body-->
    </div>
    <!--end card-->
</div>
<div class="row justify-content-center">

    <div class="container-xxl">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Payment</h4>
                            </div><!--end col-->
                            <div class="col-auto">

                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end card-header-->
                    <div class="card-body pt-0">

                        <div class="table-responsive">
                            <table class="table mb-0 checkbox-all" id="datatable_1">
                                <thead class="table-light">
                                  <tr>

                                    <th class="ps-0">Customer</th>
                                    <th>Email</th>
                                    <th>Phone No</th>
                                    <th>Awal Sewa</th>
                                    <th>Akhir Sewa</th>
                                    <th>Total Payment</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($payment as $item)

                                   <tr>
                                        <td >
                                            <p class="d-inline-block align-middle mb-0">
                                                <span class="font-13 fw-medium">{{ $item->user->name }}</span>
                                            </p>
                                        </td>
                                        <td>{{ $item->user->email }}</td>
                                        <td>{{ $item->user->phone }}</td>
                                        <td>{{ $item->awal_sewa }}</td>
                                        <td>{{ $item->akhir_sewa}}</td>
                                        <td>{{ $item->total_payment}}</td>



                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
</div>
@endsection
