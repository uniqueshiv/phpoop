<?php
/*
Autoload load the classes by __autoload() method name and class name is samename with file
*/
function __autoload($className){
  include_once '../classes/'."$className.php";
}
include_once('../classes/LoggerInterface.php');
$dblogger=new DBLogger();
$dblogger->log('hello who the hell are you');
//$user=new UserProfile();

?>
