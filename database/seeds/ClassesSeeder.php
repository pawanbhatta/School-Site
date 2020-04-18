<?php

use Illuminate\Database\Seeder;
use App\Classes;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Classes::class, 20)->create();
    }
}