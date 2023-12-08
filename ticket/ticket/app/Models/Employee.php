<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable=[
      'salary',
      'position',
    ];
    public function users(){
        return $this->belongsto(User::class);
    }
    public function tickets(){
        return $this->hasMany(Ticket::class);
    }
}
