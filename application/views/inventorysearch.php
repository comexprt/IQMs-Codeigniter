<!DOCTYPE html>

<html lang="en">

<head>
<link rel="shortcut icon" href="<?php echo base_url();?>/images/img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php echo base_url();?>/images/img/favicon.ico" type="image/x-icon">
	<title>IQMS | Admin</title>
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
	<link rel="stylesheet" href="<?php echo base_url();?>amcharts/images/style.css" type="text/css">
        <script src="<?php echo base_url();?>amcharts/amcharts.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>amcharts/pie.js" type="text/javascript"></script>
        
        <script type="text/javascript">
            var chart;
            var legend;
            <?php 
			foreach($data1 as $row):
			?>
            var chartData = [
                {
                    "projects": "Canceled",
                    "value": <?php echo $row->CANCELED;?>
                },
                {
                    "projects": "Reffered",
                    "value": <?php echo $row->REFFERED;?>
                },
                {
                    "projects": "On Going",
                    "value":<?php echo $row->ONGOING;?>
                },
                {
                    "projects": "Not Yet Started",
                    "value": <?php echo $row->NOTYETSTARTED;?>
                },
				{
                    "projects": "Complete",
                    "value": <?php echo $row->COMPLETE;?>
                },
                
            ];
			
			<? endforeach;?>

            AmCharts.ready(function () {
                // PIE CHART
                chart = new AmCharts.AmPieChart();
                chart.dataProvider = chartData;
                chart.titleField = "projects";
                chart.valueField = "value";
                chart.outlineColor = "#FFFFFF";
                chart.outlineAlpha = 0.8;
                chart.outlineThickness = 2;
                chart.balloonText = "[[title]]<br><span style='font-size:12px'><b>[[value]]</b> ([[percents]]%)</span>";
                // this makes the chart 3D
                chart.depth3D = 15;
                chart.angle = 30;

                // WRITE
                chart.write("chartdiv");
            });
        </script>
		 <script type="text/javascript">
            var chart1;
            var legend1;
            <?php 
			foreach($data2 as $row):
			?>
            var chartData2 = [
                {
                    "projects": "Canceled",
                    "value": <?php echo $row->CANCELED;?>
                },
                {
                    "projects": "Reffered",
                    "value": <?php echo $row->REFFERED;?>
                },
                {
                    "projects": "On Going",
                    "value":<?php echo $row->ONGOING;?>
                },
                {
                    "projects": "Not Yet Started",
                    "value": <?php echo $row->NOTYETSTARTED;?>
                },
				{
                    "projects": "Complete",
                    "value": <?php echo $row->COMPLETE;?>
                },
                
            ];
			
			<? endforeach;?>

            AmCharts.ready(function () {
                // PIE CHART
                chart2 = new AmCharts.AmPieChart();
                chart2.dataProvider = chartData2;
                chart2.titleField = "projects";
                chart2.valueField = "value";
                chart2.outlineColor = "#FFFFFF";
                chart2.outlineAlpha = 0.8;
                chart2.outlineThickness = 2;
                chart2.balloonText = "[[title]]<br><span style='font-size:12px'><b>[[value]]</b> ([[percents]]%)</span>";
                // this makes the chart 3D
                chart2.depth3D = 15;
                chart2.angle = 30;

                // WRITE
                chart2.write("chart2div");
            });
        </script>
		
		
</head>

