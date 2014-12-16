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
						<li><a href="<?php echo base_url();?>AGUS_site/Listofinfrawimage">LIST OF INFRASTRUCTURE</a></li>
						<li><a href="<?php echo base_url();?>AGUS_site/uploadindex">UPLOAD IMAGE</a></li>
				  		<li><a href="#">PROJECT ACCOMPLISHMENT</a></li>
						<li><a href="#">STATUS REPORT</a></li>
						<li><a href="#">INVENTORY</a></li>
				  		
						
				  	</ul>
				  </div>
			<!-- end sidebar -->
			
		<div id="content-wrapper" >
				<h3>Project successfully CREATED</h3>
				
				<?php foreach ($projectID as $id):?>
				
				 <?php  echo"project id = '".$id->PID."'"; ?>
				  
				<?php endforeach; ?>
				
		</div>
		</div>
		</div>
	</body>

</html>