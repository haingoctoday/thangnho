<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
  protected $table ='info_web';
	protected $guarded =[];
	
	// public function products()
	// {
	// 	return $this->hasMany('App\Products','cat_id');
	// }
	// public function news()
	// {
	// 	return $this->hasMany('App\News','cat_id');
	// }
}
