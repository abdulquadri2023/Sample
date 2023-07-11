<?php
session_start();
include "../database_connection.php";
$validate = $success = "";


if(isset($_SESSION['log'])){
    
$username_userphone = $_SESSION['log'];

    $update = "SELECT * FROM register_info WHERE user_name = '$username_userphone' OR phone_number = '$username_userphone' LIMIT 1";
    $insert_data = mysqli_query($data_connection, $update);
    $number_rows = mysqli_num_rows($insert_data);

    if($number_rows > 0){

    $fetch_details = mysqli_fetch_assoc($insert_data);
    
    $update_first_name = $fetch_details['first_name'];
    $update_last_name = $fetch_details['last_name'];                                        
    $update_email = $fetch_details['email'];
    $update_phone_number = $fetch_details['phone_number'];

}else{
   header("location: ../login.php");
    die();
  }
  
  }else{
  
    header("location: ../login.php");
  die();
  }




if(isset($_POST['update-profile'])){
    $update_first_name = $_POST['firstname'];
    $update_last_name = $_POST['lastname'];
   


    if($update_first_name == ""){
        $validate = "Input your firstname";
    }

    if($update_last_name == ""){
    $validate = "Input your lastname";
}

if($validate == ""){
    $update = "UPDATE register_info SET first_name = '$update_first_name', last_name = '$update_last_name' WHERE email = '$update_email'";
    $insert_data = mysqli_query($data_connection, $update);

    $success = "Your information has been updated.";
    header("Location: ../login.php");

}else{
}

}




?>






