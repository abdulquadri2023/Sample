<?php


include "header.php";
?>			<!-- Start Breadcrumbs -->
			<section class="breadcrumbs">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<h2>API Buy Data </h2>
							<ul class="bread-list">
								<li><a href="index.html">Home<i class="fa fa-angle-right"></i></a></li>
								<li class="active"><a href="APIBuyData.html">API Buy Data</a></li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!--/ End Breadcrumbs -->
		<!-- Start Blog -->
        <section id="blog-main" class="blog-main archive single section">
				<div class="container">
					<div class="row">
						<div class="blog-main">	
							
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-12 col-sm-12 col-xs-12">
										<!-- Single Post -->
										<div class="single-blog">
											<div class="blog-post">
												
												<div class="blog-info">
													<h2><a href="APIBuyData.html">API - Buy Data</a></h2>
													<br/>
														<div class="row">
												<div class="col-md-12">
									 <div class="card-me">
									   <div class="card-head">
										 <h5 class="m-0 font-weight-bold">Parameters: </h5>
									   </div>
									   <div class="card-bodi">
										 <div class="table-responsive">
										   <table class="table table-bordered" id="dataTable" style="font-size: 16px;" width="100%" cellspacing="0">
											<thead>
              <tr>
                <th> Parameter_Name </th>
                <th> Description</th>
                 
                    
                   
                 </tr>
               </thead>
               <tbody>
                <tr>
                  <td>username </td>
                  <td> Your SubAndGain username </td>
                  
                  
                  </tr>
                  <tr>  
                  <td> apiKey </td>
                  <td> Your SubAndGain API Key </td>
                 
                  
                  </tr>
                  <tr>  
                  <td> network </td>
                  <td> MTN, GLO, AIRTEL or 9MOBILE (UPPERCASE) </td>
                 
                  
                  </tr>
                  <tr>  
                  <td> dataPlan </td>
                  <td> data plan code, click <a href="#mtnDataPlan">Here</a> to see </td>
                 
                  
                  </tr>
                  <tr>  
                  <td> phoneNumber </td>
                  <td> recipient number </td>
                 
                  
                  </tr>
                 
                  </tbody>
											  </table>
											</div>
										  </div>
									 </div>
									</div>
								  </div><br/>
													
															<h4>API Command:</h4> <br/>
															<p>https://subandgain.com/api/data.php?username=****&apiKey=****&network=****&dataPlan=****&phoneNumber=****<br/>
//Replace **** with your username, api key...<br/><br/>
<span style="text-decoration: underline;">E.g.</span><br/> 
https://subandgain.com/api/data.php?username=Peter&apiKey=sag8rqpfa8vkpn1ler56ygh8kxxw1aor8&network=MTN&dataPlan=1GB&phoneNumber=09067879810<br/>
//where username is Peter, apiKey is sag8rqpfa8vkpn1ler56ygh8kxxw1aor8, network is MTN, dataPlan = 1GB, phoneNumber is 09067879810
														 </p>
														 <h4>Response:</h4> <br/>
														 <p><span style="text-decoration: underline;"><b>JSON Format:</b></span><br/>
														 {"status":"Approved","trans_id":"88c4r5one73","network":"MTN","dataPlan":"1GB","phoneNumber":"09067879810","api_response":"Dear Customer, You have successfully shared 1GB Data to 2349067879810.","balance":"2500"}<br/><br/>
														 Else, if there is an error in your request, one of the responses below will be displayed in this format: <br/>
														 {"error":"ERR201","description":"Invalid Username or Api Key"}
														 <br/>
														 status can be - Approved or Cancelled
														 </p>
														 	<div class="row">
												<div class="col-md-12">
									 <div class="card-me">
									   <div class="card-head">
										 <h5 class="m-0 font-weight-bold">Responses: </h5>
									   </div>
									   <div class="card-bodi">
										 <div class="table-responsive">
										   <table class="table table-bordered" id="dataTable" style="font-size: 16px;" width="100%" cellspacing="0">
											<thead>
              <tr>
                <th> Error </th>
                <th> Description</th>
                 
                    
                   
                 </tr>
               </thead>
               <tbody>
                <tr>
                  <td>ERR200 </td>
                  <td> Username Field Is Empty </td>
                  
                  
                  </tr>
                  <tr>  
                  <td> ERR201 </td>
                  <td> Invalid Username or Api Key </td>
                 
                  
                  </tr>
                  <tr>  
                  <td> ERR202 </td>
                  <td> Invalid Recipient number </td>
                 
                  
                  </tr>
                  <tr>  
                  <td> ERR203 </td>
                  <td> Insufficient Balance </td>
                 
                  
                  </tr>
                  <tr>  
                  <td> ERR204 </td>
                  <td> Invalid Network</td>
                 
                  
                  </tr>
                  <tr>  
                  <td> ERR206 </td>
                  <td> Order Not Processed</td>
                 
                  
                  </tr>
                  <tr>  
                  <td> ERR207 </td>
                  <td> Data Plan does not tally with Network</td>
                 
                  
                  </tr>
                 
                  </tbody>
											  </table>
											</div>
										  </div>
									 </div>
									</div>
								  </div><br/>
                                  <h4>API Query:</h4> <br/>
                                  <p>https://subandgain.com/api/query_data.php?username=****&apiKey=****&trans_id=****<br/>
