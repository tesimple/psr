<?php
require_once('vendor'.DIRECTORY_SEPARATOR.'autoload.php');
use LogicEngine\App;
use LogicEngine\Assistance\Helper;
use LogicEngine\System\Driver;

/*$App = new App;
print_r($App->Setup("App Data"));
$Driver = new Driver;
print_r($Driver->Setup("Driver Data"));*/

/*$fi = new FilesystemIterator(__DIR__, FilesystemIterator::SKIP_DOTS);
print_r(iterator_count($fi));
echo PHP_EOL;*/


$Helper = new Helper;
print_r($Helper->Setup("Helper Data"));