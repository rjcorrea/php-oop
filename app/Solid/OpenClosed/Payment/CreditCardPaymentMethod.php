<?php

use App\Solid\OpenClosed\Payment\PaymentMethodInterface;

namespace App\Solid\OpenClosed\Payment;

class CreditCardPaymentMethod implements PaymentMethodInterface
{
    public function acceptPayment($receipt)
    {
        return 'CreditCardPaymentMethod: ' . $receipt;
    }
}
