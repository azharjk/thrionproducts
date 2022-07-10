<?php

namespace App\Http\Resources;

use App\Models\Product;
use Illuminate\Http\Resources\Json\JsonResource;

class CMSProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $images = collect($this->attributes->images->data);
        $thumbnail = $images[$images->count() - 1]->attributes->url;

        return [
            'id' => $this->id,
            'title' => $this->attributes->title,
            'description' => $this->attributes->description,
            'price' => $this->attributes->price,
            'price_html' => Product::toRupiah($this->attributes->price),
            // FIXME: The env cannot be set this is hack for development
            'thumbnail' => env('THRION_PRODUCTS_CMS_HOST', 'http://192.168.1.22:1337') . $thumbnail,
            // FIXME: Generate better alt
            'thumbnail_alt' => 'Product image',
            'images' => CMSImageResource::collection($images)
        ];
    }
}
