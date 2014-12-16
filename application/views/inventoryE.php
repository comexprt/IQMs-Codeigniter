<!DOCTYPE html>

<html lang="en">

<head>  

    <link rel="shortcut icon" href="<?php echo base_url();?>/images/img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php echo base_url();?>/images/img/favicon.ico" type="image/x-icon">
	<title>IQMS | Executive</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="<?php echo base_url();?>scripts/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>scripts/vertical-navigation-barup.js"></script>
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>styles/iqms-style2.css">
	 <!-- Add jQuery library -->
		<script type="text/javascript" src="<?php echo base_url();?>fancybox/lib/jquery-1.10.1.min.js"></script>

		<!-- Add fancyBox main JS and CSS files -->
		<script type="text/javascript" src="<?php echo base_url();?>fancybox/source/jquery.fancybox.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>fancybox/source/jquery.fancybox.css" media="screen" />

		<script type="text/javascript">
			$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */
			 });
		</script>	
		<script language="javascript">
		function validate(evt) {
		  var theEvent = evt || window.event;
		  var key = theEvent.keyCode || theEvent.which;
		  key = String.fromCharCode( key );
		  var regex = /[a-z]||[0-9]|\./;
		  if( !regex.test(key) ) {
			theEvent.returnValue = false;
			if(theEvent.preventDefault) theEvent.preventDefault();
		  }
		}
	</script>
		
</head>

