<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Order_item;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {

        // طلبات هذا الأسبوع
        $thisWeek = Order::where('payment_status', 'paid')->whereBetween('created_at', [now()->startOfWeek(),now()->endOfWeek(),])->count();

        // طلبات الأسبوع الماضي
        $lastWeek = Order::where('payment_status', 'paid')->whereBetween('created_at', [now()->subWeek()->startOfWeek(),now()->subWeek()->endOfWeek()])->count();

        $diff = $thisWeek - $lastWeek;
        $paidOrders = Order::where('payment_status', 'paid')->count();
        $pendingOrders = Order::where('payment_status', 'pending')->count();
        $failedOrders = Order::where('payment_status', 'failed')->count();
        $recentCustomers = Order::with('user')->latest()->take(5)->get();
        $orders = Order::with('items.product')->latest()->take(10)->get();
        return view('Admin.home.Dashboard', compact( 'thisWeek', 'lastWeek', 'diff', 'pendingOrders', 'failedOrders', 'recentCustomers', 'orders','paidOrders'));
    }
}
