<?php
/*
Now We have completed Class,Object,Contructor,Method Overriding,Variable Overriding,Inheritance
*/
class TV{
  public $model;
  public $vol;

  function volup(){
    $this->vol++;
  }
  function voldown(){
    $this->vol--;
  }
  function __construct($m,$v){
    $this->model=$m;
    $this->vol=$v;
  }
}

class PlazmaTv extends TV{
  //variable Overriding
  public $model="Plazma Model";
  //this is method overriding.
  function __construct(){
  }
}
$plazma=new PlazmaTv;
$plazma->model="Model change"; // Value is changing
echo $plazma->model;




//
// class TvWithTimer extends TV{
//   public $timer=true;
//   // function __construct($m,$v){
//   //   $this->model=$m;
//   //   $this->vol=$v;
//   // }
// }
//
// class PlazaTv extends TV{
//   public $plazma=true;
// }
//
// $tv=new TvWithTimer('TVWTimer',353);
// $plazma=new PlazaTv('PlazaTV',6);
// echo $plazma->model;
// $tv=new TvWithTimer('SameSung','324');
// $tv->volup();
// echo $tv->vol;

// $tv=new TV('LG','34');
// $ntv=new TV('SameSung','85');
// echo $ntv->model;
// echo $tv->model;
// echo $tv->vol;
