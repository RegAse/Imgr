<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent{

	protected $fillable = array('username', 'password','email','admin');

	public function images()
	{
		return $this->belongsToMany('Image');
	}

}