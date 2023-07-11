<?php


include "header.php";
?>
			<!-- Start Breadcrumbs -->
			<section class="breadcrumbs">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<h2>API Airtime </h2>
							<ul class="bread-list">
								<li><a href="index.html">Home<i class="fa fa-angle-right"></i></a></li>
								<li class="active"><a href="APIAirtime.html">API Airtime</a></li>
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
													<h2><a href="APIAirtime.html">API - Airtime</a></h2>
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
                  <td> phoneNumber </td>
                  <td> recipient number </td>
                 
                  
                  </tr>
                  <tr>  
                  <td> amount </td>
                  <td> airtime amount </td>
                 
                  
                  </tr>
                 
                  </tbody>
											  </table>
											</div>
										  </div>
									 </div>
									</div>
								  </div><br/>
													
															<h4>API Command:</h4> <br/>
															<p>https://subandgain.com/api/airtime.php?username=****&apiKey=****&network=****&phoneNumber=****&amount=****<br/>
//Replace **** with your username, api key...<br/><br/>
<span style="text-decoration: underline;">E.g.</span><br/> 
https://subandgain.com/api/airtime.php?username=Peter&apiKey=sag8rqpfa8vkpn1ler56ygh8kxxw1aor8&network=MTN&phoneNumber=09067879810&amount=300<br/>
//where username is Peter, apiKey is sag8rqpfa8vkpn1ler56ygh8kxxw1aor8, network is MTN, phoneNumber is 09067879810, amount = 300, 
														 </p>
														 <h4>Response:</h4> <br/>
														 <p><span style="text-decoration: underline;"><b>JSON Format:</b></span><br/>
														 {"status":"pending","trans_id":"6389736270","network":"MTN","phoneNumber":"09067879810","amount":"300","balance":"3000"}<br/><br/>
														 Else, if there is an error in your request, one of the responses below will be displayed in this format: <br/>
														 {"error":"ERR201","description":"Invalid Username or Api Key"}
														 <br/>
														 status can be - Pending, Approved or Cancelled
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
                  <td> ERR205 </td>
                  <td> Less Than Minimum Amount</td>
                 
                  
                  </tr>
				  <tr>  
                  <td> ERR206 </td>
                  <td> Order Not Processed</td>
                 
                  
                  </tr>
                 
                  </tbody>
											  </table>
											</div>
										  </div>
									 </div>
									</div>
								  </div><br/>
                                  <h4>API Query:</h4> <br/>
                                  <p>https://subandgain.com/api/query_airtime.php?username=****&apiKey=****&trans_id=****<br/>
//Replace **** with your username, api key...<br/><br/>
<span style="text-decoration: underline;">E.g.</span><br/> 
https://subandgain.com/api/query_airtime.php?username=Peter&apiKey=sag8rqpfa8vkpn1ler56ygh8kxxw1aor8&trans_id=6389736270<br/>
//where username is Peter, apiKey is sag8rqpfa8vkpn1ler56ygh8kxxw1aor8, trans_id is 6389736270

<h4>Response:</h4> <br/>
														 <p><span style="text-decoration: underline;"><b>JSON Format:</b></span><br/>
														 {"status":"Approved","trans_id":"6389736270","network":"MTN","phoneNumber":"09067879810","amount":"300"}<br/><br/>
														 Else, if there is an error in your request, response will be displayed in this format: <br/>
														 {"error":"ERR210","description":"Transaction not found on SubAndGain"}
														 
														 </p>
														
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
			