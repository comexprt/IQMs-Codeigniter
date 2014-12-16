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
				<li><a href="#" title="Help">Help</a></li>
				<li><a href="#myModal" role="button" data-toggle="modal" title="Log in">Log in▼</a></li>
			</ul>
			
		</div>
		
	</div>
	
	<!-- end top navigation bar -->
		
		<div id="wrapper" style="margin-top:100px;border:3px double #4CD2FF;border-radius:5px;width:320px;height:370px;">
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
				
		</div>
		</div>
		
		<!-- Begin modal for login -->
          <div class="modal fade" id="myModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">
                  <div class="modal-header">
                   
                      <h4 class="modal-title" id="myModalLabel">Login</h4>
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
		
</body>

</html>