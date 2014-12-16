<html lang="en-US">  
  <head>  
	<!--Styles-->
     <link href="<?php echo base_url();?>styles/styleINPUT.css" rel="stylesheet" type="text/css">	
	
  </head>  
   
  <body>  

	<div id="outside-wrapper1" style="margin-top:130px;margin-left:450px;width:905px;">
	
		<div id="simioutside-wrapper" style="position: relative;
	color: #444;
	text-shadow: none;
	-webkit-box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
	   -moz-box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
	        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);width:400px;height:350px;">
		<a href="<?php echo base_url();?>AGUS_site/admin" title="Admin Page"><img width="50px" height="50px" src="<?php echo base_url();?>images/home.png"></a>
			<div style="margin-left:50px;width:300px;height:250px;">
			<div style="font-size:20px;"><center>Change Password
			</center></div>
			<div style="font-size:14px;color:red;margin-top:5px;"><center><?php echo $ds;?>
			</center></div>
			<div class="login" style="margin-left:20px;">
					<?php 	
						
						
						echo form_open("AGUS_site/savesettings");
							
						echo"<br>";	
						echo"<input style='text-align:center;text-transform:none;' type='text' name='oldpass' id='oldpass' onkeypress='validate(event)'  placeholder='Old password' required/>";
						echo"<input style='text-align:center;' type='hidden' name='did' id='did'  value='1' required/>";
						echo"<br>";
						
						echo"<input style='text-align:center;' type='password' name='newpassword' id='newpassword' onkeypress='validate(event)' placeholder='New Password' required/>";
						echo"<input style='text-align:center;' type='password' name='rnewpassword' id='rnewpassword' onkeypress='validate(event)' placeholder='Re-type New Password' required/>";
						
                            echo"<p>";
							echo form_submit("loginSubmit","Save");
							echo"</p>"	;
							echo form_close();
	 
	 
					?>
				
		</div>
			
			
			
			
			</div>
			
    
	
	
		</div><!--semioutside-->
	</div><!--outside-->
  </body>  
</html>  