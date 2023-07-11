<?php


include "header.php";
?>			
<!-- Start Breadcrumbs -->
			<section class="breadcrumbs">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<h2>API Cable TV </h2>
							<ul class="bread-list">
								<li><a href="index.html">Home<i class="fa fa-angle-right"></i></a></li>
								<li class="active"><a href="APIBills.html">API Cable TV</a></li>
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
													<h2><a href="APIBills.html">API - Cable TV</a></h2>
													<br/>
                                                    <h4>API Verify Customer:</h4> <br/>
															<p>https://subandgain.com/api/verify_bills.php?username=****&apiKey=****&service=****&smartNumber=****<br/>
//Replace **** with your username, api key...<br/><br/>
<span style="text-decoration: underline;">E.g.</span><br/> 
https://subandgain.com/api/verify_bills.php?username=Peter&apiKey=sag8rqpfa8vkpn1ler56ygh8kxxw1aor8&service=GOTV&smartNumber=7035232726<br/>
//where username is Peter, apiKey is sag8rqpfa8vkpn1ler56ygh8kxxw1aor8, service is GOTV, smartNumber is 7035232726
														 </p>
														 <h4>Response:</h4> <br/>
														 <p><span style="text-decoration: underline;"><b>JSON Format:</b></span><br/>
														 {"status":"success","customerName":" CANW10 LAWAL KAMALDEEN","smartNumber":"7035232726"}<br/><br/>
														 Else, if there is an error in your request, the response will be displayed in this format: <br/>
														 {"error":"ERR210","description":"Invalid Customer"}
														
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
                  <td>  DSTV, GOTV or STARTIMES (UPPERCASE) </td>
                 
                  
                  </tr>
				  <tr>  
                  <td> bills_code </td>
                  <td>  bills code, click <a href="#billsCode">Here</a> to see </td>
                 
                  
                  </tr>
                  <tr>  
                  <td> smartNumber </td>
                  <td> Decoder, IUC or smartcard number </td>
                 
                  
                  </tr>
                  
                 
                  </tbody>
											  </table>
											</div>
										  </div>
									 </div>
									</div>
								  </div><br/>
													
															<h4>API Command:</h4> <br/>
															<p>https://subandgain.com/api/bills.php?username=****&apiKey=****&service=****&bills_code=****&smartNumber=****<br/>
//Replace **** with your username, api key...<br/><br/>
<span style="text-decoration: underline;">E.g.</span><br/> 
https://subandgain.com/api/bills.php?username=Peter&apiKey=sag8rqpfa8vkpn1ler56ygh8kxxw1aor8&service=GOTV&bills_code=gotv-jinja&smartNumber=7035232726<br/>
//where username is Peter, apiKey is sag8rqpfa8vkpn1ler56ygh8kxxw1aor8, service is GOTV, bills_code is gotv-jinja, smartNumber is 7035232726
														 </p>
														 <h4>Response:</h4> <br/>
														 <p><span style="text-decoration: underline;"><b>JSON Format:</b></span><br/>
														 {"status":"Approved","trans_id":"88c4r5one73","service":"GOTV","package":"GOtv Jinja","smartNumber":"7035232726","amount":"1720","balance":"2500"}<br/><br/>
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
                  <td> Invalid IUC / Smartcard Number </td>
                 
                  
                  </tr>
                  <tr>  
                  <td> ERR203 </td>
                  <td> Insufficient Balance </td>
                 
                  
                  </tr>
                  <tr>  
                  <td> ERR204 </td>
                  <td> Invalid Service</td>
                 
                  
                  </tr>
                  <tr>  
                  <td> ERR206 </td>
                  <td> Order Not Processed</td>
                 
                  
                  </tr>
				  <tr>  
                  <td> ERR207 </td>
                  <td> Bills code does not tally with service</td>
                 
                  
                  </tr>
                 
                  </tbody>
											  </table>
											</div>
										  </div>
									 </div>
									</div>
								  </div><br/>
                                  <h4>API Query:</h4> <br/>
                                  <p>https://subandgain.com/api/query_bills.php?username=****&apiKey=****&trans_id=****<br/>
//Replace **** with your username, api key...<br/><br/>
<span style="text-decoration: underline;">E.g.</span><br/> 
https://subandgain.com/api/query_bills.php?username=Peter&apiKey=sag8rqpfa8vkpn1ler56ygh8kxxw1aor8&trans_id=88c4r5one73<br/>
//where username is Peter, apiKey is sag8rqpfa8vkpn1ler56ygh8kxxw1aor8, trans_id is 88c4r5one73

