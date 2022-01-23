<?php

require_once("controllers/template.controller.php");
require_once("controllers/users.controller.php");
require_once("controllers/categories.controller.php");
require_once("controllers/produits.controller.php");
require_once("controllers/clients.controller.php");
require_once("controllers/ventes.controller.php");

require_once("models/users.model.php");
require_once("models/categories.model.php");
require_once("models/produits.model.php");
require_once("models/clients.model.php");
require_once("models/ventes.model.php");

$template = new ControllerTemplate();
$template -> ctrTemplate();