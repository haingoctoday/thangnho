<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table ='contact';
	protected $guarded =[];

	// public function category()
	// {
	// 	return $this->belongsTo('App\Category','cat_id');
	// }
}
