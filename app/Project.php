<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    public function detail()
    {
    	return $this->belongsTo('App\Detail');
    }
}
