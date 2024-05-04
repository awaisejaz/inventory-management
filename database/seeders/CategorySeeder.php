<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = collect([
            [
                'id'    => 1,
                'name'  => 'Bike Tyre Tube',
                'slug'  => 'bike_tyre',
                'user_id' => 1,
            ],
            [
                'id'    => 2,
                'name'  => 'Car Tyre Tube',
                'slug'  => 'car_tyre',
                'user_id' => 1,
            ],
            [
                'id'    => 3,
                'name'  => 'Auto Tyre Tube',
                'slug'  => 'auto_tyre',
                'user_id' => 1,
            ],
            [
                'id'    => 4,
                'name'  => 'Tractor Tyre Tube',
                'slug'  => 'tractor_tyre',
                'user_id' => 1,
            ],
            [
                'id'    => 5,
                'name'  => 'Trali Tyre Tube',
                'slug'  => 'trali_tyre',
                'user_id' => 1,
            ],
            [
                'id'    => 6,
                'name'  => 'Truck Tyre Tube',
                'slug'  => 'truck_tyre',
                'user_id' => 1,
            ]
        ]);

        $categories->each(function ($category) {
            Category::insert($category);
        });
    }
}
