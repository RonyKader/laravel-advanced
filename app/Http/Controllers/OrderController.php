<?php

namespace App\Http\Controllers;

use App\Billing\Payment;
use App\Orders\OrderDetails;
use Illuminate\Http\Request;
use App\Billing\PaymentGateway;

class OrderController extends Controller
{
    public function store(OrderDetails $orderDetails, PaymentGateway $paymentGateway)
    {
        $order = $orderDetails->all();
        return $paymentGateway->charge(200);
    }
}
