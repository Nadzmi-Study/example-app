<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller {
    public function index(Request $request) {
        return collect([
            [
                'id' => 1,
                'name' => 'Prod 1',
                'description' => 'Product 1',
                'price' => 100,
            ],
            [
                'id' => 2,
                'name' => 'Prod 2',
                'description' => 'Product 2',
                'price' => 200,
            ],
            [
                'id' => 3,
                'name' => 'Prod 3',
                'description' => 'Product 3',
                'price' => 300,
            ],
        ]);
    }
}
