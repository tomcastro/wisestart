<?php

use Illuminate\Database\Seeder;

class CoordinateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coordinates')->insert([
        	[
            'polygon_id' => 1,
        	'lat' => -33.488879,
        	'lng' => -70.549700,
            ],
        	[
            'polygon_id' => 1,
        	'lat' => -33.486364,
        	'lng' =>  -70.557789,
        	],
            [
            'polygon_id' => 1,
            'lat' => -33.489368,
            'lng' =>  -70.558331,
            ],
            [
            'polygon_id' => 1,
            'lat' => -33.492781,
            'lng' =>  -70.558787,
            ],
            [
            'polygon_id' => 1,
            'lat' => -33.495819,
            'lng' =>  -70.558934,
            ],
            [
            'polygon_id' => 1,
            'lat' => -33.499115,
            'lng' =>  -70.560029,
            ],
            [
            'polygon_id' => 1,
            'lat' => -33.500119,
            'lng' => -70.552191,
            ],
            [
            'polygon_id' => 1,
            'lat' => -33.493775,
            'lng' => -70.550672,
            ],
            [
            'polygon_id' => 1,
            'lat' => -33.488958,
            'lng' => -70.549539,
            ],
            ]);
    }
}
