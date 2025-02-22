<?php
namespace Sppay\PaymentManager;

class PaymentManager
{
    protected $gateway;

    public function __construct($gateway)
    {
        $this->gateway = $gateway;
    }

    public function processPayment($amount, $currency)
    {
        // Simulate processing payment through the selected gateway
        return "Processing $amount $currency via " . $this->gateway;
    }
}
