@extends('layouts.default_with_menu')

@section('content')
<form action="{{ url('product') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-6">
            <div class="mb-3">
                <label for="category" class="form-label">ชื่อหมวดหมู่</label>
                <input type="text" name="category" class="form-control" id="category" required>
            </div>
        </div>
    </div>

    <button type="button" id="btn-add-product" class="btn btn-primary mt-2">
        + เพิ่มสินค้า
    </button>

    <div class="row mt-3" id="add-product">
        <!-- ช่องใส่ชื่อสินค้าจะถูกเพิ่มตรงนี้ -->
    </div>

    <div class="mt-3 row">
        <div class="col-12">
            <button class="btn btn-success px-4" type="submit">บันทึก</button>
        </div>
    </div>
</form>

<table class="mt-3 table">
    <thead>
        <tr>
            <th>#</th>
            <th>ชื่อหมวดหมู่</th>
            <th>ชื่อสินค้า</th>
            <th>ชื่อผู้ใช้</th>
        </tr>
    </thead>
    <tbody>
    @php
            $categories = $products->groupBy('category_id'); // จัดกลุ่มตาม category_id
            $count = 1;
        @endphp
        @foreach($categories as $category_id => $products)
            <tr>
                <td>{{ $count++ }}</td>
                <td>{{ $products[0]->category->name }}</td>
                <td>
                    @foreach($products as $product)
                    &nbsp;&nbsp;• {{ $product->name }}<br>
                    @endforeach
                </td>
                <td>{{ $products[0]->user->name }}</td> <!-- แสดงชื่อผู้ใช้ -->
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
   $(document).ready(function() {
    // ฟังก์ชันเพิ่มช่องใส่สินค้า
    $('#btn-add-product').on('click', function() {
        let count = $('#add-product .product-item').length + 1; // นับจำนวนสินค้าใหม่

        $('#add-product').append(`
            <div class="col-6 mt-2 product-item">
                <label class="form-label product-number">${count}. ชื่อสินค้า:</label>
                <div class="input-group">
                    <input type="text" name="product_name[]" class="form-control" placeholder="กรอกชื่อสินค้า" required>
                    <button type="button" class="btn btn-danger btn-delete-product">ลบ</button>
                </div>
            </div>
        `);
    });

    // ฟังก์ชันลบสินค้า
    $(document).on('click', '.btn-delete-product', function() {
        $(this).closest('.product-item').remove(); // ลบสินค้าออกจาก DOM
        updateProductNumbers(); // อัปเดตหมายเลขสินค้าใหม่
    });

    // ฟังก์ชันอัปเดตหมายเลขสินค้าให้เรียงใหม่
    function updateProductNumbers() {
        $('#add-product .product-item').each(function(index) {
            $(this).find('.product-number').text((index + 1) + ". ชื่อสินค้า:");
        });
    }
});
</script>
@endsection