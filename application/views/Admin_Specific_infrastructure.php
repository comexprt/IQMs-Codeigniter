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
				<?php //foreach ($img as $imagedata):?>
					
					<!--li><a class="various fancybox.ajax" href="<?php //echo base_url() . "AGUS_site/show_projectinfo_id/" . $imagedata->PID; ?>"><img src="<?php //echo base_url().'/uploads/'.$imagedata->name_image;?>"width="100" height="80" ><br/><?php //echo $imagedata->name_image ?></a></li-->
					<!--li><a class="fancybox fancybox.iframe" href="<?php// echo base_url();?>AGUS_site/Create"><?php //echo $imagedata->name_image ?></a></li-->
					<?php 
					//<li><a class="fancybox fancybox.iframe" href="iframe.html">Iframe</a></li>
					// -> pun.an ni.."#myModal" role="button" data-toggle="modal" 
					//echo $imagedata->name_image ?>
				    <?php //endforeach; ?>
				 
				 
				  <h1>fancyBox</h1>

	
		<a class="fancybox" href="#inline1" title="Lorem ipsum dolor sit amet">Inline</a>
		

	<div id="inline1" style="width:400px;display: none;">
		<h3>Etiam quis mi eu elit</h3>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis mi eu elit tempor facilisis id et neque. Nulla sit amet sem sapien. Vestibulum imperdiet porta ante ac ornare. Nulla et lorem eu nibh adipiscing ultricies nec at lacus. Cras laoreet ultricies sem, at blandit mi eleifend aliquam. Nunc enim ipsum, vehicula non pretium varius, cursus ac tortor. Vivamus fringilla congue laoreet. Quisque ultrices sodales orci, quis rhoncus justo auctor in. Phasellus dui eros, bibendum eu feugiat ornare, faucibus eu mi. Nunc aliquet tempus sem, id aliquam diam varius ac. Maecenas nisl nunc, molestie vitae eleifend vel, iaculis sed magna. Aenean tempus lacus vitae orci posuere porttitor eget non felis. Donec lectus elit, aliquam nec eleifend sit amet, vestibulum sed nunc.
		</p>
	</div>
				  
				  
				
				
		</div>
		
		</div>
		</div>
		

	</body>

</html>