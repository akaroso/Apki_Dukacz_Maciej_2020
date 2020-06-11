<?php

use Illuminate\Database\Seeder;
use App\Coupon;

class CouponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()


    {
       
        Coupon::create([
            'code' => 'kupon1000',
            'type' => 'fixed',
            'value' => 1000,
        ]);

        Coupon::create([
            'code' => 'kupon2000',
            'type' => 'fixed',
            'value' => 2000,
        ]);

        Coupon::create([
            'code' => 'kupon3000',
            'type' => 'fixed',
            'value' => 3000,
        ]);


        Coupon::create([
            'code' => 'kupon10%',
            'type' => 'percent',
            'percent_off' => 10,
        ]);

        Coupon::create([
            'code' => 'kupon30%',
            'type' => 'percent',
            'percent_off' => 30,
        ]);

        Coupon::create([
            'code' => 'kupon50%',
            'type' => 'percent',
            'percent_off' => 50,
        ]);
        
    }
}