<body>

	<div id="outside-wrapper">
	
	
		<!-- start top navigation bar -->
	
		<div id="top-navigation-bar">
			
			<div class="top-nav-title">
				<a href="<?php echo base_url();?>AGUS_site/admin" title="Infrastructure Quality Monitoring System"><img src="<?php echo base_url();?>images/iqms_logo4.png">Infrastructure Quality Monitoring System</a>
			</div>
			
			<div class="top-nav-links">
				
				
				<ul>
					<li>Welcome, BYPBYP</li>
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
				 
				  
						<li class="vertical-navigation-bar-link-toggle">Plans & Programs▼</li>
							<div class="cost-center-links-container" style="display:none">
								<ul>
									<a href="<?php echo base_url();?>AGUS_site/otpm"><li>Office of the Plant Manager</li></a>
									<a href="<?php echo base_url();?>AGUS_site/md"><li>Maintenance Division</li></a>
									<a href="<?php echo base_url();?>AGUS_site/adfin"><li>Admin and Finance Division</li></a>
									<a href="<?php echo base_url();?>AGUS_site/ptsd"><li>Tech and Services Division</li></a>
								</ul>
							</div>
						<a  href="<?php echo base_url();?>AGUS_site/ListofProject"><li>List of Infrastructure </li></a>
						<a  href="<?php echo base_url();?>AGUS_site/manageuser"><li>Manage Users</li></a>
						<a  href="<?php echo base_url();?>AGUS_site/ugus"><li>Generating Unit Status</li></a>
						<a  href="<?php echo base_url();?>AGUS_site/inventory"><li>Inventory</li></a>
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
						
						<form method="post" action="<?php echo base_url()."AGUS_site/inventorysearch"?>">
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
									<select style='font-weight:bold;float:right;width:60px;text-align:left;height:30px;color:#0000B3;' name="Year" id="Year"  required/>
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
							<div class="table" style="margin-top:0px;margin-left:30px;height:450px;width:900px;"> 
							<?
						
							 $month=$from;
							$month2=$to;
						
							if($month == '1')
							{
							$FromDate= 'January';
							}else
							if($month == '2')
							{
							$FromDate= 'February';
							 
							}else
							if($month == '3')
							{
							$FromDate= 'March';
							 
							}else
							if($month == '4')
							{
							$FromDate= 'April';
							 
							}else
							if($month == '5')
							{
							$FromDate='May';
							 
							}else
							if($month == '6')
							{
							$FromDate='June';
							}else
							if($month == '7')
							{
							$FromDate='July';
							}else
							if($month == '8')
							{
							$FromDate='August';
							}else
							if($month == '9')
							{
							$FromDate='September';
							}else
							if($month == '10')
							{
							$FromDate='October';
							}else
							if($month == '11')
							{
							$FromDate='November';
							}else
							if($month == '12')
							{
							$FromDate='December';
							}
							
							///////////////////
							if($month2 == '1')
							{
							$FromDate2= 'January';
							}else
							if($month2 == '2')
							{
							$FromDate2= 'February';
							 
							}else
							if($month2 == '3')
							{
							$FromDate2= 'March';
							 
							}else
							if($month2 == '4')
							{
							$FromDate2= 'April';
							 
							}else
							if($month2 == '5')
							{
							$FromDate2='May';
							 
							}else
							if($month2 == '6')
							{
							$FromDate2='June';
							}else
							if($month2 == '7')
							{
							$FromDate2='July';
							}else
							if($month2 == '8')
							{
							$FromDate2='August';
							}else
							if($month2 == '9')
							{
							$FromDate2='September';
							}else
							if($month2 == '10')
							{
							$FromDate2='October';
							}else
							if($month2 == '11')
							{
							$FromDate2='November';
							}else
							if($month2 == '12')
							{
							$FromDate2='December';
							}
							?>
							<div style="margin-top:-7px;float:right;margin-right:300px;width:300px;color:#660000;font-weight:bold;"><?php echo $FromDate ." - " .$FromDate2;?></div>
							<div style="height:10px;margin-left:450px;width:80px;margin-top:-15px;padding-bottom:5px;color:#660000;font-weight:bold;"><?php echo "Year : ".$y ;?></div>
							
							<div class="cost-centers-table" style="text-transform: uppercase;height:110px;">  
										 
							<?php
								echo"
								<table class='users'>
								<tr style=height:30px;>
								
								  <th class='row-1 row-ID' style='font-size:12px;width:50px;height:20px;color:#B30000;'>PLANT</th>
								  <th class='row-2 row-n' style='width:50px;font-size:12px;height:20px;color:#B30000;'>NOT YET STARTED</th>
								  <th class='row-3 row-n' style='width:50px;font-size:12px;height:20px;color:#B30000;'>ON GOING</th>
								  <th class='row-4 row-n' style='width:50px;font-size:12px;height:20px;color:#B30000;'>REFFERED</th>
								  <th class='row-5 row-n' style='width:50px;font-size:12px;height:20px;color:#B30000;'>CANCELED</th>
								  <th class='row-6 row-n' style='width:50px;font-size:12px;height:20px;color:#B30000;'>COMPLETE</th>
								  <th class='row-7 row-n' style='width:50px;font-size:12px;height:20px;color:#B30000;'>TOTAL</th>
								
								  <tr>";
								foreach($data1 as $row):
									echo "<tr style=height:30px;font-weight:bold;>";
										echo "<td align='center'>AGUS 6</td>";
										echo "<td align='center'>$row->NOTYETSTARTED</td>";
										echo "<td align='center'>$row->ONGOING</td>";
										echo "<td align='center'>$row->REFFERED</td>";
										echo "<td align='center'>$row->CANCELED</td>";
										echo "<td align='center'>$row->COMPLETE</td>";
										echo "<td align='center'>$row->TOTAL</td>";
								
									echo "</tr>";
								endforeach;
								foreach($data2 as $row):
									echo "<tr style=height:30px;font-weight:bold;>";
										echo "<td align='center'>AGUS 7</td>";
										echo "<td align='center'>$row->NOTYETSTARTED</td>";
										echo "<td align='center'>$row->ONGOING</td>";
										echo "<td align='center'>$row->REFFERED</td>";
										echo "<td align='center'>$row->CANCELED</td>";
										echo "<td align='center'>$row->COMPLETE</td>";
										echo "<td align='center'>$row->TOTAL</td>";
									echo "</tr>";
								endforeach;
								
								echo'</table>';

							?>
							</div>
							
							
							<div class="cost-centers-search-button" style="margin-left:100px;margin-top:40px;height:10px;width:100px;">AGUS 6 >></div>
							<div id="chartdiv" style="margin-top:-70px;height:235px;width:100%;"></div>
							<div style="margin-top:-30px;height:2px;width:100%;border-top:1px dashed #BBBBBB;"></div>
							<div class="cost-centers-search-button" style="margin-left:100px;margin-top:40px;height:10px;width:100px;">AGUS 7 >></div>
							<div id="chart2div" style="margin-top:-90px;height:235px;width:100%;"></div>
						
						</div>
					
				
					</div> <!--insidemain-content-container-->
				</div><!--main-content-container-->
			</div><!--inside-wrapper-->
		</div><!--simioutside-wrapper-->
	</div><!--outside-wrapper-->
			
	</body>
	

</html>