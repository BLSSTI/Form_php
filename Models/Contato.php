<?php
require 'Model.php';

class Contato extends Model
{
  public function __construct()
  {
    parent::__construct();
  }

  private $atributos = [
    'id',
    'cpf',
    'rg',
    'orgexp',
    'uf',
    'nome',
    'datanascimento',
    'sexo',
    'email',
    'estadocivil',
    'linkcurriculo',
    'titulacao',
    'anotitulacao',
    'instituacaotitulacao',
  ];

  public function create ($request){
   
    try{ 

      $definir = [];
      foreach ($request as $key => $value) {
        if (is_string($value)){
            $definir[] = "'{$value}'";

        }
        else{
          $definir[] = "{$value}";
        }
       
      }
        $query = "INSERT INTO contatos VALUES ('',".
        implode(', ', array_values($definir)).");";

        var_dump($query);
        $this->executeQuery($query);
      }
    catch(\Exception $e){
      return 'erro: '.$e;
    }
  }

  public function update ($request, $id){
    try{
      $definir = [];
      foreach ($request as $key => $value) {
        if (is_string($value)){
            $definir[] = "{$key}='{$value}'";

        }
        else{
          $definir[] = "{$key}={$value}";
        }
       
      }
      print_r($definir);
      $query = "UPDATE dados SET ".implode(', ', $definir)." WHERE id='{$id}';"; 
      $this->executeQuery($query);

    } catch(\Exception $e){
      return 'erro: '.$e;
    }
  }

  public function destroy ($id){
    try{ 
        $query = "DELETE FROM dados  WHERE id='{$id}';";
        $this->executeQuery($query);
        echo 'deletado';
      }
    catch(\Exception $e){
      return 'erro: '.$e;
    }
  }
}