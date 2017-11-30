<?php
/*
Traits are use for multiple inheritance use with "use" keyword
*/
class abc{
  public function test(){
    echo "test from class Abc";
  }

}
trait test{
  public function test2(){
    echo "this is trait function";
  }
}
trait test2{
  public function test3(){
    echo "this is test3 function of trait";
  }
}
class one extends abc{
  use test,test2;
}
class two extends abc{
  use test;
}
class three extends abc{

}
$obj=new one;
echo $obj->test2();
$obj->test3();
$obj2=new two;
$obj2->test2();
?>