<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Profile - SubAndGain</title>
         <meta name="description" content="SubAndGain Telecommunication gives the best and cheapest mobile data, cable tv subscription, electricity, airtime vtu and education bills. It makes life easier by giving out a certain dicount for any transaction made on the SubAndGain. "/>
    <meta name="keywords" content="Data,Airtime VTU,DSTV,GOTV,SMILE,STARTIMES,WAEC,NECO,Electricity,Prepaid,Postpaid" />
    <meta name="author" content="SUBANDGAIN" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="../images/favicon.png">
        <!-- Place favicon.ico in the root directory -->
		<!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <!-- Our Custom CSS -->
    

    <!-- Font Awesome JS -->
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/style3.css">
    
		<!-- all css here -->
         <link rel="stylesheet" href="css/bootstrap.min.css">
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
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/animation.css">
        
       <!-- Font Awesome JS -->
    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=u6dVESxt2rAfXULfGFJcVyjPb8Q-vPPrpkI6thHa9pFirBtRz2T3yERBRS5VLkwRrtQSwQYQy68wOptmyk1uzg" charset="UTF-8"></script><style>
       
        .mCSB_dragger_bar{
            width: 10px !important;;
        }
    </style>
    </head>
    <body>
     

        <!-- Add your site or application content here -->
		<!-- header start -->
		
		<header>
			<nav id="sidebar">
            <div id="dismiss">
                <i class="fas fa-arrow-left"></i>
            </div>

            <div class="sidebar-header">
                <span>SUBANDGAIN</span>
            </div>

            <ul class="list-unstyled components">
                <p class="navp" style="text-align: center;">
                    <img src="../img/profile.png" alt="" /><br/>
                                Hi,<br/>
                        <b> <?php echo $update_first_name; ?></b>
                            </p>
                <li class="active">
                 <a class="nava" href="dashboard.php">  <i class="fa fa-home"></i> Dashboard</a>
                 </li>
                 <li> 
                    <a class="nava" href="#homeSubmenu" data-toggle="collapse" aria-expanded="false"><i class="fa fa-wallet"></i> Wallet &nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-down"> </i> </a>
                    <ul class="collapse list-unstyled listdrop" id="homeSubmenu">
                        <li>
                            <a class="nava" href="fund_wallet.php"> 
                               
                            	Fund Wallet

                            </a>
                        </li>
                        <li>
                            <a class="nava" href="wallet_history.php">Wallet History</a>
                        </li>
                        <li>
                            <a class="nava" href="wallet_summary.php">Wallet Summary </a>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    <a class="nava" href="buy_data.php">  <i class="fa fa-mobile"></i> Buy Data</a>
                    </li>
                    <li>
                    <a class="nava" href="airtime_vtu.php"><i class="fa fa-folder"></i> Airtime VTU </a>
                    </li>
                    <li>
                    <a class="nava" href="bills.php"> <i class="fa fa-tv"></i> Pay Bills </a>
                    </li>
                    <li>
                    <a class="nava" href="electricity.php"> <i class="fa fa-plug"></i> Electricity </a>
                    </li>
                 <li>
                    <a class="nava" href="education.php"> <i class="fa fa-book-open"></i> Education </a>
                    </li>
                      <li>
                    <a class="nava" href="epin.php"><i class="fa fa-folder"></i> Recharge Card Printing </a>
                    </li>
                  <!--  <li>
                    <a class="nava" href="airtime_to_cash.php"><i class="fa fa-exchange-alt"></i> Airtime2Cash </a>
                    </li> -->
                    <li>
                    <a class="nava" href="transaction.php"> <i class="fa fa-history"></i> Transactions </a>
                    </li>
                     <li>
                    <a class="nava" href="pricing.php"> <i class="fa fa-money-bill"></i> Pricing </a>
                    </li>
                    
                        <li>
                    <a class="nava" href="transfer.php"> <i class="fa fa-level-up-alt"></i> Transfer </a>
                    </li>
                    <li>
                    <a class="nava" href="withdraw.php"> <i class="fa fa-coins"></i> Withdrawal </a>
                    </li>
                    <li>
                    <a class="nava" href="membership.php"> <i class="fa fa-level-up-alt"></i> Upgrade Account </a>
                    </li>
                     <li>
                    <a class="nava" href="#leaderboard" data-toggle="collapse" aria-expanded="false"><i class="fa fa-trophy"></i> Leaderboard &nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-down"> </i></a>
                    <ul class="collapse list-unstyled listdrop" id="leaderboard">
                    <li>
                    <a class="nava" href="leaderboard.php">  How It Works </a>
                    </li>
                    <li>
                    <a class="nava" href="my_leaderboard.php">  My Leaderboard </a>
                    </li>
                </ul>
            </li>
             <li>
                    <a class="nava" href="api_key.php"> <i class="fa fa-key"></i> API Key </a>
                    </li>
                     <li>
                    <a class="nava" href="../APIDocs.php">  <i class="fa fa-book-open"></i> API Docs </a>
                    </li>
                    <li>
                    <a class="nava" href="faqs.php"> <i class="fa fa-question-circle" aria-hidden="true"></i> FAQs </a>
                    </li>
                    <li>
                    <a class="nava" href="#pageSubmenu" data-toggle="collapse" aria-expanded="false"><i class="fa fa-user"></i> Profile    &nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-down"> </i></a>
                    <ul class="collapse list-unstyled listdrop" id="pageSubmenu">
                        <li>
                            <a class="nava" href="profile.php">Edit Profile</a>
                        </li>
                        <li>
                            <a class="nava" href="change_password.php">Change Password</a>
                        </li>
                    </ul>
                </li>
               
                <li style="margin-bottom: 28px;">
                    <a class="nava" href="logout.php"> <i class="fa fa-power-off"> </i> Logout </a>
                    </li>
                
            </ul>

            
        </nav>
		</header>

		  <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="shift">
                        <i class="fas fa-align-left"></i>
                        <span>MENU</span>
                    </button>
                    <a href="logout.php">
                    	<i class="fa fa-power-off" style="color: grey;"> </i>
                    </a>


                </div>
            </nav>
		<!-- header end --><!-- welcome -->
		<div class="row">
			<div class="col-md-12 page-heading">
   <div class="breadcrumb-title text-center">
							<h4>Profile</h4>
							<div class="breadcrumb-menu">
							<ul>
								<li><a href="dashboard.php">My Account</a></li>
								<li>profile</li>
							</ul>
						</div>
			</div>
		</div>
	</div>
		<!-- welcome end -->
		<!-- dashbord home -->
    <div class="container">
      <div class="row">
      	<div class="col-md-12">
      		<div class="wrapper-content">
      			<div class="wrap-inside">
                   <div class="container-fluid">
                     	<div class="card shadow form-box mb-4">
   		<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
   			<h6 class="m-0 font-weight-bold">Profile </h6>
   		</div>

   		<form method="post">
            <?php 
            if($validate != ""){
                echo "<div class = 'alert alert-danger'> $validate </div>";
            }else{
               // echo "<div class = 'alert alert-success'> $success </div>";
            }
            ?>
   			<div class="card-body">
          
           <div class="input-group mb-3">
           <input type="text" name="firstname" class="form-control" value="<?php echo $update_first_name; ?>" >
         </div>
         <div class="input-group mb-3">
           <input type="text" name="lastname" class="form-control" value="<?php echo $update_last_name; ?>" >
         </div>
          <div class="input-group mb-3">
         <input type="text" name= "userphone" class="form-control" value="<?php echo $update_phone_number; ?>" readonly>
         </div>
         <div class="input-group mb-3">
           <input type="email" name = "email"  class="form-control" value="<?php echo $update_email; ?>" readonly>
         </div>
           <input type="submit" class="btnn btn-primary" name="update-profile" value="Update">
           
       </div>
   </form>

   <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold">Bank Details </h6>
      </div>
      <form method="post">
        <div class="card-body">
          
           <div class="input-group mb-3">
            <select name="bank" class="form-control" required="">
               <option value="">Choose Bank</option>
                <option value="Access Bank">Access Bank</option>
                <option value="Access Bank Diamond">Access Bank (Diamond)</option>
                <option value="AlatbyWema">ALAT by WEMA</option>
                <option value="Aso Savings And Loan">ASO Savings and Loans</option>
                <option value="Citibank Nig">Citibank Nigeria</option>
                <option value="Ecobank Nig">Ecobank Nigeria</option>
                <option value="Ekondo Microfinance Bank">Ekondo Microfinance Bank</option>
                <option value="Enterprise Bank">Enterprise Bank</option>
                <option value="Fidelity Bank">Fidelity Bank</option>
                <option value="First Bank">First Bank of Nigeria</option>
                <option value="FCMB">First City Monument Bank</option>
                <option value="GTB">Guaranty Trust Bank</option>
                <option value="Heritage Bank">Heritage Bank</option>
                <option value="Jaiz Bank">Jaiz Bank</option>
                <option value="Keystone Bank">Keystone Bank</option>
                <option value="Kuda Bank">Kuda Bank</option>
                <option value="MainStreet Bank">MainStreet Bank</option>
                <option value="Parallex Bank">Parallex Bank</option>
                <option value="Polaris Bank">Polaris Bank</option>
                <option value="Providus Bank">Providus Bank</option>
                <option value="Stanbic Bank">Stanbic IBTC Bank</option>
                <option value="Standard Chartered Bank">Standard Chartered Bank</option>
                <option value="Sterling Bank">Sterling Bank</option>
                <option value="Suntrust">Suntrust Bank</option>
                <option value="Union Bank">Union Bank of Nigeria</option>
                <option value="United Bank">United Bank For Africa</option>
                <option value="Unity Bank">Unity Bank</option>
                <option value="Wema Bank">Wema Bank</option>
                <option value="Zenith Bank">Zenith Bank</option>
             
               </select>
         </div>
           <div class="input-group mb-3">
           <input type="text" name="acname" class="form-control" value="Sulyman abdulquadri " placeholder="Account Name" required="">
         </div>
         <div class="input-group mb-3">
           <input type="text" name="acno" class="form-control" value="0158861156" placeholder="Account Number" required="">
         </div>
           <input type="submit" class="btnn btn-primary" name="upbank" value="Update">
           
       </div>
   </form>



                   </div>
               </div>

      			</div>
      		</div>
      	</div>
      </div>
  </div>
  
  <footer>
			<div class="footer-bottom-area">
				<div class="container">
					<div class="social-icons text-center">
						<label>Find Us:</label>
						<a href="https://facebook.com/subandgain"><i class="fa fa-facebook"></i></a>
						<a href="https://twitter.com/@subandgain"><i class="fa fa-twitter"></i></a>
						
					</div>
					<div class="copyright text-center">
						<p>SubAndGain - All rights reserved - 2020 ©. </p>
						<a href="#"></a>
					</div>
				</div>
			</div>
		</footer>
		<!-- footer end -->
		<script src="changess.js"></script>
		<script src="../settings.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.js"></script>
        <script src="clipboard/dist/clipboard.min.js"></script>
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
		<script src="../js/modernizr-2.8.3.min.js"></script>
        <script src="../js/jquery-1.12.0.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/bootstrap.js"></script>
        <script src="../js/bootstrap.bundle.js"></script>
        <script src="../js/bootstrap.bundle.min.js"></script>
        <script src="../js/owl.carousel.min.js"></script>
        <script src="../js/jquery.min.js"></script>
        <script src="../js/jquery.meanmenu.js"></script>
        <script src="../js/jquery.mixitup.min.js"></script>
        <script src="../js/jquery.magnific-popup.min.js"></script>
        <script src="../js/jquery.counterup.min.js"></script>
        <script src="../js/waypoints.min.js"></script>
        <script src="../js/plugins.js"></script>
        <script src="../js/main.js"></script>

  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
   
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function () {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });

        function copyText(){
    var clipboard = new ClipboardJS('#referral_link');
    clipboard.on('success', function(e){
      alert("Referral Link Copied!")
    });
    
}



function copyApi(){
    var clipboard = new ClipboardJS('#api_link');
    clipboard.on('success', function(e){
      alert("API Key Copied!")
    });
    
}
    </script>
     <script src="datacheck.js"></script>
    <script src="billcheck.js"></script>
    <script src="electcheck.js"></script>
     <script src="epinchecks.js"></script>
    

    </body>
</html>