<h4>Response:</h4> <br/>
														 <p><span style="text-decoration: underline;"><b>JSON Format:</b></span><br/>
														 {"status":"Approved","trans_id":"88c4r5one73","package":"GOtv Jinja","smartNumber":"7035232726","amount":"1720"}<br/><br/>
														 Else, if there is an error in your request, response will be displayed in this format: <br/>
														 {"error":"ERR210","description":"Transaction not found on SubAndGain"}
                             
														 </p>
														 <div class="row">
												<div class="col-md-12">
									 <div class="card-me">
									   <div class="card-head" id="billsCode">
										 <h5 class="m-0 font-weight-bold">DSTV: </h5>
									   </div>
									   <div class="card-bodi">
										 <div class="table-responsive">
										   <table class="table table-bordered" id="dataTable" style="font-size: 16px;" width="100%" cellspacing="0">
											<thead>
              <tr>
                <th> Bills code</th>
                <th> Package</th>
                 
                    
                   
                 </tr>
               </thead>
               <tbody>
                <tr>
                  <td>dstv-padi </td>
                  <td> Dstv Padi </td>
                  
                  
                  </tr>
                  <tr>  
                  <td> dstv-yanga </td>
                  <td> DSTV Yanga Bouquet</td>
                 
                  
                  </tr>
                  <tr>  
                  <td> dstv-confam </td>
                  <td> DSTV Confam Bouquet </td>
                 
                  
                  </tr>
                  <tr>  
                  <td> dstv6 </td>
                  <td> Dstv Asia </td>
                 
                  
                  </tr>
                  <tr>  
                  <td> dstv79 </td>
                  <td> Dstv Compact </td>
                 
                  
                  </tr>
                  <tr>  
                  <td> dstv7 </td>
                  <td> Dstv Compact Plus </td>
                 
                  
                  </tr>
                  <tr>  
                  <td> dstv3 </td>
                  <td> Dstv Premium </td>
                 
                  
                  </tr>
                  <tr>  
                  <td> dstv10 </td>
                  <td>Dstv Premium Asia</td>
                 
                  
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
										 <h5 class="m-0 font-weight-bold">GOTV: </h5>
									   </div>
									   <div class="card-bodi">
										 <div class="table-responsive">
										   <table class="table table-bordered" id="dataTable" style="font-size: 16px;" width="100%" cellspacing="0">
											<thead>
              <tr>
                <th> Bills code</th>
                <th> Package</th>
                 
                    
                   
                 </tr>
               </thead>
               <tbody>
                <tr>
                  <td>gotv-jinja </td>
                  <td> Gotv Jinja </td>
                  
                  
                  </tr>
                  <tr>  
                  <td> gotv-jolli </td>
                  <td> Gotv Jolli </td>
                 
                  
                  </tr>
                  <tr>  
                  <td> gotv-max </td>
                  <td> Gotv Max </td>
                 
                  
                  </tr>
                  <tr>  
                  <td> gotv-smallie </td>
                  <td>Gotv Smallie Monthly </td>
                 
                  
                  </tr>
                  <tr>  
                  <td> gotv-smallie-3months </td>
                  <td> Gotv Smallie Quarterly </td>
                 
                  
                  </tr>
                  <tr>  
                  <td> gotv-smallie-1year </td>
                  <td> Gotv Smallie Yearly </td>
                 
                  
                  </tr>
                  
                  <tr>  
                  <td> gotv-supa </td>
                  <td> GOtv Supa (Monthly) </td>
                 
                  
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
										 <h5 class="m-0 font-weight-bold">STARTIMES: </h5>
									   </div>
									   <div class="card-bodi">
										 <div class="table-responsive">
										   <table class="table table-bordered" id="dataTable" style="font-size: 16px;" width="100%" cellspacing="0">
											<thead>
              <tr>
                <th> Bills code</th>
                <th> Package</th>
                 
                    
                   
                 </tr>
               </thead>
               <tbody>
                <tr>
                  <td>nova </td>
                  <td> Startimes Nova </td>
                  
                  
                  </tr>
                 
                  <tr>  
                  <td> basic </td>
                  <td> Startimes Basic </td>
                 
                  
                  </tr>
                  <tr>  
                  <td> smart </td>
                  <td> Startimes Smart </td>
                 
                  
                  </tr>
                  <tr>  
                  <td> classic </td>
                  <td>Startimes Classic</td>
                 
                  
                  </tr>
                  <tr>  
                  <td> super </td>
                  <td> Startimes Super </td>
                 
                  
                  </tr>
                 
                 
                                 <tr>
                  <td>nova-weekly </td>
                  <td> StarTimes Nova (Weekly) </td>
                  
                  
                  </tr>
                 
                  <tr>  
                  <td> basic-weekly </td>
                  <td> StarTimes Basic (Weekly) </td>
                 
                  
                  </tr>
                  <tr>  
                  <td> smart-weekly </td>
                  <td> StarTimes Smart (Weekly) </td>
                 
                  
                  </tr>
                  <tr>  
                  <td> classic-weekly </td>
                  <td>StarTimes Classic (Weekly)</td>
                 
                  
                  </tr>
                  <tr>  
                  <td> super-weekly </td>
                  <td> StarTimes Super (Weekly) </td>
                 
                  
                  </tr>
                  
                  
                                  <tr>
                  <td>nova-daily </td>
                  <td> StarTimes Nova (Daily)</td>
                  
                  
                  </tr>
                 
                  <tr>  
                  <td> basic-daily </td>
                  <td> StarTimes Basic (Daily) </td>
                 
                  
                  </tr>
                  <tr>  
                  <td> smart-daily </td>
                  <td> StarTimes Smart (Daily) </td>
                 
                  
                  </tr>
                  <tr>  
                  <td> classic-daily </td>
                  <td>StarTimes Classic (Daily)</td>
                 
                  
                  </tr>
                  <tr>  
                  <td> super-daily </td>
                  <td> StarTimes Super (Daily) </td>
                 
                  
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