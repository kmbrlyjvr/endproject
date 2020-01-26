<?php
use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Item::create([
            'title' => 'Ryerson 001',
            'text' => 'trouser',
            'svg' => 'trouser',
            'price' =>140
        ]);

        Item::create([
            'title' => 'Ryerson 002',
            'text' => 'utility',
            'svg' => 'utility',
            'price' => 180
        ]);

        Item::create([
            'title' => 'Ryerson 003',
            'text' => 'overall',
            'svg' => 'overall',
            'price' => 200
        ]);
    }
}
