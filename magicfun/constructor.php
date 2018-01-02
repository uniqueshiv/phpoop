<?php
/*
constructor called automatically when creating object
*/
class  Constructor{
  public function create_user(){

  }
  public function __construct($data){
    //$db=new Database();//yha pr db ka objec create kr dia
    //$db->connect();
    echo "this is constructor method call all time when we call the object of this class $data";
  }
}

$obj=new Constructor("message");
?>
