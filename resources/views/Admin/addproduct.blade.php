@extends('Admin.master')
@section('body')
<form action="{{ route('admin.product.store') }}" method="POST"  enctype="multipart/form-data">
@csrf
<div class="container-xxl">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="card-title">Add Product</h4>
                        </div><!--end col-->
                    </div>  <!--end row-->
                </div><!--end card-header-->
                <div class="card-body pt-0">
                        <div class="mb-2">
                            <label for="username" class="form-label">Nama</label>
                            <input class="form-control" type="text" id="name" placeholder="Enter Name" name="name">
                        </div>
                        <div class="mb-2">
                            <label for="email" class="form-label">Category</label>
                            <select class="form-select" id="category_id" name="category_id">
                                <option selected="">Choose...</option>
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}" data-range="{{$category->name}}">{{$category->name}}</option>
                                @endforeach
                              </select>
                            </div>
                        <div class="mb-2">
                            <label for="email" class="form-label">Fuel</label>
                            <input class="form-control" type="text" id="fuel" placeholder="Enter Fuel" name="fuel">
                        </div>
                        <div class="mb-2">
                            <label for="email" class="form-label">Transmission</label>
                            <select class="form-select" id="transmission" name="transmission">
                                <option selected="">Choose...</option>
                                <option value="Manual">Manual</option>
                                <option value="Automatic">Automatic</option>

                              </select>
                            </div>

                        <div class="mb-2">
                            <label for="password" class="form-label">Seat</label>
                            <input class="form-control" type="number" id="seat" placeholder="Enter Seat" name="seats">
                        </div>
                        <div class="mb-3">
                            <label for="password2" class="form-label">Price</label>
                            <input class="form-control" type="number" id="price" placeholder="Enter Price" name="price">
                        </div>
                        <div class="mb-3">
                            <label for="password2" class="form-label">Stock</label>
                            <input class="form-control" type="number" id="stock" placeholder="Enter Stock" name="stock">
                        </div>
                        <div class="mb-3">
                            <label for="password2" class="form-label">Image</label>
                            <div class="input-group mb-3">
                                <input class="form-control" type="file" id="image" name='image'>
                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="message">Deskripsi</label>
                            <textarea class="form-control" rows="5" id="message" name="description"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit form</button>

                </div><!--end card-body-->
            </div>
        </div>

        <!--end col-->
    </div><!--end row-->
</div>

</form>
@endsection
