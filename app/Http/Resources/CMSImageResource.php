<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CMSImageResource extends JsonResource
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
            'src' => env('THRION_PRODUCTS_CMS_HOST', 'http://localhost:1337') . $this->attributes->url,
            // FIXME: Generate better alt
            'alt' => 'Product image'
        ];
    }
}
