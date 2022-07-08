<?php

namespace App\Http\Controllers;

use App\Http\Resources\DisplayProductResource;
use App\Models\DisplayProduct;
use Illuminate\Http\Request;

class DisplayProductController extends Controller
{
    public function index()
    {
        // NOTE: This settings can be tweak up later
        $orderByRateDesc = true;
        $count = 6;

        $query = DisplayProduct::query();

        if ($orderByRateDesc) {
            $query->orderBy('rate', 'DESC');
        }

        $query->take($count);

        return DisplayProductResource::collection($query->get());
    }
}
