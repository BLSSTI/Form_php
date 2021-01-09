<?php
require __DIR__. '/../Models/Contato.php';
require 'Controller.php';
class ContatoController extends Controller
{

  public function index(){
    try{
      $dados = array(
				'contatos' => $this->list()
			);
      $this->view('contato', $dados);
    }catch(\Exception $e){
      echo $e;
    }
  }

  public function create($request){
    try{
      $contato = new Contato();
      $contato->create($request);
    }catch(\Exception $e){
      echo $e;
    }
  }

  public function update($request, $id){
    try{
      $contato = new Contato();
      $contato->update($request, $id);
    }catch(\Exception $e){
      echo $e;
    }
  }

  public function destroy($id){
    try{
      $contato = new Contato();
      echo "você quer deletar o id".$id;
      $contato->destroy($id);
    }catch(\Exception $e){
      echo $e;
    }
  }

  public function list(){
    try{
      $contato = new Contato();
      return $contato->list();
    }catch(\Exception $e){
      echo $e;
    }
  }

  public function show($id){
    try{
      $contato = new Contato();
      return $contato->show($id);
    }catch(\Exception $e){
      echo $e;
    }
  }
}
?>