<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable=[
      'name',
      'email',
      'password',
      'role_id',
    ];
    public function roles(){
        return $this->belongsto(Role::class);
    }
    public function employees(){
        return $this->hasOne(Employee::class);
    }
}
