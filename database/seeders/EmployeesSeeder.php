<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Employee;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $employees = [
                    ["first_name"=>"Julius","last_name"=>"Cesar",'card_id'=>1,'status_id'=>1]
                
                
        ];

    
    foreach($employees as $employee){
        Employee::create($employee);
    }

    }
}
