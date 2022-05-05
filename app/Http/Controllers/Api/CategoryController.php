<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller {
    public function index(Request $request) {
        return collect([
            [
                'id' => 1,
                'name' => 'Cat 1',
            ],
            [
                'id' => 2,
                'name' => 'Cat 2',
            ],
            [
                'id' => 3,
                'name' => 'Cat 3',
            ],
        ]);
    }
}
