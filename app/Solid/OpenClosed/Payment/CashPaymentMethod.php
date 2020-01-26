<?php

use App\Solid\OpenClosed\Payment\PaymentMethodInterface;

namespace App\Solid\OpenClosed\Payment;

class CashPaymentMethod implements PaymentMethodInterface
{
    public function acceptPayment($receipt)
    {
        return 'CashPaymentMethod: ' . $receipt;
    }
}
