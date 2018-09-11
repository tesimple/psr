<?php
/*Starter Base*/
namespace LogicEngine;

use LogicEngine\System\Driver;

/**
* Initialize App
*/
class App
{
	
	function __construct()
	{
		$Driver = new Driver;
		print_r($Driver->Setup("Driver Data"));
	}
	public function Setup($value='')
	{
		return $value;
	}
}