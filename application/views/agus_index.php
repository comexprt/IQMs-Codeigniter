<!DOCTYPE html>

<html lang="en">

	<head>
		<title>My Website</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>styles/jedoxstyle.css">
		<link rel="stylesheet" href="<?php echo base_url();?>styles/admin_style.css">
	
		
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
				<h2>LIST OF PROJECT</h2>
				<?php foreach ($img as $imagedata):?>
					<ul class="img">
					<li><a class="fancybox" href="#<?php echo $imagedata->INFRA_NO?>" ><img src="<?php echo base_url().'/uploads/'.$imagedata->name_image;?>"width="100" height="80" ><br/><?php echo $imagedata->INFRA_NO?></a></li>
					
					
				    <?php endforeach; ?>
				  </ul>
				  </div>
				  
	
	<?php foreach ($img as $imagedata):?>			   
	<div id="<?php echo $imagedata->INFRA_NO?>" style="display: none;">
	 <h1>INFRASTRUCTURE</h1>
	 <div id="wrapper2">
          <div id="menu2">
		  
		<img src="<?php echo base_url().'/uploads/'.$imagedata->name_image;?>"width="400" height="350" >
	    </div>
		  <div id="detail2">
		 <h2><?php echo $imagedata->INFRA_NO?></h2>
		<H2><?php echo $imagedata->PROJECT_NAME?></H2>
		<br><br><h2><?php echo $imagedata->name_image?></h2>
		

	</div>
	</div>
	<?php endforeach; ?>			 
				
				
	
		
		</div>
		</div>
		</div>
		

	</body>

</html>