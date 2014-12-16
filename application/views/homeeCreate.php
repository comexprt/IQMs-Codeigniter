<!-- aqmsproject -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Admin | Home</title>
      <link href="<?php echo base_url();?>styles/style.css" type="text/css"rel="stylesheet"/>
	 <link href="<?php echo base_url();?>styles/styleLogin.css" type="text/css"rel="stylesheet"/>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
	<script type="text/javascript" src="<?php echo base_url();?>scripts/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>scripts/jquery.cycle.all.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

</head>

<body class="body">
<!-- start of header -->
	<header class="main-header">
				
		<nav class="navi">
			<ul>
				<li><a href="<?php echo base_url();?>AGUS_site/EmpLOg">Home</a></li>
				<li><a href="<?php echo base_url();?>AGUS_site/emp_logout">Log Out</a></li>
				<li><a href="<?php echo base_url();?>AGUS_site/Upload_Images">sample upload images</a></li>
			</ul>
		</nav>
		
		<div class="banner">
			<a href="#"><img src="<?php echo base_url();?>images/NPC_logo.JPG"/></a>
			<h1>AGUS 6/7 HYDROELECTRIC POWER PLANT COMPLEX</h1>
			<h2>QUALITY MONITORING SYSTEM</h2>
		</div>

	</header>
<!-- end of header -->
	<h2 style="text-align:center;">Welcome! Admin Byp-Byp</h2>
	<div id ="choice_style">
			<?php
			echo"<h1 style='text-align:center;'>Project succesfully Added</h1>";
			
			  
			   include("admin_nav.php");
			?>
	</div>
</body>
</html>