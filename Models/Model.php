<?php
require 'Database/Conexao.php';

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