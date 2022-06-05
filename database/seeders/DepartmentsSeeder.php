<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Department;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departmants = [
                ["name"=>"development"],
                ["name"=>"accounting"],
                ["name"=>"HR"],
                ["name"=>"HQ"],
                ["name"=>"sales"],
        ];

    
    foreach($departmants as $departmant){
        Department::create($departmant);
    }

    }
}
