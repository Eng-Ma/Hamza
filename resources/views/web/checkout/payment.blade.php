@extends('web.include.content')

@section('style')
    <link rel="stylesheet" href="{{ asset('webassets/assets/css/style_new.css') }}">
    <style>
        .payment-card {
            max-width: 500px;
            margin: 50px auto;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            background: #fff;
        }

        #card-element {
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        #submit {
            width: 100%;
        }

        .alert {
            display: none;
        }
    </style>
@endsection

@section('content')
    <div class="payment-card">
        <h4 class="mb-3 text-center">Complete Your Payment</h4>

        <p class="text-center">Order Total: <strong>${{ $order->total_price }}</strong></p>

        <div id="card-errors" class="alert alert-danger"></div>

        <form id="payment-form">
            <div id="card-element"></div>
            <button id="submit" class="btn btn-dark mt-3">Pay Now</button>
        </form>
    </div>
@endsection

@section('script')
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        const stripe = Stripe("{{ config('services.stripe.key') }}");
        const elements = stripe.elements();
        const card = elements.create('card', {
            hidePostalCode: true
        });
        card.mount('#card-element');

        const form = document.getElementById('payment-form');
        const submitBtn = document.getElementById('submit');
        const cardErrors = document.getElementById('card-errors');

        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            submitBtn.disabled = true;
            cardErrors.style.display = 'none';
            cardErrors.innerText = '';

            const {
                error,
                paymentIntent
            } = await stripe.confirmCardPayment(
                "{{ $clientSecret }}", {
                    payment_method: {
                        card: card,
                    }
                }
            );

            if (error) {
                cardErrors.style.display = 'block';
                cardErrors.innerText = error.message;
                submitBtn.disabled = false;
            } else if (paymentIntent.status === 'succeeded') {
                // الدفع ناجح → تحويل للـ route payment.success
                window.location.href = "{{ route('payment.success', $order->id) }}";
            }
        });
    </script>
@endsection
