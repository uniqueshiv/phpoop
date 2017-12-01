<?php
/*
type hinting we provide whitch type of data return in parameter
*/
//eg.
  // function test(array $arr){//yha pr array type de rhe hai agar use array ni milega to halt ho jayga
  //
  //   foreach($arr as $k =>$v){
  //     echo "<tr><td>$v</td></tr>";
  //   }
  // }
  // //$array=['abc'=>'ABC','xyz'=>'XYZ'];//agar
  // $array="sdfasdfasd"; //yha pr paramter string type ka hai to argument error aagyeig
  // test($array);

  //2
  interface test{
    public function doSomething();
  }
  class ABC implements test{
    public function doSomething(){
      echo "Doing Somethign from abc";
    }
  }
  class XYZ implements test{
    public function doSomething(){
      echo "dosomethign fromm xyz";
    }
    public function doSomethingElse(){
      echo "doing someting else";
    }
  }
  function test(test $abc){// here we are passing ABC interface  object
    $abc->doSomething();
  }

  $abc=new ABC();
  test($abc);


?>
