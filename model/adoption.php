<?php
require_once 'crud.php';
class Adoption extends Crud {

  private $id;
  private $idAnimal;
  private $idUser;
  private $date;
  private $reason;

  const TABLE = 'adoption';

  private $pdo;

  public function __construct(){
    parent::__construct(self::TABLE);
    $this->pdo=parent::conexion();
  }

}
 ?>
