<?php 

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

function Asset()
{
	echo "asset";
}
