<?php
/*
late static binding use after 5.3 versions
befor this fatal error throw;
*/
class DB{
  protected static $table ="basetable";
  public function select(){
    echo "selec * from ".static::$table;//self::$table  self ki jagah static daal dia ha to child class m iski value change ho jaygi jise late static binding bolte ha
  }
  public function insert(){
    echo "insert into ".static::$table;
  }
}
class abc extends DB{
  protected static $table ="abc";
}
class userAccount extends DB{
  protected static $table='user_account';
}
$uaccount =new userAccount;
$uaccount->insert();
$abc=new abc;
$abc->insert();
