<?php
namespace App\Helpers;

use TaskApp\Entities\Category;
use TaskApp\Entities\Task;
use Illuminate\Http\Request;

class Indicator
{
	public static function CountRegister($entity)
	{
		if (isset($entity)) {
			switch ($entity) {
				case 'category':
					return  Category::all()->count();
				case 'task':
					return Task::all()->count();
				default:
					return '0';
			}
		}else{
			return '0';
		}
	}
	
}