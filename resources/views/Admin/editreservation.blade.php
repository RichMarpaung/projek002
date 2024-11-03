@extends('Admin.master')
@section('body')
<form action="{{ route('admin.reservation.update',$reservation->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <div class="container-xxl">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Edit reservation</h4>
                            </div><!--end col-->
                            <div class="col text-end">
                                <!-- Cancel Button -->
                                <a href="{{ url()->previous() }}" class="m-2">
                                    <i class="las la-times text-secondary font-16"></i>
                                </a>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end card-header-->

                    <div class="card-body pt-0">
                        <div class="mb-2">
                            <label for="name" class="form-label">Costumer</label>
                            <input class="form-control" type="text" id="name"
                                   placeholder="Enter name" name="name"
                                   value="{{ old('name', $reservation->payment->user->name) }}" disabled>
                        </div>
                        <div class="mb-2">
                            <label for="code_reservasi" class="form-label">Costumer</label>
                            <input class="form-control" type="text" id="code_reservasi"
                                   placeholder="Enter code_reservasi" name="code_reservasi"
                                   value="{{ old('code_reservasi', $reservation->code_reservasi) }}" disabled>
                        </div>
                        <div class="mb-2">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" id="status" name="status">
                                <option value="Pending"
                                    {{ $reservation->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                <option value="Rental"
                                    {{ $reservation->status == 'Rental' ? 'selected' : '' }}>Rental</option>
                                <option value="Returned"
                                    {{ $reservation->status == 'Returned' ? 'selected' : '' }}>Returned</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Product</button>
                        <a href="{{ url()->previous() }}" class="btn btn-secondary">
                            Cancel
                        </a>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
        </div><!--end row-->
    </div>
</form>
@endsection
