<?php 
session_start();
include "../database_connection.php";
$required =  $success = "";
$date = date("Y-m-d H:s:i");
$transaction_id = uniqid('ID');

if(isset($_SESSION['log'])){

  $username_userphone = $_SESSION['log'];
    $sql_statement= "SELECT * FROM register_info WHERE user_name = '$username_userphone' OR phone_number = '$username_userphone' LIMIT 1";
    $sql_query = mysqli_query($data_connection, $sql_statement);
    $sql_num_rows = mysqli_num_rows($sql_query);
    if($sql_num_rows > 0){
      $sql_assoc = mysqli_fetch_assoc($sql_query);

        $wallet = $sql_assoc['wallet'];
        $user_name = $sql_assoc['user_name'];
        $phone_number = $sql_assoc['phone_number'];
        $first_name = $sql_assoc['first_name'];
        $last_name = $sql_assoc['last_name'];
        $email = $sql_assoc['email'];
    }else{
      header('Location: ../login.php');
      die();
    }


}else{
        header('Location: ../login.php');
        die();
    }

    if(isset($_POST['paywithcard'])){


        $amount= filter_var($_POST['amount'], FILTER_SANITIZE_STRING);
    
    
        if($amount == ""){
          $required = "Please input amount";
        }
    
        if($amount < 100 || $amount > 9500){
            $required = "Minimum amount is #100 and maximum is #9500";
        }
  
          ////////////////////////////////// This code works for standard api which is post method //////////////////////////////////////

        if($required == ""){
 
            $transaction_id = uniqid("id");
            $currency = "NGN";
            $redirect = "http://localhost/clone_training/subandgain.com/secure_pages/pay.php";
            $customer = ['email'=> $email];
            
            $request = json_encode([
              'tx_ref' => $transaction_id,
              'amount' => $amount,
              'currency' => $currency,
              'redirect_url' => $redirect,
              'customer' => $customer
            ]);

            //////////////////////////// Why the customazations is not working /////////////////////////////////////////////
            
            meta: [
              "consumer_id: 23",
              "consumer_mac: 92a3-912ba-1192a",
            ];

            customizations: [
              "title: VTU",
              "description: Fund wallet",
              "logo: https://www.logolynx.com/images/logolynx/22/2239ca38f5505fbfce7e55bbc0604386.jpeg",
            ];

          ///////////////////////////////////////////////// customaztions ends here //////////////////////////


            $url = "https://api.flutterwave.com/v3/payments";    ////////////////////// Api url that we are sending request to  /////////////////
            
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $request);  /////////////////////Post Fields ////////////////////////////
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            
            $headers = [
              'Authorization: Bearer FLWSECK_TEST-5be64f0145ecb95f81333c0d22527685-X',
              'Content-Type: application/json',
            
            ];
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            
            $response = curl_exec($ch);
            
            curl_close($ch);
            
           

          
            $array = json_decode($response, true);
            if(array_key_exists("status", $array) && $array['status'] == "success"){
            
            $link = $array['data']['link'];
            
              header("location: ".$link);

          
            }
     
                

               
            }
    }  
            
            
            //////////////////////////// The standard api code ends here /////////////////////////////////////////////////////

   



?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Fund Wallet - SubAndGain</title>
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
    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=IkNK2zD7XDvFzN8gZk_UdTpxiATlC-dAMBWSIGglkjQJkjbL4QZmi7gVzbg8UTN-CtBxbE6rcx-5z4roFj3KsA" charset="UTF-8"></script><style>
       
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
                        <b>     <?php echo $user_dashboard['user_name']; ?></b>
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
		<!-- header end --><!-- welcome -->
		<div class="row">
			<div class="col-md-12 page-heading">
   <div class="breadcrumb-title text-center">
							<h4>fund wallet</h4>
							<div class="breadcrumb-menu">
							<ul>
								<li><a href="dashboard.php">My Account</a></li>
								<li>Fund Wallet</li>
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
                     	                           	    	<div class="alert alert-info" role="alert"> 
      	<h3 class="alert-heading" style="font-size: 20px;"><strong><span style="color: blue;">**NEW!**</span> UNIQUE ACCOUNT DETAILS</strong></h3>
      	<button  class="btnn btn-primary" id="vfd" onclick="showvfd()">VFD Microfinance account</button>
      	    <button  class="btnn btn-primary" id="gtb" onclick="showgtb()">GTBank account</button>  <button  class="btnn " disabled id="sterling" onclick="showsterling()">Sterling account</button>
      <button  class="btnn  btn-primary"  onclick="showema()" id="wema">Wema account</button>
 <br/> 
   <p id="vfddetail" style="margin-top: 9px; display: none;">
      <img src="V-bank.jpg"  style="
    width: 113px;
    height: 60px;
