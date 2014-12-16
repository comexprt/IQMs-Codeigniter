<!DOCTYPE html>

<html lang="en">

<head>
	<link rel="shortcut icon" href="<?php echo base_url();?>/images/img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php echo base_url();?>/images/img/favicon.ico" type="image/x-icon">
	<meta charset="utf-8">
	<title>Agus 6/7 - Infrastructure Quality Monitoring System</title>

	<!-- stylesheets -->
	<link rel="stylesheet"  type="text/css" href="<?php echo base_url();?>styles/css/iqms-styles.css">
	<link href="<?php echo base_url();?>styles/bootstrap.min.css" rel="stylesheet">
	<script src="<?php echo base_url();?>scripts/jquery.min.js"></script>
    <script src="<?php echo base_url();?>scripts/bootstrap.min.js"></script>
</head>

<body>
		<!-- start top navigation bar -->

		<div id="top-navigation-bar">
		
			<div class="top-nav-title">
				<a href="<?php echo base_url();?>" title="Agus 6/7 Infrastructure Quality Monitoring System"><img src="<?php echo base_url();?>images/img/iqms_logo.png">AGUS 6/7 Hydroelectric Power Plant<br>Infrastructure Quality Monitoring System</a>
			</div>
			
			<div class="top-nav-links">
				
				<ul>
				
					<li><a href="#myModal" role="button" data-toggle="modal" title="Log in">Log in▼</a></li>
				</ul>
				
			</div>
		
		</div>
	
		<!-- end top navigation bar -->
		
		<div id="wrapper">
		
			<div class="index-info-container">
			
			
				
				<div class="about-and-navigation-column">
				
					<div class="about-column">
						<h1>About</h1>
						<p>AGUS 6/7 Hydroelectric Power Plant Infrastructure Quality Monitoring System (IQMS) is a software engineering project of the MSU-IIT Information Technology Students.</p>
						<br>
						<p>Its purpose is to lessen the strenuous task of managing, organizing, storing and monitoring of Infrastructure Projects in AGUS 6/7 HEPC. <a href="<?php echo base_url();?>AGUS_site/about" style="text-decoration:none;">Read More...</a></p>	
					</div>
					
					<div class="navigation-column">
						<ul>
							<a href="<?php echo base_url();?>AGUS_site/AgusInfra"><li><img width="16px" height="16px" src="<?php echo base_url();?>images/img/infra_icon3.png"> Infrastructure Projects</li></a>
							<a href="<?php echo base_url();?>AGUS_site/status"><li><img width="16px" height="16px" src="<?php echo base_url();?>images/img/infra_icon.png"> Plant Generating Units</li></a>
							
						</ul>
					</div>
					
				</div>
				
				
				
				<div class="slider-image-column">
					
					<div id="hero">
					
						<div id="next"><img src="<?php echo base_url();?>images/img/arrow_right.png" title="next"></div>
						<div id="previous"><img src="<?php echo base_url();?>images/img/arrow_left.png" title="previous"></div>
					
						<div id="slider">
						
							<div class="items">
								<img src="<?php echo base_url();?>images/img/IMG_1642.jpg">
								
							</div>
							
							<div class="items">
								<img src="<?php echo base_url();?>images/img/IMG_1610.jpg">
								
							</div>
							
							<div class="items">
								<img src="<?php echo base_url();?>images/img/IMG_1630.jpg">
								
							</div>
							
							<div class="items">
								<img src="<?php echo base_url();?>images/img/IMG_1637.jpg">
						
							</div>
							
							<div class="items">
								<img src="<?php echo base_url();?>images/img/IMG_1641.jpg">
							
							</div>
						
						</div>
						
					</div>
					
					<div id="pager-container">
						<div id="pager"></div>
					</div>					
				</div><!-- end of slider-image-column -->
				
				<div class="clear"></div>
			</div>
			
		</div>
		<!-- Begin modal for login -->
        <div class="modal fade" id="myModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
                   
						<h3 class="modal-title" id="myModalLabel" style="margin-top:10px;"><center>LOGIN</center></h3>
					</div>
					
					<div class="login">
					    <?php 
							
						    echo form_open("AGUS_site/verifyloginEmployee");
						    echo validation_errors();
							
							echo"<br>";	
							echo"<input type='text' name='username' id='username' onkeypress='validate(event)' placeholder='username' required/>";
							echo"<br>";
							
							echo"<input type='password' name='password' id='password' onkeypress='validate(event)' placeholder='password' required/>";
							echo"<br>";	
							echo"<br>";	
							echo"<p>";
							echo form_submit("loginSubmit","Log In");
							echo"</p>"	;
							echo form_close();
		 
		 
						?>
					 
						<br>
					    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<br>
						<br>
					</div><!-- end modal-header -->
				</div><!-- end modal-content -->
            </div><!-- end modal-dialog -->
        </div><!-- end myModal -->
		


		<script type="text/javascript" src="<?php echo base_url();?>scripts/js/jquery.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>scripts/js/jquery.cycle.all.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>scripts/js/index.jquery.js"></script>
</body>

</html>