<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function saveOrder(Request $request){
        $orderData = new Order();
        $order = $request->get('order');
        $orderData->order = $order;
        $orderData->save();
        return response()->json($orderData, 201);
    }
}
