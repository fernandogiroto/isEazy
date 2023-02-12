<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Store;


class StoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stores_data = [
            ['name' => 'Tienda Espacial XX', 'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti quia id officiis, officia architecto ratione dolores doloribus accusamus error nisi sunt delectus dolorem.', 'img' => 'http://localhost:8000/img/store1.jpeg'],
            ['name' => 'La tienda del Principito', 'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti quia id officiis, officia architecto ratione dolores doloribus accusamus error nisi sunt delectus dolorem.', 'img' => 'http://localhost:8000/img/store2.jpeg'],
            ['name' => 'Tienda Plana', 'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti quia id officiis, officia architecto ratione dolores doloribus accusamus error nisi sunt delectus dolorem.', 'img' => 'http://localhost:8000/img/store3.jpeg'],
        ];
        Store::insert($stores_data);
    }
}
