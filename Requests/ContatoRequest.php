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
  $request['cpf'] = $_POST['cpf'];
  $request['nome'] = $_POST['nome'];
  $request['sexo'] = $_POST['sexo'];
  $request['email'] = $_POST['email'];

  if(isset($_POST['rg']) and !empty($_POST['rg'])){
    $request['rg'] = $_POST['rg'];
  }

  if(isset($_POST['uf']) and !empty($_POST['uf'])){
    $request['uf'] = $_POST['uf'];
  }

  if(isset($_POST['org_exp']) and !empty($_POST['org_exp'])){
    $request['org_exp'] = $_POST['org_exp'];
  }

  if(isset($_POST['data_nascimento']) and !empty($_POST['data_nascimento'])){
    $request['data_nascimento'] = $_POST['data_nascimento'];
  }

  if(isset($_POST['estado_civil']) and !empty($_POST['estado_civil'])){
    $request['estado_civil'] = $_POST['estado_civil'];
  }

  if(isset($_POST['link_curriculo_lattes']) and !empty($_POST['link_curriculo_lattes'])){
    $request['link_curriculo_lattes'] = $_POST['link_curriculo_lattes'];
  }

  if(isset($_POST['titulacao']) and !empty($_POST['titulacao'])){
    $request['titulacao'] = $_POST['titulacao'];
  }

  if(isset($_POST['instituicao_titulacao']) and !empty($_POST['instituicao_titulacao'])){
    $request['instituicao_titulacao'] = $_POST['instituicao_titulacao'];
  }

  if(isset($_POST['ano_titulacao']) and !empty($_POST['ano_titulacao'])){
    $request['ano_titulacao'] = $_POST['ano_titulacao'];
  }
  
  print_r($request);
  return $request;
}

function cadastrar($request){
  $contatoController = new ContatoController();
  $contatoController->create($request);

}

function editar($request){
  $contatoController = new ContatoController();
  $contatoController->update($request, $_POST['id']);
}

if(validation()){
  $request = getRequest();
  if(isset($_POST['id']) and !empty($_POST['id'])){
    editar($request);
    echo "vai editar";
  } else {
    cadastrar($request);
    echo "vai cadastrar";
  }
} else {
  echo "Não passou na validação";
}

?> 