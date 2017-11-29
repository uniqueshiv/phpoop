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
}
//every object works indepedently
$tv1=new TV;
$tv2=new TV;
$tv1->voldown();
$tv1->volup();
$tv2->volup();
echo $tv1->vol;
$tv1->model="TVMODEL1";
echo $tv1->model;
echo $tv2->model;
echo $tv2->vol;
