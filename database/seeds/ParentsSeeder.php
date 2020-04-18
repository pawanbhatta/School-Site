<?php

use Illuminate\Database\Seeder;
use App\Parents;

class ParentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Parents::class, 20)->create();
    }
}