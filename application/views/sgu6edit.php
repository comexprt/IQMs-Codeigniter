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
	
	</div>
			
     <?php 	
	 echo"<div id=form_container>";
	 echo"<table border='3px' width='100%' float=center style=text-align:center>";
	echo form_open("AGUS_site/editvalueSGU6");
	echo"<h3>EDIT   STATUS   OF  GENERATING  UNIT  IN  AGUS  6</h3>";
	
	 
	                     	echo "<td>" .form_input(array(
							            'name' => 'AGUS6',
										'value' => 'UNIT1',	
										'maxlength'   => '100',
										'size'        => '7',
										'style'=>"text-align: center; vertical-align: middle;font-weight:bold",
										'placeholder' => '' , 'readonly'=>'true',
								 ))."</td>"; 
							echo "<td>" .form_input(array(
							            'name' => 'Status',
										'value' => 'OK',	
										'maxlength'   => '50',
										'size'        => '7',
										'style'=>"text-align: center; vertical-align: middle;font-weight:bold",
										'placeholder' => 'Status'
								 ))."</td>";   
	
							echo "<td>" .form_input(array(
										'name' => 'Remarks',
										'value' => 'Operational',	
										'maxlength'   => '255',
										'size'        => '5',
										'style'=>"text-align: center; vertical-align: middle;font-weight:bold",
										'placeholder' => 'Remarks',
								 ))."</td>";
						    
			
							
								 
				
			echo'</table>';
			 echo"<table border='3px' width='100%' float=center >";
			echo "<td>" .form_input(array(
							            'name' => 'AGUS62',
										'value' => 'UNIT2',	
										'maxlength'   => '100',
										'size'        => '7',
										'style'=>"text-align: center; vertical-align: middle;font-weight:bold",
										'placeholder' => '' , 'readonly'=>'true',
								 ))."</td>"; 
							echo "<td>" .form_input(array(
							            'name' => 'Status2',
										'value' => 'OK',	
										'maxlength'   => '50',
										'size'        => '7',
										'style'=>"text-align: center; vertical-align: middle;font-weight:bold",
										'placeholder' => 'Status'
								 ))."</td>";   
	
							echo "<td>" .form_input(array(
										'name' => 'Remarks2',
										'value' => 'Operational',	
										'maxlength'   => '255',
										'size'        => '5',
										'style'=>"text-align: center; vertical-align: middle;font-weight:bold",
										'placeholder' => 'Remarks',
								 ))."</td>";
			echo'</table>';
			echo"<table border='3px' width='100%' float=center >";
			echo "<td>" .form_input(array(
							            'name' => 'AGUS63',
										'value' => 'UNIT3',	
										'maxlength'   => '100',
										'size'        => '7',
										'style'=>"text-align: center; vertical-align: middle;font-weight:bold",
										'placeholder' => '' , 'readonly'=>'true',
								 ))."</td>"; 
							echo "<td>" .form_input(array(
							            'name' => 'Status3',
										'value' => 'OK',	
										'maxlength'   => '50',
										'size'        => '7',
										'style'=>"text-align: center; vertical-align: middle;font-weight:bold",
										'placeholder' => 'Status'
								 ))."</td>";   
	
							echo "<td>" .form_input(array(
										'name' => 'Remarks3',
										'value' => 'Operational',	
										'maxlength'   => '255',
										'size'        => '5',
										'style'=>"text-align: center; vertical-align: middle;font-weight:bold",
										'placeholder' => 'Remarks',
								 ))."</td>";
			echo'</table>';
			echo"<table border='3px' width='100%' float=center >";
			echo "<td>" .form_input(array(
							            'name' => 'AGUS64',
										'value' => 'UNIT4',	
										'maxlength'   => '100',
										'size'        => '7',
										'style'=>"text-align: center; vertical-align: middle;font-weight:bold",
										'placeholder' => '' , 'readonly'=>'true',
								 ))."</td>"; 
							echo "<td>" .form_input(array(
							            'name' => 'Status4',
										'value' => 'OK',	
										'maxlength'   => '50',
										'size'        => '7',
										'style'=>"text-align: center; vertical-align: middle;font-weight:bold",
										'placeholder' => 'Status'
								 ))."</td>";   
	
							echo "<td>" .form_input(array(
										'name' => 'Remarks4',
										'value' => 'Operational',	
										'maxlength'   => '255',
										'size'        => '5',
										'style'=>"text-align: center; vertical-align: middle;font-weight:bold",
										'placeholder' => 'Remarks',
								 ))."</td>";
			echo'</table>';
			echo"<table border='3px' width='100%' float=center >";
			echo "<td>" .form_input(array(
							            'name' => 'AGUS65',
										'value' => 'UNIT5',	
										'maxlength'   => '100',
										'size'        => '7',
										'style'=>"text-align: center; vertical-align: middle;font-weight:bold",
										'placeholder' => '' , 'readonly'=>'true',
								 ))."</td>"; 
							echo "<td>" .form_input(array(
							            'name' => 'Status5',
										'value' => 'OK',	
										'maxlength'   => '50',
										'size'        => '7',
										'style'=>"text-align: center; vertical-align: middle;font-weight:bold",
										'placeholder' => 'Status'
								 ))."</td>";   
	
							echo "<td>" .form_input(array(
										'name' => 'Remarks5',
										'value' => 'Operational',	
										'maxlength'   => '255',
										'size'        => '5',
										'style'=>"text-align: center; vertical-align: middle;font-weight:bold",
										'placeholder' => 'Remarks',
								 ))."</td>";
			echo'</table>';
			
		
			echo"<p>";
			echo form_submit("loginSubmit","SAVE");
			echo"</p>"	;
			echo form_close();
	 
	
	
	
	echo"</div>";
	 ?>
		</div>
		
		</div>
		<div id="back_button">
	
			<a href="<?php echo base_url();?>AGUS_site/sgu"><div class="back">BACK</div></a>
	    </div>
		

</body>
</html>