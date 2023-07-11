<?php
session_start();
include "../database_connection.php";

//echo $_SESSION['log'];


?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Dashboard - SubAndGain</title>
         <meta name="description" content="SubAndGain Telecommunication gives the best and cheapest mobile data, cable tv subscription, electricity, airtime vtu and education bills. It makes life easier by giving out a certain dicount for any transaction made on the SubAndGain. "/>
    <meta name="keywords" content="Data,Airtime VTU,DSTV,GOTV,SMILE,STARTIMES,WAEC,NECO,Electricity,Prepaid,Postpaid" />
    <meta name="author" content="SUBANDGAIN" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="images/favicon.png">
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
    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=Zb0teC5m1XKhn-FG4vC55HUDtBJKjwlunlL6QXEgFyQi0rc1HPamRhqnFarbIkmnEyDNtcYh1V5TyFA6n1I-NQ" charset="UTF-8"></script><style>
       
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
                    <img src="img/profile.png" alt="" /><br/>
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
                    <a class="nava" href=" APIDocs.php">  <i class="fa fa-book-open"></i> API Docs </a>
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
							<h4>Welcome to dashboard</h4>
							<div class="breadcrumb-menu">
							<ul>
								<li><a href="dashboard.php">My Account</a></li>
								<li>dashboard</li>
							</ul>
						</div>
			</div>
		</div>
	</div>
	
	
	<!-- 	 <script>
    alert('**NEW** \n Dear customer, in order to serve you better, we have improved our automated payment system. You now have a unique SUBANDGAIN account number which you can deposit or transfer fund into it and your wallet will get credited instantly. You can find your SUBANDGAIN account details below.');
    </script>-->
<!--	welcome end -->
		<!-- dashbord home -->
    <div class="container">
      <div class="row">
      	<div class="col-md-12">
      		<div class="wrapper-content">
      			<div class="wrap-inside">
      			<div class="alert alert-info alert-dismissible fade show" role="alert" style="border-left: 5px solid blue;">
      			 
      			   
           
                     <p><strong>**NOTICE️**&nbsp;&nbsp;&nbsp;</strong></p>

<p><strong>Dear customers, </strong><strong>We would like to inform you that the Sterling bank team is actively working to address all outstanding payment issues to the bank.&nbsp;</strong><strong>Kindly use other unique bank account apart from Sterling Bank and the fund will reflect on your wallet immediately.</strong></p>

<p>Thank you for your patience, understanding and support.</p>

<p>You&#39;ll be informed once the current issue with the<strong>&nbsp;Sterling Bank&nbsp;</strong>account is resolved and all pending transactions to the&nbsp;banks<strong>&nbsp;</strong>shall be credited or refunded.&nbsp;</p>

<p>Thanks for choosing SubAndGain.</p>
             
            <hr/>  <a href="https://wa.me/+2349055199706" class="btnn btn-primary" style="background: #31C847;     margin-bottom: 3px;" target="_blank" >  Chat with us</a> <br/><a href="https://chat.whatsapp.com/FBc47n0wYxVIyfmmm7D7Sj" class="btnn btn-primary" style="background: #31C847;" target="_blank"> Join Our WhatsApp Group</a> <br/>
             <a href="https://play.google.com/store/apps/details?id=com.subandgain.com" class="btnn btn-primary" style="background: #000000; margin-top: 6px;" target="_blank"><img src="playstore_subandgain.png" width="20" height="20"/> Download Our App on Google PlayStore</a>
                
                     
                    
                    
                        </div>
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default sect-page">
    <div class="sect-page panel-body">
              <h1 class="page-title" style="text-transform: uppercase;">
                Sulyman's Account (<a href="logout.php"><i class="fa fa-power-off" style="color: red;"></i></a>)
              </h1>
            
          </div>
                 
              </div>
            </div>
          </div> <br/>
           <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default sect-page">
                  <div class="sect-page panel-body" style="padding: 5px;">
              <p style="margin-bottom: 0px;">
  Referral Link :   <span style="color: red;">You are not eligible for the referral program as a Free Member.  </span> 
