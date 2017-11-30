<?php
trait one{
  public function test(){
    echo "Test method from one trait";
  }
}
trait two{
  public function test2(){
    echo "Test2 Method from trati two";
  }
}
class abc{
  use one,two{
    one::test insteadof one;
  }
}
$obj=new abc;

 ?>
