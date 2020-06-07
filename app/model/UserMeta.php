<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class UserMeta extends Model
{
    //
    protected $table = 'metas';

    public $primaryKey = 'id';

    public $timestamps = true;

    public function user(){

    	return $this->belongsTo('App\model\User');
    }
}
