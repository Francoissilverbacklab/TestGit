<?php 

require_once 'core/init.php';

if(Input::exists()) {
	$validate = new Validate();
	$validation = $validate->check($_POST, array(
		'username' =>  array(
			'require' => true,
			'min' => 2,
			'max' => 20,
			'unique' => 'users'
		),
		'password' =>  array(
			'require' => true,
			'min' => 6
		),
		'password_again' =>  array(
			'require' => true,
			'matches' => 'password'
		),
		'name' =>  array(
			'require' => true,
			'min' => 2,
			'max' => 50
		)
	));

	if($validation->passed()) {
		echo 'Passed';
	} else {
		print_r($validation->errors());
	}
}

?>

<form action="" method="post">
	<div class="field">
		<label for="username">Username</label>
		<input type="text" name="username" id="username" value="" autocomplete="off">
	</div>

	<div class="field">
		<label for="password">Choose a password</label>
		<input type="password" name="password" id="password">
	</div>

	<div class="field">
		<label for="password_again">Enter your password again</label>
		<input type="password_again" name="password_again" id="password_again">
	</div>

	<div class="field">
		<label for="name">Your name</label>
		<input type="text" name="name" id="name" value="">
	</div>

	<input type="submit" value="Register">
</form>