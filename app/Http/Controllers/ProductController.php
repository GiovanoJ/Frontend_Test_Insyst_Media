<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            [
                'id' => 1,
                'name' => 'Panci',
                'price' => 100000,
                'stock' => 110,
                'created_at' => '2025-01-01'
            ],
            [
                'id' => 2,
                'name' => 'Pisau',
                'price' => 20000,
                'stock' => 321,
                'created_at' => '2025-01-01'
            ],
            [
                'id' => 3,
                'name' => 'Gelas Plastik',
                'price' => 5000,
                'stock' => 670,
                'created_at' => '2025-01-01'
            ],
            [
                'id' => 4,
                'name' => 'Talenan Kayu',
                'price' => 50000,
                'stock' => 225,
                'created_at' => '2025-01-01'
            ],
            [
                'id' => 5,
                'name' => 'Piring plastik',
                'price' => 4000,
                'stock' => 522,
                'created_at' => '2025-01-01'
            ],
        ];

        return view('product.index', compact('products'));
    }
}
