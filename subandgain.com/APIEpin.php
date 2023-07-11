<?php


include "header.php";
?>	
			<!-- Start Breadcrumbs -->
			<section class="breadcrumbs">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<h2>API Recharge Card Printing </h2>
							<ul class="bread-list">
								<li><a href="index.html">Home<i class="fa fa-angle-right"></i></a></li>
								<li class="active"><a href="APIEducation.html">API Recharge Card Printing</a></li>
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
													<h2><a href="APIEpin.html">API - Recharge Card Printing</a></h2>
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
                  <td> MTN, Glo, Airtel or 9MOBILE  </td>
                 
                  </tr>
                     <tr>  
                  <td> denomination </td>
                  <td>  denomination code, click <a href="#epinCode">Here</a> to see  </td>
                 
                  </tr>
				  <tr>  
                  <td> name </td>
                  <td>  Company name to show on generated pin</td>
                 
                  
                  </tr>
                  	  <tr>  
                  <td> quantity </td>
                  <td>  quantity of epin to be generated</td>
                 
                  
                  </tr>
                  
                  
                  </tbody>
											  </table>
											</div>
										  </div>
									 </div>
									</div>
								  </div><br/>
													
															<h4>API Command:</h4> <br/>
															<p>https://subandgain.com/api/epin.php?username=****&apiKey=****&network=****&denomination=****&name=****&quantity=****<br/>
//Replace **** with your username, api key...<br/><br/>
<span style="text-decoration: underline;">E.g.</span><br/> 
https://subandgain.com/api/epin.php?username=Peter&apiKey=sag8rqpfa8vkpn1ler56ygh8kxxw1aor8&network=MTN&denomination=100&name=PTech&quantity=2<br/>
//where username is Peter, apiKey is sag8rqpfa8vkpn1ler56ygh8kxxw1aor8, network is MTN, denomination is 100, name is PTech, quantity is 2
														 </p>
														 <h4>Response:</h4> <br/>
														 <p><span style="text-decoration: underline;"><b>JSON Format:</b></span><br/>
														{"status":"Approved","transaction_id":"ilucdtz9ngo","network":"MTN","denomination":"100","quantity":"2","bundle": [{"token":"9032-1669-9730-07262","serial":"00000022454369256"},{"token":"9053-6524-7385-45315","serial":"00000022454369260"}],"balance":"2000"}<br/><br/>
														 Else, if there is an error in your request, one of the responses below will be displayed in this format: <br/>
														 {"error":"ERR201","description":"Invalid Username or Api Key"}
														 
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
                  <td> ERR203 </td>
                  <td> Insufficient Balance </td>
                 
                  
                  </tr>
                  <tr>  
                  <td> ERR205 </td>
                  <td> Quantity not available</td>
                 
                  
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
                                 
														 <div class="row">
												<div class="col-md-12">
									 <div class="card-me">
									   <div class="card-head" id="epinCode">
										 <h5 class="m-0 font-weight-bold">Denomination: </h5>
									   </div>
									   <div class="card-bodi">
										 <div class="table-responsive">
										   <table class="table table-bordered" id="dataTable" style="font-size: 16px;" width="100%" cellspacing="0">
											<thead>
              <tr>
                <th> denomination code</th>
                <th> Description</th>
                 
                    
                   
                 </tr>
               </thead>
               <tbody>
                <tr>
                  <td>100 </td>
                  <td> N100 recharge card epin </td>
                  
                  
                  </tr>
                    <tr>
                  <td>200 </td>
                  <td> N200 recharge card epin </td>
                  
                  
                  </tr>
                    <tr>
                  <td>500 </td>
                  <td> N500 recharge card epin </td>
                  
                  
                  </tr>
                    <tr>
                  <td>1000 </td>
                  <td> N1000 recharge card epin </td>
                  
                  
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