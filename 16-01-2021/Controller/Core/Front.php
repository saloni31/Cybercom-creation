<?php
require_once "./Model/request.php";
	class Front
	{
		public static function init()
		{
			$request = new Request();
			$controllerName = ucfirst($request -> getControllerName());
			$actionName = $request->getActionName()."Action";
			require_once "Controller/{$controllerName}.php";
			$controller = new $controllerName();
			$controller->$actionName();
		}
	}
?>