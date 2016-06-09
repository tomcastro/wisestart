<?php

use Illuminate\Database\Seeder;

class PolygonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('polygons')->insert([
        	'area_id' => '1',
            'name' => 'ZHM-5'
        	]);
    }
}
