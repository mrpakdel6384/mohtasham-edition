<?php

namespace App\Http\Controllers;

use App\Helpers\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PaymentController extends Controller
{
    public function payment()
    {
        $cart = Cart::instance('default');
        $cartItems = $cart->all();

        if($cartItems->count()){
            $price = $cartItems->sum(function($cart){
               return $cart['product']->price * $cart['quantity'];
            });

            $orderItems = $cartItems->mapWithKeys(function($cart){
                return [$cart['product']->id => ['quantity'=>$cart['quantity']]];
            });

            $order = auth()->user()->orders()->create([
                'status'=>'unpaid',
                'price'=>$price,
            ]);
            $order->products()->attach($orderItems);


                        $token = "توکن اختصاصی ";
                        $res_number = Str::random();
                        $args = [
                            "amount" => $price,
                            "payerIdentity" => "شناسه کاربر در صورت وجود",
                            "payerName" => auth()->user()->name,
                            "description" => "توضیحات",
                            "returnUrl" => route('payment.callback'),
                            "clientRefId" => $res_number
                        ];

            $payment = new \PayPing\Payment($token);

            try {
                $payment->pay($args);
            } catch (Exception $e) {
                var_dump($e->getMessage());
            }
            //echo $payment->getPayUrl();

            header('Location: ' . $payment->getPayUrl());

        }
    }

    public function callbacks()
    {

    }
}
