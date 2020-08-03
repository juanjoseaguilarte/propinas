<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Tip extends Model
{
    protected $fillable = ['date', 'day', 'amount', 'createt_at', 'updated_at', 'user_id'];


    public function users(){
        return $this->hasMany('App\User');
    }
    
}

   

