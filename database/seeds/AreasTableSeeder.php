<?php

use Illuminate\Database\Seeder;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
        	'name'=>'Peñalolen',
        	'lat' =>'-33.4857978',
        	'lng' => '-70.5487625',
        	]);
    }
}
