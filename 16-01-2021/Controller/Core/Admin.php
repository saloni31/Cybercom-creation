<?php

class Admin
{
	public function redirect($controllerName = null, $actionName = null, $params = null, $resetParams=false)
	{
		header("Location:{$this -> getUrl('grid')}");
		exit(0);
	}

	public function getUrl($actionName = null, $controllerName = null, $params = null, $resetParams=false)
	{
		$final = $_GET;
		if($resetParams){
			$final = [];
		}
		if($actionName == null){
			$actionName = $_GET['a'];
		}

		if($controllerName == null){
			$controllerName = $_GET['c'];
		}

		if($params == null){
			$params = [];
		}

		$final['c'] = $controllerName;
		$final['a'] = $actionName;

		$final = array_merge($final, $params);
		$queryString = http_build_query($final);
		unset($final);
		return "http://localhost/cybercom-creation/16-01-2021/index.php?{$queryString}";
	}
}
?>