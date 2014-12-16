<!DOCTYPE html>
<html>
  <head>
    
	<link href="<?php echo base_url();?>styles/bootstrap.css" type="text/css"rel="stylesheet"/>
    <link href="<?php echo base_url();?>styles/main.css" type="text/css"rel="stylesheet"/>
	
	
	<script type="text/javascript" src="<?php echo base_url();?>scripts/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>scripts/jquery.cycle.all.js"></script>
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

  <body>
    <div class="nav">
	  <div class="container">
	    <ul class="pull-left">
		  <li><a href="#">Airbnb logo</a></li>
		  <li><a href="#">Browse</a></li>
		</ul>
		<ul class="pull-right">
		  <li><a href="<?php echo base_url();?>AGUS_site/project_accomplishment">Project Accomplishment</a></li>
		  <li><a href="<?php echo base_url();?>AGUS_site/login">Log In</a></li>
		  <li><a href="<?php echo base_url();?>AGUS_site/samplelogin">Sample</a></li>
		</ul>
	  </div>
	</div>
	
	
	  
		<div id="hero">

	<div id="pager"></div>
    <div id="next">&Delta;</div>
    <div id="prev">&Delta;</div>
    
<div id="slider">
    
   	  <div class="items">
        	<img src="images/wallpaper-2368416.jpg">      	  		
        <div class="info">
		  <h2>Absolute Space</h2>
		  <p>Another voyage within the organic and infinite space. <a href ="#">See more</a> </p>        
   		</div><!--end "info"-->          
      </div><!--end "items"-->
        
    	<div class="items">
       	  <img src="<?php echo base_url();?>images/wallpaper-826220.jpg">      	  		
                <div class="info">
          			<h2>Transit Waterfall</h2>
          			<p>A memory in which we pretend to lose. <a href ="#">See more</a> </p>        
          		</div><!--end "info"-->          
        </div><!--end "items"-->
        
     	<div class="items">
       	  <img src="<?php echo base_url();?>images/wallpaper-2626292.jpg">      	  		
                <div class="info">
          			<h2>A Piece of Heaven</h2>
          			<p>Discover what is within the deepest place of salvation. <a href ="#">See more</a> </p>        
          		</div><!--end "info"-->          
        </div><!--end "items"-->
        
     	<div class="items">
       	  <img src="<?php echo base_url();?>images/wallpaper-2468040.jpg">      	  		
                <div class="info">
          			<h2>Leaves of Sadness</h2>
          			<p>When we fool ourselves that we are fine, I guess we are but... <a href ="#">See more</a> </p>        
          		</div><!--end "info"-->          
        </div><!--end "items"-->
        
     	<div class="items">
       	  <img src="<?php echo base_url();?>images/wallpaper-2989910.jpg">      	  		
                <div class="info">
          			<h2>The Order of Chaos</h2>
          			<p>Sometimes all we need is a little bit trip to somewhere, a place where... <a href ="#">See more</a> </p>        
          		</div><!--end "info"-->          
        </div><!--end "items"-->
        
     	<div class="items">
       	  <img src="<?php echo base_url();?>images/wallpaper-625872.jpg">      	  		
                <div class="info">
          			<h2>Diety Lake of Melancholy</h2>
          			<p>A blessed sanctuary yet full of unknown. <a href ="#">See more</a> </p>        
          		</div><!--end "info"-->          
        </div><!--end "items"-->
    
    </div><!--end "slider"-->

</div><!--end "hero"-->
		  

	<!-- <h1>Find a place to stay.</h1> 
		<p>Rent from people in over 34,000 cities and 192 countries.</p>
		  <a href="#">Learn More</a> -->
	
	
	<div class="learn-more">
	  <div class="container">
	    <div class="row">
		  <div class="col-md-4">
		    <h3>Travel</h3>
			<p>From apartments and rooms to treehouses and boats: stay in unique spaces in 192 countries.<p>
			<p>
			  <a href="#">See how we travel on Airbnb</a>
			</p>
		  </div>
			
		  <div class="col-md-4">
		    <h3>Host</h3>
			<p>Renting out your unused space could pay your bills or fund your next vacation.</p>
			<p>
			  <a href="#">Learn more about hosting</a>
			</p>
		  </div>
			
		  <div class="col-md-4">
			<h3>Trust and Safety</h3>
			<p>From Verified ID to our worldwide customer support team, we've got your back.</p>
			<p>
			  <a href="#">Learn about trust at Airbnb</a>
			</p>
		  </div>
	    </div>
	  </div>
	</div>
  </body>
</html>