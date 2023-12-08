<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
      'salary',
      'dep_id'
    ];
    public function department(){
        return $this->belongsto(Department::class);
    }
}
