<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Card;
use App\Models\Employee;

class EmployeeController extends Controller
{
    
    public function find_employee_by_card_id(Request $request){

        $employee = [
            "full_name"=>"",
            "department"=>[]    
        ];  

        if($request->cn<>'not_found' && strlen($request->cn)==32){ 
            
            // first we need to find a card record. I'm not querying with relation for speed.
            $card = Card::where('card_number',$request->cn)->where('status_id',1)->first(); // I added status_id to a card record, so card can be disabled if lost 

            if($card) // ok - we have card ... 
            {   
            
                $find_employee = Employee::with('roles')->where('card_id',$card->id)->where('status_id',1)->first();
                if($find_employee) { // and employee record 
                    $employee['full_name'] = $find_employee->first_name.' '.$find_employee->last_name;
                    if(sizeof($find_employee->roles)>0){ // need to find if employee has roles
                        foreach($find_employee->roles as $role){
                            array_push($employee['department'], $role->name);
                        }
                    }
                }
            }
        }

        return response()->json($employee, 200);
    }
}
