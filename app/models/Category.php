<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Category extends Eloquent{

	protected $table = "categories";

    public $timestamps = false;

	protected $fillable = array('name');

}