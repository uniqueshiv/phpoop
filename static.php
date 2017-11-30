<?php
/*
static functions or variable directly conected to the class not to object
//static work with self not $this
// use parent:: to get in child class
// where class have static function is called static class
*/
// class ABC{
//   public static $data="static variable";
//   public static function xyz(){
//     echo 'xyz function';
//   }
// }
// ABC::xyz();
// ABC::$data;
//2
// class House{
//   public static $size;
//   public static function getsize(){
//     return self::$size;
//   }
//   public static function setsize($s){
//     self::$size=$s;
//   }
// }
//
// House::setsize("34");
// echo House::getsize();

//3

Class abc{
  public static $objectcount;
  public static function getCount(){
    return self::$objectcount;
  }
  public function __construct(){
    self::$objectcount++;
  }
}

class xyz extends abc{
  public static function getCount(){
    parent::getCount();
  }
}


$a=new abc();
$b=new abc();
$c=new abc();
echo abc::getCount();

?>
