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
			
				<div class="content-container">
					
					<div id="update-generating-unit-status-container"> <!-- width: 980px; -->
			
			<div class="update-generating-unit-status-title-header"> <!-- height: 50px; -->
				<h2>Update Generating Unit Status</h2>
			</div>
			
			<div id="update-generating-unit-status-table-container">
				
				<div class="update-generating-unit-status-table">
					
				
					<div class="update-generating-unit-status-table-header">
						<h3 style="margin-left:100px;">AGUS VI</h3>
					</div>
					
		  <div id ="choice_style">				
				 <?php 	
	 echo"<div id=form_container style='margin-left:70px;'>";
	  foreach($results as $row)
						  
	 echo"<table> <tr>
	    <th>UNIT</th>
		<th>STATUS</th>
		<th>REMARKS</th>";
	echo form_open("AGUS_site/editvalueSGU6");
		
	 
					echo"<tr>";
						  echo" <td><input type='text'  readonly id='hide' name='AGUS1' value='".$row->AGUS1."'onkeypress='validate(event)' required/><br/></td>";
	                      echo" <td><input type='text' readonly id='hide' name='Status1' value='".$row->Status1."'onkeypress='validate(event)' required/><br/></td>";
	                      echo" <td><input type='text' readonly id='hide' name='Remarks1' value='".$row->Remarks1."'onkeypress='validate(event)' required/><br/></td>";
					echo"</tr>";
						
	  							
		
			echo'</table>';
			
			
			echo'<table>';
				   		  echo" <td><input type='text'  readonly id='hide' name='AGUS2' value='".$row->AGUS2."'onkeypress='validate(event)' required/><br/></td>";
	                      echo" <td><input type='text' readonly id='hide' name='Status2' value='".$row->Status2."'onkeypress='validate(event)' required/><br/></td>";
	                      echo" <td><input type='text' readonly id='hide' name='Remarks2' value='".$row->Remarks2."'onkeypress='validate(event)' required/><br/></td>";
		
			echo'</table>';
						  echo'<table>';
				   		  echo" <td><input type='text'  readonly id='hide' name='AGUS3' value='".$row->AGUS3."'onkeypress='validate(event)' required/><br/></td>";
	                      echo" <td><input type='text' readonly id='hide' name='Status3' value='".$row->Status3."'onkeypress='validate(event)' required/><br/></td>";
	                      echo" <td><input type='text' readonly id='hide' name='Remarks3' value='".$row->Remarks3."'onkeypress='validate(event)' required/><br/></td>";
		
			echo'</table>';
						  echo'<table>';
				   		  echo" <td><input type='text'  readonly id='hide' name='AGUS4' value='".$row->AGUS4."'onkeypress='validate(event)' required/><br/></td>";
	                      echo" <td><input type='text' readonly id='hide' name='Status4' value='".$row->Status4."'onkeypress='validate(event)' required/><br/></td>";
	                      echo" <td><input type='text' readonly id='hide' name='Remarks4' value='".$row->Remarks4."'onkeypress='validate(event)' required/><br/></td>";
		
			echo'</table>';
						  echo'<table>';
				   		  echo" <td><input type='text'  readonly id='hide' name='AGUS5' value='".$row->AGUS5."'onkeypress='validate(event)' required/><br/></td>";
	                      echo" <td><input type='text'  readonly id='hide' name='Status5' value='".$row->Status5."'onkeypress='validate(event)' required/><br/></td>";
	                      echo" <td><input type='text'  readonly id='hide' name='Remarks5' value='".$row->Remarks5."'onkeypress='validate(event)' required/><br/></td>";
		
			echo'</table>';
		
	
			echo form_close();
	 
	
	
	
	echo"</div>";
	 ?>
			<?php
			/******************         AGUS 7              *****************************/
			
			?>
			<div class="update-generating-unit-status-table-header">
						 <h3 style="margin-left:100px;">AGUS VII</h3>
					</div>
			 <div id ="choice_style">				
				 <?php 	
	 echo"<div id=form_container style='margin-left:70px;'>";
	  foreach($result as $row)
						  
	 echo"<table> <tr>
	    <th>UNIT</th>
		<th>STATUS</th>
		<th>REMARKS</th>";
		
		
		
		
	echo form_open("AGUS_site/editvalueSGU7");
		
	 
					echo"<tr>";
						  echo" <td><input type='text'  readonly id='hide' name='AGUS1' value='".$row->AGUS1."'onkeypress='validate(event)' required/><br/></td>";
	                      echo" <td><input type='text'  readonly id='hide' name='Status1' value='".$row->Status1."'onkeypress='validate(event)' required/><br/></td>";
	                      echo" <td><input type='text'  readonly id='hide' name='Remarks1' value='".$row->Remarks1."'onkeypress='validate(event)' required/><br/></td>";
					echo"</tr>";
						
	  							
		
			echo'</table>';
			
			
			echo'<table>';
				   		  echo" <td><input type='text'  readonly id='hide' name='AGUS2' value='".$row->AGUS2."'onkeypress='validate(event)' required/><br/></td>";
	                      echo" <td><input type='text'  readonly id='hide' name='Status2' value='".$row->Status2."'onkeypress='validate(event)' required/><br/></td>";
	                      echo" <td><input type='text'  readonly id='hide' name='Remarks2' value='".$row->Remarks2."'onkeypress='validate(event)' required/><br/></td>";
			echo'</table>';
	       
		
	?>		
		
	<?php
			echo form_close();
	 
	
	
	
	echo"</div>";
	 ?>
			</div>
			</div>
			
			</div>
			</div>
			
					
				</div>
			
			
			
			<?php
				/* 
				<div class="update-generating-unit-status-table">
				
					<div class="update-generating-unit-status-table-header">
						<h3>AGUS VII</h3>
					</div>
					
					<table class="table agus-seven">
						<tr>
							<th>Unit</th>
							<th>Status</th>
							<th>Remark</th>
						</tr>
						
			
						
				
					</table>
					
				</div>
				*/
				?>
			</div>
			
			
		</div>
					
				</div>
				
		
			
			</div>
			
		</div>
		
		</div>		
			
	</div>
	</div>

	</body>
	

</html>