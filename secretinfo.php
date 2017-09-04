
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<title>Stannerland</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
</head>

<body>



  <?php
	if (!empty($_SESSION['uid'])){
		echo '
		<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="img/user.svg" class="img-responsive" alt="user picture">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">';
				 echo '<h3> Hello '.$_SESSION['un'];
				 echo '</h3>
					</div>
					<div class="profile-usertitle-job">
						From CPH Business Lyngby
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm">Follow</button>
					<button type="button" class="btn btn-danger btn-sm">Message</button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="#">
							<i class="glyphicon glyphicon-home"></i>
							Overview </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-user"></i>
							Account Settings </a>
						</li>
						<li>
							<a href="#" target="_blank">
							<i class="glyphicon glyphicon-ok"></i>
							Tasks </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-flag"></i>
							Help </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
			   <div class=" col-md-9">
			   <h2 class="text-center">Your Wardrobe</h2>
			   <hr>
			   <div class="col-md-12">
				<div class="col-md-3">
			  	 <img src="img/travel-cloth.jpg" height="100%" width="100%"> <br> 
 					 <h3 class="serif-font centerer">Travel Clothes</h2><p class="centerer bought">Bought 2hrs ago.</p>
			   </div>
			   <div class="col-md-3">
			  	 <img src="img/travel-shoes.jpg" height="100%" width="100%"> <br> 
 					 <h3 class="serif-font centerer">Travel Shoes</h2><p class="centerer bought">Bought 4 weeks ago.</p>
			   </div>
			   	  </div> 
			   
			   <h2 class="text-center">Wish list</h2>
			   <hr>
			  <div class="col-md-3">
			  	 <img src="img/travel-cloth.jpg" height="100%" width="100%"> <br> 
 					 <h3 class="serif-font centerer">Travel Clothes</h2><h4 class="serif-font centerer">$24.00</h4>
					 <button class="btn btn-default btn-success">+ Add to cart</button>
			   </div>
			   		<div class="col-md-3">
			   			<img src="img/travel-cloth.jpg" height="100%" width="100%"> <br> 
  							<h3 class="serif-font centerer">Travel Clothes</h2><h4 class="serif-font centerer">$24.00</h4>
					 <button class="btn btn-default btn-success">+ Add to cart</button>
			   </div>
			   		<div class="col-md-3">
			   			<img src="img/travel-cloth.jpg" height="100%" width="100%"> <br> 
  							<h3 class="serif-font centerer">Travel Clothes</h2><h4 class="serif-font centerer">$24.00</h4>
					 <button class="btn btn-default btn-success">+ Add to cart</button>
			  </div>
			   		<div class="col-md-3">
			   			<img src="img/travel-cloth.jpg" height="100%" width="100%"> <br> 
  							<h3 class="serif-font centerer">Travel Clothes</h2><h4 class="serif-font centerer">$24.00</h4>
					 <button class="btn btn-default btn-success">+ Add to cart</button>
			   
              </div>
			  
			  <div class="col-md-12" align="center">
 				 <ul class="pagination">
 					 <li><a href="#">1</a></li>
 					 <li><a href="#">2</a></li>
 					 <li><a href="#">3</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
		
	';	
		
	}
	else {
		echo'
		<body class="loading-bg">
		<div class="col-lg-12 height-middle"><img class="center-block" width="100"  height="100" src="img/warning.svg" alt="warning"/></div>
		
		<div class="col-lg-12"><h1 class="centerer white-h1">You need to be logged in !</h1> <br>
		<button class="btn btn-default btn-danger center-block">Go Back</button>
		</div>
		';
		
}
	
	
?>
  
 




 </div>
</body>
</html>