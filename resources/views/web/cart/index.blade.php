@extends('web.include.content')
@section('content')
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h3>Shopping Cart</h3>

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if (count($cart) > 0)
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Subtotal</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $total = 0; @endphp
                            @foreach ($cart as $id => $item)
                                @php
                                    $subtotal = $item['price'] * $item['quantity'];
                                    $total += $subtotal;
                                @endphp
                                <tr>
                                    <td>{{ $item['name'] }}</td>
                                    <td>${{ $item['price'] }}</td>
                                    <td>
                                        <form action="{{ route('cart.update') }}" method="POST"
                                            class="d-flex align-items-center">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $id }}">
                                            <input type="number" name="quantity" value="{{ $item['quantity'] }}"
                                                min="1" class="form-control" style="width:70px;">
                                            <button type="submit" class="btn btn-primary btn-sm ms-2">Update</button>
                                        </form>
                                    </td>
                                    <td>${{ $subtotal }}</td>
                                    <td>
                                        <form action="{{ route('cart.remove') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $id }}">
                                            <button class="btn btn-danger btn-sm">Remove</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="3"><strong>Total</strong></td>
                                <td colspan="2"><strong>${{ $total }}</strong></td>
                            </tr>
                        </tbody>
                    </table>
                    @if (count($cart) > 0)
                        <div class="d-flex justify-content-center mt-3">
                            <a href="{{ route('checkout') }}" class="btn  btn-lg" style="background: #ad9587;color:white">Proceed to Checkout</a>
                        </div>
                    @endif
                @else
                    <p>Your cart is empty.</p>
                @endif
            </div>
        </div>
    </div>
@endsection
