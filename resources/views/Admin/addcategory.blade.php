@extends('Admin.master')
@section('body')
<form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data" id="categoryForm">
    @csrf
    <div class="container-xxl">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Add Categories</h4>
                            </div><!--end col-->
                        </div>  <!--end row-->
                    </div><!--end card-header-->
                    <div class="card-body pt-0" id="categoryInputs">
                        <div class="mb-2 category-input">
                            <label for="name[]" class="form-label">Nama Kategori</label>
                            <input class="form-control" type="text" id="name[]" placeholder="Enter Category Name" name="name[]">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <button type="button" class="btn btn-secondary rounded-circle me-2" id="addCategory" style="width: 40px; height: 40px; display: flex; justify-content: center; align-items: center;">
                                <i class="fas fa-plus" style="color: white;"></i>
                            </button>
                            <button type="submit" class="btn btn-primary">Submit Form</button>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div>
</form>

<script>
    document.getElementById('addCategory').addEventListener('click', function() {
        const categoryInputs = document.getElementById('categoryInputs');
        const newInput = document.createElement('div');
        newInput.classList.add('mb-2', 'category-input');
        newInput.innerHTML = `
            <label for="name[]" class="form-label">Nama Kategori</label>
            <input class="form-control" type="text" id="name[]" placeholder="Enter Category Name" name="name[]">
        `;
        categoryInputs.appendChild(newInput);
    });
</script>
@endsection
