<?php
/*
if two traits have same name of function then we use insteadof
*/
trait one{
  public function test(){
    echo "Test method from one trait";
  }
}
trait two{
  public function test(){
    echo "Test2 Method from trati two";
  }
}
class abc{
  use one,two{
    one::test insteadof two;
  }
}
$obj=new abc;
$obj->test();
 ?>