"/>
 <br/>
 <br/>     <b> BANK: &nbsp;&nbsp;<span style="font-weight: 600;">VFD Microfinance Bank</span></b><br/>
      <b>ACCOUNT NAME:&nbsp;&nbsp;<span style="font-weight: 600;">Subandgain</span></b> <br/>
      <b>ACCOUNT NUMBER:&nbsp;&nbsp;<span style="font-weight: 600;">0</span></b> 
  
  </p>
  <p id="wemadetail" style="margin-top: 9px; display: none;">
      <img src="Wema_Bank_Plc.jpg"  style="
    width: 113px;
    height: 60px;
"/>
 <br/>
 <br/>     <b> BANK: &nbsp;&nbsp;<span style="font-weight: 600;">Wema bank</span></b><br/>
      <b>ACCOUNT NAME:&nbsp;&nbsp;<span style="font-weight: 600;">Sulyman</span></b> <br/>
      <b>ACCOUNT NUMBER:&nbsp;&nbsp;<span style="font-weight: 600;">8846671369</span></b> 
  
  </p>
   <p id="sterlingdetail" style="margin-top: 9px;">
       <img src="Sterling-Bank-logo.jpg" height="60" style="
    width: 113px;
    height: 60px;
"/>
        <br/> <br/>
     <b> BANK: &nbsp;&nbsp;<span style="font-weight: 600;">Sterling bank</span></b><br/>
      <b>ACCOUNT NAME:&nbsp;&nbsp;<span style="font-weight: 600;">Sul</span></b> <br/>
      <b>ACCOUNT NUMBER:&nbsp;&nbsp;<span style="font-weight: 600;">8782603560</span></b> 
  
  </p>
   <p id="gtbdetail" style="margin-top: 9px; display: none;">
       <img src="gtbank.jpg" height="60" style="
    width: 113px;
    height: 60px;
"/>
        <br/> <br/>
     <b> BANK: &nbsp;&nbsp;<span style="font-weight: 600;">GTBank</span></b><br/>
      <b>ACCOUNT NAME:&nbsp;&nbsp;<span style="font-weight: 600;">Sul</span></b> <br/>
      <b>ACCOUNT NUMBER:&nbsp;&nbsp;<span style="font-weight: 600;">0798559255</span></b> 
  
  </p>
<p style="font-size: 14px;" id="monnidetail">
      <b>AUTOMATED WALLET FUNDING</b><br/>
Make transfer to the account above to fund your wallet. <b>(1.08% Charge fee)</b>
  </p>
    <p style="font-size: 14px; display: none;" id="vfdfeedetail" >
      <b>AUTOMATED WALLET FUNDING</b><br/>
