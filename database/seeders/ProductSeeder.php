<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'ISUS Laptop',
                'price' => 1000,
                'description' => 'A high-end gaming laptop.',
                'stock' => 10,
                'category_id' => 1,
            ],
            [
                'name' => 'Banana Smartphone',
                'price' => 500,
                'description' => 'A flagship smartphone with an excellent camera.',
                'stock' => 20,
                'category_id' => 2,

            ],
            [
                'name' => 'Laser Headphones',
                'price' => 100,
                'description' => 'Noise-cancelling over-ear headphones.',
                'stock' => 30,
                'category_id' => 3,

            ],
            [
                'name' => 'Woot 60HE Keyboard',
                'price' => 50,
                'description' => 'Mechanical keyboard with RGB lighting.',
                'stock' => 15,
                'category_id' => 3,

            ],
            [
                'name' => 'MP Monitor',
                'price' => 300,
                'description' => '4K Ultra HD monitor.',
                'stock' => 5,
                'category_id' => 4,

            ],
        ]);
    }
}
