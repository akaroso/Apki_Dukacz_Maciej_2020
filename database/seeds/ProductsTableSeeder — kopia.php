<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
              // Burger
        for ($i = 1; $i <= 8; $i++) {
            Product::create([
                'name' => 'Burger ' . $i,
                'slug' => 'burger-' . $i,
                'details' => rand(100, 300) . ' g of meat, ',
                'price' => rand(1499, 2499),
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ])->categories()->attach(1);
        }

        // Vegeburger
        for ($i = 1; $i <= 8; $i++) {
            Product::create([
                'name' => 'Vegeburger ' . $i,
                'slug' => 'vegeburger-' . $i,
                'details' => rand(100, 300) . ' g of vegemeat, ',
                'price' => rand(2499, 3499),
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ])->categories()->attach(2);
        }

        // Beers
        for ($i = 1; $i <= 8; $i++) {
            Product::create([
                'name' => 'Beer ' . $i,
                'slug' => 'beer-' . $i,
                'details' => [330, 500, 1000][array_rand([330, 500, 1000])] . 'ml',
                'price' => rand(1000, 3000),
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ])->categories()->attach(3);
        }

        // Sides
        for ($i = 1; $i <= 8; $i++) {
            Product::create([
                'name' => 'Side ' . $i,
                'slug' => 'side-' . $i,
                'details' => rand(100, 300) . ' g of fries,',
                'price' => rand(500, 3000),
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ])->categories()->attach(4);
        }

        // Others
        for ($i = 1; $i <= 8; $i++) {
            Product::create([
                'name' => 'Other ' . $i,
                'slug' => 'other-' . $i,
                'details' => 'Lorem ipsulum',
                'price' => rand(500, 5000),
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ])->categories()->attach(5);
        }
	}	
}
