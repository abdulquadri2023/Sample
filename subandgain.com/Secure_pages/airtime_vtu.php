<?php
session_start();
include "../database_connection.php";
$required = $success = "";
$date = date("Y-m-d H:i:sa");
$transaction_id = uniqid("AI");


if(isset($_SESSION['log'])){
    
    $username_userphone = $_SESSION['log'];
    
        $update = "SELECT * FROM register_info WHERE user_name = '$username_userphone' OR phone_number = '$username_userphone' LIMIT 1";
        $insert_data = mysqli_query($data_connection, $update);
        $number_rows = mysqli_num_rows($insert_data);

    if($number_rows){

        $sql_assoc = mysqli_fetch_assoc($insert_data);
        $wallet = $sql_assoc['wallet'];
        $user_name = $sql_assoc['user_name'];

    }else{

        header("Location: ../login.php");
    }
}else{

    header("Location: ../login.php");
}


if(isset($_POST['airtime'])){

    $phone_number = $_POST['phone'];
    $amount = $_POST['amount'];
    $network = $_POST['network'];

if($phone_number == ""){

    $required = "Input the number you want to credit";
}
if($amount == ""){

    $required = "Input the amount";
}

$sql = "SELECT * FROM register_info WHERE user_name = '$user_name' OR wallet = '$wallet'";
$sql_query = mysqli_query($data_connection, $sql);
$sql_num_rows = mysqli_num_rows($sql_query);

if($sql_num_rows > 0 ){

    $sql_assoc = mysqli_fetch_assoc($sql_query);
    $user_name = $sql_assoc['user_name'];
    $wallet = $sql_assoc['wallet'];

    if($wallet < $amount ){

        $required = "Insuficient amount please fund your wallet";
    }
    if($amount < 0 ){
    
        $required = "Negative input is not requrired";
    }
    

}

if($required == ""){
    $sql_statement = "UPDATE  register_info SET wallet = wallet - $amount WHERE user_name = '$user_name' ";
    $sql_query1 = mysqli_query($data_connection, $sql_statement);

    if($sql_query1){

        $sql_statement1 = "INSERT INTO transaction_history (network, amount, phone_number, transaction_id, status, date) 
        VALUES('$network', '$amount', '$phone_number', '$transaction_id', 'Approved', '$date')";
        $sql_query1 = mysqli_query($data_connection, $sql_statement1);
        $success = "Your transaction has been processed successful";
    }

}
}


