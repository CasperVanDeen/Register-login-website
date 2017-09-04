<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/bootstrap.css">
<title>Register</title>
</head>

<body>


<? require('menu.php');
require('login.php');
 ?>
 <?php
if(!empty(filter_input(INPUT_POST, 'submit'))) {
	
	$un = filter_input(INPUT_POST, 'un') 
		or die('Missing/illegal name parameter');
	
	$pw = filter_input(INPUT_POST, 'pw') 
		or die('Missing/illegal name parameter');

	require_once('dbcon.php');
	// hash and salt the password
	$pw = password_hash($pw, PASSWORD_DEFAULT); 
	
//	echo 'Creating user: '.$un.' => '.$pw;

	$sql = 'INSERT INTO login (username, pwhash) VALUES (?,?)';
	$stmt = $link->prepare($sql);
	$stmt->bind_param('ss', $un, $pw);
	$stmt->execute();


	if ($stmt->affected_rows >0){
		
?>
</p>


<div class=" col-lg-12 height-100">
<div class=" col-lg-12">
<div class="col-lg-12">
					<img src="img/team.svg" class="center-block" width="100px" alt="user picture">
				
 </div>
 </div>
<div class=" col-lg-4"></div>
<div class=" col-lg-4">
<p>
<form class="navbar-form" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
	<fieldset>
    	<legend>Create new account</legend>
    	<input class="form-control small-space form-control" name="un" type="text" placeholder="Username" required /><br>
    	<input class="form-control small-space form-control" id="pw" name="pw" type="password" placeholder="Password" required/><br>
    	<input class="btn btn-default" type="submit" name="submit" value="Create user" />
         
   
	</fieldset>
</form>
</p>
</div>
<div class=" col-lg-4"></div>
<div class="col-lg-12">
<div class="col-lg-4"></div>
<div class="col-lg-4 text-center"><p>


<?php 
echo '
		<div class="alert alert-success">
  <strong>Success!</strong> user ['.$un.'] is added :-)
</div>
		';
	}
	else {
		echo '
		<div class="alert alert-danger">
  <strong>Danger!</strong> Error adding user ['.$un.']  this user already exist
</div>
';
	}
}
?>
</div>
<div class="col-lg-4"></div>
</div>
</div>
</body>
</html>
