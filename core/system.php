<?php

function template(string $path, array $vars = []): string
{
	$systemTemplateRenererIntoFullPath = "views/$path.php";
	extract($vars);
	ob_start();
	include($systemTemplateRenererIntoFullPath);
	return ob_get_clean();
}

function error($path)
{
	$protHttp = $_SERVER['SERVER_PROTOCOL'];
	header("$protHttp 404 Not Found");
	return template($path);
}

function checkId(string $id)
{
	$clearId = $id;
	$resultId = preg_match('/^[1-9]\d*$/', $clearId);
	if ($resultId === 1) {
		return $clearId;
	} else {
		error('errors/v_404');
		// exit();
	}
}

function parseUrl(string $url, array $routes): array
{
	$res = [
		'controller' => 'errors/e404',
		'params' => []
	];

	foreach ($routes as $route) {
		$matches = [];

		if (preg_match($route['test'], $url, $matches)) {
			$res['controller'] = $route['controller'];

			if (isset($route['params'])) {
				foreach ($route['params'] as $name => $num) {
					$res['params'][$name] = $matches[$num];
				}
			}
			break;
		}
	}
	return $res;
}
