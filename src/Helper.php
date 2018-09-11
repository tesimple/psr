<?php
/*Starter Base*/
namespace LogicEngine\Assistance;
use FilesystemIterator;
//use SimpleXMLElement;
/**
* Helper Class
*/
class Helper
{
	function __construct()
	{
		# code...
	}
	public function Setup($value='')
	{
		$fi = new FilesystemIterator(__DIR__, FilesystemIterator::SKIP_DOTS);
		print_r(iterator_count($fi));
		echo PHP_EOL;
		$a = new \SimpleXMLElement('<a href="www.something.com">Click here</a>');
		print_r($a);
		echo PHP_EOL;
		$d =  new \DateTimeZone('GMT');
		print_r($d);
		return $value;
	}
}