</p>
            
          </div>
                 
              </div>
            </div>

           
          </div> <br/>
          <!-- wallet-->
          <div class="row">
            <div class="col-md-4">
              <div class="panel panel-default sect-page">
                  <div class="sect-page panel-body">
              <div class="label label-succes">
              Wallet
            </div> 
            <div class="state-value">
                     &#8358;70.66           
            </div>
            <a href="fund_wallet.php" class="btnn btn-primary">FUND WALLET</a>
          </div>
                 
              </div>
            </div>
            <div class="col-md-4">
              <div class="panel panel-default sect-page">
                  <div class="sect-page panel-body">
              <div class="label label-succes">
              Commission
            </div>
            <div class="state-value">
                    &#8358;0            </div> 
            <a href="withdraw.php" class="btnn btn-primary">Withdraw</a>
          </div>
                 
              </div>
            </div>
            <div class="col-md-4">
              <div class="panel panel-default sect-page">
                  <div class="sect-page panel-body">
              <div class="label label-succes">
              User Membership
            </div>
            <div class="state-value" style="text-transform: uppercase;">
                     free MEMBER
            </div> 
            <a href="membership.php" class="btnn btn-primary">Upgrade</a>
          </div>
                 
              </div>
            </div>
          </div> <br/>
          <!-- wallet end -->
          <!-- referral set-->
          <div class="row">
            <div class="col-md-4">
              <div class="panel panel-default sect-page">
                  <div class="sect-page panel-body">
              <div class="label label-succes">
             Active Direct Referral
            </div>
            <div class="state-value">
                     0            </div><hr class="hr-space"/>
            <p class="span-info"> Pending Referrals: &nbsp<span class="span-digit">0</span></p>
          </div>
                 
              </div>
            </div>
            <div class="col-md-4">
              <div class="panel panel-default sect-page">
                  <div class="sect-page panel-body">
              <div class="label label-succes">
             Active Indirect Referral
            </div>
            <div class="state-value">
                     0            </div> <hr class="hr-space"/>
            <p class="span-info">Pending Indirect Referral: &nbsp<span class="span-digit">
              0</span></p>
          </div>
                 
              </div>
            </div>
            <div class="col-md-4">
              <div class="panel panel-default sect-page">
                  <div class="sect-page panel-body">
              <div class="label label-succes">
              Total Referral
            </div>
            <div class="state-value">
              0                     </div> <hr class="hr-space"/>
            <p class="span-info">Total Pending Referral: &nbsp<span class="span-digit">
                0            </span></p>
          
            </div> 
          </div>
                 
              </div>
            
          </div>
          <br/>
          <!-- referral section end -->
          <!-- point value setion -->
          <div class="row">
            
            <div class="col-md-4">
              <div class="panel panel-default sect-page">
                  <div class="sect-page panel-body">
              <div class="label label-succes">
              Accumulated Point Value(PV)
            </div>
            <div class="state-value">
                     0            </div> 
            <a href="transfer_pv.php" class="btnn btn-primary">Transfer</a>
            
                        
             
          </div>
                 
              </div>
            </div>
            
          </div>
          <br/>
          <!-- point value end -->
        
      	<!-- alert section -->
      	<div class="alert alert-info" role="alert"> 
      	<h3 class="alert-heading" style="font-size: 20px;"><strong><span style="color: blue;">**NEW!**</span> UNIQUE ACCOUNT DETAILS</strong></h3>
      	    <button  class="btnn btn-primary" id="vfd" onclick="showvfd()">VFD Microfinance account</button>
      	    <button  class="btnn btn-primary" id="gtb" onclick="showgtb()">GTBank account</button>  
            <button  class="btnn btn-primary"  id="sterling" onclick="showsterling()">Sterling account</button>
            <button  class="btnn  btn-primary"  onclick="showema()" id="wema">Wema account</button>
 <br/> 
  <p id="vfddetail" style="margin-top: 9px; display: none;">
      <img src="V-bank.jpg"  style= "width: 113px; height: 60px;"/>
      <br/>
      <br/>     
      <b> BANK: &nbsp;&nbsp;<span style="font-weight: 600;">VFD Microfinance Bank</span></b><br/>
      <b>ACCOUNT NAME:&nbsp;&nbsp;<span style="font-weight: 600;">Subandgain</span></b> <br/>
      <b>ACCOUNT NUMBER:&nbsp;&nbsp;<span style="font-weight: 600;">0</span></b> 
  
  </p>
  <p id="wemadetail" style="margin-top: 9px; display: none;">
      <img src="Wema_Bank_Plc.jpg"  style= "width: 113px; height: 60px;"/>
      <br/>
      <br/>     
      <b> BANK: &nbsp;&nbsp;<span style="font-weight: 600;">Wema bank</span></b><br/>
      <b>ACCOUNT NAME:&nbsp;&nbsp;<span style="font-weight: 600;">Sulyman</span></b> <br/>
      <b>ACCOUNT NUMBER:&nbsp;&nbsp;<span style="font-weight: 600;">8846671369</span></b> 
  
  </p>
   <p id="sterlingdetail" style="margin-top: 9px;">
       <img src="Sterling-Bank-logo.jpg" height="60" style= "width: 113px; height: 60px;"/>
      <br/> <br/>
      <b> BANK: &nbsp;&nbsp;<span style="font-weight: 600;">Sterling bank</span></b><br/>
      <b>ACCOUNT NAME:&nbsp;&nbsp;<span style="font-weight: 600;">Sul</span></b> <br/>
      <b>ACCOUNT NUMBER:&nbsp;&nbsp;<span style="font-weight: 600;">8782603560</span></b> 
  
  </p>
   <p id="gtbdetail" style="margin-top: 9px; display: none;">
      <img src="gtbank.jpg" height="60" style= "width: 113px; height: 60px;"/>
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
 
