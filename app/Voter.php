<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Colony;

class Voter extends Model
{
    /**
     *	Get the colony for the voter.
     */

    public function colony()
    {
    	return $this->belongsTo('Colony');
    }
}
