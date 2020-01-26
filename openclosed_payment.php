<?php
require 'vendor/autoload.php';

use App\Solid\OpenClosed\Payment\Checkout;
use App\Solid\OpenClosed\Payment\CashPaymentMethod;
use App\Solid\OpenClosed\Payment\CreditCardPaymentMethod;

$checkout = new Checkout;

// Cash Payment
$receipt = 'Cash Receipt';
echo $checkout->begin($receipt, new CashPaymentMethod);

echo "<br>";

// Credit Card Payment
$receipt = 'Credit Card Receipt';
echo $checkout->begin($receipt, new CreditCardPaymentMethod);
