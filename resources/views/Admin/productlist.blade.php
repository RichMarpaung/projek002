@extends('Admin.master')
@section('body')
<div class="container-xxl">

    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="card-title">Customers Details</h4>
                        </div><!--end col-->
                    </div>  <!--end row-->
                </div><!--end card-header-->
                <div class="card-body pt-0">
                    <div class="table-responsive">
                        <table class="table datatable" id="datatable_1">
                            <thead class="table-light">
                              <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Fuel</th>
                                <th>Transmision</th>
                                <th>Seat</th>
                                <th>Price</th>
                                <th>Stok</th>
                                <th>Description</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $item)
                                <tr>
                                 <td>@if ($item->image)
                                    <img src="{{ asset('storage/'.$item->image) }}" alt="Tidak Ada " style="max-width: 100px; max-height: 100px;">

                                @else
                                <h3>Tidak Ada Sampul</h3>
                                @endif</td>
                                </td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->category->name }}</td>
                                    <td>{{ $item->fuel }}</td>
                                    <td>{{ $item->transmission }}</td>
                                    <td>{{ $item->seats}}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->stock }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td class="text-end">
                                        <a href="{{ route('admin.product.edit', $item->id) }}"><i class="las la-pen text-secondary font-16"></i></a>
                                        <form action="{{ route('admin.product.delete', $item->id) }}" method="POST" class="d-inline m-2">
                                            @csrf
                                            @method('POST')
                                            <button type="submit" class="btn p-0 border-0 bg-transparent">
                                                <i class="las la-trash-alt text-secondary font-16"></i>
                                            </button>
                                        </form>
                                    </td>

                                </tr>
                                @endforeach

                            </tbody>
                          </table>
                    </div>
                </div><!--end card-body-->
            </div><!--end card-->
        </div> <!--end col-->
    </div><!--end row-->


</div><!-- container -->
@endsection
