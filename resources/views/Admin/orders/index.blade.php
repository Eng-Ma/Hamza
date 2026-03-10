@extends('Admin.incloud.master')

@php
    use App\Enums\StatusEnum;
@endphp

@section('title', 'Orders')
@section('header', 'Orders')
@section('header_link')
    <a href="{{ route('admin.orders.index') }}">Orders</a>
@endsection
@section('content-header', 'Index')

@section('style')
<style>
    .warehouse-products-table {
        width: 100%;
        margin-bottom: 20px;
    }
    .warehouse-products-table th,
    .warehouse-products-table td {
        text-align: center;
        padding: 10px;
    }
    .warehouse-products-table th {
        background-color: #f8f9fa;
    }
    .warehouse-products-table tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    .badge-pending { background-color: #ffc107; color: white; padding: 5px 10px; border-radius: 8px; }
    .badge-approved { background-color: #28a745; color: white; padding: 5px 10px; border-radius: 8px; }
    .badge-canceled { background-color: #dc3545; color: white; padding: 5px 10px; border-radius: 8px; }
    .action-buttons .btn { margin-right: 5px; }
</style>
@endsection

@section('content')
<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title">Orders</h3>
                <a href="{{ route('admin.orders.create') }}" class="btn btn-success">Add Order</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="file-datatable" class="table table-bordered text-nowrap key-buttons">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Customer</th>
                                <th>Total Price</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->user->name }}</td>
                                    <td>${{ number_format($order->total_price, 2) }}</td>
                                    <td>
                                        @if($order->payment_status == 'pending')
                                            <span class="badge badge-pending">Pending</span>
                                        @elseif($order->payment_status == 'approved')
                                            <span class="badge badge-approved">Approved</span>
                                        @elseif($order->payment_status == 'canceled')
                                            <span class="badge badge-canceled">Canceled</span>
                                        @else
                                            <span class="badge bg-secondary">{{ $order->payment_status }}</span>
                                        @endif
                                    </td>
                                    <td>{{ $order->created_at->format('Y-m-d') }}</td>
                                    <td class="action-buttons d-flex justify-content-center">

                                        {{-- Show --}}
                                        <a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-sm btn-info" title="Show">
                                            <i class="fe fe-eye"></i>
                                        </a>

                                        {{-- Edit --}}
                                        <a class="btn btn-sm btn-primary" href="{{ route('admin.orders.edit', $order->id) }}" title="Edit">
                                            <i class="fe fe-edit"></i>
                                        </a>

                                        {{-- Delete --}}
                                        <form action="{{ route('admin.orders.delete', $order->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                            @csrf
                                            <button class="btn btn-sm btn-danger" title="Delete">
                                                <i class="fe fe-trash-2"></i>
                                            </button>
                                        </form>

                                        {{-- Approve --}}
                                        @if($order->payment_status == 'pending')
                                        <form action="{{ route('admin.orders.approve', $order->id) }}" method="POST" style="margin-left:5px;">
                                            @csrf
                                            <button class="btn btn-sm btn-success" title="Approve">
                                                <i class="fe fe-check"></i>
                                            </button>
                                        </form>
                                        @endif

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('adminassets/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('adminassets/assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
<script src="{{ asset('adminassets/assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('adminassets/assets/plugins/datatable/js/buttons.bootstrap5.min.js') }}"></script>
<script src="{{ asset('adminassets/assets/plugins/datatable/js/jszip.min.js') }}"></script>
<script src="{{ asset('adminassets/assets/plugins/datatable/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('adminassets/assets/plugins/datatable/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('adminassets/assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('adminassets/assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('adminassets/assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('adminassets/assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('adminassets/assets/plugins/datatable/responsive.bootstrap5.min.js') }}"></script>
<script src="{{ asset('adminassets/assets/js/table-data.js') }}"></script>
@endsection
