<?php
require_once 'core/init.php';

$user = DB::getInstance()->get('users', array('username', '=', 'alex'));

if($user->error()) {
	echo 'No user';
} else {
	echo 'OK!';
}