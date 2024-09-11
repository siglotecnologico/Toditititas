<?php

namespace App\Http\Controllers;

use App\Services\PayPhoneService;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    protected $payPhoneService;

    public function __construct(PayPhoneService $payPhoneService)
    {
        $this->payPhoneService = $payPhoneService;
    }

    public function createCheckout(Request $request)
    {

        $amount = $request->input('amount');
        dd($amount);
        $checkoutResponse = $this->payPhoneService->createCheckout($amount);

        if ($checkoutResponse && isset($checkoutResponse['id'])) {
            $checkoutId = $checkoutResponse['id'];
            return view('payment.checkout', compact('checkoutId'));
        }

        return redirect()->back()->with('error', 'Failed to create checkout.');
    }

    public function paymentStatus(Request $request)
    {
        $checkoutId = $request->input('checkoutId');
        $paymentStatus = $this->payPhoneService->getPaymentStatus($checkoutId);

        if ($paymentStatus) {
            return view('payment.status', compact('paymentStatus'));
        }

        return redirect()->back()->with('error', 'Failed to retrieve payment status.');
    }
}
