<?php
/*
Acessors
public
private
Protected
*/

Class TV{
  protected $model;
  Private $vol;
  public function VolUp(){
    $this->vol++;
  }
  public function VolDown(){
    $this->vol--;
  }
  public function __construct($m,$v){
    $this->model=$m;
    $this->vol=$v;
  }
  public function getModel(){ // this is getter method
    return $this->model;
  }

}
class Plazma extends TV{
    public function getModel(){ //we can access the protected and public cause this is getter method
      return $this->model;
    }
}
$plazma=new Plazma('shiasssv','232');
//$plazma->model="sssss";
//echo $plazma->model;
echo $plazma->getModel();

?>
