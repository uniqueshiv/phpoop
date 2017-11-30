<?php
/*
Abstract class mtlb adhuri class and function,
abstract class never make it's object directly
use for enforcement eg.develper works different class to alg class m ek class use krenge jo phle defined h jisse functions nmae aur varible m confliction na aaye.
//abstract method bhi adhura just initilize krenge

*/
abstract class BaseEmp{
  protected $fname;
  protected $lname;
  public function getFullname(){
    return $this->fname.' '.$this->lname;
  }
  public abstract function getMonthlySalery();

  public function __construct($f,$l){
    $this->fname=$f;
    $this->lname=$l;
  }
}
class FulltimeEmp extends BaseEmp{
  protected $ansalery;
  public function getMonthlySalery(){
    return $this->ansalery/12;
  }
}

 class ContractEmp extends BaseEmp {

  protected $hrate;
  protected $thours;

  public function getMonthlySalery(){
    return $this->hrate*$this->thours;
  }
}
$full=new FulltimeEmp('FullTime','Employee');
$contract=new ContractEmp('Contract','Employee');


echo $full->getFullname();
echo $full->getMonthlySalery();

echo $contract->getFullname();
echo $contract->getMonthlySalery();

//$ftime=new FulltimeEmp('FullTime','Employee');
//$cemp=new ContractEmp('Contract','Employee');
//echo $ftime->getFullname();
//echo $cemp->getFullname();
?>
