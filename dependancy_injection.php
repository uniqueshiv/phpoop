<?php
/*
Dependency Injection:
DRY:don't repeat yourself;

*/
class Logger{
  public function log($msg){
    echo "Logging message :$msg";
  }
}

//$logger->log('This is a message.');

class UserProfile{
  private $logger;
  public function createUser(){
    $this->logger->log('user Created');
  }
  public function updateUser(){
    $this->logger->log('user update');
  }
  public function deleteUser(){
  //  $logger=new Logger();
    $this->logger->log('user Delted');
  }
  public function __construct(Logger $logger){ //type hinting
    $this->logger=$logger;
  }
}
$logger=new Logger();
$profile=new UserProfile($logger);
$profile->createUser();
$profile->updateUser();
?>
