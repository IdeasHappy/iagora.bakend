<?php
require_once("./actions.php");
require_once("./actions.php");
require_once("./db.php");
require_once("./route.php");
require_once("./lib/coSimpleTemplate.php");
require_once("./lib/render.php");
$route = new route($_GET);
require_once("./modules/". $route->getModule() . ".php");
$render = new render();
$action = new action($route->getParams());
$render->load();

$variableMetodo = array($action, $route->getAction());

var_dump(is_callable($variableMetodo, true, $nombre_a_llamar));  //  bool(true)

echo $nombre_a_llamar, "\n"; 
call_user_func(array($action, $route->getAction()));
$render->setModule($route->getModule());
$render->setAction($route->getAction());
print_r($action->getValues());
#$render->put($action->getValues());
$render->render();

