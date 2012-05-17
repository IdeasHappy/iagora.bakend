<?php
require_once("./actions.php");
require_once("./actions.php");
require_once("./db.php");
require_once("./route.php");
$route = new route($_GET);
require_once("./modules/". $route->getModule() . ".php");
$action1 = new action($route->getParams());
echo call_user_func(array($action1, $route->getAction()));
echo json_encode($action1->getValues());

