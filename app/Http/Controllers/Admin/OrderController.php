<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Order_item;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * عرض كل الطلبات
     */
    public function index()
    {
        $orders = Order::with('user')->latest()->get();
        return view('admin.orders.index', compact('orders'));
    }

    /**
     * Show create order form
     */
    public function create()
    {
        $users = User::select('id', 'name')->get();
        $products = Product::select('id', 'name', 'price')->get();

        return view('admin.orders.create', compact('users', 'products'));
    }

    /**
     * Store new order (ADMIN)
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'products' => 'required|array',
            'products.*.product_id' => 'required|exists:products,id',
            'products.*.quantity' => 'required|integer|min:1',
        ]);

        DB::beginTransaction();

        try {
            $order = Order::create([
                'user_id' => $request->user_id,
                'total_price' => 0,
                'status' => 'pending',
                'source' => 'admin',
            ]);

            $total = 0;

            // ✅ الحل هنا
            $products = array_values($request->products);

            foreach ($products as $item) {
                $product = Product::findOrFail($item['product_id']);

                $quantity = (int) $item['quantity'];
                $price = $product->price;

                $total += $price * $quantity;

                Order_item::create([
                    'order_id' => $order->id,
                    'product_id' => $product->id,
                    'quantity' => $quantity,
                    'price' => $price,
                ]);
            }

            $order->update([
                'total_price' => $total,
            ]);

            DB::commit();

            return redirect()
                ->route('admin.orders.index')
                ->with('success', 'Order created successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withErrors($e->getMessage());
        }
    }


    /**
     * Show order details
     */
    public function show(Order $order)
    {
        $order->load('items.product', 'user');
        return view('admin.orders.show', compact('order'));
    }

    /**
     * Edit order
     */
    public function edit(Order $order)
    {
        $users = User::select('id', 'name')->get();
        $products = Product::select('id', 'name', 'price')->get();
        $order->load('items');

        return view('admin.orders.edit', compact('order', 'users', 'products'));
    }

    /**
     * Update order
     */
    public function update(Request $request, Order $order)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'products' => 'required|array',
            'products.*.product_id' => 'required|exists:products,id',
            'products.*.quantity' => 'required|integer|min:1',
        ]);

        DB::beginTransaction();

        try {
            // delete old items
            $order->items()->delete();

            // $deletedItems = json_decode($request->deletedIds);
            // $newItems = json_decode($request->newItems);

            $total = 0;

            foreach ($request->products as $item) {
                $product = Product::findOrFail($item['product_id']);

                $total += $product->price * $item['quantity'];

                Order_item::create([
                    'order_id' => $order->id,
                    'product_id' => $product->id,
                    'quantity' => $item['quantity'],
                    'price' => $product->price,
                ]);
            }

            $order->update([
                'user_id' => $request->user_id,
                'total_price' => $total,
            ]);

            DB::commit();

            return redirect()
                ->route('admin.orders.index')
                ->with('success', 'Order updated successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withErrors($e->getMessage());
        }
    }

    public function approve(Order $order)
    {
        if ($order->status !== 'pending') {
            return redirect()
                ->route('admin.orders.index')
                ->with('success', 'Order already processed');
        }

        // تحديث حالة الدفع
        $order->payment_status = 'paid';

        // تحديث حالة تنفيذ الطلب
        $order->status = 'processing';

        $order->save();

        return redirect()
            ->route('admin.orders.index')
            ->with('success', 'Order approved successfully');
    }
    public function delete(Request $request, $id)
    {
        $order = Order::findOrFail($id);


        // حذف الصفحة
        $order->delete();

        return redirect()
            ->route('admin.orders.index')
            ->with('success', 'لقد تم حذف البيانات بنجاح');
    }
}
