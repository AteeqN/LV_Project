<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $fillable = [
        'fname', 'lname', 'email', 'pwd','conpwd',
    ];

    public function metas(){

    	return $this->hasMany("App\model\UserMeta");
    }
}
