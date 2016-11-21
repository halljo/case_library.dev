<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospitals extends Model
{
    public function Hospital()

    {

    	return $this->hasMany(Cards::class);

    }

}
