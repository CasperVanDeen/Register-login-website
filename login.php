<?php


if(!empty(filter_input(INPUT_POST, 'submit'))) {

	require_once('dbcon.php');
	
	$un = filter_input(INPUT_POST, 'un') 
		or die('<script type="text/javascript">
    alert("illegal username combination!");
</script>');
	$pw = filter_input(INPUT_POST, 'pw') 
		or die('<script type="text/javascript">
    alert("illegal password combination!");
</script>');

	$sql = 'SELECT id, pwhash FROM login WHERE username=?';
	$stmt = $link->prepare($sql);
	$stmt->bind_param('s', $un);
	$stmt->execute();
	$stmt->bind_result($uid, $pwhash);

	while ($stmt->fetch()) {} // fill result variables
	 
		if (password_verify($pw, $pwhash)){
		$_SESSION['uid'] = $uid;
		$_SESSION['un'] = $un;
	}
	else {
		echo '<script type="text/javascript">
    alert("illegal username/password combination!");
</script>';
	}
		

}
?>