<?php
session_start();

$GLOBALS['config'] = array(
	'mysql' => array(
		'host' => 'localhost',
		'username' => 'root',
		'password' => 'root',
		'db' => 'testing1'
	),
	'remember' => array(
		'cookie_name' => 'hash',
		'cookie_expiry' => 604800 // time in seconds
	),
	'session' => array(
		'session_name' => 'user',
		'token_name' => 'token'
	)
);

spl_autoload_register(function($class){
	require_once 'classes/' . $class . '.php';
}) ;


require_once 'functions/sanitize.php';