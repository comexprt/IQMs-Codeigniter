<!DOCTYPE html>

<html lang="en">

<head>
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
							<div class="cost-center-links-container">
								<ul>
									<a  href="<?php echo base_url();?>AGUS_site/otpm"><li>Office of the Plant Manager</li></a>
									<a href="<?php echo base_url();?>AGUS_site/md"><li>Maintenance Division</li></a>
									<a href="<?php echo base_url();?>AGUS_site/adfin"><li>Admin and Finance Division</li></a>
								<div class="colored">
									<a href="<?php echo base_url();?>AGUS_site/ptsd"><li>Tech and Services Division</li></a>
								</div>
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
				
				<div class="content-container">
					
		 <div class="cost-centers-indicator-message-container light-blue">
            <h4>You are currently viewing AGUS 6/7's Tech and Services Division Infrastructure Projects</h4>
        </div>
        
        <div class="cost-centers-blue-line-boundary"></div>
        <!-- I'm working -->
        <div class="cost-centers-options-container">
            <a class="fancybox" href="#add1workorder"><div class="cost-centers-add-button">Add Work Order</div></a> 
             <form method="post" action="<?php echo base_url()."AGUS_site/submitsearch"?>">
            <div class="cost-centers-year-selector">
                <select id="inputtype" name="inputtype">
                    <option value="all">ALL ▼ </option>
                    <option value="INFRA_NO">INFRA No.</option>
                    <option value="PROJECT_NAME">ACTIVITY</option>
					<option value="plant">PLANT</option>
                    <option value="YEAR">YEAR</option>
                    <option value="STATUS">STATUS</option>
					
                   
                </select>
            </div>
            <div class="cost-centers-search-tool">
                <input class="cost-centers-search-input" type="text" id="inputsearch" name="inputsearch" placeholder="Search here" required/>
				<input type="hidden" id="costcenter" name="costcenter" value="ptsd">
                <input class="cost-centers-search-button" type="submit" value="Search">
            </div>
            </form>
        </div>
        <!-- I'm working -->
        
        <div class="cost-centers-table-heading">
            <h2>Plans and Programs of the PLANT TECHNICAL AND SERVICES DIVISION for the year 2014</h2>
        </div>
        
       
		
		<div class="cost-centers-table-container">  
            <div class="cost-centers-table" style="text-transform: uppercase;">  
             
				   <?php
	$x=1; 
	
	echo"
	<table class='users'>
	<tr>
	
	  <th class='row-1 row-ID'>No.</th>
      <th class='row-2 row-a'>Activities</th>
      <th class='row-3 row-c'>Cost</th>
      <th class='row-4 row-n'>Nature</th>
      <th class='row-5 row-td'>Target Date</th>
      <th class='row-6 row-i'>Infra No.</th>
      <th class='row-7 row-ad'>Actual Date</th>
      <th class='row-8 row-s'>Status</th></tr>";
                        
                        
                       
		
		echo "<tr>";
			foreach($workorder as $row){
			
			   echo "<td>".($x++)."</td>";?>
			   
			  <td><a class="fancybox" style="text-decoration:none;" href="#<?php echo $row->PID;?>"><?php echo $row->PROJECT_NAME;?></a></td>
			
 
			  <?php echo "<td>".$row->cost."</td>"; ?>
			
  		
   <?php
				
			$date=strtotime($row->ass);
			$dateto=strtotime($row->too);
			$date1=date('F d ,Y', $date);
			$date2=date('F d ,Y', $dateto);
			$INFRA_NO=$row->INFRA_NO;
			$INFRA1=$row->INFRA1;
			$INFRA3=$row->INFRA3;
			$month=$row->FromDate;
			$month2=$row->ToDate;
		
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
		
			   echo "<td style='text-transform:capitalize;'>".$row->natureOfContract."</td>";
			   echo "<td style='text-transform:capitalize;text-align:center;'>$FromDate - $FromDate2</td>";
		if ($INFRA1==""||$INFRA3==""){
			   echo "<td></td>";
			 } else {
			 
			   echo "<td>".$row->INFRA_NO."</td>";
			 }
			   if ($date1==$date2){
			   echo "<td></td>";
			   }else{
			   echo "<td style='text-transform:capitalize;'>".$date1."-".$date2."</td>";
			   }
			   echo "<td>".$row->STATUS."</td>";
			   
		echo "</tr>";
		
		}
    
	echo'</table>';

				
							
		
	?>
				 
				 
				 
				
				
                        
                 
                 
             
            </div>
        </div>
					
				</div>
				
			</div>
			
		</div>		
		</div>		
			
	</div><!--inside wrapper-->
