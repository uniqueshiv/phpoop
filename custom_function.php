<?php

$string='Hello World!';

//for($i=0;$i<strlen($string);$i++){
  // echo $string[$i]."<br>";
//}

//find string length

function stlen($string){
   $count=0;
   $i=0;
   if(!empty($string)){
     
      while($string[$i]!=null){
              //echo $string[$i];
              $count=$count+1;
              $i++;
          
      }
      return $count;
    }else{
      return 0;
    }
}

//find string word count

function str_word($string){
  $count=0;
  $i=0;
  if(!empty($string)){
      while($string[$i]!=null){
              if($string[$i]==' '){
                  $count=$count+1;
              }
              if($count==0){
                              $count=1;
                            }
              $i++;
            }
      return $count;
    }else{
      return 1;
    }
 
}

$string="a quick brown fox jumps over the lazy dog";
echo str_word($string)."<br>";
echo str_word_count($string);
?>
