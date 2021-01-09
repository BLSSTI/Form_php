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

  public function select($query){
    $stmt = $this->conexao->prepare($query);
    $stmt->execute();
    $sql = $stmt->fetchAll();
    return $sql;
  }

  public function selectOne($query){
    $stmt = $this->conexao->prepare($query);
    $stmt->execute();
    $sql = $stmt->fetch();
    return json_encode($sql);
  }
}