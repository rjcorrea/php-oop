<?php

namespace App\Solid\OpenClosed\Payment;

class Checkout
{
    public function begin($receipt, PaymentMethodInterface $payment)
    {
        return $payment->acceptPayment($receipt);
    }
}
