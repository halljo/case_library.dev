<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Card extends Model
{    
    public function hospital()
    {
    	return $this->belongsTo(Hospital::class);	
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    } 
}
