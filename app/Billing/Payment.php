<?php 

namespace App\Billing;

class Payment  
{
    public $currency;

    function __construct($currency) {
        $this->currency = $currency;
    }


    public function index($amount)
    {
        return [
            'amount' => $amount,
            'currency' => $this->currency
        ];
    }
}
