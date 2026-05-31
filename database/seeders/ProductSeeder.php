<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['name' => 'Ballpen', 'quantity' => 120, 'price' => 12.50],
            ['name' => 'Notebook', 'quantity' => 80, 'price' => 45.00],
            ['name' => 'Bond Paper Ream', 'quantity' => 40, 'price' => 280.00],
            ['name' => 'Whiteboard Marker', 'quantity' => 65, 'price' => 35.75],
            ['name' => 'Stapler', 'quantity' => 25, 'price' => 150.00],
        ];

        foreach ($products as $product) {
            Product::updateOrCreate(
                ['name' => $product['name']],
                $product
            );
        }
    }
}
