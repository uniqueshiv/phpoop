<?php
class Base{
  public function abc(){
    echo "AB method from Base Class";
  }
}
trait Test{
  public function abc(){
    echo "This is the trait method";
  }
}
class ChildCl extends Base{
  use Test; //trait override the base class abc method when we calling it
  public function abc(){
    echo "this is child class abc";
  }
}
$obj=new ChildCl;
$obj->abc();
