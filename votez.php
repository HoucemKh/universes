<!DOCTYPE html>
<html lang="en">
<head>
<title>Vote Now</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- gallery -->
<link rel="stylesheet" href="css/lightGallery.css" type="text/css" media="all" />
<!-- //gallery -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 

<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Jura:300,400,500,600" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/nav.css">
</head>
	
<body>
<input type="checkbox" id="sidebartoggler" name="" value=""></input> 
	<!-- header -->
		<!-- <div class="inv_navigation"> -->
			<div class="wrapper">   
					<label for="sidebartoggler" class="nav-toggle" style="z-index: 999;">☰</label>
					<aside class="sidebar" style="z-index: 999;">
	        <nav class="main-nav">
	            <ul class="nav">
	                <li><a href="home.php">Home</a></li>
	                <li><a href="superheros.html">Super Heroes</a></li>
	                <li><a href="Roman.html">Roman Empire</a></li>
	                <li><a href="Zombie.html">World of Zombies</a></li>
	                <li><a href="#about">About</a></li>
	                 <li><a href="votez.php">Vote !!</a></li>
	                <li><a href="pacakges.html">Packages</a></li>
	                <ul class="nav navbar-nav navbar-right"></ul>
	                </ul>
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
     <span class="glyphicon glyphicon-user"></span>&nbsp; Good Morning Houcem &nbsp;<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
              </ul>
            </li>
          </ul
	            </ul>
	        </nav>
	 </aside> 
	</div>
		<!-- </div> -->
<!-- //header -->
<!-- banner -->
	<div class="banner">
			<!--Slider-->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="slider-img">
							<img src="images/superhero.jpg" class="img-responsive" alt="Fantasy World">
						</div>
						<div class="slider-info">
							
							<h4>Super Heroes </h4>
							  <p>Throw yourself into a fantasy world version of the DC universe.</p>
							<a href="#about" class="hvr-shutter-in-horizontal scroll">Read More</a>
						</div>
					</li>
					<li>
						<div class="slider-img">
							<img src="images/roman.jpg" class="img-responsive" alt="Fantasy World">
						</div>
						<div class="slider-info">
						 
							<h4>Rome City</h4>
							   <p>Reinvention of history is a component of fantasy</p>
					<a href="#about" class="hvr-shutter-in-horizontal scroll">Read More</a>
						</div>
					</li>
					<li>
						<div class="slider-img">
							<img src="images/zombie.jpeg" class="img-responsive" alt="Fantasy World">
						</div>
						<div class="slider-info">
							
							<h4>Zombie Apocalypse</h4>
						   <p>"Everything they've built will fall! And from the ashes of their world, we'll build a better one!"</p>
						<a href="#about" class="hvr-shutter-in-horizontal scroll">Read More</a>
						</div>
					</li>


				</ul>
				
			</div>
			<div class="clearfix"></div>
		</div>
		<!--//Slider-->
	</div>
<!-- //banner -->
<!-- Votez -->
	<div class="about" id="The next universe">
		<div class="container">
			<div class="col-md-4 agileits_about_left">
				<h3 class="invl_head">&nbsp;Hi Houcem</h3>
				<p class="invls_head_para">Propose here :)</p>
			</div>
			<form action="votes.php" method="Post">
			<div class="agileits_banner_bottom_grids">
				 <textarea rows="4" cols="50" name="text"></textarea> 
			</div>	 
			<h2> Here are some potential future universes of our companies. Choose one of them:</h2>
							<select class="selection" name="universe">
								<option value="Select a type">Select a Universe</option>
								<option value="Space">Space</option>
								<option value="Jungle">Jungle</option>
								<option value="CowBoys">Cowboys</option>
								<option value="olympics">Olympics</option>
								<option value="Pirates">Pirates</option>
								<option value="under the sea">Under the sea</option>
							</select>
							<button type="submit" class="btn-primary" name="btn-login">Send</button></div>
						
						<div class="clearfix"></div>
					</div>
			</form>
		</div>
	</div>
<!-- footer -->
	<div class="invl_footer">
		<div class="container">
			
			<div class="invls_footer_grids">
				
				<div class="invls_footer_grid">
					<div class="col-md-6 invls_footer_grid_left">
						<div class="invls_footer_grid_leftl">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</div>
						<div class="invls_footer_grid_leftr">
							<h4><a href="https://goo.gl/maps/pQfaQ2uLMA12">Location</a></h4>
							<p>Rue De La Coline, Hotel Piment Banane, Grand Baie.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-6 invls_footer_grid_left">
						<div class="invls_footer_grid_leftl">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<div class="invls_footer_grid_leftr">
							<h4>Email</h4>
							<a href="mailto:info@example.com">faouzijedidi1@gmail.com</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-6 invls_footer_grid_left">
						<div class="invls_footer_grid_leftl">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</div>
						<div class="invls_footer_grid_leftr">
							<h4>Call Us</h4>
							<p>+230 58239077</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="invl_footer_pos">
			<p>© 2017 AndroidLand. All Rights Reserved | Designed by <a href="#">Invictus</a></p>
		</div>
	</div>
<!-- //footer -->

<!--banner Slider starts Here-->
<script src="js/jquery-2.2.3.min.js"></script> 
						<script src="js/responsiveslides.min.js"></script>
							<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider3").responsiveSlides({
									auto: true,
									pager:false,
									nav:true,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>
							 <!-- js -->
<!-- start-smoth-scrolling -->
	<script src="js/lightGallery.js"></script>
	<script>
    	 $(document).ready(function() {
			$("#lightGallery").lightGallery({
				mode:"fade",
				speed:800,
				caption:true,
				desc:true,
				mobileSrc:true
			});
		});
    </script>

<script src="js/owl.carousel.js"></script> 
<link href="css/owl.theme.css" rel="stylesheet">
 <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
<script>
$(document).ready(function() { 
	$("#owl-demo").owlCarousel({
 
		autoPlay: 3000, //Set AutoPlay to 3 seconds
		  autoPlay : true,
		   navigation :true,

		items : 4,
		itemsDesktop : [640,5],
		itemsDesktopSmall : [414,4]
 
	});
	
}); 
</script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- //js -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>