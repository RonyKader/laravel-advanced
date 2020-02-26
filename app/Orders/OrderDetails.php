<?php

namespace App\Orders;
use App\Billing\PaymentGateway;


class OrderDetails 
{
    private $paymentGateway;

    public function __construct(PaymentGateway $paymentGateway) 
    {
        $this->paymentGateway = $paymentGateway;
    }


    public function all()
    {
        $this->paymentGateway->setDiscount(20);
        return [
            'name' => 'Md.Tarikul Islam',
            'address' => 'Road 05, Block - A, Mirpur 01, Dhaka - 1216'
        ];
    }
}
