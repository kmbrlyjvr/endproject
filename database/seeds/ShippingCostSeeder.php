<?php

use App\Models\ShippingCost;
use Illuminate\Database\Seeder;

class ShippingCostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ShippingCost::create([
            'country' => 'Philippines',
            'price' => 0
        ]);

        ShippingCost::create([
            'country' => 'Austria',
            'price' => 20 
        ]);

        ShippingCost::create([
            'country' => 'United Kingdom',
            'price' => 15
        ]);
        
        ShippingCost::create([
            'country' => 'Norway',
            'price' => 15
        ]);

        ShippingCost::create([
            'country' => 'United States',
            'price' => 30 
        ]);

    }
}


