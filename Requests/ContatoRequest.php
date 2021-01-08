<?php 
require '/Controllers/ContatoController.php';

$request = [];
$avaliable = true;

if (isset($_POST['cpf']) or !empty($_POST['cpf'])){
  array_push($request, $_POST['cpf']);
}else{
  $avaliable = false;
}

if (isset($_POST['nome']) or !empty($_POST['nome'])){
  array_push($request, $_POST['nome']);
}else{
  $avaliable = false;
}


if (isset($_POST['sexo']) or !empty($_POST['sexo'])){
  array_push($request, $_POST['sexo']);
}else{
  $avaliable = false;
}


if (isset($_POST['email']) or !empty($_POST['email'])){
  array_push($request, $_POST['email']);
}else{
  $avaliable = false;
}




if($avaliable){
  $contatoController = new ContatoController();
  $contatoController->create($request);
}

?> 
