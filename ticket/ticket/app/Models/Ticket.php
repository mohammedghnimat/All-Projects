<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

      protected $fillable=[
        'title',
        'message',
        'status_id',
        'priority_id',
        'emp_id',
        'user_id',
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }
    public function employees(){
        return $this->belongsTo(Employee::class);
    }
    public function priorities(){
        return $this->belongsTo(Priority::class);
    }
    public function statuses(){
        return $this->belongsTo(Status::class);
    }
}
