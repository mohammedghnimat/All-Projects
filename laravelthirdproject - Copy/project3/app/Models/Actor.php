<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;
    protected $fillable=[
        'name'
    ];
   // Movie.php

public function actors()
{
    return $this->hasMany(Actor::class, 'movie_id');
}

}
