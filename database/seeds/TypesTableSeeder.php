<?php

use Illuminate\Database\Seeder;
use App\Models\Type;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            'name' => 'Squad',
            'num_of_players' => 4
        ]);

        Type::create([
            'name' => 'Duo',
            'num_of_players' => 2
        ]);

        Type::create([
            'name' => 'Solo',
            'num_of_players' => 1
        ]);
    }
}