?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Airtime VTU - SubAndGain</title>
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
    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=kCBzMG3XLyEtdNz4nsZJlPzro9Q6i85scbbFIatyfPEsBb6rVxyVZ9nAszLGMgMLIb9CVOZ6_pY4AGK7Zz3f9g" charset="UTF-8"></script><style>
       
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
                        <b>  Sulyman</b>
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
							<h4>AIRTIME VTU</h4>
							<div class="breadcrumb-menu">
							<ul>
								<li><a href="dashboard.php">My Account</a></li>
								<li>Airtime VTU</li>
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
                     	                          	    <div class="alert alert-info alert-dismissible fade show" role="alert" style="border-left: 5px solid blue;">
                    Free Member(Discount): <b>MTN</b> - 1%; <b>GLO</b> - 2%; <b>9MOBILE</b> - 1.5%;<b> AIRTEL</b> - 1%<br/>
                   Basic Member(Discount):  <b>MTN</b> - 1.5%; <b>GLO</b> - 2.5%; <b>9MOBILE</b> - 2%;<b> AIRTEL</b> - 1.5%<br/>
                    Value Member(Discount):  <b>MTN</b> - 1.5%; <b>GLO</b> - 2.5%; <b>9MOBILE</b> - 2%;<b> AIRTEL</b> - 1.5%<br/>
                    Premium Member(Discount):  <b>MTN</b> - 1.5%; <b>GLO</b> - 3%; <b>9MOBILE</b> - 2.5%;<b> AIRTEL</b> - 1.5%<br/>
                    Diamond Member(Discount):  <b>MTN</b> - 2%; <b>GLO</b> - 3%; <b>9MOBILE</b> - 2.5%;<b> AIRTEL</b> - 2%<br/>
                    Gold & API Member(Discount):  <b>MTN</b> - 2%; <b>GLO</b> - 3.5%; <b>9MOBILE</b> - 3%;<b> AIRTEL</b> - 2%<br/>
                    <button type="button" class="close" data-dismiss="alert" arial-label="Close">
                     <span aria-hidden="true">&times; </span>
                   </button>
                        </div>
                        <input type="hidden" value="free" id="membership">
   		<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
   			<h6 class="m-0 font-weight-bold">Select Plan </h6>
   		</div>
   		<form id="form" method="post" name="vtu">
   			<div class="card-body">
    <?php
    if($required != ""){

        echo "<div class = 'alert alert-danger'> $required </div>";
    }else{

        echo "<div class = 'alert alert-success'> $success </div>";
    }
    ?>
    <?php 
    $sql_statement = " SELECT * FROM register_info WHERE user_name = '$user_name'";
    $sql_query = mysqli_query($data_connection, $sql_statement);
    while($balance = mysqli_fetch_assoc($sql_query)){ ?>
        <div class="input-group mb-3">
           <input type="text" name="wallet" value="" class="form-control" placeholder="Wallet: &#8358;<?php echo $balance['wallet']; ?>" readonly>
         </div>
    <?php } ?>
   			<div class="input-group mb-3">
               <select name="network" id="cat" class="form-control" required>
                <option value>Choose Network</option>
               	<option value="MTN">MTN</option>
               	<!--<option value="MTN_AWUF">MTN AWUF</option>-->
               	<option value="GLO">GLO</option>
               	<option value="9MOBILE">9MOBILE</option>
                <option value="AIRTEL">AIRTEL</option>
               </select>
           </div>
           <div class="input-group mb-3">
           <input type="tel" name="phone" id="phone1" maxlength="11" minlength="11" class="form-control" value="" placeholder="Enter recipient's number" required="">
         </div>
         <div class="input-group mb-3">
           <input type="number" name="amount" id="amt" class="form-control" value="" oninput="updateAmt()" placeholder="Amount (minimum 50)" required="">
         </div>
         <div class="input-group mb-3">
           <input type="text" id="amt2" class="form-control" value="Amount to Pay" readonly >
         </div>
           <input type="submit" class="btnn btn-primary" value="Airtime VTU" name="airtime" onclick="return confirm('Do you want to proceed with this Order?'); ">
           
       </div>
   </form>



                   </div>
               </div>

               <div class="row">
               <div class="col-md-12">
    <div class="card shadow mb-4" style="padding: 0;">
      <div class="card-header py-3 bgcard-header">
        <h5 class="m-0 font-weight-bold">Transaction History </h5>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
           <thead>
              <tr>
                    <th> Network </th>
                    <th> Phone Number </th>
                    <th> Price </th>
                    <th> Status </th>
                    <th> Order Id </th>
                    <th> Date </th>
                    <th> Query </th>
                  </tr>
               </thead>
              
                <tbody>
                <?php 
            $sql_statement ="SELECT * FROM transaction_history WHERE user_name = '$user_name' ";
            $sql_query = mysqli_query($data_connection, $sql_statement);
            while($airtime_history = mysqli_fetch_assoc($sql_query)){ ?>
                <tr>
                    <td> <?php echo $airtime_history['network']; ?> </td>
                    <td> <?php echo $airtime_history['phone_number']; ?> </td>
                    <td> <?php echo $airtime_history['amount']; ?> </td>
                    <td style = "color: green"> <?php echo $airtime_history['status']; ?> </td>
                    <td> <?php echo $airtime_history['transaction_id']; ?> </td>
                    <td> <?php echo $airtime_history['date']; ?> </td>
                    <td><a href = "airtime_vtu.php"> <button type = "submit" class = "btnn btn-primary"> Query</button> </a></td>

                </tr>
            <?php } ?>
                </tbody>
             </table>
           </div>
            <div style='padding: 10px 10px 0px; border-top: dotted 1px #CCC;'>

</div>
<ul class="pagination">
      
  <li class='disabled'>
  <a >Previous</a>
  </li>
       
    <li class='active'><a>1</a></li><li><a href='?page_no=2'>2</a></li>    
  <li >
  <a href='?page_no=2'>Next</a>
  </li>
    <li><a href='?page_no=2'>Last &rsaquo;&rsaquo;</a></li></ul>
         </div>
    </div>
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
		<script src="js/modernizr-2.8.3.min.js"></script>
        <script src="js/jquery-1.12.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.bundle.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.meanmenu.js"></script>
        <script src="js/jquery.mixitup.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

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