<?php
 ob_start();
 session_start();
 if( isset($_SESSION['user'])!="" ){
  header("Location: home.php");
 }
 include_once 'dbconnect.php';

 $error = false;

 if ( isset($_POST['btn-signup']) ) {
  
  // clean user inputs to prevent sql injections
  $name = trim($_POST['name']);
  $name = strip_tags($name);
  $name = htmlspecialchars($name);

  $email = trim($_POST['email']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);
  
  $pass = trim($_POST['pass']);
  $pass = strip_tags($pass);
  $pass = htmlspecialchars($pass);

 
  if (empty($name)) {
   $error = true;
   $nameError = "Please enter your full name.";
  } else if (strlen($name) < 3) {
   $error = true;
   $nameError = "Name must have atleat 3 characters.";
  } else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
   $error = true;
   $nameError = "Name must contain alphabets and space.";
  }
  
  //basic email validation
  if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $emailError = "Please enter valid email address.";
  } else {
   // check email exist or not
   $query = "SELECT userEmail FROM users WHERE userEmail='$email'";
   $result = mysql_query($query);
   $count = mysql_num_rows($result);
   if($count!=0){
    $error = true;
    $emailError = "Provided Email is already in use.";
   }
  }
  // password validation
  if (empty($pass)){
   $error = true;
   $passError = "Please enter password.";
  } else if(strlen($pass) < 6) {
   $error = true;
   $passError = "Password must have atleast 6 characters.";
  }
  
  // password encrypt using SHA256();
  $password = hash('sha256', $pass);
  
  // if there's no error, continue to signup
  if( !$error ) {
   
   $query = "INSERT INTO users (userName,userEmail,userPass) VALUES('$name','$email','$pass')";
   $res = mysql_query($query);
    
   if ($res) {
    $errTyp = "success";
    $errMSG = "Successfully registered, you may login now";
    unset($name);
    unset($email);
    unset($pass);
   } else {
    $errTyp = "danger";
    $errMSG = "Something went wrong, try again later..."; 
   } 
    
  }
  
  
 }
?>
<!DOCTYPE html>
<html>

<!-- Head -->
<head>

  <title>Register To AndroidLand</title>

  <!-- Style --> <link rel="stylesheet" href="css/style1.css" type="text/css" media="all" />

  <!-- Web-Fonts -->
    <link href='//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
  <!-- //Web-Fonts -->

</head>
<body>

        
        <div class="container w3layouts agileits">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
    
     <div class="col-md-12">
        
         <div class="form-group">
             <h2 class="">Sign Up</h2>
            </div>
        
         <div class="form-group">
             <hr />
            </div>
            
            <?php
   if ( isset($errMSG) ) {
    
    ?>
    <div class="form-group">
             <div class="alert alert-<?php echo ($errTyp=="success") ? "success" : $errTyp; ?>">
    <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                </div>
             </div>
                <?php
   }
   ?>
            <div class="register w3layouts">
              <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
                <div class= "input1">
                <label>Name</label>
                <input type="text" name="name" placeholder="Full Name" required="" value="<?php echo $name ?>" />
                 <span class="text-danger"><?php echo $nameError; ?></span>
                 </div>
                <div class="input3">
                <label>Email</label>
                <input type="text" name="email" placeholder="Email" required="" value="<?php echo $email ?>" />
                <span class="text-danger"><?php echo $emailError; ?></span>
                </div>
                <div class = "input4"
                <label>Password</label>
                <input type="password" name="pass" placeholder="Password" required="" value="<?php echo $pass ?>"  >
                <span class="text-danger"><?php echo $passError; ?></span>
                </div>
                
                <div class="send-button">
                </div>
                  <input type="submit" value="REGISTER" name="btn-signup">
                </div>
                 <div class="form-group">
             <h4> Already a member? <a href="index.php">Login</a></h4>
            </div>
              </form>
            </div>
          </div>
      
      <div class="footer">
    <p> &copy; 2017 AndroidLand. All Rights Reserved<a href="" target="_blank"></a></p>
  </div>

  <!-- Custom-JavaScript-File-Links -->
    <script src="js/jquery-2.1.4.min.js"></script>
    <!-- pop-up-box -->
      <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
      <script>
        $(document).ready(function() {
          $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
          });
        });
      </script>
    <!--//pop-up-box -->
  <!-- //Custom-JavaScript-File-Links -->

</body>
<!-- //Body -->

</html>
<?php ob_end_flush(); ?>