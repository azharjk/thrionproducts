<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoriesWithProductsResource;
use App\Models\Category;
use Illuminate\Http\Request;

// FIXME: Should this class to be CategoryController instead
class CategoriesWithProductsService extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $takeProduct = 3;

        $data = Category::with('products')->get()->map(function ($query) use ($takeProduct) {
            $query->setRelation('products', $query->products->take($takeProduct));
            return $query;
        });

        return CategoriesWithProductsResource::collection($data);
    }
}
