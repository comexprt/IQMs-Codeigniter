<!-- aqmsproject -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Home</title>
      <link href="<?php echo base_url();?>styles/style.css" type="text/css"rel="stylesheet"/>
	 <link href="<?php echo base_url();?>styles/styleLogin.css" type="text/css"rel="stylesheet"/>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
<script type="text/javascript" src="<?php echo base_url();?>scripts/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>scripts/jquery.cycle.all.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $("button").click(function(){
    $("#box1").replaceWith("<div id="box2"></div>");
  });
});


</script>
</head>

<body class="body">
<!-- start of header -->
	<header class="main-header">
				
		<nav class="navi">
			<ul>
				
				<li><a href="<?php echo base_url();?>AGUS_site/sample"><< BACK</a></li>
				
			</ul>
		</nav>
		
		<div class="banner">
			<a href="#"><img src="<?php echo base_url();?>images/NPC_logo.JPG"/></a>
			<h1>AGUS 6/7 HYDROELECTRIC POWER PLANT COMPLEX</h1>
			<h2>QUALITY MONITORING SYSTEM</h2>
		</div>
		

	</header>
<!-- end of header -->

<!--
	BAI, kani lang sa. Katong mahoman ug log-in, mao lang japun sa'tong sabot.
-->

		<div class="banner">
		  <div id ="choice_style">
   
	  <div id='list'>
	<h3>STATUS OF GENERATING UNITS</h3>
	</div>
			
     <?php 	
	 
	
	
	echo'</table>';
	echo"
	<table border='1px' width='100%' float=center>
	<tr>
		<th>INFRA_NO</th>
		<th>PROJECT_NAME</th>";
     /*	
	<th>LOCATION</th>
		<th>STATUS</th>
		<th>DESCRIPTION</th>
	*/
	
	 echo "<tr>";
			foreach($results as $row){
				echo "<td>".$row->INFRA_NO."</td>";
			    echo "<td>".$row->PROJECT_NAME."</td>";
			   // echo "<td>".$row->LOCATION."</td>";
			    //echo "<td>".$row->STATUS."</td>";
			    //echo "<td>".$row->DESCRIPTION."</td>";
				
				
		echo "</tr>";
		}
	 echo'</table>';
	 
	  
	
	
	
	 ?>
		</div>
		
		</div>
		<div id="back_button">
	
			<a href="<?php echo base_url();?>AGUS_site/Homee"><div class="back">BACK</div></a>
	    </div>
		

</body>
</html>