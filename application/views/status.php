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
			
			<!-- <div style="margin-top:100px;background-color:#ECECEC;height:500px;width:100%"></div> -->
			<div class="gen-units-header">
				<h1>Status Of Generating Units</h1>
			</div>
			<div id="gen-units-wrap">
				
				<div class="gen-units-body">
					<div class="gen-units-plant-header"><h3>Agus 6 Hydroelectric Power Plant</h3></div>
					<div class="gen-units">
						<table>
							<tr>
								<th>Units</th>
								<th>Status</th>
								<th>Remarks</th>
							</tr>
							<?php foreach($results as $row):?>
							<tr>
								<th style="font-weight:normal;text-transform: capitalize;"><?php echo $row->AGUS1 ?></th>
								<th style="font-weight:normal;text-transform:uppercase;"><?php echo $row->Status1 ?></th>
								<th style="font-weight:normal;text-transform:capitalize;"><?php echo $row->Remarks1 ?></th>
							</tr>
							<tr>
								<th style="font-weight:normal;text-transform: capitalize;"><?php echo $row->AGUS2 ?></th>
								<th style="font-weight:normal;text-transform:uppercase;"><?php echo $row->Status2 ?></th>
								<th style="font-weight:normal;text-transform:capitalize;"><?php echo $row->Remarks2 ?></th>
							</tr>
							<tr>
								<th style="font-weight:normal;text-transform: capitalize;"><?php echo $row->AGUS3 ?></th>
								<th style="font-weight:normal;text-transform:uppercase;"><?php echo $row->Status3 ?></th>
								<th style="font-weight:normal;text-transform:capitalize;"><?php echo $row->Remarks3 ?></th>
							</tr>
							<tr>
								<th style="font-weight:normal;text-transform: capitalize;"><?php echo $row->AGUS4 ?></th>
								<th style="font-weight:normal;text-transform:uppercase;"><?php echo $row->Status4 ?></th>
								<th style="font-weight:normal;text-transform:capitalize;"><?php echo $row->Remarks4 ?></th>
							</tr>
							<tr>
								<th style="font-weight:normal;text-transform: capitalize;"><?php echo $row->AGUS5 ?></th>
								<th style="font-weight:normal;text-transform:uppercase;"><?php echo $row->Status5 ?></th>
								<th style="font-weight:normal;text-transform:capitalize;"><?php echo $row->Remarks5 ?></th>
							</tr>
							<?php endforeach; ?>
													
						</table>
					</div>
					
					<div class="gen-units-plant-header"><h3>Agus 7 Hydroelectric Power Plant</h3></div>
					<div class="gen-units">
						<table>
							<tr>
								<th>Units</th>
								<th>Status</th>
								<th>Remarks</th>
							</tr>
							<?php foreach($result as $row):?>
							<tr>
								<th style="font-weight:normal;text-transform: capitalize;"><?php echo $row->AGUS1 ?></th>
								<th style="font-weight:normal;text-transform:uppercase;"><?php echo $row->Status1 ?></th>
								<th style="font-weight:normal;text-transform:capitalize;"><?php echo $row->Remarks1 ?></th>
							</tr>
							<tr>
								<th style="font-weight:normal;text-transform: capitalize;"><?php echo $row->AGUS2 ?></th>
								<th style="font-weight:normal;text-transform:uppercase;"><?php echo $row->Status2 ?></th>
								<th style="font-weight:normal;text-transform:capitalize;"><?php echo $row->Remarks2 ?></th>
							</tr>
							
							<?php endforeach; ?>												
						</table>
					</div>
				</div>
			</div>
			<!--
			<div style="width:1000px; height:500px; background-color:#ccc; margin:0 50px 0 50px;">
				<div style="width:280px; height:400px; float:left; background-color:#333333; margin-right:20px;"></div>
				<div style="width:700px; height:400px; float:left; background-color:#333333; "></div>
			</div>
			-->
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
	
</body>

</html>