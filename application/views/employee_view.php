<?php echo !DOCTYPE ("html5");?>
<html lang="en">
<head>


	<meta charset="utf-8">
	<title>AGUS 6/7 HE POWER PLANT</title>

     <script src="<?php echo base_url();?>scripts/test.js"></script>
     <link href="<?php echo base_url();?>styles/style.css" type="text/css"rel="stylesheet"/>
	 <link href="<?php echo base_url();?>styles/stylev1.css" type="text/css"rel="stylesheet"/>



</head>
<body>
  

	<div id ="choice_style">
				
		
	
			
			
		<?php

/**************************** ADMINISTRATOR   **************************************/
            
		    if('admin' == $username){
			
			echo"<div id=welcome_mess_admin>";
			echo"<h1>Hello admin!</h1>";
			echo"</div>";
			echo "<br>";
			echo "<br>";
			include("admin_nav.php");
			
			}
			else {
/****************************  Normal EMPLOYEE   **************************************/        
            
			
			echo"<div id=welcome_mess_admin>";
			echo"<h1>Hello $username!</h1>";	
			echo"</div>";
			echo"<div id=customer_page>";
			
	        echo form_open("AGUS_site/getdata_employee");
				
				echo"<br>";
				echo"<br>";
				echo"<br>";
				echo"<br>";
				
			
				 echo form_input(array(
				                         'name' => 'username',
										 'size'        => '10',
										'value' => $username,  'readonly'=>'true',
								 ));
				 echo form_submit("loginSubmit","Show Table");
			echo form_close();
		   }
			echo"</div>";
		
		?>

	
	<div id="back_button">
	
			<a href="<?php echo base_url();?>AGUS_site/emp_logout"><div class="back">log-Out</div></a>
	</div>
	
	<div id ="footer">
		<p>(c) 2014 ..IT171 TASK FORCE AGUS 6/7.com	.	
		   All rights reserved.</p>
		   
		   <p><a href="<?php echo base_url();?>AGUS_site/home">Home</a>| <a href="<?php echo base_url();?>AGUS_site/About">About</a> |<a href="<?php echo base_url();?>AGUS_site/samplelogin">Sample_login</a></p> 
	
         <!-- sample -->
		 
		 
		 
         <!--end   sample -->

		 
		 
	
	</div>
	
	


</div>


</body>
</html>