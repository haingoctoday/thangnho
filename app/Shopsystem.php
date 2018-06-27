<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shopsystem extends Model
{
  protected $table ='shop_sys';
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
