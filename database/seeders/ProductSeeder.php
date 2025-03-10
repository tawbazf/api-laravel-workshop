<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Produit 1',
            'description' => 'Description du produit 1',
            'price' => 10.99,
        ]);

        Product::create([
            'name' => 'Produit 2',
            'description' => 'Description du produit 2',
            'price' => 20.99,
        ]);
    }
}