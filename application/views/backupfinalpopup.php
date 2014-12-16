<!DOCTYPE html>

<html lang="en">

<head>
	<title>IQMS | Admin</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="<?php echo base_url();?>scripts/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>scripts/vertical-navigation-barup.js"></script>
	<!--ACtions popup-->
	<link href="<?php echo base_url();?>scripts2/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo base_url();?>scripts2/jquery.webui-popover.min.css">
		
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
					<li><a href="#" title="Help">Help</a></li>
					<li><a href="#" title="Settings">Settings</a></li>
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
				 
				  
						<li class="vertical-navigation-bar-link-toggle">Plans and Programs▼</li>
							<div class="cost-center-links-container" style="display:none">
								<ul>
									<a href="<?php echo base_url();?>AGUS_site/otpm"><li>Office of the Plant Manager</li></a>
									<a href="<?php echo base_url();?>AGUS_site/md"><li>Maintenance Division</li></a>
									<a href="<?php echo base_url();?>AGUS_site/adfin"><li>Admin and Finance Division</li></a>
									<a href="<?php echo base_url();?>AGUS_site/ptsd"><li>Tech and Services Division</li></a>
								</ul>
							</div>
						<a  href="<?php echo base_url();?>AGUS_site/ListofProject"><li>List of Infrastructure </li></a>
						<a  href="#"><li>Manage Users</li></a>
						<a  href="<?php echo base_url();?>AGUS_site/ugus"><li>Generating Unit Status</li></a>
						<a  href="#"><li>Inventory</li></a>
					</ul>
			
				</div>
				
			</div>
			</div>
			
			<div id="main-content-container"> <!-- width: 1000px; -->
			<div class="insidemain-content-container"> <!-- width: 1000px; -->
				<div id="content" role="main" >
				<div class="content-container">
					
					<div class="title" style="text-align:center;" >
						<h2>LIST OF INFRASTRUCTURE</h2>
					</div>
					<div id="content-wrapper" >
				
				<?php foreach ($img as $imagedata):?>
					<ul class="img">
					
					<li><a class="fancybox" style="text-decoration:none; text-transform: uppercase;text-align: center;" href="#<?php echo $imagedata->INFRA_NO?>" ><img src="<?php echo base_url().'/uploads/'.$imagedata->name_image;?>"width="150" height="120" ><br/><?php echo $imagedata->INFRA_NO?></a></li>
					
					
				    <?php endforeach; ?>
				  </ul>
				  </div>
				</div>
				
			</div>
			
			</div>
			
		</div>
	<?php foreach ($img as $imagedata):?>			   
	<div id="<?php echo $imagedata->INFRA_NO?>" style="display: none;">
	 <h1><center>INFRASTRUCTURE<center></h1>
	 <div id="wrapper2">
          <div id="menu2">
		  
		<img src="<?php echo base_url().'/uploads/'.$imagedata->name_image;?>"width="400" height="350" border=" 2px solid #e8e8e8">
	 <div id="transformtext" Style="text-transform: uppercase;font-weight: bold;font-size:20px;margin-left:120px"><?php echo $imagedata->INFRA_NO?> </div>
	    </div>
		  <div id="detail4">
		<H3>ACTIVITIES:   <?php echo $imagedata->PROJECT_NAME?></H3>
		<?php
					$choice=$imagedata->costcenter;

					switch ($choice) {
					case "otpm":
							echo "<H3>COST CENTER : Office of the Plant Manager</H3>";
							break;
					case "md":
							echo "<H3>COST CENTER : Maintenance Division</H3>";
							break;
					case "adfin":
							echo "<H3>COST CENTER : admin and Finance Division</H3>";
							break;
					case "ptsd":
							echo "<H3>COST CENTER : Plant Technical Service Division</H3>";
							break;
					default:
							echo"<h3>Query Database Error 'Contact I.T' </h3>";
							}
					
			?>
	<div class="col-md-2"><a href="#" class="show-pop-list btn btn-info" data-placement="auto"><img src="<?php echo base_url();?>images/actions.jpg" height="35px;" width="35px;">ACTIONS</a></div>
	<!--a class="fancybox" href="#add1ProjAccomp"><div class="AddAccomplishment">PROJECT ACCOMPLISHMENT</div></a>
		
		

	</div>
	</div>
				
				
	
		
		</div><!--end view specific project-->	
	<?php endforeach; ?>
    <div id="add1ProjAccomp" style="display: none;">
	 <h1><center>PROJECT ACCOMPLISHMENT<center></h1>
	 <div id="wrapper2">
	
	 </div>	
		</div><!--end add project accomplishment-->	
		</div>	
			
	</div>
	</div>

	</body>
	

</html>