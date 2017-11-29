<?php
class TV{
  public $model="xyz";
  public $vol=1;

  function volup(){
    $this->vol++;
  }
  function voldown(){
    $this->vol--;
  }
  //contructor call automatically when we initialize the instance or
  //object of the class
  function __construct($m,$v){
    $this->model=$m;
    $this->vol=$v;
  }
}

$tv=new TV('LG','34');
echo $tv->model;
echo $tv->vol;
