<?php


include "header.php";
?>	
			<!-- Start Breadcrumbs -->
			<section class="breadcrumbs">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<h2>API Education Bills </h2>
							<ul class="bread-list">
								<li><a href="index.html">Home<i class="fa fa-angle-right"></i></a></li>
								<li class="active"><a href="APIEducation.html">API Education Bills</a></li>
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
													<h2><a href="APIEducation.html">API - Education Bills</a></h2>
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
                  <td> eduType </td>
                  <td>  eduType code, click <a href="#eduCode">Here</a> to see </td>
                 
                  
                  </tr></tbody>
											  </table>
											</div>
										  </div>
									 </div>
									</div>
								  </div><br/>
													
															<h4>API Command:</h4> <br/>
															<p>https://subandgain.com/api/education.php?username=****&apiKey=****&eduType=****<br/>
//Replace **** with your username, api key...<br/><br/>
<span style="text-decoration: underline;">E.g.</span><br/> 
https://subandgain.com/api/education.php?username=Peter&apiKey=sag8rqpfa8vkpn1ler56ygh8kxxw1aor8&eduType=NEONE<br/>
//where username is Peter, apiKey is sag8rqpfa8vkpn1ler56ygh8kxxw1aor8, eduType is NEONE
														 </p>
														 <h4>Response:</h4> <br/>
														 <p><span style="text-decoration: underline;"><b>JSON Format:</b></span><br/>
														 {"status":"Approved","trans_id":"ajrfcer6ct1","EduType":"NEONE","package":"One Piece Of Neco Result Checker","token":"381358765168","balance":"2500"}<br/><br/>
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
                  <td> ERR204 </td>
                  <td> Invalid EduType Code</td>
                 
                  
                  </tr>
                  <tr>  
                  <td> ERR206 </td>
                  <td> Order Not Processed</td>
                 
                  
                  </tr>
				  <tr>  
                  <td> ERR209 </td>
                  <td> Quantity not available</td>
                 
                  
                  </tr>
                 
                  </tbody>
											  </table>
											</div>
										  </div>
									 </div>
									</div>
								  </div><br/>
                                  <h4>API Query:</h4> <br/>
                                  <p>https://subandgain.com/api/query_education.php?username=****&apiKey=****&trans_id=****<br/>
//Replace **** with your username, api key...<br/><br/>
<span style="text-decoration: underline;">E.g.</span><br/> 
https://subandgain.com/api/query_education.php?username=Peter&apiKey=sag8rqpfa8vkpn1ler56ygh8kxxw1aor8&trans_id=ajrfcer6ct1<br/>
//where username is Peter, apiKey is sag8rqpfa8vkpn1ler56ygh8kxxw1aor8, trans_id is ajrfcer6ct1

<h4>Response:</h4> <br/>
														 <p><span style="text-decoration: underline;"><b>JSON Format:</b></span><br/>
														 {"status":"Approved","trans_id":"ajrfcer6ct1","network":"One Piece Of Neco Result Checker","token":"381358765168","amount":"650"}<br/><br/>
														 Else, if there is an error in your request, response will be displayed in this format: <br/>
														 {"error":"ERR210","description":"Transaction not found on SubAndGain"}
                             
														 </p>
														 <div class="row">
												<div class="col-md-12">
									 <div class="card-me">
									   <div class="card-head" id="eduCode">
										 <h5 class="m-0 font-weight-bold">NECO: </h5>
									   </div>
									   <div class="card-bodi">
										 <div class="table-responsive">
										   <table class="table table-bordered" id="dataTable" style="font-size: 16px;" width="100%" cellspacing="0">
											<thead>
              <tr>
                <th> eduType code</th>
                <th> Quantity</th>
                 
                    
                   
                 </tr>
               </thead>
               <tbody>
                <tr>
                  <td>NEONE </td>
                  <td> One Piece Of Neco Result Checker </td>
                  
                  
                  </tr>
                  <tr>  
                  <td> NETWO </td>
                  <td> Two Pieces Of Neco Result Checker </td>
                 
                  
                  </tr>
                  <tr>  
                  <td> NETHR </td>
                  <td> Three Pieces Of Neco Result Checker </td>
                 
                  
                  </tr>
                  <tr>  
                  <td> NEFOUR </td>
                  <td> Four Pieces Of Neco Result Checker </td>
                 
                  
                  </tr>
                  <tr>  
                  <td> NEFIVE </td>
                  <td>Five Pieces Of Neco Result Checker </td>
                 
                  
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