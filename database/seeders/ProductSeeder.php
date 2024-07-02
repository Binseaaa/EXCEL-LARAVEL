<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
            'name'        => 'Laptop',
            'description' => 'A userful gadget',
            'price'       => 1000
            ],
            [
            'name'        => 'Phone',
            'description' => 'A handheld device',
            'price'       => 700
            ],
            [
                'name'        => 'Tablet',
                'description' => 'A portable touchscreen device',
                'price'       => 500
            ],
            [
                'name'        => 'Smartwatch',
                'description' => 'A wearable device',
                'price'       => 300
            ],
            [
                'name'        => 'Camera',
                'description' => 'A device for capturing photos',
                'price'       => 600
            ],
            [
                'name'        => 'Headphones',
                'description' => 'A device for listening to audio',
                'price'       => 150
            ],
            [
                'name'        => 'Keyboard',
                'description' => 'A peripheral for typing',
                'price'       => 100
            ],
            [
                'name'        => 'Mouse',
                'description' => 'A peripheral for navigation',
                'price'       => 50
            ],
            [
                'name'        => 'Monitor',
                'description' => 'A display device',
                'price'       => 200
            ],
            [
                'name'        => 'Printer',
                'description' => 'A device for printing documents',
                'price'       => 250
            ]
        ];
        foreach($products as $p) {
            Product::create($p);
        }
    }
}
