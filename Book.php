
<!DOCTYPE html>
<html>
<head>
<title>Booking Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- font files -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<!-- //font files -->
<!-- css files -->
<link href="css/bootstrap1.css" rel='stylesheet' type='text/css' media="all">
<link href="css/wickedpicker.css" rel="stylesheet" type="text/css" media="all">        
<link href="css/style2.css" rel="stylesheet" type="text/css" media="all">
<!-- /css files -->
<!-- js files -->
<script src="js/jquery.min.js"></script>
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
<!-- /js files -->		
</head>
<body>
<div class="header">
	<h1>Book your AndroidLand Package</h1>
</div>
<form action="insert.php" method="Post">
        <div class="banner-top">
				<h2>Book Your Room Today</h2>
				<div class="banner-bottom">
					<div class="bnr-one">
						<div class="bnr-left">
							<p>Check In Date</p>
						</div>
						<div class="bnr-right">
							<input class="date" id="datepicker" name="checkin" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="bnr-one">
						<div class="bnr-left">
							<p>Check Out Date</p>
						</div>
						<div class="bnr-right">
							<input class="date" id="datepicker1" name="checkout" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="bnr-one">
						<div class="bnr-left">
							<p>Check In Time</p>
						</div>
						<div class="bnr-right time-pic">
							<input type="text" id="timepicker" name="timepicker1" class="timepicker form-control"><br>
						</div>
						
						<div class="clearfix"></div>
					</div>
					<div class="bnr-one">
						<div class="bnr-left">
							<p>Check Out Time</p>
						</div>
						<div class="bnr-right time-pic">
							<input type="text" id="timepicker" name="timepicker2" class="timepicker form-control"><br>
						</div>
						<div class="clearfix"></div>
					</div>
					
					<div class="bnr-one">
						<div class="bnr-left">
							<p>Number of People</p>
						</div>
						<div class="bnr-right">
							<select class="selection" name="people">
								<option  class="rm" value="0">0</option>
								<option  class="rm" value="1">1</option>
								<option  class="rm" value="2">2</option>
								<option  class="rm" value="3">3</option>
								<option  class="rm" value="4">4</option>
								<option  class="rm" value="5">5</option>
								<option  class="rm" value="6">6</option>
								<option  class="rm" value="7">7</option>
								<option  class="rm" value="8">8</option>

							</select>
						</div>
						<div class="clearfix"></div>
					</div>
					
					<div class="bnr-one">
						<div class="bnr-left">
							<p>Universes</p>
						</div>
						<div class="bnr-right">
							<select class="selection" name="universe">
								<option value="Select a type">Select a type</option>
								<option value="Roman Empire">Roman Empire</option>
								<option value="WW3">World of Zombies</option>
								<option value="Super Hero">Super Heroes</option>
							</select>
						</div>
						<div class="clearfix"></div>
					</div>

					<div class="bnr-one">
						<div class="bnr-left">
							<p>Package number</p>
						</div>
						<div class="bnr-right">
							<select class="selection" name="package">
								<option  class="rm" value="0">1</option>
								<option  class="rm" value="1">2</option>
								<option  class="rm" value="2">3</option>
								</select>
								</div>
					<div class="bnr-btn">
						<form>
							<input type="submit" value="Book Now">
						</form>
					</div>
				</div>
				</form>
				<!---start-date-piker---->
		<link rel="stylesheet" href="css/jquery-ui.css" />
		<script src="js/jquery-ui.js"></script>
			<script>
				$(function() {
				$( "#datepicker,#datepicker1" ).datepicker();
				});
			</script>
	<!---/End-date-piker---->
</div>
<div class="footer">
	<p>© 2017 AndroidLand</p>
</div>
<!-- js for time-picker -->
<script type="text/javascript" src="js/wickedpicker.js"></script>
<script type="text/javascript">
	$('.timepicker').wickedpicker({twentyFour: false});
	$('.timepicker-two').wickedpicker({twentyFour: true});
</script>
<!-- /js for time-picker -->
</body>
</html>