<?php
class EmailLogger implements LoggerInterface{
  public function log($msg){
      echo "Logging Message to Email :$msg";
  }
} ?>
