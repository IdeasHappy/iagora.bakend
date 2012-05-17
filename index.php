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
$action1 = new action($route->getParams());
$render->load();

$variableMetodo = array($action1, $route->getAction());

var_dump(is_callable($variableMetodo, false, $nombre_a_llamar));  //  bool(true)

echo $nombre_a_llamar, "\n"; 
call_user_func(array($action1, 'index'));
$render->setModule($route->getModule());
$render->setAction($route->getAction());
print_r($action1->getValues());
$render->put($action1->getValues());
$render->render();

