<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PDO;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
 
        'first_name','last_name','card_id','status_id'
    ];

    public function roles(){
        return $this->belongsToMany(Role::class);
    }
}
