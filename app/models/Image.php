<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Image extends Eloquent {

	protected $fillable = array('name', 'text', 'path');


}