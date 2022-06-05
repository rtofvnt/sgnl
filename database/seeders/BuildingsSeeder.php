<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Building;

class BuildingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $buildings = [
                ["name"=>"The Isaac Newton",'country_id'=>1],
                ["name"=>"Oscar Wilde",'country_id'=>1],
                ["name"=>"Charles Darwin",'country_id'=>1],
                ["name"=>"Benjamin Franklin",'country_id'=>2],
                ["name"=>"Luciano Pavarotti",'country_id'=>3],
                
        ];

    
    foreach($buildings as $building){
        Building::create($building);
    }

    }
}
