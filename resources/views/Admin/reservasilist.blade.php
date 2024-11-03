@extends('Admin.master')
@section('body')
<div class="container-xxl">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="card-title">Reservasi</h4>
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
                                <th>Reservasi</th>
                                <th>Awal Sewa</th>
                                <th>Akhir Sewa</th>
                                <th>Status</th>
                                <th>Pengembalian</th>
                                <th class="text-end">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($reservations as $item)

                               <tr>
                                    <td >
                                        <p class="d-inline-block align-middle mb-0">
                                            <span class="font-13 fw-medium">{{ $item->payment->user->name }}</span>
                                        </p>
                                    </td>
                                    <td>{{ $item->payment->user->email }}</td>
                                    <td>{{ $item->payment->user->phone }}</td>
                                    <td>{{ $item->code_reservasi }}</td>
                                    <td>{{ $item->payment->awal_sewa }}</td>
                                    <td>{{ $item->payment->akhir_sewa}}</td>
                                    <td>
                                        @if($item->status == 'Pending')
                                        <span class="badge rounded-pill bg-danger-subtle text-danger">{{ $item->status }}</span>
                                        @elseif($item->status == 'Rental')
                                        <span class="badge rounded-pill bg-warning-subtle text-warning">{{ $item->status }}</span>
                                        @elseif($item->status == 'Returned')
                                        <span class="badge rounded-pill bg-success-subtle text-success">{{ $item->status }}</span>
                                        @else
                                        <span class="badge rounded-pill bg-secondary-subtle text-secondary">{{ $item->status }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if(\Carbon\Carbon::parse($item->payment->akhir_sewa)->isPast())
                                            <span class="badge bg-danger-subtle text-danger">Sudah Lewat</span>
                                        @else
                                            <span class="badge bg-success-subtle text-success">Masih Berlaku</span>
                                        @endif
                                    </td>
                                    <td class="text-end">
                                        <a href="#"><i class="las la-info-circle text-secondary fs-18"></i></a>
                                        <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                        <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                    </td>
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
@endsection