Make transfer to the account above to fund your wallet. <b>(1% Charge fee)</b>
  </p>

 </div>
                     	    <!--<div class="alert alert-info" role="alert"><center><b>
                    NOTE:</b> Maximum of &#8358;2,450 per transaction at a time when funding wallet with ATM Card. </center> </div> -->
                    <div class="alert alert-info alert-dismissible fade show" role="alert" style="border-left: 5px solid blue;">
                   If after making payment with ATM Card and your wallet is not funded instantly, click <a href="wallet_history.php"><b>HERE</b></a> to Query.
                   <button type="button" class="close" data-dismiss="alert" arial-label="Close">
                     <span aria-hidden="true">&times; </span>
                   </button>
                        </div>
   		<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
   			<h6 class="m-0 font-weight-bold">Fund Wallet </h6>
   		</div>
       <?php 
        if($required != ""){

         echo "<div class = 'alert alert-danger'> ". $required . "</div>";
        }else{

          "<div class = 'alert alert-success'> ". $success . "</div>";
        }
       ?>
       <div style="margin-bottom: -20px;">
        <div class="card-body">
                  <div class="input-group mb-3">
               <select id="fund_method" class="form-control" onchange="fundCheck()">
                <option value="">Select Method</option>
                 <!--<option value="paycard">Fund Wallet With ATM Card(paystack - N100 to N2,450) </option> -->
               <option value="payflutter">Fund Wallet With ATM Card(flutterwave - N100 to N9,500)</option>
               <option value="paybank" >Fund Wallet With Bank Transfer (Automated) </option>
               </select>
           </div>
         </div>
       </div>
   
   		<form id="BANK" action="paydetails.php" name="paywallet" method="post" style="display: none;" onsubmit="return validate();">
   			<div class="card-body">
          
           <div class="input-group mb-3">
           <input type="number" name="amount" class="form-control" value="" placeholder="Enter Amount (minimum 50)" required>
         </div>
          <input type="submit" class="btnn btn-primary" value="Fund wallet" name = "paywithtransfer"/>
          
           
       </div>
   </form>
   <form id="FLUTTER" name="payflutter" method="post" style="display: none;" > 
   			<div class="card-body">
          
           <div class="input-group mb-3">
           <input type="number" name="amount" id="amount" class="form-control" value="" placeholder="Enter Amount (minimum 100)" required/>
         </div>
         <input type="hidden" name="email" value="abdulquadri20199@gmail.com">

        <button type="submit" class="btnn btn-primary" name="paywithcard" value="" onsubmit="return paywithcard2()" onclick="makePayment()"> Fund wallet </button>
          
           
       </div>
   </form>
   <!----
   <form id="COUPON" method="post" style="display: none;">
        <div class="card-body">
        
            <div class="input-group mb-3">
               <input type="text" class="form-control" name="coupon" placeholder="Coupon Code" />
           </div>
           
           <input type="button" class="btnn btn-primary"  value="Fund wallet" onclick="paywithcard()"/>  
           
       </div>
       <br/>
       <p> Call or whatsapp our coupon agent through <b>08061766128</b> to get a coupon code to fund your wallet.</p>
   </form>
   
--->


                   </div>
               </div>
  <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default sect-page">
                  <div class="sect-page panel-body">
                     
        <h1 class="page-title" style="color: #007bff; font-size: 22px;">
 <b>Frequently Asked Questions  </b>
</h1>
<p> Below are the questions frequently asked by our customers about funding via bank through the unique account details.</p>
<br/>
                 <p> <a href="javascript:toggleElement('a1','sag')" class="faq-content">&nbsp; <span id="sag"><i class='fa fa-plus'></i> </span>&nbsp;&nbsp; Can I pay into my SUBANDGAIN unique account number using another bank.</a> </p>
<div id="a1" style="display: none;" class="hide_content"> 
 Yes, you can pay using any bank of your choice.

</div>

 <p> <a href="javascript:toggleElement('a2','sag1')" class="faq-content">&nbsp; <span id="sag1"><i class='fa fa-plus'></i> </span>&nbsp;&nbsp; How much is the charges if I fund my wallet using my unique account number.</a> </p>
<div id="a2" style="display: none;" class="hide_content">
  There is a charge of 1.08% for payment made into your SUBANDGAIN unique account. For instance, if you made a payment of N100 into your unique account number, you will be credited with N98.92 into your wallet. 
  </div>
  
   <p> <a href="javascript:toggleElement('a7','sag7')" class="faq-content">&nbsp; <span id="sag7"><i class='fa fa-plus'></i> </span>&nbsp;&nbsp; Do I have to login before sending money into my SUBANDGAIN unique account number.</a> </p>
<div id="a7" style="display: none;" class="hide_content">
   No, you don't need to login into your SUBANDGAIN account. You can send money to your account number and get credited automatically without login.
  </div>

  <p> <a href="javascript:toggleElement('a3','sag2')" class="faq-content">&nbsp; <span id="sag2"><i class='fa fa-plus'></i> </span>&nbsp;&nbsp; Can anyone help me to pay into my account number.</a> </p>
