
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<body>
<?php
	$fn = basename($_SERVER['PHP_SELF']);
?>
<nav>
<nav class="navbar navbar-default navbar-fixed-top"><body style="padding-top: 70px">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      
      <a class="navbar-brand serif-font header-text text-uppercase" href="index.php"> Stannerland</a></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="topFixedNavbar1">
     
     
      <ul class="nav navbar-nav navbar-right">
      
         <li><a class="menu<?= ($fn=='index.php')?' active':'' ?>" href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
          <li><a class="menu<?= ($fn=='products.php')?' active':'' ?>" href="products.php"><span class="glyphicon glyphicon-shopping-cart"></span> Products</a></li>
                 
<?php 
if (isset($_SESSION['uid']) && $_SESSION['un'] == true) {
   echo '
   <li><a class="menu" href="profile.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li> 
   <li><a class="btn-danger btn-block" href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
   <li class="dropdown mint hide"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> SignUp/SignIn<span class="caret"></span></a>
   ';
} else {
   echo '<li><a class="hide btn-danger btn-block" href="logout.php">Logout</a></li>
   <li class="dropdown mint"><a href="#" id="white" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> SignUp/SignIn<span class="caret"></span></a>
   ';
}
// if logged in hide drop down login if not hide logout btn
?>


        
          <ul class="dropdown-menu " role="menu">
                      <li class="divider login-padding"></li>

  <img class="center-block" src="img/team.svg" width="50%" height="auto">
   <form class="form-group-lg login-padding" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
	<fieldset>
    	<legend>Login</legend>
    	<input class="form-control small-space" name="un" type="text" placeholder="Username" required />
    	<input class="form-control" name="pw" type="password" placeholder="Password"  required/><hr>
    	<input class="btn btn-info" type="submit" name="submit" value="Login" />
        <a href="adduser.php" class="centerer btn btn-default text-center"> Are you a new user ?</a>
        <br>
	</fieldset>
</form>

          </ul>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>

	<ul>
	</ul>
</nav>

</body>
</head>
</html>