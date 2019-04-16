<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    //
    public function project()
    {
    	return $this->hasMany('App\project');
    }
}