<body>

	<div id="outside-wrapper">
	
	
		<!-- start top navigation bar -->
	
		<div id="top-navigation-bar">
			
			<div class="top-nav-title">
				<a href="<?php echo base_url();?>AGUS_site/homee" title="Infrastructure Quality Monitoring System"><img src="<?php echo base_url();?>images/iqms_logo4.png">Infrastructure Quality Monitoring System</a>
			</div>
			
			<div class="top-nav-links">
				
				
				<ul>
					<li>Welcome <?php echo $username;?></li>
					<li><a href="<?php echo base_url();?>AGUS_site/settings" title="Settings">Settings</a></li>
					<li><a href="<?php echo base_url();?>AGUS_site/emp_logout">Sign out</a></li>
				</ul>
				
			</div>
			
		</div>
		
		<!-- end top navigation bar -->
		<div id="simioutside-wrapper">
		<div id="inside-wrapper"> <!-- width: 1300px color: white -->
		
			<div id="sidebar-container">
			
				<div class="outsidevertical-navigation-bar"> <!-- width: 300px -->
				<div class="vertical-navigation-bar"> <!-- width: 300px -->
				 
						<a  href="<?php echo base_url();?>AGUS_site/ListofProjectE"><li>List of Infrastructure </li></a>
						<a  href="<?php echo base_url();?>AGUS_site/ugusE"><li>Generating Unit Status</li></a>
						<a  href="<?php echo base_url();?>AGUS_site/inventoryE"><li>Inventory</li></a>
					</ul>
			
				</div>
				
			</div>
			</div>
			
			<div id="main-content-container"> <!-- width: 1000px; -->
			<div class="insidemain-content-container"> <!-- width: 1000px; -->
						<div Style="font-size:18px;font-weight:bold;margin-left:250px;
						margin-top:30px;width:500px;height:40px;"><center>INFRA PROJECTS STATUS SUMMARY REPORT</center></div>
						
						<div Style="font-size:18px;font-weight:bold;margin-left:250px;
						margin-top:5px;width:500px;height:40px;">
						
						<form method="post" action="<?php echo base_url()."AGUS_site/inventorysearchE"?>">
							<div Style="margin-top:7px;float:left;font-size:16px;font-weight:bold;width:50px;height:40px;">
								From
						
						
						
							</div>
							<div Style="margin-left:2px;float:left;font-size:18px;font-weight:bold;width:100px;height:40px;">
									<select style='font-weight:bold;font-size:14px;padding-left:3px;width:100px;text-align:left;height:30px;color:#0000B3;' name="From" id="From" >
															<option value="">Select</option>
															<option value="1">January</option>
															<option value="2">February</option>
															<option value="3">March</option>
															<option value="4">April</option>
															<option value="5">May</option>
															<option value="6">June</option>
															<option value="7">July</option>
															<option value="8">August</option>
															<option value="9">September</option>
															<option value="10">October</option>
															<option value="11">November</option>
															<option value="12">December</option>															
															</select>  
						
							</div>
							<div Style="margin-top:7px;padding-left:10px;margin-left:2px;float:left;font-size:16px;font-weight:bold;width:30px;height:40px;">
								To
							</div>
							<div Style="margin-left:2px;float:left;font-size:18px;font-weight:bold;width:100px;height:40px;">
							   <select style='font-weight:bold;font-size:14px;padding-left:3px;width:100px;text-align:left;height:30px;color:#0000B3;' name="To" id="To" >
															<option value="">Select</option>
															<option value="1">January</option>
															<option value="2">February</option>
															<option value="3">March</option>
															<option value="4">April</option>
															<option value="5">May</option>
															<option value="6">June</option>
															<option value="7">July</option>
															<option value="8">August</option>
															<option value="9">September</option>
															<option value="10">October</option>
															<option value="11">November</option>
															<option value="12">December</option>															
															</select>  
						
						
						
							</div>
							<div Style="margin-left:2px;float:left;font-size:18px;font-weight:bold;width:80px;height:40px;">
									<select style='font-weight:bold;float:right;width:60px;text-align:left;height:30px;color:#000066;' name="Year" id="Year"  required/>
															<option value="">Year</option>
															<option value="2014">2014</option>
															<option value="2015">2015</option>
															<option value="2016">2016</option>
															<option value="2017">2017</option>
															<option value="2018">2018</option>
															
															
															</select >  
						
						
						
						
							</div>
							<div Style="margin-left:10px;float:left;font-size:18px;font-weight:bold;width:50px;height:40px;">
						
						
							<!--input type="submit" onClick="return confirm('RESET ALL DATA INPUT : Are you sure to reset this page ?')" value="Go"-->
							<input type="submit" class="cost-centers-search-button" style="width:60;height:30px;" value="Go">
						
							</div>
							
							</div>
							</form>
							<div class="table" style="margin-top:15px;margin-left:30px;height:450px;width:900px;overflow-y:auto;">  
							<div class="cost-centers-table" style="text-transform: uppercase;height:450px;">  
										 
							<?php
								echo"
								<table class='users'>
								<tr style=height:30px;>
								
								  <th class='row-1 row-ID' style='font-size:12px;width:50px;height:20px;color:#B30000;'>PLANT</th>
								  <th class='row-2 row-n' style='width:50px;font-size:12px;height:20px;color:#B30000;'>NOT YET STARTED</th>
								  <th class='row-3 row-n' style='width:50px;font-size:12px;height:20px;color:#B30000;'>ON GOING</th>
								  <th class='row-4 row-n' style='width:50px;font-size:12px;height:20px;color:#B30000;'>REFFERED</th>
								  <th class='row-5 row-n' style='width:50px;font-size:12px;height:20px;color:#B30000;'>CANCEL</th>
								  <th class='row-6 row-n' style='width:50px;font-size:12px;height:20px;color:#B30000;'>COMPLETE</th>
								  <th class='row-7 row-n' style='width:50px;font-size:12px;height:20px;color:#B30000;'>TOTAL</th>
								
								  <tr>";
								
									echo "<tr style=height:30px;font-weight:bold;>";
										echo "<td align='center'>AGUS 6</td>";
										echo "<td align='center'></td>";
										echo "<td align='center'></td>";
										echo "<td align='center'></td>";
										echo "<td align='center'></td>";
										echo "<td align='center'></td>";
										echo "<td align='center'></td>";
									echo "</tr>";
									
									echo "<tr style=height:30px;font-weight:bold;>";
										echo "<td align='center'>AGUS 7</td>";
										echo "<td align='center'></td>";
										echo "<td align='center'></td>";
										echo "<td align='center'></td>";
										echo "<td align='center'></td>";
										echo "<td align='center'></td>";
										echo "<td align='center'></td>";
									echo "</tr>";
								
								echo'</table>';

							?>
							</div>
						</div>
					
				
					</div> <!--insidemain-content-container-->
				</div><!--main-content-container-->
			</div><!--inside-wrapper-->
		</div><!--simioutside-wrapper-->
	</div><!--outside-wrapper-->
			
	</body>
	

</html>