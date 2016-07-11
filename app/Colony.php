<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Voter;

class Colony extends Model
{
    /**
     *	Get all the voters of the colony.
     */

    public function voters()
    {
    	return $this->hasMany('Voter');
    }
}
