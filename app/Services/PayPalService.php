<?php
// app/Services/PayPalService.php

namespace App\Services;

use App\Contracts\PaymentServiceInterface;

class PayPalService implements PaymentServiceInterface
{
    public function processPayment(float $amount)
    {
        // A simple log for demonstration
        echo "Processing payment of $$amount using PayPal.";
    }
}
