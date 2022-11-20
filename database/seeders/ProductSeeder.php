<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create dummpy users
        $product = new \App\Models\Product([
            'name' => 'Product #1',
            'price' => rand(10, 1000),
            'detail' => 'This is Product #1'
        ]);

        $product->save(); 
    }
}
