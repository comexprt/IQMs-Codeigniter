<?php echo !DOCTYPE ("html5");?>
<html lang="en">
<head>



	   
		 <div id="banner">  
		        
			<div id="logo">	 <img src= "<?php echo base_url();?>images/cl2.png"/> </div>
				
           
		</div>
		
		
		
		
	<meta charset="utf-8">
	<title>JOB-ORDER System</title>

     <script src="<?php echo base_url();?>scripts/test.js"></script>
     <link href="<?php echo base_url();?>styles/style.css" type="text/css"rel="stylesheet"/>

</head>
<body>
 
	<div id ="choice_style">
	
	<?php 
	        echo"<div id=welcome_mess_admin>";
			echo"<h1>Welcome $username</h1>";	
			echo"</div>";
	
            echo"<div id=customer_page_form>";
			echo"<h3>Make request</h3>";
			
			echo form_open("JOS_site/getdata_customer2");
				
				 echo form_input(array(
				                         'name' => 'username',
										 'size'        => '10',
										'value' => $username,  'readonly'=>'true',
								 ));
				 echo form_submit("loginSubmit","GO!");
			echo form_close();
			
			  echo form_open("JOS_site/getdata_customer");
				
			
				
				echo"<h3>View Request</h3>";
			
				 echo form_input(array(
				                         'name' => 'username',
										 'size'        => '10',
										'value' => $username,  'readonly'=>'true',
								 ));
				 echo form_submit("loginSubmit","GO!");
			echo form_close();
			echo"</div>";
		
		
		?>
	
	 
	 

	</div>
	
	<div id="back_button">
	
			<a href="<?php echo base_url();?>JOS_site/output_logout"><div class="back">log-Out</div></a>
	</div>
	
	<div id ="footer">
		<p>webteam@g.msuiit.edu.ph Web Development Team.
		   Copyright (c) 2014 ..151-Powerpuff Friends + Prof X. <3.com	.	
		   All rights reserved.</p>
		   
		   <p><a href="<?php echo base_url();?>JOS_site/home">Home</a>| <a href="<?php echo base_url();?>JOS_site/About">About</a> |<a href="#">FAQs</a></p> 
	</div>
	

</div>


</body>
</html>