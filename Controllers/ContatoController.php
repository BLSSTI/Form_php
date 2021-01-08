<?php

class ContatoController
{
  public function __construct()
  {

  }

  public function create($request){
    try{
      $contato = new Contato();
      $contato->create($request);
      echo 'nice';
    }catch(\Exception $e){
      echo $e;

      return 'erro: '.$e;
    }

  }

  public function update($request, $id){
    try{
      $contato = new Contato();
      $contato->update($request, $id);
      echo 'nice';
    }catch(\Exception $e){
      echo $e;
    }

  }

  public function destroy($id){
    try{
      $contato = new Contato();
      $contato->destroy($id);
      echo 'nice';
    }catch(\Exception $e){
      echo $e;
    }

  }
}
?>