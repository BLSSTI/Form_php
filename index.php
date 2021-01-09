<?php

//require './Controllers/ContatoController.php';
//include 'Views/layout.php';

	spl_autoload_register(function($class){
		if(file_exists('Models/'.$class.'.php')){
			require 'Models/'.$class.'.php'; 
		} else if(file_exists('Controllers/'.$class.'.php')) {
			require 'Controllers/'.$class.'.php'; 
		} else if(file_exists('Core/'.$class.'.php')) {
			require 'Core/'.$class.'.php'; 
		} else {
			header("Location: home");  
		}
	});

	$core = new Core();
	$core->start();


?>