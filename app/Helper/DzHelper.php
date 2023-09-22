<?php
namespace App\Helper;
use Illuminate\Support\Facades\Route;
use Auth;

class DzHelper
{
	public static function action() {
		$chunks = explode("@",Route::currentRouteAction());
		return end($chunks);
    }
    
    public static function controller() {
	 	$chunks = explode("\\",Route::currentRouteAction());
		$controller = explode("@",end($chunks));
		return $controller[0]; 
    }
	
}