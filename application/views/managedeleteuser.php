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
			<div Style="font-size:20px;font-weight:bold;margin-left:250px;
			margin-top:30px;width:400px;height:40px;"><center>MANAGE USER<center></div>
			<div Style="float:right;color:#8C0000;font-size:14px;font-weight:bold;margin-right:365px;
			margin-top:10px;width:300px;height:20px;">" User  '<?php echo $data1;?>' was Successfully Deleted"</div>
			
			
			<div Style="background-color:#BFEFFF;border:1px solid #7396FF;border-radius:8px;box-shadow: 3px 3px 3px #888888;
			font-size:15px;font-weight:bold;margin-left:40px;
			margin-top:10px;width:105px;height:30px;">
			<a class="fancybox" style="text-decoration:none;" href="#adduser1234">
			<img src="<?php echo base_url();?>images/addnewuser.png" title="Add New User" height="25px" width="27px"><div style="font-size:12px;margin-left:35px;margin-top:-20px;color:#00008C" title="Add New User">ADD USER</div>
			</a></div>
			<!--work here-->
						<div class="table" style="margin-top:10px;margin-left:35px;height:450px;width:900px;overflow-y:auto;">  
							<div class="cost-centers-table" style="text-transform: uppercase;height:450px;">  
										 
							<?php
								$x=0; 
								echo"
								<table class='users'>
								<tr>
								
								  <th class='row-1 row-ID' style='font-size:12px;width:10px;height:20px;color:#B30000;'>No.</th>
								  <th class='row-3 row-n' style='width:50px;font-size:12px;height:20px;color:#B30000;'>FistName</th>
								  <th class='row-4 row-n' style='width:50px;font-size:12px;height:20px;color:#B30000;'>LastName</th>
								  <th class='row-5 row-n'style='width:100px;font-size:12px;height:20px;color:#B30000;'>Position</th>
								  <th class='row-6 row-s' colspan='2' style='width:30px;font-size:12px;height:20px;color:#B30000;'>Actions</th></tr>";

								foreach ($data as $row):
								$x++;
									echo "<tr>";
										
										echo "<td align='center'>$x</td>";
										echo "<td align='center'>$row->FirstName</td>";
										echo "<td align='center'>$row->LastName</td>";
										echo "<td align='center'>$row->Position</td>";
								?>		
										<td align='center'><a class="fancybox" style="text-decoration:none;" href="#update<?php echo $row->EmID;?>">
										<img src="<?php echo base_url();?>images/editimage2.png" title="Edit" height="30px" width="30px">
										</a></td>
										<td align='center'><a class="fancybox" style="text-decoration:none;" href="#delete<?php echo $row->EmID;?>">
										<img src="<?php echo base_url();?>images/delete1.png" title="Delete" height="30px" width="30px">
										</a></td>
										
										
								<?php 
									

									echo "</tr>";
								endforeach;
								echo'</table>';

							?>
							</div>
						</div>
						
						<div id="adduser1234" style="width:620px;height:280px;border-radius:5px;margin-top:-15px;display: none;">
							<div class="login" style="margin-left:20px;">
											<?php 	
												
												
												echo form_open("AGUS_site/adduser");
											?>
											<div style="font-size:18px;font-weight:bold;color:#000040"><p><center>New User</center></p></div>
												
											<div style="width:300px;height:200px;float:left;">
											<div style="margin-left:60px;font-size:13px;font-weight:bold;color:#00008C"><p>Personal Information</p></div>
											<input style='height:30px;font-size:15px;color:#00008C;text-align:center;text-transform:none;' type='text' name='FirstName' id='FistName' onkeypress='validate(event)'  placeholder='First Name' required/>
										    <input style='height:30px;font-size:15px;color:#00008C;text-align:center;text-transform:none;' type='text' name='LastName' id='LastName' onkeypress='validate(event)'  placeholder='Last Name' required/>
										    <input style='height:30px;font-size:15px;color:#00008C;text-align:center;text-transform:none;' type='text' name='Position' id='Position' onkeypress='validate(event)'  placeholder='Position' required/>
											
											
											</div>
											<div style="width:300px;height:200px;float:right;">
											<div style="margin-left:60px;font-size:13px;font-weight:bold;color:#00008C"><p>Username & Password</p></div>
											<input style='height:30px;font-size:15px;color:#00008C;text-align:center;text-transform:none;' type='text' name='username' id='username' onkeypress='validate(event)'  placeholder='Username' required/>
											<input style='height:30px;font-size:15px;color:#00008C;text-align:center;text-transform:none;' type='text' name='password' id='password' onkeypress='validate(event)'  placeholder='Password' required/>
																						
											</div>
											
											
												<?php	
												
													echo"<div style='margin-left:450px;'>";
													echo form_submit("loginSubmit","ADD");
													echo form_close();
													echo"</div>"	;
												
							 
											?>
				
						</div>
						</div>
						<!-------------------    d  e  l  e  t  e          u   s   e  r   ------------------------------------>
						<?php foreach ($data as $row): ?>
						<div id="delete<?php echo $row->EmID;?>" style="width:350px;height:170px;border-radius:5px;margin-top:-15px;display: none;">
							<div class="login" style="margin-left:20px;">
											<?php 	
												
												
												echo form_open("AGUS_site/deleteuser");
											?>	
										
											<div style="width:250px;height:100px;float:center;">
											<div style="width:310px;height:130px;font-weight:bold;">
											<div style="margin-top:20px;border-radius:10px;width:310px;height:40px;font-weight:bold;background-color:#00B3B3">
											<div style="color:white;width:100px;height:20px;margin-left:10px;padding-top:10px;">Delete User</div></div>
											<div style="margin-left:60px;font-size:16px;font-weight:bold;color:#00008C"><p>Delete "<?php echo $row->LastName;?>"  ?</p></div></div>
											<input style='height:30px;font-size:15px;color:#00008C;text-align:center;text-transform:none;' type='hidden' name='EmID' id='EmID' value="<?php echo $row->EmID;?>" onkeypress='validate(event)'   required/>										
											<input style='height:30px;font-size:15px;color:#00008C;text-align:center;text-transform:none;' type='hidden' name='LastName' id='LastName' value="<?php echo $row->LastName;?>" onkeypress='validate(event)'   required/>										

											</div>
											
											
												<?php	
												
													echo"<div style='margin-top:30px;margin-left:100px;'>";
													echo form_submit("loginSubmit","Delete");
													echo form_close();
													echo"</div>"	;
										
							 endforeach;
											?>
				
							</div>
							</div>
						
						<!-------------------   E  D  i  t         u   s   e  r   ------------------------------------>
						<?php foreach ($data as $row): ?>
							<div id="update<?php echo $row->EmID;?>" style="width:620px;height:280px;border-radius:5px;margin-top:-15px;display: none;">
							<div class="login" style="margin-left:20px;">
											<?php 	
												
												
												echo form_open("AGUS_site/updateuser");
											?>
											<div style="font-size:18px;font-weight:bold;color:#000040"><p><center>Update User</center></p></div>
												
											<div style="width:300px;height:200px;float:left;">
											<div style="margin-left:60px;font-size:13px;font-weight:bold;color:#00008C"><p>Personal Information</p></div>
											<input style='height:30px;font-size:15px;color:#00008C;text-align:center;text-transform:none;' type='text' name='FirstName' id='FistName' value="<?php echo $row->FirstName;?>" onkeypress='validate(event)'  placeholder='First Name' required/>
										    <input style='height:30px;font-size:15px;color:#00008C;text-align:center;text-transform:none;' type='text' name='LastName' id='LastName' value="<?php echo $row->LastName;?>" onkeypress='validate(event)'  placeholder='Last Name' required/>
										    <input style='height:30px;font-size:15px;color:#00008C;text-align:center;text-transform:none;' type='text' name='Position' id='Position' value="<?php echo $row->Position;?>" onkeypress='validate(event)'  placeholder='Position' required/>
											
											
											</div>
											<div style="width:300px;height:200px;float:right;">
											<div style="margin-left:60px;font-size:13px;font-weight:bold;color:#00008C"><p>Username & Password</p></div>
											<input style='height:30px;font-size:15px;color:#00008C;text-align:center;text-transform:none;' type='text' name='username' id='username' value="<?php echo $row->username;?>" onkeypress='validate(event)'  placeholder='Username' required/>
											<input style='height:30px;font-size:15px;color:#00008C;text-align:center;text-transform:none;' type='text' name='password' id='password' value="<?php echo $row->password;?>" onkeypress='validate(event)'  placeholder='Password' required/>
											<input style='height:30px;font-size:15px;color:#00008C;text-align:center;text-transform:none;' type='hidden' name='EmID' id='EmID' value="<?php echo $row->EmID;?>" onkeypress='validate(event)'  placeholder='Password' required/>
																						
											</div>
											
											
												<?php	
												
													echo"<div style='margin-left:450px;'>";
													echo form_submit("loginSubmit","SAVE");
													echo form_close();
													echo"</div>"	;
												
							 endforeach;?>
				
							</div>
							</div>
				
					</div> <!--insidemain-content-container-->
				</div><!--main-content-container-->
			</div><!--inside-wrapper-->
		</div><!--simioutside-wrapper-->
	</div><!--outside-wrapper-->
			
	</body>
	

</html>