<div id="container">
<div id="add1workorder" style="width:800px;height:390px;border-radius:5px;margin-top:-15px;display: none;">
	
		
		<h2>Plant Technical and Services Division</h2>
		<p>
				<?php
			
			
	
             echo form_open("AGUS_site/Addworkorderotpm");	

				echo "<div id ='choice_style' style='width:800px;height:80px;' >";
					echo "<div id ='choice_style' style='margin-top:0px;float:left;width:150px;height:25px;' >";
						echo "<div style='margin-left:40px;margin-top:5px;text-align:left;font-size:13px;font-weight:bold;'>ACTIVITIES";

						echo "</div>";
					
					echo"</div>";
					
					echo "<div id ='choice_style' style='float:right;width:650px;height:25px;' >";
						echo "<div>";
						echo"<input type='text' style='width:620px;height:15px;text-align:center;color:#000066;text-align:left;' name='PROJECT_NAME' id='PROJECT_NAME' onkeypress='validate(event)' placeholder=' Project Name' required/>";
						echo "</div>";
				
					echo"</div>";
					
					//////////////////////////////////////////////////////////////////////////////
					echo "<div id ='choice_style' style='margin-top:35px;float:left;width:150px;height:25px;' >";
						echo "<div style='margin-top:7px;text-align:left;margin-left:40px;font-size:13px;font-weight:bold;'>LOCATION";
							
						echo "</div>";
					
					echo"</div>";
					echo "<div id ='choice_style' style='margin-top:25px;float:right;width:650px;height:25px;text-align:center;' >";
						echo "<div >";
					echo"<input style='margin-left:-10px;width:620px;height:15px;text-align:left;color:#000066;' type='text' name='LOCATION' id='LOCATION' onkeypress='validate(event)' placeholder='Location' required/>";
					echo "</div>";
				
					echo"</div>";
				echo"</div>"; // project name:location:
				?>
				<div id ='choice_style' style='margin-top:20px;width:800px;height:208px;' >
					<div id ='choice_style' style='margin-top:0px;float:left;width:150px;height:25px;' >
						<div style='margin-top:10px;text-align:left;margin-left:40px;font-size:13px;font-weight:bold;'>DESCRIPTION

						</div>
					
					</div>
					
					<div id ='choice_style' style='float:right;width:650px;height:25px;' >
					<div>
					<input type='text' style='width:620px;text-align:left;height:15px;color:#000066;' name='DESCRIPTION' id='DESCRIPTION' onkeypress='validate(event)' placeholder='Description' >
					</div>
				
					</div>
					<div id ='choice_style' style='margin-top:12px;float:left;width:150px;height:25px;' >
						<div style='margin-top:10px;text-align:left;margin-left:40px;font-size:13px;font-weight:bold;'>NATURE OF CONTRACT

						</div>
					
					</div>
					
					<div id ='choice_style' style='float:right;margin-top:20px;width:650px;height:25px;' >
					<div>
					<input type='text' style='width:150px;text-align:left;height:15px;color:#000066;' name='natureOfContract' id='natureOfContract' onkeypress='validate(event)' placeholder='ex. By Contract' required/>
					</div>
				
					</div>
					<div id ='choice_style' style='margin-top:25px;float:left;width:150px;height:25px;' >
						<div style='margin-top:10px;text-align:left;margin-left:40px;font-size:13px;font-weight:bold;'>TARGET DATE

						</div>
					
					</div>
					
					<div id ='choice_style' style='margin-right:450px;float:right;margin-top:20px;width:200px;height:25px;' >
					<div>
					<select style="width:90px;float:left;text-align:center;color:#000066;height:30px;" name="as" id="as"  required/>
															<option value="">Select</option>
															<option value="January">January</option>
															<option value="February">February</option>
															<option value="March">March</option>
															<option value="April">April</option>
															<option value="May">May</option>
															<option value="June">June</option>
															<option value="July">July</option>
															<option value="August">August</option>
															<option value="September">September</option>
															<option value="October">October</option>
															<option value="November">November</option>
															<option value="December">December</option>															
															</select>  
					</div>
					<div  style="width:10px;float:left;text-align:center;color:#000066;font-size:20px;"> -
					</div>
					
					<div>
					 <select style="width:90px;float:left;text-align:center;padding-right:400;color:#000066;height:30px;" name="to" id="to"  required/>
															<option value="">Select</option>
															<option value="January">January</option>
															<option value="February">February</option>
															<option value="March">March</option>
															<option value="April">April</option>
															<option value="May">May</option>
															<option value="June">June</option>
															<option value="July">July</option>
															<option value="August">August</option>
															<option value="September">September</option>
															<option value="October">October</option>
															<option value="November">November</option>
															<option value="December">December</option>
															
															</select >  
					</div>
					
				
					</div>
					
					<!--New Revised-->
					<div id ='choice_style' style='margin-top:25px;float:left;width:150px;height:25px;' >
						<div style='margin-top:10px;text-align:left;margin-left:40px;font-size:13px;font-weight:bold;'> COST(Millions)

						</div>
						<div style='margin-top:20px;text-align:left;margin-left:40px;font-size:13px;font-weight:bold;'> PLANT

						</div>
					
					</div>
					
					
					<div id ='choice_style' style='float:right;margin-top:20px;width:650px;height:25px;' >
					<div>
					<input type='text' style='width:50px;text-align:left;height:15px;color:#000066;' id='cost' name="cost" onkeypress='validate(event)' placeholder='#' required/>
					</div>
					<div>
					<select style='margin-top:5px;width:80px;text-align:left;height:30px;color:#000066;' name="plant" id="plant"  required/>
															<option value="">select</option>
															<option value="AGUS 6">AGUS 6</option>
															<option value="AGUS 7">AGUS 7</option>
															
															
															</select >  				
					</div>
					<div style='margin-left:200px;margin-top:-117px;width:60px;text-align:left;height:30px;color:#000066;'>
					<select style='width:60px;text-align:left;height:30px;color:#000066;' name="INFRA2" id="INFRA2"  required/>
															<option value="">Year</option>
															<option value="2014">2014</option>
															<option value="2015">2015</option>
															<option value="2016">2016</option>
															<option value="2017">2017</option>
															<option value="2018">2018</option>
															
															
															</select >  				
					</div>
					
					</div>
				   <!--end new revise-->
					<div id ='choice_style' style='margin-top:25px;float:left;width:770px;height:25px;' >
						<div style='margin-top:10px;text-align:left;margin-left:40px;font-size:13px;font-weight:bold;'>
					<input type='hidden' name='costcenter' id='costcenter' value='ptsd'>
					<input type='hidden' name='status' id='status' value='Not Yet Started'>

				<?php
					echo"<p style='float:right;' class=submit >";
					echo form_submit("loginSubmit","ADD");
					echo"</p>"	;
			
					echo form_close();
				?>
						</div>
					
					</div>
					
					
					
				</div> <!--end-->
				
	</div><!--addworkorder-->
		<!-----------------SPECIFIC PROJECT---------------------->
	<?php foreach($workorder as $row):?>			   
	<div id="<?php echo $row->PID?>" style="display: none;">
	 <h1><?php echo $row->PROJECT_NAME //."    INFORMATION";?></h1>
	 <div id="wrapper2">
	
          <div id="menu2">
		  
		<img src="<?php echo base_url().'/uploads/'.$row->name_image;?>"width="350" height="300" >
	    </div>
		  <div id="detail2">
		  <!---------------------------------------------------->
		  
		  <form method="post" action="<?php echo base_url() . "AGUS_site/update_project"?>">
							
                            <input type="hidden" id="hide" name="did" value="<?php echo $row->PID; ?>"><br/> 					
								
							<label>COST CENTER:</label><br/> 
                            <select style="color:#000066;" name="costcenter">
										<option value="ptsd">Plant Technical Service Division</option>
										<option value="otpm">Office of the Plant Manager</option>
										<option value="md">Maintenance Division</option>
										<option value="adfin">Admin. & Finance Division</option>
							</select>
								<br>
								<br>
							<label>PROJECT NAME:</label><br/> 
                            <input type="text" name="PROJECT_NAME" value="<?php echo $row->PROJECT_NAME; ?>"onkeypress='validate(event)' required/><br/>
							
                            <br><label>COST:</label><br/> 
                            <input  style="margin-top:5px;" type="text" name="cost" value="<?php echo $row->cost; ?>"onkeypress='validate(event)' required/><br/>    

                            <label >NATURE OF CONTRACT:</label><br/> 
                            <input style="margin-top:5px;" type="text" name="natureOfContract" value="<?php echo $row->natureOfContract; ?>"onkeypress='validate(event)' required/><br/>
							
							<div style="margin-top:7px;width:170px;height:40px;">
							
							 <label>TARGET DATE:</label><br>
							 <?php 
							 $month=$row->FromDate;
			$month2=$row->ToDate;
		
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
							 
							 <div style="margin-top:2x;width:80px;height:30px;float:left;">
							 <select style="heigh:80px;width:95px;float:left;text-align:center;color:#000066;" name="FromDate" id="FromDate" >
															<option value="<?php echo $FromDate; ?>"><?php echo $FromDate; ?></option>
															<option value="January">January</option>
															<option value="February">February</option>
															<option value="March">March</option>
															<option value="April">April</option>
															<option value="May">May</option>
															<option value="June">June</option>
															<option value="July">July</option>
															<option value="August">August</option>
															<option value="September">September</option>
															<option value="October">October</option>
															<option value="November">November</option>
															<option value="December">December</option>															
															</select>  
							</div>
							<div style="float:leftwidth:10px;height;30px;font-weight:bold;font-size:20px;"> -
							</div>
							  <div style="margin-top:-23px;margin-right:0px;width:80px;height:30px;float:right;">
							  <select style="heigh:30px;width:95px;float:left;text-align:center;color:#000066;" name="ToDate" id="ToDate"  required/>
															<option value="<?php echo $FromDate2; ?>"><?php echo $FromDate2; ?></option>
															<option value="January">January</option>
															<option value="February">February</option>
															<option value="March">March</option>
															<option value="April">April</option>
															<option value="May">May</option>
															<option value="June">June</option>
															<option value="July">July</option>
															<option value="August">August</option>
															<option value="September">September</option>
															<option value="October">October</option>
															<option value="November">November</option>
															<option value="December">December</option>															
															</select>  
								</div>
							 </div>
				</div>
	 <div id="detail3" style="">
		  <!---------------------------------------------------->
							<br>
                            <label>LOCATION:</label><br/> 
                            <input type="text" name="LOCATION" value="<?php echo $row->LOCATION; ?>"onkeypress='validate(event)' required/><br/>    
                             
						<div style="margin-top:1px;height:50px;">
							 <label>STATUS :</label><br/> 
							<select style="text-transform:uppercase;width:220px;float:left;height:30px;text-align:center;color:#000066;" name="STATUS" id="STATUS"  required/>
												
												<?php
												$stat=$row->STATUS;
												
												if ($stat=="ON GOING"||$stat=="on going"||$stat=="On Going"){
												
												?>
															<option value="<?php echo $row->STATUS ; ?>"><?php echo $row->STATUS ; ?></option>
															<option value="NOT YET STARTED">NOT YET STARTED</option>
															<option value="Reffered">REFFERED</option>
															<option value="Canceled">CANCELED</option>
															<option value="COMPLETE">COMPLETE</option>
												<?php } else if($stat=="Canceled"){ ?>
														    <option value="<?php echo $row->STATUS ; ?>"><?php echo $row->STATUS ; ?></option>
															<option value="ON GOING">ON GOING</option>	
															<option value="NOT YET STARTED">NOT YET STARTED</option>
															<option value="Reffered">REFFERED</option>
															<option value="COMPLETE">COMPLETE</option>
												<?php } else if ($stat=="Reffered") { ?>
														    <option value="<?php echo $row->STATUS ; ?>"><?php echo $row->STATUS ; ?></option>
															<option value="ON GOING">ON GOING</option>
															<option value="NOT YET STARTED">NOT YET STARTED</option>
															<option value="Canceled">CANCELED</option>
															<option value="COMPLETE">COMPLETE</option>
															
												<?php } else if ($stat=="NOT YET STARTED") { ?>
														      <option value="<?php echo $row->STATUS ; ?>"><?php echo $row->STATUS ; ?></option>
															<option value="ON GOING">ON GOING</option>
															<option value="Reffered">REFFERED</option>
															<option value="Canceled">CANCELED</option>
															<option value="COMPLETE">COMPLETE</option>
															
												<?php }else { ?>
														    <option value="<?php echo $row->STATUS ; ?>"><?php echo $row->STATUS ; ?></option>
															<option value="ON GOING">ON GOING</option>
															<option value="NOT YET STARTED">NOT YET STARTED</option>
															<option value="Reffered">REFFERED</option>
															<option value="Canceled">CANCELED</option>
															
												<?php }	?>
															</select>
						</div>
						<div style="margin-top:3px;height:50px;">
							<label>DESCRIPTION :</label><br/> 
							<textarea rows="4" cols="50" style="color:#000066;width:205px;height:135px;" name="DESCRIPTION"><?php echo $row->DESCRIPTION; ?></textarea>
                            <br>
						</div>
		  <!---------------------------------------------------->
		
		

	</div>
	
		   <div id="detail6">
		   <br>
							<label>ADD INFRASTRUCTURE INFRA #:</label><br/> 
							 <div style="margin-top:3px;width:300px;height:35px;">
							  <div style="width:100px;float:left;height:35px;">
								<select style="width:100px;float:left;height:30px;text-align:center;color:#000066;" name="INFRA1" id="INFRA1" >
															<option value="<?php echo $row->INFRA1 ; ?>"><?php echo $row->INFRA1 ; ?></option>
															<option value="infra">INFRA</option>
																												
															</select>
							  </div>
							   <div style="font-size:20px;font-weight:bold;padding-top:5px;text-align:center;width:20px;float:left;height:35px;">
							   -
							 </div>
							  <div style="width:60px;float:left;height:35px;">
							  <select style="text-transform:uppercase;width:60px;float:left;height:30px;text-align:center;color:#000066;" name="INFRA2" id="INFRA2" >
		
															<option value="<?php echo $row->INFRA2 ; ?>"><?php echo $row->INFRA2 ; ?></option>
															<option value="2014">2014</option>
															<option value="2015">2015</option>
															<option value="2016">2016</option>
															<option value="2017">2017</option>
															<option value="2018">2018</option>
																												
															</select>
							 </div>
							 <div style="font-size:20px;font-weight:bold;padding-top:5px;text-align:center;width:20px;float:left;height:30px;">
							 -
							 </div>
							  <div style="width:60px;float:left;height:35px;">
							  <select style="width:60px;float:left;height:30px;text-align:center;color:#000066;" name="INFRA3" id="INFRA3" >
															<option value="<?php echo $row->INFRA3 ; ?>"><?php echo $row->INFRA3 ; ?></option>
															<?php
															for ($i=0;$i<10;$i++)
															{
															echo"<option value='00$i'>00$i</option>";
															 }
														
															for ($i=10;$i<=99;$i++)
															{
															echo"<option value='0$i'>0$i</option>";
															 }
															
															for ($i=100;$i<=999;$i++)
															{
															echo"<option value='$i'>$i</option>";
															 }
															?>
															
															
																												
															</select>
							 </div>
							 </div>
							 
							<!--enddddddddddddddddddd     infra:#--> 
							 <!--New Revised-->
							 <div style="margin-top:-10px;width:220px;height:90px;">
							<br>
							 <label>ACTUAL DATE:</label><br/> 
							 <div style="margin-top:0x;width:100px;height:15px;float:left;">
							 <input type="date" style="width:130px;height:10px;" name="ass" value="<?php echo $row->ass;?>" onkeypress='validate(event)' ><br/>
							 </div>
							  <div style="margin-top:0px;margin-right:-30px;width:100px;height:15px;float:right;">
							 <input type="date" style="width:130px;height:10px;" name="too" value="<?php echo $row->too;?>" onkeypress='validate(event)' ><br/>
							 </div>
							 </div>
							 <div style="margin-top:-20px;width:220px;height:75px;">
							 <label>PLANT:</label><br/> 
							  <select style="width:80px;height:30px;color:#000066;" name="plant" id="plant"  required/>
															<option value="<?php echo $row->plant;?>"><?php echo $row->plant;?></option>
															<?php 
															$plant=$row->plant;
															if ($plant=="AGUS 6"){
																echo "<option value='AGUS 7'>AGUS 7</option>";
															}else{
																echo "<option value='AGUS 6'>AGUS 6</option>";
															}
															?>
																														
															</select > 
							 </div>
							<div style="margin-top:-20px;width:220px;height:25px;">
							 <textarea rows="4" cols="50" style="color:#000066;width:285px;height:90px;" placeholder="Remarks here ....." name="remarks"><?php echo $row->remarks; ?></textarea>
							 </div>
							 <!--end New Revised-->
				
							
							<input style="margin-left:100px;margin-top:100px;background-color:#2E2E2E;color:white;cursor: pointer;" type="submit" id="submit" name="dsubmit" value="Update">
							
		   </div>
	 </form>
	</div>
	<?php endforeach; ?>	
		</div>
	</div><!--outside wrapper-->
		
	</body>
	

</html>