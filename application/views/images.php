<!-- aqmsproject -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Home</title>
      
	 <!-------------Importing google fonts------------->
        <link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>styles/update.css">
		<!--link href="<?php echo base_url();?>styles/style.css" type="text/css"rel="stylesheet"/-->
	

</head>

<body>
<!-- start of header -->
	
			
	
<!-- end of header -->

<!--
	BAI, kani lang sa. Katong mahoman ug log-in, mao lang japun sa'tong sabot.
-->
   
	 
	<div id="container">
            <div id="wrapper">
               <h1>IMAGES</h1> 
			   	     
                     <!--img src="<?php //echo base_url();?>images/NPC_logo.JPG" height='100' width='100' border='1'/-->
                <?php foreach ($image as $images):
						echo"<table>";
						echo"<tr>";
						echo"<td>";
						
						//echo"<td>$images->image</td>";?> 
						
						<!--img src="<?php //echo base_url();?>uploads/Desert.JPG" height='100' width='100' border='1'/-->
						<img src="<?php echo base_url();?><?php echo $images->image?>" height='100' width='100' border='1'>
				<?php echo"</td>";
						echo"<td>$images->image</td>";
						
						echo"</tr>";
						
						
						echo"</table>";
					
					 endforeach; ?>	  
				
            </div>  
			<a href="<?php echo base_url();?>AGUS_site/Homee"><button>back</button></a>
				
			

            
        </div>
		
		
		
		

</body>
</html>