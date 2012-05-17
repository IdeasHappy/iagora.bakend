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
call_user_func(array($action1, 'index'));
$render->setModule($route->getModule());
$render->setAction($route->getAction());
$render->put($action1->getValues());
$render->render();

