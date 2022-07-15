<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function post(){
        return $this->hasManyTrough('App\Post', 'App\User', 'country_id');
    }


}
