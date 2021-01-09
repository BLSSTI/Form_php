<?php
require 'Model.php';

class Contato extends Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function create($request){
    try{ 
      $definir = [];
      foreach ($request as $key => $value) {
        if (is_string($value) and !empty($value)){
          $definir[$key] = "'{$value}'";
        } elseif(!empty($value)) {
          $definir[$key] = "{$value}";
        }
      }

      $query = "INSERT INTO contatos (".
        implode(', ', array_keys($definir)).
        ") VALUES (".
        implode(', ', array_values($definir)).");";
      echo '<br>'.$query;
        $this->executeQuery($query);
      }
    catch(\Exception $e){
      echo '<br>erro: '.$e;
    }
  }

  public function update($request, $id){
    try{
      $definir = [];
      foreach ($request as $key => $value) {
        if (is_string($value) and !empty($value)){
          $definir[] = "{$key}='{$value}'";
        } elseif(!empty($value)) {
          $definir[] = "{$key}={$value}";
        }
      }
      $query = "UPDATE contatos SET ".implode(', ', $definir)." WHERE id={$id};";
      $this->executeQuery($query);
    } catch(\Exception $e){
      echo $e;
    }
  }

  public function destroy($id){
    try{ 
        $query = "DELETE FROM contatos WHERE id='{$id}';";
        $this->executeQuery($query);
      }
    catch(\Exception $e){
      echo 'erro: '.$e;
    }
  }
  public function list(){
    try{ 
        $query = "SELECT * FROM contatos;";
        return $this->select($query);
      }
    catch(\Exception $e){
      return 'erro: '.$e;
    }
  }

  public function show($id){
    try{ 
        $query = "SELECT * FROM contatos WHERE id='{$id}';";
        echo $this->selectOne($query);
      }
    catch(\Exception $e){
      return 'erro: '.$e;
    }
  }
}