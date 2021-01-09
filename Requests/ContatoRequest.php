<?php 

include '../Controllers/ContatoController.php';




function validation(){
  $request = [];
  $avaliable = true;

  if (!isset($_POST['cpf']) or empty($_POST['cpf'])){
    $avaliable = false;
  }

  if (!isset($_POST['nome']) or empty($_POST['nome'])){
    $avaliable = false;
  }

  if (!isset($_POST['sexo']) or empty($_POST['sexo'])){
    $avaliable = false;
  }

  if (!isset($_POST['email']) or empty($_POST['email'])){
    $avaliable = false;
  }

  return $avaliable;
}

function getRequest(){
  $request = [];
  if(isset($_POST['id']) or !empty($_POST['id'])){
    array_push($request, $_POST['id']);
  }
 
  array_push($request, $_POST['cpf']);
  array_push($request, $_POST['rg']);
  array_push($request, $_POST['uf']);
  array_push($request, $_POST['org_exp']);
  array_push($request, $_POST['nome']);
  array_push($request, $_POST['data_nascimento']);
  array_push($request, $_POST['sexo']);
  array_push($request, $_POST['email']);
  array_push($request, $_POST['estado_civil']);
  array_push($request, $_POST['link_curriculo_lattes']);
  array_push($request, $_POST['titulacao']);
  array_push($request, $_POST['instituicao_titulacao']);
  array_push($request, $_POST['ano_titulacao']);
  ;
  return $request;
 
  }

 
  

function cadastrar($request){

  $contatoController = new ContatoController();
  $contatoController->create($request);
}

function editar($request){
  $contatoController = new ContatoController();
  $contatoController->update($request);
}

if(validation()){
  $request = getRequest();
  if(isset($_POST['id']) or !empty($_POST['id'])){
    editar($request);

  } else {
    cadastrar($request);
  }
}

?> 