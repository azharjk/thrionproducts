<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use GuzzleHttp\Client;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public Client $http;

    public function __construct()
    {
        $this->http = new Client([
            // FIXME: Hack laravel cannot see the env
            'base_uri' => env('THRION_PRODUCTS_CMS_HOST', 'http://192.168.1.22:1337'),
            'headers' => [
                'Authorization' => 'bearer ' . env('THRION_PRODUCTS_CMS_TOKEN')
            ]
        ]);
    }
}
