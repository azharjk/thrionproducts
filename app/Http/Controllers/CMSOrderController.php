<?php

namespace App\Http\Controllers;

use App\Http\Resources\CMSOrderResource;
use Illuminate\Http\Request;

class CMSOrderController extends Controller
{
    public function store(Request $request)
    {
        // FIXME: Validate the request data
        $req = $request->only('product_id', 'customer_name', 'whatsapp_number', 'address', 'total_price', 'payment_method');

        $body = [
            'data' => [
                'customer_name' => $req['customer_name'],
                'whatsapp_number' => $req['whatsapp_number'],
                'address' => $req['address'],
                'total_price' => $req['total_price'],
                'payment_method' => $req['payment_method'],
                'product' => $req['product_id']
            ]
        ];

        $response = $this->http->post('api/orders', [
            'query' => 'populate[product][populate][0]=images',
            'headers' => [
                'Content-Type' => 'application/json'
            ],
            'body' => json_encode($body)
        ]);
        $o = json_decode($response->getBody()->getContents());

        return new CMSOrderResource($o->data);
    }
}
