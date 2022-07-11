<?php

namespace App\Http\Resources;

use App\Models\Product;
use Illuminate\Http\Resources\Json\JsonResource;

class CMSOrderResource extends JsonResource
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
            'product' => new CMSProductResource($this->attributes->product->data),
            'customer_name' => $this->attributes->customer_name,
            'whatsapp_number' => $this->attributes->whatsapp_number,
            'address' => $this->attributes->address,
            'status' => $this->attributes->status,
            'payment_method' => $this->attributes->payment_method,
            'total_price' => $this->attributes->total_price,
            'total_price_html' => Product::toRupiah($this->attributes->total_price)
        ];
    }
}
