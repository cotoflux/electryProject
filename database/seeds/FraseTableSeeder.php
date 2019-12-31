<?php

use Illuminate\Database\Seeder;

class FraseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('frases')->insert([
            'body'=>Str::random(30),
        ]);
    }
}
