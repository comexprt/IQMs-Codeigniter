<!DOCTYPE html>

<html lang="en">

	<head>
		<title>My Website</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>styles/jedoxstyle.css">
		<link rel="stylesheet" href="<?php echo base_url();?>styles/admin_style.css">
		
		
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
		<div id="wrapper">
			<!-- begin top nav -->
			<div id="top-nav">
				<ul>
					<li class="pull-left"><a href="#"><img src="">AGUS 6/7 HEPC IQMS</a></li>
					<li class="pull-right"><a href="<?php echo base_url();?>AGUS_site/samplecode2">Admin</a></li>
				</ul>
			</div>
			<div class="clear"></div>
			<!-- end top nav -->
			
			<!-- begin top header -->
			<div id="top-header">
				<h2>AGUS 6/7 HYDROELECTRIC POWER PLANT COMPLEX</h2>
				<h1>INFRASTRUCTURE QUALITY MONITORING SYSTEM</h1>
			</div>
			<!-- end top header -->
	    <div id="content" role="main" >
			<!-- begin sidebar -->
				<div id="side-column">
				  	<ul class="side-nav">
				  		<li><a href="<?php echo base_url();?>AGUS_site/workorder">PLANT & PROGRAMS</a></li>
				  		<li><a href="<?php echo base_url();?>AGUS_site/Create">CREATE INFRASTRUCTURE</a></li>
						<li><a href="<?php echo base_url();?>AGUS_site/show_projectinfo_id">LIST OF INFRASTRUCTURE</a></li>
						<li><a href="<?php echo base_url();?>AGUS_site/uploadindex">UPLOAD IMAGE</a></li>
				  		<li><a href="#">PROJECT ACCOMPLISHMENT</a></li>
						<li><a href="#">STATUS REPORT</a></li>
						<li><a href="#">INVENTORY</a></li>
				  		
						
				  	</ul>
				  </div>
			<!-- end sidebar -->
			
		<div id="content-wrapper" >
				<div id ="choice_style" >
				<?php
			
			
			

			 echo"<h2>CREATE INFRASTRUCTURE</h2>";
             echo form_open("AGUS_site/AddInfrastructure");	
           	    echo "<br>";
           	    echo "<br>";
                echo"<p>";
				echo"<input type='text' name='INFRA_NO' id='INFRA_NO' onkeypress='validate(event)' style='text-transform:uppercase' placeholder=' INFRA-XXXX-XXX' onblur='caps(this.id)' required/>";
				echo"<label for='INFRA_NO'>    INFRA NO.</label>";
				echo"</p>";
				echo"<p>";
				echo"<input type='text' name='PROJECT_NAME' id='PROJECT_NAME' onkeypress='validate(event)' placeholder=' PROJECT NAME' required/>";
				echo"<label for='PROJECT_NAME'>    PROJECT NAME</label>";
				echo"</p>";
				echo"<p>";
				echo"<input type='text' name='LOCATION' id='LOCATION' onkeypress='validate(event)' placeholder='LOCATION' required/>";
				echo"<label for='LOCATION'>       LOCATION</label>";
			    echo"</p>";
				echo"<p>";
				echo"<input type='text' name='STATUS' id='STATUS' onkeypress='validate(event)' placeholder='' value='ON GOING'readonly  required/>";
				echo"<label for='STATUS'>       STATUS</label>";
 				echo"</p>";
				echo"<p>";				
				echo"<textarea type='submit' name='DESCRIPTION' id='DESCRIPTION' onkeypress='validate(event)' placeholder='Write something about the Project' required/></textarea>";
				echo"</p>";
			 
				
			echo"<p class=submit >";
			echo form_submit("loginSubmit","ADD");
			echo"</p>"	;
			
			echo form_close();
			
		
            			
			?>
				
		</div>
		</div>
		</div>
		</div>
	</body>

</html>