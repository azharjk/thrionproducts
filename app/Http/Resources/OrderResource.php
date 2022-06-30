<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'product' => new ProductResource($this->product),
            'customer_name' => $this->customer_name,
            'status' => $this->status,
            'payment_method' => $this->payment_method,
            'total_price' => $this->total_price,
            'total_price_html' => $this->total_price_html
        ];
    }
}
