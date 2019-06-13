<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Cv extends Model
{
    use SoftDeletes;
	protected $date =['delete_at'];
	
	//un cv posseder un seul utilisateur
	public function user(){
		
		return $this->belongsTo('App\User');
	}
}
