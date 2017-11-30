<?php
class FileLogger implements LoggerInterface{
  public function log($msg){
      echo "Logging Message in file :$msg";
  }
} ?>
