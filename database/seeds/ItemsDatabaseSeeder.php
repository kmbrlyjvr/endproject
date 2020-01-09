<?php
use App\Models\Items;
use Illuminate\Database\Seeder;

class ItemsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Items::create([
            'title' => 'Ryerson 001',
            'text' => 'trouser',
            'svg' => 'slack',
        ]);

        Items::create([
            'title' => 'Ryerson 002',
            'text' => 'utility',
            'svg' => 'utility',
        ]);

        Items::create([
            'title' => 'Ryerson 003',
            'text' => 'overall',
            'svg' => 'overall',
        ]);
    }
}
