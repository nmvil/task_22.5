<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	ini_set('display_errors', 1);
	$model = new Model();
	$controller = new Controller($model);
	$view = new View($controller, $model);
	if (isset($_GET['action']) && !empty($_GET['action'])) {
	    $controller->{$_GET['action']}();
	}
	echo $view->output();
?>
</body>
</html>