<div class="alert alert-info" role="alert">
  <h3 class="alert-heading"><strong>**NEW UPDATE!**</strong></h3>
  <p>Do you want to own a <b>VTU website</b> today like SubAndGain with as low as <b>N10,000</b>? <b>You get Free logo, Free stunning flyer, Free N100,000 Capital Investment.</b>  Upgrade your account to Diamond or Gold and get your own VTU website to retail all our products and earn massive income daily.<br/><b>Sample:</b> <a href="https://sagtele.com/sag" target="_blank">www.sagtele.com/sag</a>  </p><a href="membership.php" class="btnn btn-primary">Upgrade Account</a>
 </div>
<!-- alert section end -->
<!-- pages section -->
<div class="row">
	<div class="col-md-4">
		<div class="list-group">
		<a href="#" class="list-group-item active"> Quick Links </a>
		<a href="buy_data.php" class="list-group-item"> Buy Data </a>
		<a href="airtime_vtu.php" class="list-group-item"> Airtime VTU </a>
		<a href="bills.php" class="list-group-item"> Pay Bills </a>
		<a href="electricity.php" class="list-group-item"> Electricity Bills </a> 
		<a href="epin.php" class="list-group-item"> Recharge Card Printing </a> 
		<a href="transfer.php" class="list-group-item"> Transfer </a>
    <a href="transaction.php" class="list-group-item"> Transactions </a>
     <a href="membership.php" class="list-group-item"> Upgrade Account </a>

	</div>
