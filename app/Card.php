<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    
    public function hospital()

    {

    	return $this->belongsTo(Hospital::class);
    	
    }

    
}
