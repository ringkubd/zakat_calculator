<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\PayPal;
use Illuminate\Http\Request;

/**
 * Class PayPalController
 * @package App\Http\Controllers
 */
class PayPalController extends Controller
{
    /**
     * @param Request $request
     */
    public function form(Request $request, $order_id = null)
    {
        $order_id = $order_id ?: encrypt(1);

        $order = Order::findOrFail(decrypt($order_id));

        return view('form', compact('order'));
    }

    /**
     * @param $order_id
     * @param Request $request
     */
    public function checkout(Request $request)
    {
        $paypal = new PayPal;

        $request->validate([
            'amount' => 'required',
            'title' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email:rfc,dns',
            'phone_number' => 'required',
        ]);
        $data = $request->all();
        $data['payment_method'] = "PayPal";
        $order = \App\Models\Order::create($data);
        $response = $paypal->purchase([
            'amount' => $paypal->formatAmount($request->amount),
            'transactionId' => $order->id,
            'currency' => config('payment.currency'),
            'cancelUrl' => $paypal->getCancelUrl(config('paypal.cancel_url')),
            'returnUrl' => $paypal->getReturnUrl(config('paypal.return_url')),
            'brandName' => $paypal->getReturnUrl(env('APP_NAME')),
        ]);
        if ($response->isRedirect()) {
            $response->redirect();
        }

        return redirect()->back()->with([
            'message' => $response->getMessage(),
        ]);
    }

    /**
     * @param $order_id
     * @param Request $request
     * @return mixed
     */
    public function completed($order_id, Request $request)
    {

        $paypal = new PayPal;
        $order = \App\Models\Order::find($order_id);

        $response = $paypal->complete([
            'amount' => $paypal->formatAmount($order->amount),
            'transactionId' => $order->id,
            'currency' => 'USD',
            'cancelUrl' => $paypal->getCancelUrl($order),
            'returnUrl' => $paypal->getReturnUrl($order),
            'notifyUrl' => $paypal->getNotifyUrl($order),
        ]);

        if ($response->isSuccessful()) {
            $order->update(['transaction_id' => $response->getTransactionReference(), 'payment_status' => 1]);

            return redirect()->route('success', encrypt($order_id))->with([
                'message' => 'You recent payment is sucessful with reference code ' . $response->getTransactionReference(),
                'success' => true
            ]);
        }
        return redirect()->back()->with([
            'message' => $response->getMessage(),
        ]);
    }

    /**
     * @param $order_id
     */
    public function cancelled($order_id)
    {
        $order = Order::findOrFail($order_id);

        return redirect()->route('success', encrypt($order_id))->with([
            'message' => 'You have cancelled your recent PayPal payment !',
        ]);
    }

    /**
     * @param $order_id
     * @param $env
     */
    public function webhook($order_id, $env)
    {
        dd($env);
    }
}
