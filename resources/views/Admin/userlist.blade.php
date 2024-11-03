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
                                <th>Id</th>
                                <th>Role</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Password</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->role->name }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone}}</td>
                                    <td>{{ $item->password }}</td>
                                    <td class="text-end">
                                        <a href="{{ route('admin.user.edit', $item->id) }}"><i class="las la-pen text-secondary font-16 text-info"></i></a>
                                        <form action="{{ route('admin.user.delete', $item->id) }}" method="POST" class="d-inline m-2">
                                            @csrf
                                            @method('POST')
                                            <button type="submit" class="btn p-0 border-0 bg-transparent">
                                                <i class="las la-trash-alt text-secondary font-16 text-danger"></i>
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
