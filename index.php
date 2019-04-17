<?php
require_once 'core/init.php';

$userInsert = DB::getInstance()->update('users', 4, array(
	'password' => 'newpassword',
	'name' => 'Peter William'
));