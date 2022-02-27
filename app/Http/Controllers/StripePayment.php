<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class StripePayment extends Controller
{
    public function payment(Request $request){
        \Stripe\Stripe::setApiKey(config('payment.STRIPE_API_KEY'));
        $request->validate([
            'amount' => 'required',
            'title' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email:rfc,dns',
            'phone_number' => 'required',
        ]);
        $data = $request->all();
        $data['payment_method'] = "Stripe";

        $order = Order::create($data);

        $session = \Stripe\Checkout\Session::create([
            'line_items' => [[
                'price_data' => [
                    'currency' => config('payment.currency'),
                    'product_data' => [
                        'name' => 'Zakat Payment',
                    ],
                    'unit_amount' => $request->amount * 100,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => route('stripe.complete', $order->id)."?session_id={CHECKOUT_SESSION_ID}",
            'cancel_url' => route('stripe.cancelled', $order->id),
            'customer_email' => $request->email,
        ]);
        $transactionData = [
            'id' => $session->id,
            'userid' => rand(),
            'product' => "Zakat Payment",
            'amount' => $request->amount * 100,
            'currency' => config('payment.currency'),
            'status' => $session->status,
        ];
        return redirect()->away($session->url);

    }

    public function complete(Order $order_id){
        return redirect()->route('success')->with([
            'message' => 'You have paid successfully!',
            'success' => true
        ]);
    }

    /**
     * @param $order_id
     */
    public function cancelled($order_id)
    {
        $order = Order::findOrFail($order_id);

        return redirect()->route('success', encrypt($order_id))->with([
            'message' => 'You have cancelled your recent payment !',
        ]);
    }


}
