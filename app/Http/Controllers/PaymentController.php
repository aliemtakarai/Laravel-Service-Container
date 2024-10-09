<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\PaymentServiceInterface;

class PaymentController extends Controller
{
    protected $paymentService;

    // Constructor Injection
    public function __construct(PaymentServiceInterface $paymentService)
    {
        $this->paymentService = $paymentService;
    }

    public function makePayment()
    {
        // Process a payment of $100
        $this->paymentService->processPayment(100);
    }
}
