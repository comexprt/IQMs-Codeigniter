<!DOCTYPE html>
<html>
<head>
<title>Multistep Registration Form- Demo Preview</title>
<meta content="noindex, nofollow" name="robots">
<script src="<?php echo base_url();?>scripts/jquery.min.js"></script>
<link href="<?php echo base_url();?>scripts2/style.css" rel="stylesheet" type="text/css">
<script src="<?php echo base_url();?>scripts2/multi_step_form.js"></script>
</head>
<body>
<div class="content">
<!-- Multistep Form -->
<div class="main">
<form action="" class="regform" method="get">
			
			<!-- Fieldsets -->
			<fieldset id="first">
				<!-- Progress Bar -->
			
			<h2><center>PROJECT ACCOMPLISHMENT<center></h2>
			<ul id="progressbar">
				<li class="active">Information</li>
				<li>Work Descriptions</li>
				
			</ul>
			<div id="textfield1" style="height:345px;width:1050px;margin-left:50px;">
				<div id="textfield1a" style="margin-top:10px;float:left;width:450px;text-transform: uppercase;font-weight:bold;font-size:12px;">
					
					<label for='PROJECT_NAME'>   Infra No. </label>
						<input id='PROJECT_NAME' style="margin-left:30px;width:120px;margin-top:20px;" name="email" placeholder="Email" type="text" value="infra-2013-003" align="left" readonly>
					<br><label for='PROJECT_NAME'>    Project </label>	
						<input id='PROJECT_NAME' style="margin-left:35px;width:300px;" name="email" placeholder="Email" type="text" value="Kung Fu Gymnasium"  align="left" readonly>
					<br><label for='PROJECT_NAME'>    Location  </label>	
						<input id='PROJECT_NAME' style="margin-left:30px;width:300px;" name="email" placeholder="Email" type="text" value="Agus 7 , fuentes Iligan City"  align="left" readonly>
					<br><label for='PROJECT_NAME'>    Contractor  </label>
					<input class="contractor" style="margin-left:10px;width:300px;" name="contractor" placeholder="Location" type="text" value="">
					<br><label for='PROJECT_NAME'>    Rep</label>
					<input class="representative" style="margin-left:70px;width:300px;" name="representative" placeholder="Location" type="text" value="">
				</div>
			<div id="textfield1b" style="margin-top:60px;float:left;width:550px;text-transform: uppercase;font-weight:bold;font-size:12px;">
					<br><label for='PROJECT_NAME'>    Revise Contract Amount </label>	
						<input id='RevContAmount' style="margin-left:10px;width:300px;" name="RevContAmount" placeholder="Revise Contract Amount" type="text" align="left" readonly>
					<br><label for='PROJECT_NAME'>   Effectivity of Contract </label>
					<input class="EfOfCont" style="margin-left:15px;width:300px;" name="EfOfCont" placeholder="Effectivity of Contract" type="text">
					<br><label for='PROJECT_NAME'>    Expiration Date</label>
					<input class="ExpDate" style="margin-left:75px;width:300px;" name="ExpDate" placeholder="Expiration Date" type="text" value="">
					<br><label for='PROJECT_NAME'>    Duration </label>	
						<input id='Duration' style="margin-left:120px;width:300px;" name="duration" placeholder="Duration" type="text"  align="left" readonly>
				
				</div>
			</div>
	
					<input class="next_btn" name="next" type="button" value="Next">
			
			</fieldset>

			<fieldset id="second">
			<h2><center>PROJECT ACCOMPLISHMENT<center></h2>
			<ul id="progressbar">
				<li>Information</li>
				<li class="deactive">Work Descriptions</li>
		
			</ul>
					
					<!--select class="options">
						<option>--Select Education--</option>
						<option>Post Graduate</option>
						<option>Graduate</option>
						<option>HSC</option>
						<option>SSC</option>
					</select-->
			<div id="textfield2" style="background:red;height:355px;">	
					<input class="text_field" name="marks" placeholder="Marks Obtained" type="text">
					<input class="text_field" name="pyear" placeholder="Passing Year" type="text">
					<input class="text_field" name="univ" placeholder="University" type="text">
			</div>
					<input class="pre_btn" type="button" value="Previous">
					<input class="submit_btn" type="submit" value="Submit">
			
			</fieldset>

				</form>
</div>
</div>
</body>
</html>