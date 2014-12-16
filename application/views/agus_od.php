<!DOCTYPE html>

<html lang="en">

	<head>
		<title>My Website</title>
		<meta charset="utf-8">
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
		
		<h2>WORK ORDER</h2>
		<h3>OPERATIONS DIVISION</h3>
		<a class="fancybox" href="#add1workorder"><button>Add WorkOrder</button></a>
		<br>
		<br>
		<div id ="choice_style">
	<?php
	$x=1; 
	
	echo"
	<table border='1px' width='100%' float=center >
	<tr>
	    <th>No.</th>
	    <th>Activities</th>
		<th>Cost</th>
		<th>Nature</th>
		<th>Target Date</th>
		<th>Infa No.</th>
		<th>Actual Date</th>";
		
		echo "<tr>";
			foreach($workorder as $row){
			
			   echo "<td>".($x++)."</td>";?>
			  <td><a class="fancybox" href="#<?php echo $row->PID;?>"><?php echo $row->PROJECT_NAME;?></a></td>
			   
  <?php
			  
			   echo "<td>".$row->cost."</td>";
			   echo "<td>".$row->natureOfContract."</td>";
			   echo "<td>".$row->targetDate."</td>";
			   echo "<td>".$row->INFRA_NO."</td>";
			   echo "<td>".$row->actualDate."</td>";
		echo "</tr>";
		
		}
    
	echo'</table>';


				
							
		
	?>
	</div>
		<BR>
		<BR>
		<BR>
		<BR>
					<a href="<?php echo base_url();?>AGUS_site/workorder"><button>back</button></a>
	<div id="add1workorder" style="width:780px;display: none;">
	
		
		<h2>OPERATIONS DIVISION</h2>
		<p>
		    <div id ="choice_style" >
				<?php
			
			
	
             echo form_open("AGUS_site/Addworkorderod");	
           	    echo "<br>";
				echo"<p>";
				echo"<input type='text' name='PROJECT_NAME' id='PROJECT_NAME' onkeypress='validate(event)' placeholder=' PROJECT NAME' required/>";
				echo"<label for='PROJECT_NAME'>    PROJECT NAME</label>";
				echo"</p>";
				echo"<p>";
				echo"<input type='text' name='cost' id='cost' onkeypress='validate(event)' placeholder='COST' required/>";
				echo"<label for='COST'>       COST</label>";
			    echo"</p>";
				echo"<p>";
				echo"<input type='text' name='natureOfContract' id='natureOfContract' onkeypress='validate(event)' placeholder='NATURE OF CONTRACT' required/>";
				echo"<label for='natureOfContract'>     NATURE OF CONTRACT</label>";
			    echo"</p>";
				echo"<p>";
				echo"<input type='text' name='targetDate' id='targetDate' onkeypress='validate(event)' placeholder='TARGET DATE' required/>";
				echo"<label for='targetDate'>     TARGET DATE</label>";
			    echo"</p>";
				echo"<input type='hidden' name='costcenter' id='costcenter' value='od'";
			    echo"</p>";
				
			 
				
			echo"<p class=submit >";
			echo form_submit("loginSubmit","ADD");
			echo"</p>"	;
			
			echo form_close();
			
		
            			
			?>
				
		</div>			
		</div>
<!------------------for edit---------------------->
	<?php foreach($workorder as $row):?>			   
	<div id="<?php echo $row->PID?>" style="display: none;">
	 <h1><?php echo $row->PROJECT_NAME //."    INFORMATION";?></h1>
	 <div id="wrapper2">
	
          <div id="menu2">
		  
		<img src="<?php echo base_url().'/uploads/'.$row->name_image;?>"width="350" height="300" >
	    </div>
		  <div id="detail2">
		  <!---------------------------------------------------->
		  
		  <form method="post" action="<?php echo base_url() . "AGUS_site/update_project"?>">
							
                            <input type="hidden" id="hide" name="did" value="<?php echo $row->PID; ?>"><br/> 					
								
							<label>COST CENTER:</label><br/> 
                            <select name="costcenter">
										<option value="<?php echo $row->costcenter; ?>">Operations Division</option>
										<option value="otpm">Office of the Plant Manager</option>
										<option value="md">Maintenance Division</option>
										<option value="adfin">Admin. Activities & Finance Division</option>
										<option value="ptsd">Plant Technical Service Division</option>
										
							</select>
								<br>
								<br>
							<label>PROJECT NAME:</label><br/> 
                            <input type="text" name="PROJECT_NAME" value="<?php echo $row->PROJECT_NAME; ?>"onkeypress='validate(event)' required/><br/>
							
                            <label>COST:</label><br/> 
                            <input type="text" name="cost" value="<?php echo $row->cost; ?>"><br/>    

                            <label>NATURE OF CONTRACT:</label><br/> 
                            <input type="text" name="natureOfContract" value="<?php echo $row->natureOfContract; ?>"onkeypress='validate(event)' required/><br/>
							
							<label>TARGET DATE :</label><br/> 
                            <input type="text" name="targetDate" value="<?php echo $row->targetDate; ?>"onkeypress='validate(event)' required/><br/>
							<br>
				</div>
	 <div id="detail3">
		  <!---------------------------------------------------->
							<label>ADD INFRASTRUCTURE INFRA #:</label><br/> 
                            <input type="text" name="INFRA_NO" value="<?php echo $row->INFRA_NO; ?>" style='text-transform:uppercase'onkeypress='validate(event)' required/><br/>  
							
							 <label>ACTUAL DATE:</label><br/> 
                            <input type="text" name="actualDate" value="<?php echo $row->actualDate; ?>"onkeypress='validate(event)' required/><br/>
							<br>
							<br>
                            <label>LOCATION:</label><br/> 
                            <input type="text" name="LOCATION" value="<?php echo $row->LOCATION; ?>"onkeypress='validate(event)' required/><br/>    
                             
                          
							 <label>STATUS :</label><br/> 
                            <input type="text" name="STATUS" value="<?php echo $row->STATUS ; ?> "onkeypress='validate(event)' required/><br/>
							
							<label>Description :</label><br/> 
                            <input type="text" name="DESCRIPTION" value="<?php echo $row->DESCRIPTION; ?>"><br/>

                            <br>
							<input type="submit" id="submit" name="dsubmit" value="Update">
		  <!---------------------------------------------------->
		
		

	</div>
	
	 </form>
	</div>
	<?php endforeach; ?>	
		</div>
		</div>
		</div>
	</body>

</html>