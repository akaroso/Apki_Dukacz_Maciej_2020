<?php

use Illuminate\Database\Seeder;
use App\Category;
use Carbon\Carbon;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            ['name' => 'Burgers', 'slug' => 'burgers', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Vege Burgers', 'slug' => 'notburgers', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Beers', 'slug' => 'beers', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Sides', 'slug' => 'sides', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Others', 'slug' => 'others', 'created_at' => $now, 'updated_at' => $now],        
        ]);

    }
}
