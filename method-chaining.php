<?php
// class ABC{
//   public $value='$value porperties of ABC Class';
// }
// class XYZ{
//   public $abc;
//   public function __construct(){
//     $this->abc=new ABC;
//   }
// }
// $xyz=new XYZ;
// echo $xyz->abc->value;


class ABC{
  public function fun1(){
    echo "fun1 of ABC class";
    return $this;
  }
  public function fun2(){
    echo "fun2 of ABC Class";
    return $this;
  }
  public function fun3(){
    echo "fun3 of ABC Class";
  }
}
$abc =new ABC;
$abc->fun1()->fun2()->fun3();
?>
