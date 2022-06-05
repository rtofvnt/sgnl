<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
                ["name"=>"UK"],
                ["name"=>"USA"],
                ["name"=>"Italy"],
        ];

    
    foreach($countries as $country){
        Country::create($country);
    }

    }
}