//Replace **** with your username, api key...<br/><br/>
<span style="text-decoration: underline;">E.g.</span><br/> 
https://subandgain.com/api/query_data.php?username=Peter&apiKey=sag8rqpfa8vkpn1ler56ygh8kxxw1aor8&trans_id=88c4r5one73<br/>
//where username is Peter, apiKey is sag8rqpfa8vkpn1ler56ygh8kxxw1aor8, trans_id is 88c4r5one73

<h4>Response:</h4> <br/>
														 <p><span style="text-decoration: underline;"><b>JSON Format:</b></span><br/>
														 {"status":"Approved","trans_id":"88c4r5one73","network":"MTN","phoneNumber":"09067879810","amount":"235","dataPlan":"1GB","api_response":"Dear Customer, You have successfully shared 1GB Data to 2349067879810."}<br/><br/>
														 Else, if there is an error in your request, response will be displayed in this format: <br/>
														 {"error":"ERR210","description":"Transaction not found on SubAndGain"}
                             
														 </p>
														 <div class="row">
												<div class="col-md-12">
									 <div class="card-me">
									   <div class="card-head" id="mtnDataPlan">
										 <h5 class="m-0 font-weight-bold">MTN: </h5>
									   </div>
									   <div class="card-bodi">
										 <div class="table-responsive">
										   <table class="table table-bordered" id="dataTable" style="font-size: 16px;" width="100%" cellspacing="0">
											<thead>
              <tr>
                <th> Data Bundle </th>
                <th> dataPlan</th>
                 <th> Type </th>
                <th> Durations</th>
                 
                    
                   
                 </tr>
               </thead>
               <tbody>
                                   <tr>
                  <td>500MB </td>
                  <td> 500MB </td>
                   <td>SME </td>
                  <td> (30 Days) </td>
                  
                  
                  </tr>
                                  <tr>
                  <td>1GB </td>
                  <td> 1GB </td>
                   <td>SME </td>
                  <td> (30 Days) </td>
                  
                  
                  </tr>
                                  <tr>
                  <td>2GB </td>
                  <td> 2GB </td>
                   <td>SME </td>
                  <td> (30 Days) </td>
                  
                  
                  </tr>
                                  <tr>
                  <td>3GB </td>
                  <td> 3GB </td>
                   <td>SME </td>
                  <td> (30 Days) </td>
                  
                  
                  </tr>
                                  <tr>
                  <td>5GB </td>
                  <td> 5GB </td>
                   <td>SME </td>
                  <td> (30 Days) </td>
                  
                  
                  </tr>
                                  <tr>
                  <td>10GB </td>
                  <td> 10GB </td>
                   <td>SME </td>
                  <td> (30 Days) </td>
                  
                  
                  </tr>
                                  <tr>
                  <td>500.0MB </td>
                  <td> 500.0MB </td>
                   <td>CORPORATE GIFTING </td>
                  <td> (30 Days) </td>
                  
                  
                  </tr>
                                  <tr>
                  <td>1.0GB </td>
                  <td> 1.0GB </td>
                   <td>CORPORATE GIFTING </td>
                  <td> (30 Days) </td>
                  
                  
                  </tr>
                                  <tr>
                  <td>2.0GB </td>
                  <td> 2.0GB </td>
                   <td>CORPORATE GIFTING </td>
                  <td> (30 Days) </td>
                  
                  
                  </tr>
                                  <tr>
                  <td>3.0GB </td>
                  <td> 3.0GB </td>
                   <td>CORPORATE GIFTING </td>
                  <td> (30 Days) </td>
                  
                  
                  </tr>
                                  <tr>
                  <td>5.0GB </td>
                  <td> 5.0GB </td>
                   <td>CORPORATE GIFTING </td>
                  <td> (30 Days) </td>
                  
                  
                  </tr>
                                  <tr>
                  <td>10.0GB </td>
                  <td> 10.0GB </td>
                   <td>CORPORATE GIFTING </td>
                  <td> (30 Days) </td>
                  
                  
                  </tr>
                                  <tr>
                  <td>15.0GB </td>
                  <td> 15.0GB </td>
                   <td>CORPORATE GIFTING </td>
                  <td> (30 Days) </td>
                  
                  
                  </tr>
                                  <tr>
                  <td>20.0GB </td>
                  <td> 20.0GB </td>
                   <td>CORPORATE GIFTING </td>
                  <td> (30 Days) </td>
                  
                  
                  </tr>
                                  <tr>
                  <td>40.0GB </td>
                  <td> 40.0GB </td>
                   <td>CORPORATE GIFTING </td>
                  <td> (30 Days) </td>
                  
                  
                  </tr>
                                  <tr>
                  <td>100.0GB </td>
                  <td> 100.0GB </td>
                   <td>CORPORATE GIFTING </td>
                  <td> (30 Days) </td>
                  
                  
                  </tr>
                                  <tr>
                  <td>50.0MB </td>
                  <td> 50.0MB </td>
                   <td>CORPORATE GIFTING </td>
                  <td> (30 Days) </td>
                  
                  
                  </tr>
                                  <tr>
                  <td>150.0MB </td>
                  <td> 150.0MB </td>
                   <td>CORPORATE GIFTING </td>
                  <td> (30 Days) </td>
                  
                  
                  </tr>
                                  <tr>
                  <td>250.0MB </td>
                  <td> 250.0MB </td>
                   <td>CORPORATE GIFTING </td>
                  <td> (30 Days) </td>
                  
                  
                  </tr>
                                  <tr>
                  <td>12.0GB </td>
                  <td> 12.0GB </td>
                   <td>CORPORATE GIFTING </td>
                  <td> (30 Days) </td>
                  
                  
                  </tr>
                                  <tr>
                  <td>60.0GB </td>
                  <td> 60.0GB </td>
                   <td>CORPORATE GIFTING </td>
                  <td> (30 Days) </td>
                  
                  
                  </tr>
                                    
                  
                  
                  </tbody>
											  </table>
											</div>
										  </div>
									 </div>
									</div>
								  </div><br/>
								  <div class="row">
												<div class="col-md-12">
									 <div class="card-me">
									   <div class="card-head">
										 <h5 class="m-0 font-weight-bold">GLO: </h5>
									   </div>
									   <div class="card-bodi">
										 <div class="table-responsive">
										   <table class="table table-bordered" id="dataTable" style="font-size: 16px;" width="100%" cellspacing="0">
											<thead>
              <tr>
                <th> Data Bundle </th>
                <th> dataPlan</th>
                 <th> Type </th>
                <th> Durations</th>
                 </tr>
               </thead>
               <tbody>
                                 <tr>
                  <td>200.0MB </td>
                  <td> 200.0MB </td>
                   <td>CORPORATE GIFTING </td>
                  <td> (30 Days) </td>
                  
                  
                  </tr>
                                  <tr>
                  <td>500.0MB </td>
                  <td> 500.0MB </td>
                   <td>CORPORATE GIFTING </td>
                  <td> (30 Days) </td>
                  
                  
                  </tr>
                                  <tr>
                  <td>1.0GB </td>
                  <td> 1.0GB </td>
                   <td>CORPORATE GIFTING </td>
                  <td> (30 Days) </td>
                  
                  
                  </tr>
                                  <tr>
                  <td>2.0GB </td>
                  <td> 2.0GB </td>
                   <td>CORPORATE GIFTING </td>
                  <td> (30 Days) </td>
                  
                  
                  </tr>
                                  <tr>
                  <td>3.0GB </td>
                  <td> 3.0GB </td>
                   <td>CORPORATE GIFTING </td>
                  <td> (30 Days) </td>
                  
                  
                  </tr>
                                  <tr>
                  <td>5.0GB </td>
                  <td> 5.0GB </td>
                   <td>CORPORATE GIFTING </td>
                  <td> (30 Days) </td>
                  
                  
                  </tr>
                                  <tr>
                  <td>10GB </td>
                  <td> 10GB </td>
                   <td>CORPORATE GIFTING </td>
                  <td> (30 Days) </td>
                  
                  
                  </tr>
                                   
                  </tbody>
											  </table>
											</div>
										  </div>
									 </div>
									</div>
								  </div><br/>
								  <div class="row">
												<div class="col-md-12">
									 <div class="card-me">
									   <div class="card-head">
										 <h5 class="m-0 font-weight-bold">AIRTEL: </h5>
									   </div>
									   <div class="card-bodi">
										 <div class="table-responsive">
										   <table class="table table-bordered" id="dataTable" style="font-size: 16px;" width="100%" cellspacing="0">
											<thead>
              <tr>
              <th> Data Bundle </th>
                <th> dataPlan</th>
                 <th> Type </th>
                <th> Durations</th>
                   
                 </tr>
               </thead>
               <tbody>
                                <tr>
                  <td>100MB </td>
                  <td> 100MB </td>
                   <td>CORPORATE GIFTING </td>
                  <td> (7 Days) </td>
                  
                  
                  </tr>
                                  <tr>
                  <td>300MB </td>
                  <td> 300MB </td>
                   <td>CORPORATE GIFTING </td>
                  <td> (7 Days) </td>
                  
                  
                  </tr>
                                  <tr>
                  <td>500MB </td>
                  <td> 500MB </td>
                   <td>CORPORATE GIFTING </td>
                  <td> (MONTHLY) </td>
                  
                  
                  </tr>
                                  <tr>
                  <td>1GB </td>
                  <td> 1GB </td>
                   <td>CORPORATE GIFTING </td>
                  <td> (MONTHLY) </td>
                  
                  
                  </tr>
                                  <tr>
                  <td>2GB </td>
                  <td> 2GB </td>
                   <td>CORPORATE GIFTING </td>
                  <td> (MONTHLY) </td>
                  
                  
                  </tr>
                                  <tr>
                  <td>5GB </td>
                  <td> 5GB </td>
                   <td>CORPORATE GIFTING </td>
                  <td> (MONTHLY) </td>
                  
                  
                  </tr>
                                  <tr>
                  <td>15GB </td>
                  <td> 15GB </td>
                   <td>CORPORATE GIFTING </td>
                  <td> (MONTHLY) </td>
                  
                  
                  </tr>
                                  <tr>
                  <td>20GB </td>
                  <td> 20GB </td>
                   <td>CORPORATE GIFTING </td>
                  <td> (MONTHLY) </td>
                  
                  
                  </tr>
                                  <tr>
                  <td>10.0GB </td>
                  <td> 10.0GB </td>
                   <td>CORPORATE GIFTING </td>
                  <td> (MONTHLY) </td>
                  
                  
                  </tr>
                                   
                  </tbody>
											  </table>
											</div>
										  </div>
									 </div>
									</div>
								  </div><br/>
								  
								  <div class="row">
												<div class="col-md-12">
									 <div class="card-me">
									   <div class="card-head">
										 <h5 class="m-0 font-weight-bold">9MOBILE: </h5>
									   </div>
									   <div class="card-bodi">
										 <div class="table-responsive">
										   <table class="table table-bordered" id="dataTable" style="font-size: 16px;" width="100%" cellspacing="0">
											<thead>
              <tr>
                <th> Data Bundle </th>
                <th> dataPlan</th>
                 <th> Type </th>
                <th> Durations</th>
                    
                   
                 </tr>
               </thead>
               <tbody>
                               <tr>
                  <td>500MB </td>
                  <td> 500MB </td>
                   <td>GIFTING </td>
                  <td> (30 Days) </td>
                  
                  
                  </tr>
                                  <tr>
                  <td>1.5GB </td>
                  <td> 1.5GB </td>
                   <td>GIFTING </td>
                  <td> (30 Days) </td>
                  
                  
                  </tr>
                                  <tr>
                  <td>2GB </td>
                  <td> 2GB </td>
                   <td>GIFTING </td>
                  <td> (30 Days) </td>
                  
                  
                  </tr>
                                  <tr>
                  <td>3GB </td>
                  <td> 3GB </td>
                   <td>GIFTING </td>
                  <td> (30 Days) </td>
                  
                  
                  </tr>
                                  <tr>
                  <td>4.5GB </td>
                  <td> 4.5GB </td>
                   <td>GIFTING </td>
                  <td> (30 Days) </td>
                  
                  
                  </tr>
                                  <tr>
                  <td>1GB </td>
                  <td> 1GB </td>
                   <td>CORPORATE GIFTING </td>
                  <td> (30 Days) </td>
                  
                  
                  </tr>
                                  <tr>
                  <td>5GB </td>
                  <td> 5GB </td>
                   <td>CORPORATE GIFTING </td>
                  <td> (30 Days) </td>
                  
                  
                  </tr>
                                  <tr>
                  <td>1.50GB </td>
                  <td> 1.50GB </td>
                   <td>CORPORATE GIFTING </td>
                  <td> (30 Days) </td>
                  
                  
                  </tr>
                                  <tr>
                  <td>2.0GB </td>
                  <td> 2.0GB </td>
                   <td>CORPORATE GIFTING </td>
                  <td> (30 Days) </td>
                  
                  
                  </tr>
                                  <tr>
                  <td>3.0GB </td>
                  <td> 3.0GB </td>
                   <td>CORPORATE GIFTING </td>
                  <td> (30 Days) </td>
                  
                  
                  </tr>
                                  <tr>
                  <td>10.0GB </td>
                  <td> 10.0GB </td>
                   <td>CORPORATE GIFTING </td>
                  <td> (30 Days) </td>
                  
                  
                  </tr>
                                  <tr>
                  <td>500.0MB </td>
                  <td> 500.0MB </td>
                   <td>CORPORATE GIFTING </td>
                  <td> (30 Days) </td>
                  
                  
                  </tr>
                                   
                 
                  </tbody>
											  </table>
											</div>
										  </div>
									 </div>
									</div>
								  </div><br/>
												</div>
											</div>				
										</div>
										<!--/ End Single Post -->
									</div>
									
								
								</div>	
							</div>
						</div>						
					</div>
				</div>
			</section>
			
<?php

include "footer.php";
?>