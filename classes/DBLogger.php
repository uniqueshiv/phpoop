<?php
class DBLogger implements LoggerInterface{
  public $logger;
  public function log($msg){
    echo "DB Logging Message :$msg";
  }
}

 ?>
