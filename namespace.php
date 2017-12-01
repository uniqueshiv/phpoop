<?php
/*
namespace likes are folder
they are used to manage code and file and resolve name confliction.
namespace works like folder where class is the file
and here both namespace have different class with same name but no confliction ?
so that's y we use namespace
we can make sub namespace too  eg:namespace def\ghi\st
*/

// namespace abc{
//     class xyz{
//     }
// }
// namespace def{
//     class xyz{
//     }
// }

namespace def{
    class xyz{
      public function __construct(){
        echo "Xyz from def namespace";
      }
    }
}
namespace{ //global namespace
  class xyz{
    public function __construct(){
      echo "xyz from global namespace";
    }
  }
  use def\xyz as def;//can be alias too
  $obj=new def();

}




?>
