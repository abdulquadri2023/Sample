<?php
session_start();
include "../database_connection.php";
$required = $success = "";
$transaction_id = uniqid('ID');
$date = date('Y-m-d h:I:sa');
$api_responses = "You are successfully credited";
$query = "";

if(isset($_SESSION['log'])){

  $username_userphone = $_SESSION['log'];

  $sql_statement = "SELECT * FROM register_info WHERE user_name = '$username_userphone' OR phone_number = '$username_userphone' LIMIT 1";
  $sql_query = mysqli_query($data_connection, $sql_statement);
  $sql_num_rows = mysqli_num_rows($sql_query);

  if($sql_num_rows > 0 ){
    $sql_assoc = mysqli_fetch_assoc($sql_query);

    $user_name = $sql_assoc['user_name'];
    $wallet = $sql_assoc['wallet'];
    $phone_number = $sql_assoc['phone_number'];

  }else{

    header("Location: ../login.php");
  }
}else{

    header("Location: ../login.php");
  }

if(isset($_POST['buy'])){

  $network = filter_var($_POST['network'], FILTER_SANITIZE_STRING);
  $plan = filter_var($_POST['plan'], FILTER_SANITIZE_STRING);
  $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);

  if($network == ""){

    $required = "Please select network";
  }
  if($plan == ""){

    $required = "Please select plan";
  }
  if($phone == ""){

    $required = "Please input phone number";

  }

  if($required == ""){

    $sql_statement = "SELECT price FROM data_bundles WHERE network = '$network' AND gigabits = '$plan'";
    $sql_query = mysqli_query($data_connection, $sql_statement);
    $sql_num_rows = mysqli_num_rows($sql_query);
    
    if($sql_num_rows > 0 ){

      $sql_assoc = mysqli_fetch_assoc($sql_query);
      $data_plan = $sql_assoc['price'];


    }else{

      $required = "Please select valid data bundles";
    }

    if($wallet < $data_plan){

      $required = "Insufficient balance please fund your wallet";

    }else{

      $success = "Your transaction has been processed";

    }

    if($required == ""){

      $sql_statement2 = "UPDATE register_info SET wallet = wallet - '$data_plan' WHERE user_name = '$user_name'";
      $sql_query2 = mysqli_query($data_connection, $sql_statement2);

    }

    if($sql_query2){

      $sql_statement1 = "INSERT INTO transaction_history (user_name, amount, phone_number, network, plan_type, transaction_id, status, date, query, api_responses)
      VALUES ('$user_name', '$data_plan', '$phone', '$network', '$plan', '$transaction_id', 'APPROVED', '$date', '$query', '$api_responses')";
      
      $sql_query1 = mysqli_query($data_connection, $sql_statement1);

      
      $success = "Your transaction has been processed successfully";
    
  }

  }
 
}

// What is this statement is for


$update = "SELECT * FROM register_info WHERE user_name = '$username_userphone' OR phone_number = '$username_userphone' LIMIT 1";
$insert_data = mysqli_query($data_connection, $update);
$number_rows = mysqli_num_rows($insert_data);

if($number_rows){
  $detail = mysqli_fetch_assoc($insert_data);

  $wallet = $detail['wallet'];
}





?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Buy Data - SubAndGain</title>
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
    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=ukBmjDzbDqW7seOZpd_8OiMmEApiBafUTxJn2hCd2KpdLHkF-5AxwmkeyfZrIL14XUcqYpY9JfAZknVpnqU0rQ" charset="UTF-8"></script><style>
       
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
      <?php
      $sql_statement = "SELECT * FROM register_info WHERE user_name = '$user_name'";
      $check_sql = mysqli_query($data_connection, $sql_statement);
      //$fetch_assoc = mysqli_fetch_assoc($check_sql);
      while($user_dashboard= mysqli_fetch_assoc($check_sql)){ ?>
            </div>

            <ul class="list-unstyled components">
                <p class="navp" style="text-align: center;">
                    <img src="../img/profile.png" alt="" /><br/>
                                Hi,<br/>
                                
     
      <b>   
      <?php echo $user_dashboard['user_name']; ?>

      </b>
      <?php } ?>                 
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
		<!-- header end -->
    <!-- welcome -->
		<div class="row">
			<div class="col-md-12 page-heading">
   <div class="breadcrumb-title text-center">
							<h4>BUY DATA</h4>
							<div class="breadcrumb-menu">
							<ul>
								<li><a href="dashboard.php">My Account</a></li>
								<li>data</li>
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
                  <li class="list-group-item list-group-item-warning">MTN [SME] *312*4*3*3# </li>
                            <li class="list-group-item list-group-item-warning">MTN [Corporate Gifting] *461*4#  </li>
                            <li class="list-group-item list-group-item-dark"> 9mobile [Gifting] *228# </li>
    <li class="list-group-item list-group-item-dark"> 9mobile [SME] *917*9# </li>
                            <li class="list-group-item list-group-item-danger"> Airtel *323# </li>
                            <li class="list-group-item list-group-item-success"> Glo *127*0#. </li>
                            
                     	     <div class="alert alert-info alert-dismissible fade show" role="alert" style="border-left: 5px solid blue;">
                   You can check all Data Bundles Pricing using the button below<br/>
                   <a href="pricing.php" class="btnn btn-primary">Check Data Pricing</a>
                   <button type="button" class="close" data-dismiss="alert" arial-label="Close">
                     <span aria-hidden="true">&times; </span>
                   </button>
                        </div>
   		<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
   			<h6 class="m-0 font-weight-bold">Select Plan </h6>
   		</div>

