<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    protected $table ='shipping';
	protected $guarded =[];

	// public function category()
	// {
	// 	return $this->belongsTo('App\Category','cat_id');
	// }
}
