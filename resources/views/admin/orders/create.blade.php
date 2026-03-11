@extends('Admin.incloud.master')

@section('title', 'Add Order')
@section('header', 'Orders')
@section('header_link')
    <a href="{{ route('admin.orders.index') }}">Orders</a>
@endsection
@section('content-header', 'Add')

@section('content')
<div class="col-md-12">
    <div class="card">
        <form action="{{ route('admin.orders.store') }}" method="POST">
            @csrf
            <div class="card-body">

                {{-- Customer --}}
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Customer</label>
                        <select name="user_id" class="form-control" required>
                            <option value="">Select Customer</option>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                        @error('user_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                {{-- Products --}}
                <div class="row">
                    <div class="col-md-12">
                        <label class="form-label">Products</label>
                        <table class="table table-bordered" id="products-table">
                            <thead>
                                <tr>
                                    <th width="35%">Product</th>
                                    <th width="15%">Quantity</th>
                                    <th width="15%">Price</th>
                                    <th width="15%">Total</th>
                                    <th width="5%">
                                        <button type="button" class="btn btn-sm btn-success" id="add-product">+</button>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <select name="products[0][product_id]" class="form-control product-select" required>
                                            <option value="">Select Product</option>
                                            @foreach($products as $product)
                                                <option value="{{ $product->id }}"
                                                    data-price="{{ $product->price }}">
                                                    {{ $product->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <input type="number" name="products[0][quantity]" class="form-control quantity" min="1" value="1">
                                    </td>
                                    <td class="price">0.00</td>
                                    <td class="total">0.00</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-danger remove-product">×</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- Grand Total --}}
                <div class="row mt-3">
                    <div class="col-md-12 text-end">
                        <h4>
                            Total Price:
                            <span class="text-success">$<span id="grand-total">0.00</span></span>
                        </h4>
                    </div>
                </div>

                {{-- Submit --}}
                <div class="row mt-4">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-success px-5">
                            Add Order
                        </button>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>
@endsection

@section('script')
<script>
let productIndex = 1;

function updateTotals() {
    let grandTotal = 0;

    $('#products-table tbody tr').each(function () {
        let price = parseFloat($(this).find('.product-select option:selected').data('price')) || 0;
        let quantity = parseInt($(this).find('.quantity').val()) || 0;

        let total = price * quantity;
        $(this).find('.price').text(price.toFixed(2));
        $(this).find('.total').text(total.toFixed(2));

        grandTotal += total;
    });

    $('#grand-total').text(grandTotal.toFixed(2));
}

$(document).on('change keyup', '.product-select, .quantity', updateTotals);

$('#add-product').on('click', function () {
    let row = `
    <tr>
        <td>
            <select name="products[${productIndex}][product_id]" class="form-control product-select" required>
                <option value="">Select Product</option>
                @foreach($products as $product)
                    <option value="{{ $product->id }}" data-price="{{ $product->price }}">
                        {{ $product->name }}
                    </option>
                @endforeach
            </select>
        </td>
        <td>
            <input type="number" name="products[${productIndex}][quantity]" class="form-control quantity" min="1" value="1">
        </td>
        <td class="price">0.00</td>
        <td class="total">0.00</td>
        <td>
            <button type="button" class="btn btn-sm btn-danger remove-product">×</button>
        </td>
    </tr>
    `;

    $('#products-table tbody').append(row);
    productIndex++;
});

$(document).on('click', '.remove-product', function () {
    $(this).closest('tr').remove();
    updateTotals();
});
</script>
@endsection
