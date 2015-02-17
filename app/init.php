<?php 

use Illuminate\Database\Capsule\Manager as Capsule;

require_once 'core/App.php';
require_once 'core/Controller.php';
require_once 'core/Route.php';
require_once 'core/View.php';
require_once 'core/Url.php';
require_once 'routes.php';

// 3rd Party packages
/*  -----------------------------
	| Package |   Date added    |
	-----------------------------
	|  Blade  | 17.2.2015 20:00 |
	-----------------------------
*/
require_once '../vendor/autoload.php';

/*
	Setup the database
*/

$capsule = new Capsule();

$capsule->addConnection([
	'driver' => 'mysql',
	'host' => '127.0.0.1',
	'database' => 'imgr',
	'username' => 'root',
	'password' => '',
	'charset' => 'utf8',
	'collation' => 'utf8_unicode_ci',
	'prefix' => ''
]);

$capsule->setAsGlobal();

$capsule->bootEloquent();

function Asset()
{
	echo "asset";
}
