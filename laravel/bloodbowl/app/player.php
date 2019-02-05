<?php

namespace App;
use App\team;

use Illuminate\Database\Eloquent\Model;

class player extends Model
{
    protected $guarded = [
        'id' 
     ];
     
   public function team()
       {
        return $this->belongsTo(Team::class);
       } 
}
