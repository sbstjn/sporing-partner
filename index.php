<?php

define ('SPORE_CORE', dirname(__FILE__) . '/vendor/sbstjn/spore.php/');
define ('SPORE_SITE', dirname(__FILE__) . '/');

require_once dirname(__FILE__) . '/vendor/autoload.php';

require_once (SPORE_CORE . 'Spore.php');
$Spore = new Spore();

$Spore->get('/', function($req, $res) {
	$res->render('index');
});

$Spore->get('/example/:key', function($req, $res) {
	$res->layout('dynamic');
	$res->render('example', array('key' => $req->param('key')));
});

$Spore->handle();