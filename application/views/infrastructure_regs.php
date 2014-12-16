<!-- aqmsproject -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Admin | Home</title>
      <link href="<?php echo base_url();?>styles/style.css" type="text/css"rel="stylesheet"/>
	 <link href="<?php echo base_url();?>styles/styleLogin.css" type="text/css"rel="stylesheet"/>
	 <link rel="stylesheet" href="<?php echo base_url();?>styles/contact.css" type="text/css" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
	<script type="text/javascript" src="<?php echo base_url();?>scripts/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>scripts/jquery.cycle.all.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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

<body class="body">
<!-- start of header -->
	<header class="main-header">
				
		<nav class="navi">
			<ul>
				<li><a href="<?php echo base_url();?>AGUS_site/EmpLOg">Home</a></li>
				<li><a href="<?php echo base_url();?>AGUS_site/emp_logout">Log Out</a></li>
				<li><a href="#">Help</a></li>
			</ul>
		</nav>
		
		<div class="banner">
			<a href="#"><img src="<?php echo base_url();?>images/NPC_logo.JPG"/></a>
			<h1>AGUS 6/7 HYDROELECTRIC POWER PLANT COMPLEX</h1>
			<h2>QUALITY MONITORING SYSTEM</h2>
		</div>

	</header>
<!-- end of header -->
       <div id ="choice_style">
	
	 
	   
	   
			<?php
			
			
			

			 echo"<h2>Create Infrastructure</h2>";
             echo form_open("AGUS_site/AddInfrastructure");	
           	   
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
			 <div id="back_button">
	
			<a href="<?php echo base_url();?>AGUS_site/Homee"><div class="back">BACK</div></a>
	    </div>
	   


</body>
</html>