<?php
session_start();
include "database_connection.php";
$required = "";
$alrt_s = "You have successfully registered.";



//form validation which will not allow users to submit without filling input field
if(isset($_POST['register'])){
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $user_name = $_POST['uname'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $comfirm_password = $_POST['cpass'];
    $phone_number = $_POST['pnumber'];
    $referral_id = $_POST['refer'];

    if($first_name == ""){
        $required = "Firstname is required";
    }
    if($last_name == ""){
        $required = "Lastname is required";
    }
    if($user_name == ""){
        $required = "Username is required";
    }
    if($email == ""){
        $required = "Email is required";
    }
    if($password == ""){
        $required = "Password is required";
    }
    if($comfirm_password == ""){
        $required = "Comfirmpassword is required";
    }
    if($phone_number == ""){
        $required = "Phone number is required";
    }
    if($password != $comfirm_password){
        $required = "Your password does not match.";
    }



//Validate phone number for registration.

if($required == ""){
$password_valid = "SELECT * FROM register_info WHERE phone_number = '$phone_number' LIMIT 1"; 
$insert_method = mysqli_query($data_connection, $password_valid);
$number_rows = mysqli_num_rows($insert_method);

if($number_rows > 0){
    $required = "Phone number already exist.";
}


// Validate email for registration.

$email_valid = "SELECT *  FROM register_info WHERE email = '$email' LIMIT 1";
$insert_method = mysqli_query($data_connection, $email_valid);
$number_rows = mysqli_num_rows($insert_method);

if($number_rows > 0){
    $required = "Email already exist.";
}

// Validate username for registration.

$email_valid = "SELECT *  FROM register_info WHERE user_name = '$user_name' LIMIT 1";
$insert_method = mysqli_query($data_connection, $email_valid);
$number_rows = mysqli_num_rows($insert_method);

if($number_rows > 0){
    $required = "Username already exist.";
}


// Inserting data to database 

if($required == ""){
    $data_insert = "INSERT INTO register_info (first_name, last_name, user_name, phone_number, email, password, comfirm_password, referral_id) VALUES ('$first_name', '$last_name', '$user_name', '$phone_number', '$email', '$password', '$comfirm_password', '$referral_id')";
    $insert_method = mysqli_query($data_connection, $data_insert);
    $alrt_s = "You have successfully registered.";


    header("Location: login.php");
    exit;
}

}

}




?>

<!doctype html>
<html lang="en">
    
<!-- Mirrored from subandgain.com/register.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 14:59:05 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <base  >
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Register - SubAndGain</title>
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
    <body class="log-reg-back">			<div class="container log-reg-pad">
				<div class="row">
					<div class="col-md-12">
					    <center><a href="index.html"><img src="img/subandgain-logo.jpg"/></a></center>
      			<div class="wrap-inside">
                   <div class="container-fluid">
                     	<div class="card shadow form-box-reg mb-4">
						<div class="contact-bottom-text text-center">
							<h2>Register Here!</h2>
							
                <?php
                        if($required != ""){
                            echo "<div class = 'alert alert-danger'>" . $required . "</div>";
                        }else{
                            // echo "<div class = 'alert alert-success'>". $alrt_s ."</div>";
                        }

                        
                  ?>
						</div>
                       
						<form id="contact-form" method="post">
														<div class="row">
								<div class="col-md-6 col-sm-6">
									<input type="text"  placeholder="FirstName" name="fname" >
								</div>
								<div class="col-md-6 col-sm-6">
									<input type="text"  placeholder="LastName" name="lname" >
								</div>
								<div class="col-md-6 col-sm-6">
									<input type="text"  placeholder="Username" name="uname" >
								</div>
								<div class="col-md-6 col-sm-6">
									<input type="number" placeholder="Phone Number" name="pnumber" >
								</div>
								<div class="col-md-6 col-sm-6">
									<input type="email" placeholder="Email" name="email" >
								</div>
								<div class="col-md-6 col-sm-6">
									<input type="password"  placeholder="Password" name="pass" >
								</div>
								<div class="col-md-6 col-sm-6">
									<input type="password"  placeholder="Confirm Password" name="cpass" >
								</div>
								                           <div class="col-md-6 col-sm-6">
									<input type="text" placeholder="Referral Id(Leave empty if no referral)" value="" name="refer" readonly>
								</div>

								<div class="col-md-12 text-center">
									<button class="btn" type="submit" name="register">Register</button>
								</div>
								<div class="col-md-12 text-center"><br/>
									<p> <strong>Already Registered? &nbsp<a href="login.html">Login Here!</a></strong></p>
								</div>
							</div>
						</form>
						
					</div>
				</div>				
			</div>
	</div>
</div>
</div>

		
		
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

<!-- Mirrored from subandgain.com/register.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 14:59:27 GMT -->
</html>
