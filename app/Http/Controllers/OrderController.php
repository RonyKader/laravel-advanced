<?php

namespace App\Http\Controllers;

use App\Billing\Payment;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store()
    {
        $payment = new Payment('usd');

        dd($payment->index(22));
    }
}
