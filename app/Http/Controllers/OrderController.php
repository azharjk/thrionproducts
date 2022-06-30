<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\OrderResource;
use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return OrderResource::collection(Order::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only('product_id', 'customer_name', 'total_price', 'payment_method');

        $order = Order::create([
            'product_id' => $data['product_id'],
            'customer_name' => $data['customer_name'],
            'total_price' => $data['total_price'],
            'status' => 'NEW',
            'payment_method' => $data['payment_method']
        ]);

        return new OrderResource($order);
    }
}
