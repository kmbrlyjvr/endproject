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
            'svg' => 'slack',
        ]);

        Item::create([
            'title' => 'Ryerson 002',
            'text' => 'utility',
            'svg' => 'utility',
        ]);

        Item::create([
            'title' => 'Ryerson 003',
            'text' => 'overall',
            'svg' => 'overall',
        ]);
    }
}
