<?php
/*
interface use for multiple inheritance but abstruct class use signle inheritance
abstract can declare variable but not interface
interface must public function only
*/
interface abc{

  public function test();
  public function abc();

}
class def implements abc{
  public function test(){
    echo "test";
  }
  public function abc(){
    echo "abc";
  }
}
?>