<!-- FORM START HERE -->

<form id="form" method="post">
<?php
      if($required != ""){
        echo "<div class = 'alert alert-danger'> $required </div>";
      }else{
        //echo "<div class = 'alert alert-success'> $success </div>";
      }

?>
      
   		<div class="card-body">
         <?php
      $sql_statement = "SELECT * FROM register_info WHERE user_name = '$user_name'";
      $check_sql = mysqli_query($data_connection, $sql_statement);
      //$fetch_assoc = mysqli_fetch_assoc($check_sql);
      while($balance = mysqli_fetch_assoc($check_sql)){ ?>

      <div class="input-group mb-3">
      
           <input type="text" name="wallet" id="phone1" value="" class="form-control" placeholder="Wallet: &#8358; <?php  echo $balance['wallet']; ?>"  readonly>

      </div>
      <?php } ?>

 <!-- SELECT FOR NETWORK HERE -->

   			<div class="input-group mb-3">
               <select name="network" id="datanet" class="form-control" onchange="selectDataBundle();" >
                <option value="">Choose Network</option>
            	  <option value="MTN" >MTN </option>
               	<option value="GLO">GLO </option>
               	<option value="AIRTEL">AIRTEL</option>
               	<option value="9MOBILE">9MOBILE</option>
                
               </select>
           </div>
           <div class="input-group mb-3">
               <select id="dataprice" name = "plan" class="form-control" onchange="dataPriceCheck();">
                <option value="">Select plan </option>
               </select>
           </div>
      
          <div class="input-group mb-3">
           <input type="tel" name="phone" id="phone1" maxlength="11" minlength="11" class="form-control" value="" placeholder="Enter recipient's number" >
          </div>
           <input type="submit" class="btnn btn-primary" name="buy" value="Buy Data" onclick="return confirm('Do you want to proceed with this Order?');">
           
       </div>
   </form>



                   </div>
               </div>

               <div class="row">
               <div class="col-md-12">
                   <div class="alert alert-info alert-dismissible fade show" role="alert" style="border-left: 5px solid blue;">
                    To know the current status of your transaction, kindly swipe the transaction history below to the left and click on the <b>Query</b> button. Thanks.
                   <button type="button" class="close" data-dismiss="alert" arial-label="Close">
                     <span aria-hidden="true">&times; </span>
                   </button>
                        </div>
    <div class="card shadow mb-4" style="padding: 0;">
       <!-- <p style="padding: 2px;"><b>Note:</b> MTN order will now be cancelled automatically if after 30min of being pending and payment will be refunded!</p> -->
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
                  <th>Plan</th>
                  <th> Status </th>
                     <th> API Response </th>
                  <th> Trans. Id </th>
                   <th> Date </th>
                   <th> Query </th>
                  </tr>
               </thead>
               <tbody>
              <?php
              $insert_history = "SELECT * FROM transaction_history WHERE user_name = '$user_name'";
              $sql_statement = mysqli_query($data_connection, $insert_history);
              //$fetch_assoc = mysqli_fetch_assoc($sql_statement);
              while($fetch_assoc = mysqli_fetch_assoc($sql_statement)){
              ?>
                  <tr>
                      <td><?php echo $fetch_assoc['network']; ?></td>
                      <td><?php echo $fetch_assoc['phone_number']; ?></td>
                      <td> &#8358; <?php echo $fetch_assoc['amount']; ?></td>
                      <td> <?php echo $fetch_assoc['plan_type']; ?></td>
                      <td style="color: green;"><b> <?php echo $fetch_assoc['status']; ?> </b></td>
                      <td> <?php echo $fetch_assoc['api_responses']; ?> </td>
                      <td> <?php echo $fetch_assoc['transaction_id']; ?> </td>
                      <td> <?php echo $fetch_assoc['date']; ?> </td>
                      <td> <a href="buy_data.php?id=578687"> <button type="submit" class="btnn btn-primary" name="orderid"> QUERY </button> </a> </td>
                  
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


    // Script for datanetwork selection

    <script>
      
function selectDataBundle(){

  var network = document.getElementById("datanet").value;

  if(network != ""){

    $.ajax({

      type: "post",
      url: "check.php",
      data: "plan_data="+network,
      success: function(result){
document.getElementById("dataprice").innerHTML = result;
//alert(result);
      }
    });

  }



}


    </script>



     <script src="datacheck.js"></script>
    <script src="billcheck.js"></script>
    <script src="electcheck.js"></script>
     <script src="epinchecks.js"></script>
    

    </body>
</html>