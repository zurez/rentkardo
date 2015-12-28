<!DOCTYPE html>
<html lang="en" ng-app="book">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A book renting platform">
    <meta name="author" content="zurez">
    <title>Home | Rent-Kardo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <script type="text/javascript" src="js/angular.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
    <style type="text/css">
    .a{
    	outline: 0 !important;
    	border: none !important;
    }
    </style>
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +91-123456789</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@rentkardo.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index"><h2>Rent Kardo</h2></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
								South Delhi
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">South Delhi</a></li>
									<li><a href="#">West Delhi</a></li>
								</ul>
							</div>
							
						
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Requests</a></li>
								<!-- <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li> -->
								<li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Browse<i class="fa fa-angle-down"></i></a>
                                 <!--    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Books</a></li>
										<li><a href="product-details.html">Product Details</a></li> 
										<li><a href="checkout.html">Checkout</a></li> 
										<li><a href="cart.html">Cart</a></li> 
										<li><a href="login.html">Login</a></li> 
                                    </ul> -->
                                </li> 
								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> 
								<!-- <li><a href="404.html">404</a></li> -->
								<li><a href="addbook">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	 
	 <div id="contact-page" class="container" ng-controller= "BookController">
    	<div class="bg">
	    <!-- 	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Contact <strong>Us</strong></h2>    			    				    				
					<div id="gmap" class="contact-map">
					</div>
				</div>			 		
			</div>   -->  	
    		<div class="row">  	
	    		<div class="col-sm-12">
	    			
	    				<h2 class="title text-center">Add a book</h2>
	    				<input ng-model ="bookname" placeholder="Enter book name here. Be precise"type="text" class="form-control"> <br><button ng-click="populate()" class="btn btn-default">@{{buttonText}}</button>
	    		
	    			</div>
	    		</div>
	    		</div>
	    		<div class="row"><br></div>
	    		<div class="row">
	    			<div class="col-sm-7" ng-hide = "c<2">
		    			{{Form::open(array('action'=>"BookController@create",'class'=>"form-horizontal"))}}
		    			<div class="form-group">
		    				 <div class="col-sm-2"><label class="control-label" for="title">Title:</label> </div>
		    				 <div class="col-sm-10"><input type="text" name="title" value=@{{title}} class="a form-control" ng-disabled="d>2"></div>
		    			</div>
		    			<div class="form-group">
		    				 <div class="col-sm-2"><label class="control-label" for="author">Author:</label> </div>
		    				 <div class="col-sm-10"><input type="text" name="author" value=@{{author}} class="a form-control" ng-disabled="d>2"></div>
		    			</div>
		    			<div class="form-group">
		    				 <div class="col-sm-2"><label class="control-label" for="genre">Genre:</label> </div>
		    				 <div class="col-sm-10"><input type="text" name="genre" value=@{{genre}} class="form-control"></div>
		    			</div>
		    			<div class="form-group">
		    				 <div class="col-sm-2"><label class="control-label" for="description">Description:</label> </div>
		    				 <div class="col-sm-10"><p class="a form-control">@{{description}} > </p></div>
		    			</div>
		    			<input type="hidden" value=@{{description}} name="description">
		    			<div class="form-group">
		    				 <div class="col-sm-2"><label class="control-label" for="publisher">Publisher:</label> </div>
		    				 <div class="col-sm-10"><input type="text" name="publisher" value=@{{publisher}} class="a form-control" ng-disabled="d>2"></div>
		    			</div>
		    			<div class="form-group">
		    				 <div class="col-sm-2"><label class="control-label" for="rating">Rating:</label> </div>
		    				 <div class="col-sm-10"><input type="text" name="rating" value=@{{rating}} class="a form-control" ng-disabled="d>2"></div>
		    			</div>
		    			<input type="hidden" name ="image" value=@{{image}}>
		    			<div class="form-group">
		    				 <div class="col-sm-2"><label class="control-label" for="pubdate">Publish Date:</label> </div>
		    				 <div class="col-sm-10"><input type="text" name="pubdate" value=@{{pubdate}} class="a form-control"></div>
		    			</div>
		    			<div class="form-group">
		    				 <div class="col-sm-2"><label class="control-label" for="cond">Condition of Book:</label> </div>
		    				 <div class="col-sm-10"><select type="select" name="cond" class="form-control">
		    				 	<option value="1">Excellent</option>
		    				 	<option value="2">Good</option>
		    				 	<option value="3">Fair</option>
		    				 	<option value="4">Not So Good</option>
		    				 	</select>
		    				 </div>

		    			</div>
		    			<div class="form-group">
		    				 <div class="col-sm-2"><label class="control-label" for="loc">Your Location:</label> </div>
		    				 <div class="col-sm-10"><select type="select" name="loc" class="form-control">
		    				 	<option value="1">North Delhi</option>
		    				 	<option value="2">South Delhi</option>
		    				 	<option value="3">East Delhi</option>
		    				 	<option value="4">West Delhi</option>
		    				 	<option value="5">Central Delhi</option>
		    				 	</select>
		    				 </div>

		    			</div>
		    			<div class="form-group">
		    				 <div class="col-sm-2"><label class="control-label" for="lang">Language of Book:</label> </div>
		    				 <div class="col-sm-10"><select type="select" name="lang" class="form-control">
		    				 	<option value="1">English</option>
		    				 	<option value="2">Hindi</option>
		    			
		    				 	</select>
		    				 </div>

		    			</div>
		    			<div class="form-group">
		    				 <div class="col-sm-2"><label class="control-label" for="purpose">Purpose:</label> </div>
		    				 <div class="col-sm-10"><select type="select" name="purpose" class="form-control">
		    				 	<option value="1">Rent</option>
		    				 	<option value="2">Sell</option>
		    				 	<option value="3">Both</option>
		    		
		    				 	</select>
		    				 </div>

		    			</div>
		    			<div class="form-group">
		    				 <div class="col-sm-2"><label class="control-label" for="rate">Quantity:</label> </div>
		    				 <div class="col-sm-10"><input type="text" name="quantity" value="1" class="form-control" ng-disabled="d>2"></div>
		    			</div>
		    			<div class="form-group">
		    				 <div class="col-sm-2"><label class="control-label" for="rate">Expected Rate:</label> </div>
		    				 <div class="col-sm-10"><input type="text" name="rate" placeholder="In Rupees" class="form-control"></div>
		    			</div>
		    			<div class="form-group">
		    				 <div class="col-sm-2"><label class="control-label" for="rate">Cover:</label> </div>
		    				 <div class="col-sm-10"><img ng-src=@{{image}}></div>
		    			</div>
		    			<div class="form-group col-sm-offset-2 "><input ng-click= "sub()"type="submit" value=" Add the Book" class="btn btn-success"> </div>
		    			
		    			{{Form::close()}}
			    	
			    			
			    		

	    			</div>
	    			
	    		</div>
	    		<div class="row">

	    			
	    		</div>
	    		
	    			</div> 
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>rent</span>-kardo</h2>
							<p>Rent a book service</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe1.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>India 2020</p>
								<h2>24 DEC 2015</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe2.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2015</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe3.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2015</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe4.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Game of Thrones</p>
								<h2>24 DEC 2015</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="images/home/map.png" alt="" />
							<p>University of Delhi , India</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<!-- <li><a href="#">Order Status</a></li> -->
								<li><a href="#">Change Location</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
					
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privecy Policy</a></li>
								<!-- <li><a href="#">Refund Policy</a></li> -->
								<!-- <li><a href="#">Billing System</a></li> -->
								<li><a href="#">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Rent Kardo</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<!-- <li><a href="#">Store Location</a></li> -->
								<!-- <li><a href="#">Affillate Program</a></li> -->
								<li><a href="#">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Rent Kardo</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2015 Rent Kardo All rights reserved.</p>
					<!-- <p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p> -->
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	
	

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- // <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script> -->
    <!-- // <script type="text/javascript" src="js/gmaps.js"></script> -->
	<!-- // <script src="js/contact.js"></script> -->
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>