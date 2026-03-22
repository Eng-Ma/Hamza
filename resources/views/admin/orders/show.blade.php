@extends('admin.incloud.master')

@section('title', 'Order Details')
@section('header', 'Orders')
@section('header_link')
    <a href="{{ route('admin.orders.index') }}">Orders</a>
@endsection
@section('content-header', 'Order Details')

@section('content')
<div class="row row-sm">

    {{-- Order Info --}}
    <div class="col-md-4">
        <div class="card">
            <div class="card-header"><h5>Order Info</h5></div>
            <div class="card-body">
                <p><strong>Order ID:</strong> #{{ $order->id }}</p>
                <p><strong>Status:</strong>
                    <span id="order-status" class="badge
                        {{ $order->status == 'pending' ? 'bg-warning' : '' }}
                        {{ $order->status == 'approved' ? 'bg-success' : '' }}
                        {{ $order->status == 'canceled' ? 'bg-danger' : '' }}
                    ">
                        {{ ucfirst($order->status) }}
                    </span>
                </p>
                <p><strong>Total Price:</strong> ${{ number_format($order->total_price, 2) }}</p>

                {{-- زر Approve (لـ admin فقط) --}}
                @if(auth()->check() && auth()->user()->type == 'admin' && $order->status == 'pending')
                    <button id="approve-btn" class="btn btn-success mt-2 w-100" data-order="{{ $order->id }}">
                        Approve Order
                    </button>
                @endif

                {{-- زر Cancel (لـ user صاحب الطلب فقط) --}}
                @if(auth()->check() && auth()->user()->type == 'user' && auth()->id() == $order->user_id && $order->status == 'pending')
                    <button id="cancel-btn" class="btn btn-danger mt-2 w-100" data-order="{{ $order->id }}">
                        Cancel Order
                    </button>
                @endif
            </div>
        </div>
    </div>

    {{-- Customer Info --}}
    <div class="col-md-4">
        <div class="card">
            <div class="card-header"><h5>Customer Info</h5></div>
            <div class="card-body">
                <p><strong>Name:</strong> {{ $order->user->name }}</p>
                <p><strong>Email:</strong> {{ $order->user->email }}</p>
            </div>
        </div>
    </div>

    {{-- Order Items --}}
    <div class="col-md-12 mt-4">
        <div class="card">
            <div class="card-header"><h5>Order Items</h5></div>
            <div class="card-body">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($order->items as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->product->name }}</td>
                            <td>${{ number_format($item->price, 2) }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>${{ number_format($item->price * $item->quantity, 2) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection

@section('script')
<script>
$(document).ready(function() {

    // زر Approve للـ admin
    $('#approve-btn').click(function() {
        let orderId = $(this).data('order');
        let btn = $(this);

        if(!confirm('Are you sure you want to approve this order?')) return;

        $.ajax({
            url: '/orders/' + orderId + '/approve', // تأكد أن الروت صحيح
            type: 'POST',
            data: {_token: '{{ csrf_token() }}'},
            success: function(response) {
                $('#order-status')
                    .removeClass('bg-warning bg-danger')
                    .addClass('bg-success')
                    .text('Approved');
                btn.prop('disabled', true);
                alert('Order approved successfully');
            },
            error: function(xhr) {
                alert(xhr.responseJSON?.message || 'Something went wrong!');
            }
        });
    });

    // زر Cancel للـ user صاحب الطلب
    $('#cancel-btn').click(function() {
        let orderId = $(this).data('order');
        let btn = $(this);

        if(!confirm('Are you sure you want to cancel this order?')) return;

        $.ajax({
            url: '/orders/' + orderId + '/cancel', // تأكد أن الروت صحيح
            type: 'POST',
            data: {_token: '{{ csrf_token() }}'},
            success: function(response) {
                $('#order-status')
                    .removeClass('bg-warning bg-success')
                    .addClass('bg-danger')
                    .text('Canceled');
                btn.prop('disabled', true);
                alert('Order canceled successfully');
            },
            error: function(xhr) {
                alert(xhr.responseJSON?.message || 'Something went wrong!');
            }
        });
    });

});
</script>
@endsection
