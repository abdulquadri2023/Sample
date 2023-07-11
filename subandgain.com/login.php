<?php
session_start();

include "database_connection.php";

$validate = "";


if(isset($_POST['login'])){

    $username_userphone = $_POST['unamepname'];
    $password = $_POST['password'];


    // Login validation.
    if($username_userphone == ""){
        $validate = "Username or phone number is required.";
    }

    if($password == ""){
        $validate = "Password is required.";
    }

    // Login check data from registration table
    if($validate == ""){

        $check = "SELECT * FROM register_info WHERE (user_name = '$username_userphone' AND password = '$password') OR (phone_number = '$username_userphone' AND password = '$password') LIMIT 1";
        $insert_method = mysqli_query($data_connection, $check);
        $number_rows = mysqli_num_rows($insert_method);
    

    // Login direction to secure pages

    

   if($number_rows > 0){

    $_SESSION['log'] = $username_userphone;
    
   header("Location: secure_pages/");
    die();

}else{
    $validate = "Invalid login details";
}

}

}


?>

<!doctype html>
<html lang="en">
    
<!-- Mirrored from subandgain.com/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 14:59:27 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <base  >
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Login - SubAndGain</title>
         <meta name="description" content="SubAndGain Telecommunication gives the best and cheapest mobile data, cable tv subscription, electricity, airtime vtu and education bills. It makes life easier by giving out a unlimited discount for any transaction made on SubAndGain. "/>
    <meta name="keywords" content="Data,Airtime VTU,DSTV,GOTV,SMILE,STARTIMES,WAEC,NECO,Electricity,Prepaid,Postpaid" />
    <meta name="author" content="SUBANDGAIN" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:title" content="SubAndGain Telecommunication. Affordable And Reliable!">
        <meta property="og:image" content="img/banner.jpg">
        <meta property="og:description" content="SubAndGain Telecommunication provides cheapest mobile data,cable tv subscription, electricity, education bills and Airtime VTU">
        <meta name="twitter:card" content="summary_large_image">

        <link rel="icon" href="img/sag.html">
        <!-- Place favicon.ico in the root directory -->
		
		<!-- all css here -->
        <link rel="stylesheet" href="../www.subandgain.com/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-grid.css">
        <link rel="stylesheet" href="css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="css/bootstrap-reboot.css">
        <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/pe-icon-7-stroke.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/meanmenu.css">
        <link rel="stylesheet" href="../www.subandgain.com/styles.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/animation.css">
       <!-- Meta Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  '../connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1040679970153764');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=1040679970153764&amp;ev=PageView&amp;noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
    </head>
    <body class="log-reg-back">
	
			<div class="container log-reg-pad">
				<div class="row">
					<div class="col-md-12">
					    <center><a href="index.html"><img src="img/subandgain-logo.jpg"/></a></center>
      			<div class="wrap-inside">
                   <div class="container-fluid">
                     	<div class="card shadow form-box mb-4">
						<div class="contact-bottom-text text-center">
							<h2>Login Here!</h2> 
							
						</div>
					

						<form id="contact-form" class="text-center" method="post">
                        <?php
                                if($validate != ""){
                                echo "<div class = 'alert alert-danger'>" . $validate . "</div>";
                                }

                                ?>
								<div class="row">

                                    
								<div class="col-md-12 col-sm-12">
									<input type="text"  placeholder="Username/Phone Number" name="unamepname" >
								</div>
								<div class="col-md-12 col-sm-12">
									<input type="password" placeholder="Password" name="password" >
								</div>
								<div class="col-md-12 text-center">
									<button class="btn" type="submit" name="login">Login</button>
								</div>
								<div class="col-md-12 text-center"><br/>
									<p> <strong><a href="forgot_pass.html">Forgot Password</a></strong></p>
									<p> <strong>Not yet a member? &nbsp<a href="register.html">Register Here!</a></strong></p>
								</div>
							</div>
						</form>
					
						
					</div>
				</div>
			</div>
	</div>
				</div>
							
			</div>
		
	
		<!-- footer start -->
		   <script>

function toggleElement(id,uid)
{
    if(document.getElementById(id).style.display == 'none')
    {
        document.getElementById(id).style.display = '';
        document.getElementById(uid).innerHTML = 
    " <i class='fa fa-minus'></i> ";
    }
    else
    {
        document.getElementById(id).style.display = 'none';
        document.getElementById(uid).innerHTML = 
    " <i class='fa fa-plus'></i> ";
    }
}


</script>
		<!-- all js here -->
		 <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
         <script src="js/bootstrap.js"></script>
          <script src="js/bootstrap.bundle.js"></script>
          <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.meanmenu.js"></script>
        <script src="js/jquery.mixitup.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/614201a925797d7a89ff1f88/1ffktd0dd';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    </body>

<!-- Mirrored from subandgain.com/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 14:59:27 GMT -->
</html>
