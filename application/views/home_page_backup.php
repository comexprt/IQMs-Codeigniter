<!-- aqmsproject -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Home</title>
	 <link href="<?php echo base_url();?>styles/styleLogin.css" type="text/css"rel="stylesheet"/>

<link href="<?php echo base_url();?>styles/slider.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php echo base_url();?>scripts/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>scripts/jquery.cycle.all.js"></script>
    
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
		<script type="text/javascript">

	//for play and pause function
	$(function() {
		
		$('#play').click(function() {
			
			$('#slider').cycle('resume');
			return false;
		});
		
		$('#pause').click(function() {
			
			$('#slider').cycle('pause');
			return false;
		});

	//for slider function
	$('#slider').cycle({
		
		fx:			'scrollHorz',
		next:		'#next',
		prev:		'#prev',
		pager:		'#pager',
		timeout:    3000,
		speed:		900
	
	});
	});
</script>
	
</head>

<body class="body">
<!-- start of header -->
<div id="outside-wrapper">
	<header class="main-header">
	<div id="top-navigation-bar">
			
			<div class="top-nav-links">				
				<ul>
					<li><a class="fancybox" href="#login" >LOGIN</a></li>
				
				</ul>
				
			</div>
		
		<div class="banner">
			<a href="#"><img src="<?php echo base_url();?>images/NPC_logo.JPG"/></a>
			<h1>AGUS 6/7 HYDROELECTRIC POWER PLANT COMPLEX</h1>
			<h2>QUALITY MONITORING SYSTEM</h2>
		</div>
		</div>

	</header>
<!-- end of header -->
<div id="index-inside-wrapper">
		<div id="hero">

	<div id="pager"></div>
    <div id="pause">&asymp;</div>
    <div id="play">&Delta;</div>
    <div id="next">&rang;</div>
    <div id="prev">&lang;</div>
    
<div id="slider">
    
   	  <div class="items">
        	<img src="<?php echo base_url();?>images/infrastructureprojects/a.jpg">      	  		
        <div class="info">
   		</div><!--end "info"-->          
      </div><!--end "items"-->
        
    	<div class="items">
       	  <img src="<?php echo base_url();?>images/infrastructureprojects/b.jpg">      	  		
                <div class="info">
          			
          		</div><!--end "info"-->          
        </div><!--end "items"-->
        
     	<div class="items">
       	  <img src="<?php echo base_url();?>images/infrastructureprojects/c.jpg">      	  		
                <div class="info">
          			
          		</div><!--end "info"-->          
        </div><!--end "items"-->
        
     	<div class="items">
       	  <img src="<?php echo base_url();?>images/infrastructureprojects/d.jpg">      	  		
                <div class="info">
          			
          		</div><!--end "info"-->          
        </div><!--end "items"-->
		
		<div class="items">
       	  <img src="<?php echo base_url();?>images/infrastructureprojects/e.jpg">      	  		
                <div class="info">
          			
          		</div><!--end "info"-->          
        </div><!--end "items"-->
        
     	
    
    </div><!--end "slider"-->

</div><!--end "hero"-->

			
			
	</div>
	
            
 </div>
 
 <!--fancyBox-->
 	    
		<div id="login" style="display: none;">
		<div id="login_form_container">
		<div class="login">
	 <?php 	
						
						echo form_open("AGUS_site/verifyloginEmployee");
								echo validation_errors();
							
							
						echo"<input type='text' name='username' id='username' onkeypress='validate(event)' placeholder='username' required/>";
						echo"<input type='password' name='Password' id='Password' onkeypress='validate(event)' placeholder='password' required/>";
							
                            echo"<p>";
							echo form_submit("loginSubmit","Log In");
							echo"</p>"	;
							echo form_close();
	 
					?>
		</div>
		</div>
		</div>

</body>
</html>