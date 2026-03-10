@extends('web.include.content')
@section('content')
<div class="col-xl-12">
    <div class="card">
        <div class="card-body">
            <h3>Checkout</h3>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <ul class="list-group mb-3">
                @php $total = 0; @endphp
                @foreach($cart as $id => $item)
                    @php $subtotal = $item['price'] * $item['quantity']; $total += $subtotal; @endphp
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $item['name'] }} x {{ $item['quantity'] }}
                        <span>${{ $subtotal }}</span>
                    </li>
                @endforeach
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <strong>Total</strong>
                    <strong>${{ $total }}</strong>
                </li>
            </ul>

            <!-- زر واحد لإنشاء الطلب والدفع -->
            <form action="{{ route('checkout.place') }}" method="POST" id="payment-form">
                @csrf
                <input type="hidden" name="payment_method" value="stripe">
                <button class="btn btn-primary btn-lg w-100">Pay & Place Order</button>
            </form>
        </div>
    </div>
</div>
@endsection
