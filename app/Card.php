<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    
    public function hospitals()

    {

    	return $this->belongsTo(Hospital::class);
    	
    }

    
}
