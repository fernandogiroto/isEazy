<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products_data = [
            ['name' => 'Luna', 'stock' => 2, 'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti quia id officiis, officia architecto ratione dolores doloribus accusamus error nisi sunt delectus dolorem, expedita voluptatibus molestiae facilis sapiente vero! Quas.', 'store_id' => 1],
            ['name' => 'Marte', 'stock' => 2, 'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti quia id officiis, officia architecto ratione dolores doloribus accusamus error nisi sunt delectus dolorem, expedita voluptatibus molestiae facilis sapiente vero! Quas.', 'store_id' => 1],
            ['name' => 'Venus', 'stock' => 0, 'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti quia id officiis, officia architecto ratione dolores doloribus accusamus error nisi sunt delectus dolorem, expedita voluptatibus molestiae facilis sapiente vero! Quas.', 'store_id' => 1],

            ['name' => 'Tierra', 'stock' => 2,'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti quia id officiis, officia architecto ratione dolores doloribus accusamus error nisi sunt delectus dolorem, expedita voluptatibus molestiae facilis sapiente vero! Quas.', 'store_id' => 2],
            ['name' => 'Saturno', 'stock' => 2,'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti quia id officiis, officia architecto ratione dolores doloribus accusamus error nisi sunt delectus dolorem, expedita voluptatibus molestiae facilis sapiente vero! Quas.', 'store_id' => 2],
            ['name' => 'Urano', 'stock' => 0,'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti quia id officiis, officia architecto ratione dolores doloribus accusamus error nisi sunt delectus dolorem, expedita voluptatibus molestiae facilis sapiente vero! Quas.', 'store_id' => 2],

            ['name' => 'Nepturno', 'stock' => 2,'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti quia id officiis, officia architecto ratione dolores doloribus accusamus error nisi sunt delectus dolorem, expedita voluptatibus molestiae facilis sapiente vero! Quas.', 'store_id' => 3],
            ['name' => 'Júpiter', 'stock' => 2,'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti quia id officiis, officia architecto ratione dolores doloribus accusamus error nisi sunt delectus dolorem, expedita voluptatibus molestiae facilis sapiente vero! Quas.', 'store_id' => 3],
            ['name' => 'Mercurio', 'stock' => 0,'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti quia id officiis, officia architecto ratione dolores doloribus accusamus error nisi sunt delectus dolorem, expedita voluptatibus molestiae facilis sapiente vero! Quas.', 'store_id' => 3],
        ];
        Product::insert($products_data);
    }
}
