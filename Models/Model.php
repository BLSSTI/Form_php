<?php
require __DIR__. '/../Database/conexao.php';

class Model
{
  protected $conexao;

  public function __construct()
  {
    $this->conexao = Conexao::getInstance();
  }

  public function executeQuery($query){
    $stmt = $this->conexao->prepare($query);
    if ($stmt->execute()) {
        return $stmt->rowCount();
    
    }
  }
}