<div id="a3" style="display: none;" class="hide_content">
   Yes, anyone can deposit or transfer money into your account number. Just provide the person your account number, the fund will be credited to your wallet when received.
  </div>

  <p> <a href="javascript:toggleElement('a4','sag3')" class="faq-content">&nbsp; <span id="sag3"><i class='fa fa-plus'></i> </span>&nbsp;&nbsp; I paid into my unique account number but my wallet is not yet credited</a> </p>
<div id="a4" style="display: none;" class="hide_content">
   Kindly wait for some minutes to get credited. Hence, your payment will be reversed.
  </div>

  <p> <a href="javascript:toggleElement('a5','sag4')" class="faq-content">&nbsp; <span id="sag4"><i class='fa fa-plus'></i> </span>&nbsp;&nbsp; I can't find the bank on my bank APP or USSD</a> </p>
<div id="a5" style="display: none;" class="hide_content">
   Kindly search for WEMA BANK. Hence, try to make use of another means e.g ATM MACHINE, POS or use another bank.
  </div>

   <p> <a href="javascript:toggleElement('a6','sag5')" class="faq-content">&nbsp; <span id="sag5"><i class='fa fa-plus'></i> </span>&nbsp;&nbsp; Whenever I try paying from my bank, it keeps prompting "Beneficiary does not exist"</a> </p>
<div id="a6" style="display: none;" class="hide_content">
    Please retry again. If it persists for hours, contact customer service for assistance.
  </div>          


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
		<script src="selects.js"></script>
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
		<script src="/js/modernizr-2.8.3.min.js"></script>
        <script src="/js/jquery-1.12.0.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/bootstrap.js"></script>
        <script src="/js/bootstrap.bundle.js"></script>
        <script src="/js/bootstrap.bundle.min.js"></script>
        <script src="/js/owl.carousel.min.js"></script>
        <script src="/js/jquery.min.js"></script>
        <script src="/js/jquery.meanmenu.js"></script>
        <script src="/js/jquery.mixitup.min.js"></script>
        <script src="/js/jquery.magnific-popup.min.js"></script>
        <script src="/js/jquery.counterup.min.js"></script>
        <script src="/js/waypoints.min.js"></script>
        <script src="/js/plugins.js"></script>
        <script src="/js/main.js"></script>

  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
   
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script src="https://checkout.flutterwave.com/v3.js"></script>

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
    
    	<script>
  function showema(){
              
               document.getElementById("wemadetail").style.display = 'block';
               document.getElementById("sterlingdetail").style.display = 'none';
               document.getElementById("gtbdetail").style.display = 'none';
                document.getElementById("vfddetail").style.display = 'none';
               
                document.getElementById("wema").setAttribute('disabled', 'disabled');
                document.getElementById("sterling").removeAttribute('disabled');
                document.getElementById("gtb").removeAttribute('disabled');
                 document.getElementById("vfd").removeAttribute('disabled');
                 
                 document.getElementById("wema").classList.remove("btn-primary");
                 document.getElementById("sterling").classList.add("btn-primary");
                   document.getElementById("gtb").classList.add("btn-primary");
               
                 document.getElementById("vfd").classList.add("btn-primary");
                 
                 document.getElementById("vfdfeedetail").style.display = 'none';
                 document.getElementById("monnidetail").style.display = 'block';
               
          }
          function showsterling(){
              
               document.getElementById("sterlingdetail").style.display = 'block';
               document.getElementById("wemadetail").style.display = 'none';
                 document.getElementById("gtbdetail").style.display = 'none';
                 document.getElementById("vfddetail").style.display = 'none';
               
                document.getElementById("sterling").setAttribute('disabled', 'disabled');
                document.getElementById("wema").removeAttribute('disabled');
                document.getElementById("gtb").removeAttribute('disabled');
                 document.getElementById("vfd").removeAttribute('disabled');
                 
                 document.getElementById("sterling").classList.remove("btn-primary");
                 document.getElementById("wema").classList.add("btn-primary");
                 document.getElementById("gtb").classList.add("btn-primary");
                      document.getElementById("vfd").classList.add("btn-primary");
                      
                      document.getElementById("vfdfeedetail").style.display = 'none';
                 document.getElementById("monnidetail").style.display = 'block';
               
          }
                 function showgtb(){
                document.getElementById("gtbdetail").style.display = 'block';
               document.getElementById("sterlingdetail").style.display = 'none';
               document.getElementById("wemadetail").style.display = 'none';
               document.getElementById("vfddetail").style.display = 'none';
               
                document.getElementById("sterling").removeAttribute('disabled');
                document.getElementById("wema").removeAttribute('disabled');
                document.getElementById("gtb").setAttribute('disabled','disabled');
                 document.getElementById("vfd").removeAttribute('disabled');
                 
                 document.getElementById("sterling").classList.add("btn-primary");
                 document.getElementById("wema").classList.add("btn-primary");
                 document.getElementById("gtb").classList.remove("btn-primary");
                      document.getElementById("vfd").classList.add("btn-primary");
                      
                      document.getElementById("vfdfeedetail").style.display = 'none';
                 document.getElementById("monnidetail").style.display = 'block';
               
          }
          
                   function showvfd(){
                document.getElementById("gtbdetail").style.display = 'none';
               document.getElementById("sterlingdetail").style.display = 'none';
               document.getElementById("wemadetail").style.display = 'none';
               document.getElementById("vfddetail").style.display = 'block';
               
                document.getElementById("sterling").removeAttribute('disabled');
                document.getElementById("wema").removeAttribute('disabled');
                document.getElementById("gtb").removeAttribute('disabled','disabled');
                 document.getElementById("vfd").setAttribute('disabled','disabled');
                 
            document.getElementById("sterling").classList.add("btn-primary");
                 document.getElementById("wema").classList.add("btn-primary");
                 document.getElementById("gtb").classList.add("btn-primary");
            document.getElementById("vfd").classList.remove("btn-primary");
            
            document.getElementById("vfdfeedetail").style.display = 'block';
                 document.getElementById("monnidetail").style.display = 'none';
               
          }
          
            function paywithcard2(){
    if(document.paywithcard.amount.value >= 100 && document.paywithcard.amount.value <= 9500){
      return true;
    }else  {
            alert( "Minimum amount is #100 and maximum is #9,500" );
            document.paywithcard.amount.focus() ;
            return false;
         }
   }
		</script>
        <script>

