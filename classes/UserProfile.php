<?php
class UserProfile {
  private $logger;
  public function createUser(){
    echo "Create User";
    $this->logger->log('User create');
  }
  public function updateUser(){
    echo "Updating User";
    $this->logger->log('User Updated');
  }
  public function deleteUser(){
    echo "deleteing user";
    $this->logger->log('Deleting User');
  }
  public function __construct(LoggerInterface $logger){
    $this->logger=$logger;
  }
}

 ?>
