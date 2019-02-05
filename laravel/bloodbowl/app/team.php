<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\player;

class team extends Model
{
    protected $guarded = [
        'id' 
     ];

     public function players()
     {
         return $this->hasMany(player::class);
     }
}