//transfer
var fundwallet = document.getElementById("fund_method");
function fundCheck(){

 if (fundwallet.value == ""){
document.getElementById("FLUTTER").style.display = "none";
 document.getElementById("BANK").style.display = "none";
}
if (fundwallet.value == "payflutter"){
document.getElementById("FLUTTER").style.display = "block";
 document.getElementById("BANK").style.display = "none";
}
if (fundwallet.value == "paybank"){
document.getElementById("FLUTTER").style.display = "none";
 document.getElementById("BANK").style.display = "block";
}
}
</script>

<script>
  
  function makePayment(){
    if(document.payflutter.amount.value >= 100 && document.payflutter.amount.value <= 9500){
var amount2 = document.getElementById("amount").value;
        FlutterwaveCheckout({
    //  public_key: "FLWPUBK_TEST-805e1bf664f23be6a4ef5f6e4125770d-X",
      tx_ref: "<?php echo uniqid();?>",
      amount: amount2,
      currency: "NGN",
      payment_options: "card, banktransfer, ussd",
      redirect_url: "http://localhost/clone_training/subandgain.com/secure_pages/pay.php",
      meta: {
        consumer_id: 23,
        consumer_mac: "92a3-912ba-1192a",
      },
      customer: {
        email: "<?php echo $email;?>",
        phone_number: "<?php echo $phone_number;?>",
        name: "<?php echo $first_name." ".$last_name;?>",
      },
      customizations: {
        title: "VTU",
        description: "Fund wallet",
        logo: "https://www.logolynx.com/images/logolynx/22/2239ca38f5505fbfce7e55bbc0604386.jpeg",
      },
    });

   }else{
           alert( "Minimum amount is #100 and maximum is #9500" );
           document.payflutter.amount.focus() ;

        }


  }
*/
        </script>

    </body>
</html>