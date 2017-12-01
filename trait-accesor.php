<?php
/*
how to handle accesor with trait
*/
trait abc{
  private function xyz(){
    echo "this is xyz function of trait";
  }
}
class test{
  use abc{
    abc::xyz as public xyzz; //here we are chnaging private to public  in traits and method name also
  }
}
$obj=new test;
$obj->xyzz();
 ?>
