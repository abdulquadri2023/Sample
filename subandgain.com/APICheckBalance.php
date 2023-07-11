<?php


include "header.php";
?>				
<!-- Start Breadcrumbs -->
			<section class="breadcrumbs">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<h2>Check Wallet Balance </h2>
							<ul class="bread-list">
								<li><a href="index.html">Home<i class="fa fa-angle-right"></i></a></li>
								<li class="active"><a href="APICheckBalance.html">Check Wallet Balance</a></li>
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
													<h2><a href="APICheckBalance.html">API - Check Wallet Balance</a></h2>
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
                 
                  </tbody>
											  </table>
											</div>
										  </div>
									 </div>
									</div>
								  </div><br/>
													
															<h4>API Command:</h4> <br/>
															<p>https://subandgain.com/api/balance.php?username=****&apiKey=****<br/>
//Replace **** with your username, api key...<br/><br/>
<span style="text-decoration: underline;">E.g.</span><br/> 
https://subandgain.com/api/balance.php?username=Peter&apiKey=sag8rqpfa8vkpn1ler56ygh8kxxw1aor8<br/>
//where username is Peter and apiKey is sag8rqpfa8vkpn1ler56ygh8kxxw1aor8
														 </p>
														 <h4>Response:</h4> <br/>
														 <p><span style="text-decoration: underline;"><b>JSON Format:</b></span><br/>
														 {"status":"successful","balance":"2500"}<br/><br/>
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