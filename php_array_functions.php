<?php
   $arrayd=['id'=>1,'name'=>'shiva','email'=>'uniqueshiv@gmail.com'];
   $array=array('jay','kunal','rajiv','rachna','aman','kunal');
   
   //echo count($array);//count array
   
   //echo is_array($array)//return true and false
   
   //print_r(array_values($arrayd));//return only values not keys
   
   // print_r(array_keys($arrayd));//return only keys not values
   
   //echo sizeof($array);//array size like count
 
  //array_pop($arrayd); // here array_pop function remove last element
  //print_r($arrayd);
  
  //array_push($array,'ajax');// add element in last of array
  //print_r($array);
  
  
  //array_shift($array); // this remove first elment from array
  // print_r($array);
  
  //array_unshift($array,'shyaam'); // array_unshift will add elment at begining
  //print_r($array);
  
  
  // while(list($key,$val)=each($arrayd)){
  //    echo $key.'=>'.$val."<br>";  //each function use to iterate key nd value in array
  // }
   
  //sort($array);  // sort an array in ascending order by alphabatically
  //print_r($array);
  
  //print_r(array_flip($arrayd));// here array_flip interchange the value into key and vice versa. 
  //print_r(array_flip($array));//and change to associative array
  
  
  //print_r(array_reverse($array));//this will reverse the array 

  // print_r(array_merge($array,$arrayd)); //merge multiple array into one
  
  //echo $array[array_rand($array)];
 // echo array_rand($arrayd);//array rand pick key randomly 

   // print_r(array_search('shiva',$arrayd)); //find the value of the array and return key value
    
    
   // array_slice(array,offset,length); // return subset of elment of an array. 
  //print_r(array_slice($array,2,4));
  
  
 // print_r(array_unique($array));// remove the repeated value return unique array

?>