</div>
<!-- pages section end -->
<!-- Recent transactions -->
   <div class="col-md-8">
   	<div class="card shadow mb-4" style="padding: 0;">
   		<div class="card-header py-3 bgcard-header">
   			<h5 class="m-0 font-weight-bold">Recent transaction </h5>
   		</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
               <tr>
                <th> Service </th>
                 <th> Number </th>
                  <th> Price </th>
                   <th> Status </th>
                    <th> Trans. Id </th>
                   <th> Date </th>
                 </tr>
               </thead>
               <tbody>
                  <tr>
                  <td>  MTN   </td>
                  <td> 08162573237 </td>
                  <td> &#8358;1125 </td>
                  <td style="color: green;"><b> Approved </b></td>
                  <td> 578687 </td>
                  <td> Sun 04 June, 2023; 11:30 AM</td>
                  </tr>

                  <tr>
                  <td>  MTN   </td>
                  <td> 08162573237 </td>
                  <td> &#8358;1200 </td>
                  <td style="color: green;"><b> Approved </b></td>
                  <td> 555776 </td>
                  <td> Wed 31 May, 2023; 12:51 AM</td>
                  </tr>

                  <tr>
                  <td>  MTN   </td>
                  <td> 08162573237 </td>
                  <td> &#8358;1125 </td>
                  <td style="color: red;"><b> Cancelled </b></td>
                  <td> 554239 </td>
                  <td> Tue 30 May, 2023; 8:11 PM</td>
                  </tr>

                                <tr>
                  <td>  MTN   </td>
                  <td> 08162573237 </td>
                  <td> &#8358;1125 </td>
                  
                                    <td style="color: green;"><b> Approved </b></td>
                
                  <td> 531304 </td>
                <td> Thu 25 May, 2023; 11:08 PM</td>
                  </tr>

                                <tr>
                  <td>  MTN   </td>
                  <td> 08162573237 </td>
                  <td> &#8358;1125 </td>
                  
                                    <td style="color: green;"><b> Approved </b></td>
                
                  <td> 507244 </td>
                <td> Sun 21 May, 2023; 12:39 PM</td>
                  </tr>

                                <tr>
                  <td>  MTN   </td>
                  <td> 08162573237 </td>
                  <td> &#8358;1200 </td>
                  
                                    <td style="color: green;"><b> Approved </b></td>
                
                  <td> 486643 </td>
                <td> Tue 16 May, 2023; 8:19 PM</td>
                  </tr>

                                <tr>
                  <td>  MTN   </td>
                  <td> 08162573237 </td>
                  <td> &#8358;1125 </td>
                  
                                    <td style="color: green;"><b> Approved </b></td>
                
                  <td> 465880 </td>
                <td> Fri 12 May, 2023; 11:15 AM</td>
                  </tr>

                                <tr>
                  <td>  GLO   </td>
                  <td> 09054444238 </td>
                  <td> &#8358;1250 </td>
                  
                                    <td style="color: green;"><b> Approved </b></td>
                
                  <td> 447363 </td>
                <td> Mon 08 May, 2023; 5:01 PM</td>
                  </tr>

                                  </tbody>
             </table>
             <a href="transaction.php"> <button type="submit" class="btnn btn-primary"> View All </button> </a>
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
</div>

		<!-- dashboard home end -->
		<script>
		       function showema(){
              
              document.getElementById("wemadetail").style.display = 'block';
              document.getElementById("sterlingdetail").style.display = 'none';
              document.getElementById("gtbdetail").style.display = 'none';
              document.getElementById("vfddetail").style.display = 'none';
               
              document.getElementById("wema").classList.add("btn-success");
              document.getElementById("sterling").classList.remove('btn-success');
              document.getElementById("gtb").classList.remove('btn-success');
              document.getElementById("vfd").classList.remove('btn-success');
                 
             // document.getElementById("wema").classList.remove("btn-primary");
              //document.getElementById("sterling").classList.add("btn-primary");
             // document.getElementById("gtb").classList.add("btn-primary");
             // document.getElementById("vfd").classList.add("btn-primary");
                 
              document.getElementById("vfdfeedetail").style.display = 'none';
              document.getElementById("monnidetail").style.display = 'block';
               
          }
          function showsterling(){
              
               document.getElementById("sterlingdetail").style.display = 'block';
               document.getElementById("wemadetail").style.display = 'none';
                 document.getElementById("gtbdetail").style.display = 'none';
                 document.getElementById("vfddetail").style.display = 'none';
               
                document.getElementById("sterling").classList.add("btn-success");
                document.getElementById("wema").classList.remove('btn-success');
                document.getElementById("gtb").classList.remove('btn-success');
                 document.getElementById("vfd").classList.remove('btn-success');
                 
                //document.getElementById("sterling").classList.remove("btn-primary");
                //document.getElementById("wema").classList.add("btn-primary");
                //document.getElementById("gtb").classList.add("btn-primary");
                //document.getElementById("vfd").classList.add("btn-primary");
                      
                      document.getElementById("vfdfeedetail").style.display = 'none';
                 document.getElementById("monnidetail").style.display = 'block';
               
          }
                 function showgtb(){
                document.getElementById("gtbdetail").style.display = 'block';
               document.getElementById("sterlingdetail").style.display = 'none';
               document.getElementById("wemadetail").style.display = 'none';
               document.getElementById("vfddetail").style.display = 'none';
               
                document.getElementById("sterling").classList.remove('btn-success');
                document.getElementById("wema").classList.remove('btn-success');
                document.getElementById("gtb").classList.add("btn-success");
                document.getElementById("vfd").classList.remove('btn-success');
                 
                //document.getElementById("sterling").classList.add("btn-primary");
                //document.getElementById("wema").classList.add("btn-primary");
                //document.getElementById("gtb").classList.remove("btn-primary");
                //document.getElementById("vfd").classList.add("btn-primary");
                      
                document.getElementById("vfdfeedetail").style.display = 'none';
                document.getElementById("monnidetail").style.display = 'block';
               
          }
          
                   function showvfd(){
                document.getElementById("gtbdetail").style.display = 'none';
               document.getElementById("sterlingdetail").style.display = 'none';
               document.getElementById("wemadetail").style.display = 'none';
               document.getElementById("vfddetail").style.display = 'block';
               
                document.getElementById("sterling").classList.remove('btn-success');
                document.getElementById("wema").classList.remove('btn-success');
                document.getElementById("gtb").classList.remove('btn-success');
                document.getElementById("vfd").classList.add("btn-success");
                 
                //document.getElementById("sterling").classList.add("btn-primary");
                //document.getElementById("wema").classList.add("btn-primary");
                //document.getElementById("gtb").classList.add("btn-primary");
                //document.getElementById("vfd").classList.remove("btn-primary");
            
            document.getElementById("vfdfeedetail").style.display = 'block';
                 document.getElementById("monnidetail").style.display = 'none';
               
          }
		</script>
		<!-- footer start -->
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
		<script src=" settings.js"></script>
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
		<script src=" js/modernizr-2.8.3.min.js"></script>
        <script src=" js/jquery-1.12.0.min.js"></script>
        <script src=" js/bootstrap.min.js"></script>
        <script src=" js/bootstrap.js"></script>
        <script src=" js/bootstrap.bundle.js"></script>
        <script src=" js/bootstrap.bundle.min.js"></script>
        <script src=" js/owl.carousel.min.js"></script>
        <script src=" js/jquery.min.js"></script>
        <script src=" js/jquery.meanmenu.js"></script>
        <script src=" js/jquery.mixitup.min.js"></script>
        <script src=" js/jquery.magnific-popup.min.js"></script>
        <script src=" js/jquery.counterup.min.js"></script>
        <script src=" js/waypoints.min.js"></script>
        <script src=" js/plugins.js"></script>
        <script src=" js/main.js"></script>

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