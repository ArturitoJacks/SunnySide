<?php
require_once 'crud.php';
class User extends Crud{
  private $id;
  private $name;
  private $lastName;
  private $sex;
  private $addresss;
  private $phone;
  private $age;

  const TABLE = 'user';

  private $pdo;

  public function __construct(){
    parent::__construct(self::TABLE);
    $this->pdo=parent::conexion();
  }
}
 ?>
