<?php

	class Controller {
		public function view($viewName, $dados){ 
			require 'Views/layout.php';  
		}
		
		public function loadView($viewName, $dados){
			extract($dados);
			require 'Views/'.$viewName.'.php';
		}
	}

?>