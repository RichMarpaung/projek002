@extends('template.master')
@section('body')
<!-- Filter kategori dan pencarian -->
<div class="search-form">
    <div class="form-group">
        <input type="search" id="search-field" name="search-field" placeholder="Search..." required>
        <button type="button" id="search-button"><i class="icon-4"></i></button>
    </div>
</div>
<div class="sidebar-widget category-widget">
    <div class="widget-title mb_20">
        <h3>Product Categories</h3>
    </div>
    <div class="widget-content">
        <ul class="category-list clearfix">
            @foreach ($categories as $category)
                <li>
                    <label>
                        <input type="checkbox" class="category-checkbox" value="{{ $category->id }}">
                        {{ $category->name }}
                    </label>
                </li>
            @endforeach
        </ul>
    </div>
</div>

<!-- Daftar kendaraan -->
<div class="our-shop">
    <div class="row clearfix" id="product-list">
        @foreach ($products as $product)
            <div class="col-lg-4 col-md-6 col-sm-12 shop-block" data-category="{{ $product->category->id }}" data-name="{{ strtolower($product->name) }}">
                <div class="shop-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{ asset('storage/' . $product->image) }}" alt=""></figure>
                            <div class="cart-btn">
                                <a href="{{ route('product.show', $product->id) }}">
                                    <button type="button" class="theme-btn btn-one">Detail</button>
                                </a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="{{ route('product.show', $product->id) }}">{{ $product->name }}</a></h3>
                            <span class="price">${{ $product->price }} / day</span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Script Filter Kategori dan Pencarian -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const categoryCheckboxes = document.querySelectorAll('.category-checkbox');
        const products = document.querySelectorAll('.shop-block');
        const searchField = document.getElementById('search-field');

        categoryCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', filterProducts);
        });
        searchField.addEventListener('input', filterProducts);

        function filterProducts() {
            const selectedCategories = Array.from(categoryCheckboxes)
                .filter(checkbox => checkbox.checked)
                .map(checkbox => checkbox.value);

            const searchTerm = searchField.value.trim().toLowerCase();

            products.forEach(product => {
                const productCategory = product.getAttribute('data-category');
                const productName = product.getAttribute('data-name');

                const matchesCategory = selectedCategories.length === 0 || selectedCategories.includes(productCategory);
                const matchesSearch = productName.includes(searchTerm);

                if (matchesCategory && matchesSearch) {
                    product.style.display = 'block';
                } else {
                    product.style.display = 'none';
                }
            });
        }
    });
</script>
@endsection
