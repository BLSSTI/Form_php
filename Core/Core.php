<?php

	class Core {

		public function start(){
				if(!empty($_GET['url'])){
					$url = $_GET['url'];
					$url = explode('/', $url);
					$currentController = $url[0].'Controller';
					array_shift($url);

					if(!empty($url[0])){
						$currentAction = $url[0];
						array_shift($url);
					} else {
						$currentAction = 'index';
					}

					if(!empty($url[0])){
						$currentParams = $url[0];
						array_shift($url);
					}  else {
						$currentParams = 0;
					}
					
				} else {
					$currentController = 'homeController';
					$currentAction = 'index';
					$currentParams = 0;
        }

				$control = new $currentController();
				if(method_exists($control, $currentAction)){
					$control->$currentAction($currentParams);
				} else {
					header("Location: index");
				}
		}

	}

?>