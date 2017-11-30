<?php
function __autoload($class){
  include_once "classes/$class.php";
}
// yha pr alg alg hum file use kr rhe hai activity ke liye jaise db mai email ma
// agar hume chnage krna hota hai to fir hme sari classes m change krna pdta HaruImage
// isliye interface use krte hai

function getLogger($type){
    switch($type){
      case 'email':
      return new EmailLogger();
      break;
      case 'database':
      return new DBLogger();
      break;
      case 'file':
      return new FileLogger();
      break;
    }
}
$logger=getLogger('email');
$profile=new UserProfile($logger);
$profile->createUser();
?>
