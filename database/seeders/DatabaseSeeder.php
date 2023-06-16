<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'T-Shirt',
            'code' => 'T1'
        ]);

        Category::create([
            'name' => 'Jacket',
            'code' => 'J1'
        ]);

        Category::create([
            'name' => 'CD',
            'code' => 'CD1'
        ]);

        Category::create([
            'name' => 'Merchandise',
            'code' => 'M1'
        ]);
    }
}
