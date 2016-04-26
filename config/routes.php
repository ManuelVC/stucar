<?php

define('ROUTE',[
	'' => ['controller' => 'IndexController', 'method' => 'index'],
	'especial' => ['controller' => 'EspecialController', 'method' => 'index'],
	'directo' => ['controller' => 'DirectoController','method' => 'index'],
	'directobuy' => ['controller' => 'DirectoBuyController', 'method' => 'index'],
	'colectivo' => ['controller' => 'ColectivoController', 'method' => 'index'],
	'camionetas' => ['controller' => 'CamionetaController', 'method' => 'index'],
	'camioneta' => ['controller' => 'CamionetaController', 'method' => 'show'],
	'acerca' => ['controller' => 'AcercaController', 'method' => 'index'],
	'contacto' => ['controller' => 'ContactoController', 'method' => 'index'],
	'admin' => ['controller' => 'LoginController', 'method' => 'index'],
	'admin/panel' => ['controller' => 'PanelController', 'method' => 'index'],
	'admin/oficinas' => ['controller' => 'OficinaController', 'method' => 'index'],
	'admin/oficina' => ['controller' => 'OficinaController', 'method' => 'show']
	]);