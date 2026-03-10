<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Order_item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Stripe;
use Stripe\PaymentIntent;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        return view('web.cart.index', compact('cart'));
    }

    public function add(Request $request)
    {
        $cart = session()->get('cart', []);
        $id = $request->id;

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += $request->quantity;
        } else {

            $cart[$id] = [
                "name" => $request->name,
                "price" => $request->price,
                "quantity" => $request->quantity,
                 "image" => $request->image ? $request->image : 'no-image.png'
            ];
        }

        session()->put('cart', $cart);

        return back()->with('success', 'Product added to cart');
    }

    public function remove(Request $request)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$request->id])) {
            unset($cart[$request->id]);
            session()->put('cart', $cart);
        }

        return back()->with('success', 'Product removed');
    }

    public function update(Request $request)
    {
        $cart = session()->get('cart', []);
        $id = $request->id;

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);
        }

        return back()->with('success', 'Cart updated');
    }

    public function checkoutPage()
    {
        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return redirect()->route('cart.index')
                ->with('error', 'Your cart is empty');
        }

        return view('web.checkout.index', compact('cart'));
    }

    public function checkout(Request $request)
    {
        $cart = session()->get('cart', []);
        if (empty($cart)) return redirect()->route('cart.index')->with('error', 'Cart empty');

        $total = 0;
        foreach ($cart as $item) $total += $item['price'] * $item['quantity'];
        $amountInCents = $total * 100;

        // 1️⃣ إنشاء Order أولاً
        $order = Order::create([
            'user_id' => auth()->id(),
            'total_price' => $total,
            'status' => 'pending',
            'payment_status' => 'pending',
            'source' => 'user',
        ]);

        foreach ($cart as $id => $item) {
            Order_item::create([
                'order_id' => $order->id,
                'product_id' => $id,
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ]);
        }
        \Stripe\Stripe::setApiKey(config('services.stripe.secret'));
        // 2️⃣ إنشاء PaymentIntent
        Stripe::setApiKey(config('services.stripe.secret'));

        $paymentIntent = PaymentIntent::create([
            'amount' => $amountInCents,
            'currency' => 'usd',
            'metadata' => ['order_id' => $order->id],
        ]);

        $order->update(['payment_intent_id' => $paymentIntent->id]);

        // 3️⃣ تحويل لصفحة الدفع
        return view('web.checkout.payment', [
            'clientSecret' => $paymentIntent->client_secret,
            'order' => $order
        ]);
    }

    public function paymentPage(Order $order)
    {
        Stripe::setApiKey(config('services.stripe.secret'));

        $paymentIntent = PaymentIntent::retrieve($order->payment_intent_id);

        return view('web.checkout.payment', [
            'clientSecret' => $paymentIntent->client_secret,
            'order' => $order
        ]);
    }

    public function paymentSuccess(Order $order)
    {
        $order->update([
            'status' => 'paid',
            'payment_status' => 'paid'
        ]);
        session()->forget('cart');
        return redirect()->route('web.shop')->with('success', 'Payment successful!');
    }
}
