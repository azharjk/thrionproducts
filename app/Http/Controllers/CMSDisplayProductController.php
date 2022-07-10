<?php

namespace App\Http\Controllers;

use App\Http\Resources\CMSDisplayProductResource;
use Illuminate\Http\Request;

class CMSDisplayProductController extends Controller
{
    public function index()
    {
        // FIXME: Order the product by its rate
        $response = $this->http->get('api/display-products', [
            'query' => 'populate[product][populate][0]=images'
        ]);

        $o = json_decode($response->getBody()->getContents());
        $data = collect($o->data);

        return CMSDisplayProductResource::collection($data);
    }
}
