@extends('Admin.incloud.master')
@section('title', 'Dashborad')
@section('header')
    Dashboard
@endsection
@section('header_link')
    <a href="javascript:void(0);">Dashboard</a>
@endsection
@section('content-header')
    index
@endsection
@section('style')
    <style>
        .jumps-prevent {
            padding-top: 30px !important;
        }

        .badge-paid {
            background-color: #28a745;
        }

        .badge-pending {
            background-color: #ff9800;
        }

        .badge-failed {
            background-color: #dc3545;
        }
    </style>
@endsection
@section('content')



    <!-- breadcrumb -->

    <!-- breadcrumb -->

    <!-- row -->
    <div class="row row-sm">
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden sales-card bg-primary-gradient">
                <div class="px-3 pt-3 pb-2 pt-0">
                    <div class="">
                        <h6 class="mb-3 tx-12 text-white">TODAY ORDERS</h6>
                    </div>
                    <div class="pb-0 mt-0">
                        <div class="d-flex">
                            <div class="">
                                <h4 class="tx-20 fw-bold mb-1 text-white">
                                    {{ \App\Models\Order::whereDate('created_at', now())->count() }}
                                </h4>
                                <p class="mb-0 tx-12 text-white op-7">Compared to last week</p>
                            </div>
                            <span class="float-end my-auto ms-auto">
                                <i class="fas fa-arrow-circle-up text-white"></i>
                                <span class="text-white op-7">
                                    +{{ \App\Models\Order::whereDate('created_at', now()->subWeek())->count() }}
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
                <span id="compositeline" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden sales-card bg-warning-gradient">
                <div class="px-3 pt-3 pb-2 pt-0">
                    <div>
                        <h6 class="mb-3 tx-12 text-white">PAID ORDERS</h6>
                    </div>

                    <div class="pb-0 mt-0">
                        <div class="d-flex">
                            <div>
                                <h4 class="tx-20 fw-bold mb-1 text-white">
                                    {{ $paidOrders }}
                                </h4>
                                <p class="mb-0 tx-12 text-white op-7">
                                    Compared to last week
                                </p>
                            </div>

                            <span class="float-end my-auto ms-auto">
                                <i
                                    class="fas {{ $diff >= 0 ? 'fa-arrow-circle-up' : 'fa-arrow-circle-down' }} text-white"></i>
                                <span class="text-white op-7">
                                    {{ $diff }}
                                </span>
                            </span>
                        </div>
                    </div>
                </div>

                <span id="compositeline4" class="pt-1">
                    5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12
                </span>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden sales-card bg-danger-gradient">
                <div class="px-3 pt-3  pb-2 pt-0">
                    <div class="">
                        <h6 class="mb-3 tx-12 text-white">TOTAL PRODUCTS</h6>
                    </div>
                    <div class="pb-0 mt-0">
                        <div class="d-flex">
                            <div class="">
                                <h4 class="tx-20 fw-bold mb-1 text-white">
                                    {{ \App\Models\Product::count() }}
                                </h4>
                                <p class="mb-0 tx-12 text-white op-7">Compared to last week</p>
                            </div>
                            <span class="float-end my-auto ms-auto">
                                @php
                                    $thisWeek = \App\Models\Product::whereBetween('created_at', [
                                        now()->startOfWeek(),
                                        now()->endOfWeek(),
                                    ])->count();
                                    $lastWeek = \App\Models\Product::whereBetween('created_at', [
                                        now()->subWeek()->startOfWeek(),
                                        now()->subWeek()->endOfWeek(),
                                    ])->count();
                                    $diff = $thisWeek - $lastWeek;
                                @endphp
                                <i
                                    class="fas {{ $diff >= 0 ? 'fa-arrow-circle-up' : 'fa-arrow-circle-down' }} text-white"></i>
                                <span class="text-white op-7"> {{ $diff }} </span>
                            </span>
                        </div>
                    </div>
                </div>
                <span id="compositeline2" class="pt-1">3,2,4,6,12,14,8,7,14,16,12,7,8,4,3,2,2,5,6,7</span>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden sales-card bg-success-gradient">
                <div class="px-3 pt-3  pb-2 pt-0">
                    <div class="">
                        <h6 class="mb-3 tx-12 text-white">TOTAL USERS</h6>
                    </div>
                    <div class="pb-0 mt-0">
                        <div class="d-flex">
                            <div class="">
                                <h4 class="tx-20 fw-bold mb-1 text-white">
                                    {{ \App\Models\User::count() }}
                                </h4>
                                <p class="mb-0 tx-12 text-white op-7">Compared to last week</p>
                            </div>
                            <span class="float-end my-auto ms-auto">
                                @php
                                    $thisWeek = \App\Models\User::whereBetween('created_at', [
                                        now()->startOfWeek(),
                                        now()->endOfWeek(),
                                    ])->count();
                                    $lastWeek = \App\Models\User::whereBetween('created_at', [
                                        now()->subWeek()->startOfWeek(),
                                        now()->subWeek()->endOfWeek(),
                                    ])->count();
                                    $diff = $thisWeek - $lastWeek;
                                @endphp
                                <i
                                    class="fas {{ $diff >= 0 ? 'fa-arrow-circle-up' : 'fa-arrow-circle-down' }} text-white"></i>
                                <span class="text-white op-7"> {{ $diff }} </span>
                            </span>
                        </div>
                    </div>
                </div>
                <span id="compositeline3" class="pt-1">5,10,5,20,22,12,15,18,20,15,8,12,22,5,10,12,22,15,16,10</span>
            </div>
        </div>

    </div>
    <!-- row closed -->

    <!-- row opened -->
    <div class="row row-sm">
        <div class="col-md-12 col-lg-12 col-xl-7">
            <div class="card">
                <div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mb-0">Order status</h4>
                        <a href="javascript:void(0);" class="tx-inverse" data-bs-toggle="dropdown"><i
                                class="mdi mdi-dots-horizontal text-gray"></i></a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);">Action</a>
                            <a class="dropdown-item" href="javascript:void(0);">Another
                                Action</a>
                            <a class="dropdown-item" href="javascript:void(0);">Something Else
                                Here</a>
                        </div>
                    </div>
                    <p class="tx-12 text-muted mb-0">Order Status and Tracking. Track your order from ship date to arrival.
                        To begin, enter your order number.</p>
                </div>
                <div class="card-body b-p-apex">
                    <div class="total-revenue">
                        <div>
                            <h4>{{ $paidOrders }}</h4>
                            <label><span class=" badge-paid"></span>success</label>
                        </div>
                        <div>
                            <h4>{{ $pendingOrders }}</h4>
                            <label><span class=" badge-pending"></span>Pending</label>
                        </div>
                        <div>
                            <h4>{{ $failedOrders }}</h4>
                            <label><span class=" badge-failed"></span>Failed</label>
                        </div>
                    </div>
                    <div id="bar" class="sales-bar mt-4"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-xl-5">
           <div class="card">
                <div class="card-header pb-1">
                    <h3 class="card-title mb-2">Recent Customers</h3>
                    <p class="tx-12 mb-0 text-muted">A customer is an individual or business that purchases the goods
                        service has evolved to include real-time</p>
                </div>
                <div class="card-body p-0 customers mt-1">
                    <div class="list-group list-lg-group list-group-flush">

                        @foreach ($recentCustomers as $order)
                            <div class="list-group-item list-group-item-action {{ !$loop->first ? 'br-t-1' : '' }}">
                                <div class="media mt-0">

                                    {{-- صورة المستخدم --}}
                                    <img class="avatar-lg rounded-circle my-auto me-3"
                                        src="{{ $order->user->avatar ?? asset('adminassets/assets/img/users/1.jpg') }}"
                                        alt="User">

                                    <div class="media-body">
                                        <div class="d-flex align-items-center">

                                            <div class="mt-1">
                                                <h5 class="mb-1 tx-15">
                                                    {{ $order->user->name }}
                                                </h5>

                                                <p class="mb-0 tx-13 text-muted">
                                                    User ID: #{{ $order->user->id }}

                                                    {{-- حالة الدفع --}}
                                                    <span
                                                        class="ms-2 d-inline-block
                                {{ $order->payment_status == 'paid' ? 'text-success' : '' }}
                                {{ $order->payment_status == 'pending' ? 'text-warning' : '' }}
                                {{ $order->payment_status == 'failed' ? 'text-danger' : '' }}">

                                                        {{ ucfirst($order->payment_status) }}
                                                    </span>
                                                </p>
                                            </div>

                                            {{-- المبلغ --}}
                                            <div class="ms-auto text-end">
                                                <strong class="tx-14">
                                                    ${{ number_format($order->total_price, 2) }}
                                                </strong>
                                                <div class="tx-11 text-muted">
                                                    {{ $order->created_at->diffForHumans() }}
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->


    <!-- row opened -->
    <div class="row row-sm row-deck">
        <div class="col-md-12 col-lg-12 col-xl-12">
    <div class="card card-table-two">
        <div class="card-header p-0 d-flex justify-content-between">
            <h4 class="card-title mb-1">Recent Orders</h4>
        </div>
        <span class="tx-12 tx-muted mb-3">This table shows your latest orders and details.</span>
        <div class="table-responsive country-table">
            <table class="table table-striped table-bordered mb-0 text-sm-nowrap text-lg-nowrap text-xl-nowrap">
                <thead>
                    <tr>
                        <th class="wd-lg-25p">Order ID</th>
                        <th class="wd-lg-25p">User</th>
                        <th class="wd-lg-25p">Items Count</th>
                        <th class="wd-lg-25p tx-right">Total Price</th>
                        <th class="wd-lg-25p">Payment Status</th>
                        <th class="wd-lg-25p">Order Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->user->name ?? 'N/A' }}</td>
                            <td>{{ $order->items->sum('quantity') }}</td>
                            <td class="tx-right">${{ number_format($order->total_price, 2) }}</td>
                            <td>{{ ucfirst($order->payment_status) }}</td>
                            <td>{{ ucfirst($order->status) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
    </div>
    <!-- /row -->
    </div>
    <!-- /Container -->





@endsection
@section('script')


    <!-- JQuery min js -->
    <script src="{{ asset('adminassets/assets/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Bundle js -->
    <script src="{{ asset('adminassets/assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('adminassets/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!--Internal  Chart.bundle js -->

    <!-- Moment js -->
    <script src="{{ asset('adminassets/assets/plugins/moment/moment.js') }}"></script>

    <!--Internal Sparkline js -->
    <script src="{{ asset('adminassets/assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Moment js -->
    <script src="{{ asset('adminassets/assets/plugins/raphael/raphael.min.js') }}"></script>

    <!--Internal Apexchart js-->
    <script src="{{ asset('adminassets/assets/js/apexcharts.js') }}"></script>

    <!--Internal  Perfect-scrollbar js -->
    <script src="{{ asset('adminassets/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('adminassets/assets/plugins/perfect-scrollbar/p-scroll.js') }}"></script>

    <!-- Eva-icons js -->
    <script src="{{ asset('adminassets/assets/js/eva-icons.min.js') }}"></script>

    <!-- right-sidebar js -->
    <script src="{{ asset('adminassets/assets/plugins/sidebar/sidebar.js') }}"></script>
    <script src="{{ asset('adminassets/assets/plugins/sidebar/sidebar-custom.js') }}"></script>

    <!-- Sticky js -->
    <script src="{{ asset('adminassets/assets/js/sticky.js') }}"></script>
    <script src="{{ asset('adminassets/assets/js/modal-popup.js') }}"></script>

    <!-- Left-menu js-->

    <!-- Internal Map -->
    <script src="{{ asset('adminassets/assets/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('adminassets/assets/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>

    <!--Internal  index js -->
    <script src="{{ asset('adminassets/assets/js/index.js') }}"></script>
    <script src="{{ asset('adminassets/assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>

    <!-- Apexchart js-->
    <script src="{{ asset('adminassets/assets/js/jquery.vmap.sampledata.js') }}"></script>

    <!-- custom js -->
    <script src="{{ asset('adminassets/assets/js/custom.js') }}"></script>

    <!-- switcher-styles js -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            var options = {
                chart: {
                    type: 'bar',
                    height: 320,
                    toolbar: {
                        show: false
                    }
                },

                series: [{
                    name: 'Orders',
                    data: [
                        {{ $paidOrders }},
                        {{ $pendingOrders }},
                        {{ $failedOrders }}
                    ]
                }],

                plotOptions: {
                    bar: {
                        borderRadius: 8,
                        columnWidth: '20%',
                        distributed: true // 👈 يخلي كل عمود بلون مختلف
                    }
                },

                colors: [
                    '#22c55e', // Paid - أخضر حديث
                    '#f59e0b', // Pending - برتقالي ناعم
                    '#ef4444' // Failed - أحمر حديث
                ],

                dataLabels: {
                    enabled: true,
                    style: {
                        fontSize: '14px',
                        fontWeight: 'bold',
                        colors: ['#fff']
                    }
                },

                xaxis: {
                    categories: ['Paid', 'Pending', 'Failed'],
                    labels: {
                        style: {
                            fontSize: '13px'
                        }
                    }
                },

                grid: {
                    borderColor: '#e5e7eb',
                    strokeDashArray: 4
                },

                tooltip: {
                    theme: 'light'
                }

            };

            var chart = new ApexCharts(document.querySelector("#bar"), options);
            chart.render();
        });
    </script>
@endsection
