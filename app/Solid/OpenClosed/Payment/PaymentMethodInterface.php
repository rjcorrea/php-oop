<?php

namespace App\Solid\OpenClosed\Payment;

interface PaymentMethodInterface
{
    public function acceptPayment($receipt);
}
