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
            'text' => 'Trouser',
            'svg' => 'Trouser',
            'price' => 140
        ]);

        Item::create([
            'title' => 'Ryerson 002',
            'text' => 'Utility',
            'svg' => 'Utility',
            'price' => 180
        ]);

        Item::create([
            'title' => 'Ryerson 003',
            'text' => 'Overall',
            'svg' => 'Overall',
            'price' => 200
        ]);
    }
}
