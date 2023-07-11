<?php


include "header.php";
?>	
			<!-- Start Breadcrumbs -->
			<section class="breadcrumbs">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<h2>API Electricity </h2>
							<ul class="bread-list">
								<li><a href="index.html">Home<i class="fa fa-angle-right"></i></a></li>
								<li class="active"><a href="APIElectricity.html">API Electricity</a></li>
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
													<h2><a href="APIElectricity.html">API - Electricity</a></h2>
													<br/>
                                                    <h4>API Verify Customer:</h4> <br/>
															<p>https://subandgain.com/api/verify_electricity.php?username=****&apiKey=****&service=****&meterNumber=****&meterType=****<br/>
//Replace **** with your username, api key...<br/><br/>
<span style="text-decoration: underline;">E.g.</span><br/> 
https://subandgain.com/api/verify_electricity.php?username=Peter&apiKey=sag8rqpfa8vkpn1ler56ygh8kxxw1aor8&service=AEDC&meterNumber=45036572027&meterType=PRE<br/>
//where username is Peter, apiKey is sag8rqpfa8vkpn1ler56ygh8kxxw1aor8, service is AEDC, meterNumber is 45036572027, meterType is PRE
														 </p>
														 <h4>Response:</h4> <br/>
														 <p><span style="text-decoration: underline;"><b>JSON Format:</b></span><br/>
														 {"status":"success","customerName":"Ajibola Bolaji","accessToken":"230111498000"}<br/><br/>
														 Else, if there is an error in your request, the response will be displayed in this format: <br/>
														 {"error":"ERR210","description":"Error! Invalid meter number. Meter Number is unable to be validated."}
														
														 </p><br/>
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
                  <td> service </td>
                  <td>  service code, click <a href="#serviceCode">Here</a> to see </td>
                 
                  
                  </tr>
                  <tr>  
                  <td> meterNumber </td>
                  <td> meter number </td>
                 
                  
                  </tr>
                  <tr>  
                  <td> meterType </td>
                  <td> PRE or POST (UPPERCASE) - PRE for prepaid, POST for postpaid</td>
                 
                  
                  </tr>
                      <tr>  
                  <td> accessToken </td>
                  <td> access token generated from the verify meter endpoint </td>
                 
                  
                  </tr>
                  <tr>  
                  <td> amount </td>
                  <td> amount of electricity bills - minimum 1000 </td>
                 
                  
                  </tr>
                 
                  </tbody>
											  </table>
											</div>
										  </div>
									 </div>
									</div>
								  </div><br/>
													
															<h4>API Command:</h4> <br/>
															<p>https://subandgain.com/api/electricity.php?username=****&apiKey=****&service=****&meterNumber=****&meterType=****&accessToken=****&amount=****<br/>
//Replace **** with your username, api key...<br/><br/>
<span style="text-decoration: underline;">E.g.</span><br/> 
https://subandgain.com/api/electricity.php?username=Peter&apiKey=sag8rqpfa8vkpn1ler56ygh8kxxw1aor8&service=AEDC&meterNumber=45036572027&meterType=PRE&accessToken=230111498000&amount=2000<br/>
//where username is Peter, apiKey is sag8rqpfa8vkpn1ler56ygh8kxxw1aor8, service is AEDC, meterNumber is 45036572027, meterType is PRE, accessToken is 230111498000, amount is 2000
														 </p>
														 <h4>Response:</h4> <br/>
														 <p><span style="text-decoration: underline;"><b>JSON Format:</b></span><br/>
														 {"status":"Approved","trans_id":"88c4r5one73","service":"Abuja Electric - AEDC","MeterType":"PRE","MeterNo":"45036572027","MeterToken":"6646-4560-2879-0511-8019","amount":"2000","balance":"2500"}<br/><br/>
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
                  <td> Invalid Meter number </td>
                 
                  
                  </tr>
                  <tr>  
                  <td> ERR203 </td>
                  <td> Insufficient Balance </td>
                 
                  
                  </tr>
                  <tr>  
                  <td> ERR204 </td>
                  <td> Invalid Service Code</td>
                 
                  
                  </tr>
				  <tr>  
                  <td> ERR205 </td>
                  <td> Less Than Minimum Amount</td>
                 
                  
                  </tr>
                  <tr>  
                  <td> ERR206 </td>
                  <td> Order Not Processed</td>
                 
                  
                  </tr>
				  <tr>  
                  <td> ERR208 </td>
                  <td> Meter Type does not tally with Service</td>
                 
                  
                  </tr>
                 
                  </tbody>
											  </table>
											</div>
										  </div>
									 </div>
									</div>
								  </div><br/>
                                  <h4>API Query:</h4> <br/>
                                  <p>https://subandgain.com/api/query_electricity.php?username=****&apiKey=****&trans_id=****<br/>
//Replace **** with your username, api key...<br/><br/>
<span style="text-decoration: underline;">E.g.</span><br/> 
https://subandgain.com/api/query_electricity.php?username=Peter&apiKey=sag8rqpfa8vkpn1ler56ygh8kxxw1aor8&trans_id=88c4r5one73<br/>
//where username is Peter, apiKey is sag8rqpfa8vkpn1ler56ygh8kxxw1aor8, trans_id is 88c4r5one73

<h4>Response:</h4> <br/>
														 <p><span style="text-decoration: underline;"><b>JSON Format:</b></span><br/>
														 {"status":"Approved","trans_id":"88c4r5one73","service":"Abuja Electric - AEDC for 45036572027","MeterNo":"45036572027","MeterToken":"6646-4560-2879-0511-8019","amount":"2000"}<br/><br/>
														 Else, if there is an error in your request, response will be displayed in this format: <br/>
														 {"error":"ERR210","description":"Transaction not found on SubAndGain"}
                             
														 </p>
														 <div class="row">
												<div class="col-md-12">
									 <div class="card-me">
									   <div class="card-head" id="serviceCode">
										 <h5 class="m-0 font-weight-bold">Electricity: </h5>
									   </div>
									   <div class="card-bodi">
										 <div class="table-responsive">
										   <table class="table table-bordered" id="dataTable" style="font-size: 16px;" width="100%" cellspacing="0">
											<thead>
              <tr>
                <th> Service code</th>
                <th> Distributor</th>
                 
                    
                   
                 </tr>
               </thead>
               <tbody>
                <tr>
                  <td>IKEDC </td>
                  <td> Ikeja Electric </td>
                  
                  
                  </tr>
                  <tr>  
                  <td> EKEDC </td>
                  <td> Eko Electric </td>
                 
                  
                  </tr>
                  <tr>  
                  <td> AEDC </td>
                  <td> Abuja Electric </td>
                 
                  
                  </tr>
                  <tr>  
                  <td> KEDC </td>
                  <td> Kano Electric </td>
                 
                  
                  </tr>
                  <tr>  
                  <td> JEDC </td>
                  <td> Jos Electric </td>
                 
                  
                  </tr>
                  <tr>  
                  <td> IBEDC </td>
                  <td> Ibadan Electric </td>
                 
                  
                  </tr>
                  <tr>  
                  <td> KAEDC </td>
                  <td> Kaduna Electric </td>
                 
                  
                  </tr>
                  <tr>  
                  <td> EEDC </td>
                  <td> Enugu Electric </td>
                 
                  
                  </tr>
                     <tr>  
                  <td> PhED </td>
                  <td>Port Harcourt Electric </td>
                 
                  
                  </tr>
                  </tbody>
											  </table>
											</div>
										  </div>
									 </div>
									</div>
								  </div>
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