<?php
require_once 'core/init.php';

$user = DB::getInstance()->get('users', array('username', '=', 'francois'));
//$user->get('users', array('username', '=', 'francois'));

if(!$user->count()) {
	echo 'No user';
} else {
	echo $user->first()->username;
}