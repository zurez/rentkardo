<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +91-123456789</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@bookd</a></li>
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
							
							<a href="index"><h2>Bookd</h2></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								
								{{-- <ul class="dropdown-menu">
									<li><a href="#">South Delhi</a></li>
									<li><a href="#">West Delhi</a></li>
								</ul>
							</div> --}}
							
						
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="addbook"><i class="fa fa-user"></i> Add a book</a></li>
								<li><a href="wishlist"><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="requests"><i class="fa fa-crosshairs"></i> Requests</a></li>
								<!-- <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li> -->
								
								@if(Auth::check())
									<li><a href="logout"><i class="fa fa-lock"></i> Logout</a></li>
									@else
										<li><a href="login"><i class="fa fa-lock"></i> Login</a></li>
								@endif
								
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
								<li><a href="/rentkardo/" class="active">Home</a></li>
							
									<li ><a href="account">My Books<i class="fa "></i></a>
								
								
								
                           
								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> 
								<!-- <li><a href="404.html">404</a></li> -->
								<li><a href="contactus">Contact</a></li>
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