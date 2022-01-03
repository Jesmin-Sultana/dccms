<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function problemtype(){
        return $this->belongsTo(Typeproblem::class,'problem_type','id');
    }

}
