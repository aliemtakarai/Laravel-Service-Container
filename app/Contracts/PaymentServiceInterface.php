<?php
namespace App\Contracts;

interface PaymentServiceInterface
{
    public function processPayment(float $amount);
}
