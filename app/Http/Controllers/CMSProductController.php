<?php

namespace App\Http\Controllers;

use App\Http\Resources\CMSProductResource;
use Illuminate\Http\Request;

class CMSProductController extends Controller
{
    public function index()
    {
        $response = $this->http->get('api/products', [
            'query' => 'populate=images'
        ]);

        $o = json_decode($response->getBody()->getContents());
        $data = collect($o->data);

        return CMSProductResource::collection($data);
    }

    public function show(int $id)
    {
        $response = $this->http->get('api/products/'.$id, [
            'query' => 'populate=images'
        ]);

        $o = json_decode($response->getBody()->getContents());

        return new CMSProductResource($o->data);
    }
}
