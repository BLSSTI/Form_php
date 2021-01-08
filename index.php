<?php

require './Controllers/ContatoController.php';
require './Models/Contato.php';

//include './Controllers/ContatoController.php';
//require './Controllers/ContatoController.php';

// spl_autoload_register(function($class){
//   if(file_exists('./Models/'.$class.'.php')){
//     require './Models/'.$class.'.php'; 
//   } else if(file_exists('./Controllers/'.$class.'.php')) {
//     require './Controllers/'.$class.'.php'; 
//   } else if(file_exists('core/'.$class.'.php')) {
//     require 'core/'.$class.'.php'; 
//   } else {
//     header("Location: home");  
//   }
// });



/*
$atributos = [
  'cpf' => 'aaaa',
  'rg'=> 'aaaaaaa' ,
  'orgexp'=> '77777' ,
  'uf'=> '7777777' ,
  'nome'=> '6666' ,
  'datanascimento'=> '12345' ,
  'sexo'=> '12345' ,
  'email'=> '12345' ,
  'estadocivil'=> '12345' ,
  'linkcurriculo'=> '12345' ,
  'titulacao'=> '12345' ,
  'anotitulacao'=> '12345' ,
  'instituacaotitulacao'=> '12345' 
];

$contatoController = new ContatoController();
$contatoController->destroy(0);
*/

include 'Views/layout.php';


?>