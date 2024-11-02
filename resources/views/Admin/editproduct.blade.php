@extends('Admin.master')
@section('body')
<form action="{{ route('admin.product.update',$product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <div class="container-xxl">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Edit Product</h4>
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
                            <label for="name" class="form-label">Nama</label>
                            <input class="form-control" type="text" id="name"
                                   placeholder="Enter Name" name="name"
                                   value="{{ old('name', $product->name) }}">
                        </div>

                        <div class="mb-2">
                            <label for="category_id" class="form-label">Category</label>
                            <select class="form-select" id="category_id" name="category_id">
                                <option selected disabled>Choose...</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ $category->id == $product->category_id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-2">
                            <label for="fuel" class="form-label">Fuel</label>
                            <input class="form-control" type="text" id="fuel"
                                   placeholder="Enter Fuel" name="fuel"
                                   value="{{ old('fuel', $product->fuel) }}">
                        </div>

                        <div class="mb-2">
                            <label for="transmission" class="form-label">Transmission</label>
                            <select class="form-select" id="transmission" name="transmission">
                                <option value="Manual"
                                    {{ $product->transmission == 'Manual' ? 'selected' : '' }}>Manual</option>
                                <option value="Automatic"
                                    {{ $product->transmission == 'Automatic' ? 'selected' : '' }}>Automatic</option>
                            </select>
                        </div>

                        <div class="mb-2">
                            <label for="seat" class="form-label">Seat</label>
                            <input class="form-control" type="number" id="seat"
                                   placeholder="Enter Seat" name="seats"
                                   value="{{ old('seats', $product->seats) }}">
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input class="form-control" type="number" id="price"
                                   placeholder="Enter Price" name="price"
                                   value="{{ old('price', $product->price) }}">
                        </div>

                        <div class="mb-3">
                            <label for="stock" class="form-label">Stock</label>
                            <input class="form-control" type="number" id="stock"
                                   placeholder="Enter Stock" name="stock"
                                   value="{{ old('stock', $product->stock) }}">
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <div class="input-group mb-3">
                                <input class="form-control" type="file" id="image" name="image">
                                <label class="input-group-text" for="image">Upload</label>
                            </div>
                            @if($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}"
                                     alt="Product Image" width="100">
                            @endif
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="description">Deskripsi</label>
                            <textarea class="form-control" rows="5" id="description"
                                      name="description">{{ old('description', $product->description) }}</textarea>
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
