<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function workingfield(){
        return $this->belongsTo(Typeproblem::class,'working_field','id');
    }


    // public function employeename(){
    //     return $this->belongsTo(Assigned::class,'employee_name','id');
    // }
}
