<?php 
session_start ();
require_once('login.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Products</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<body>
<?php require('menu.php'); ?>
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
					<div class="profile-usertitle-name">
				 <h1 class=" serif-font text-uppercase text-center"> Stannerland
				 </h1>
					</div>
					<div class="profile-usertitle-job">
						Only fancy shit !
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-shopping-cart"></span> Check your cart</button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="#">
							
							<span class="glyphicon glyphicon-star"></span> New trends </a>
						</li>
						<li>
							<a href="#">
							
							Travel shoes </a>
						</li>
						<li>
							<a href="#" target="_blank">
							
							Travel backpacks </a>
						</li>
						<li>
							<a href="#">
							
							Travel clothes </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
			   <div class=" col-md-9">
			   <h2 class="text-center">New trends</h2>
			   <hr>
			   <div class="col-md-12">
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
              
                 
			   	  </div> 
			   <div class="col-md-12"><br></div>
			   
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
</body>
</html>