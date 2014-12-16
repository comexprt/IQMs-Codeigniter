 <?php foreach ($query as $project): ?>
			 
			<p>Your Image</p>
			<img src ="<?php echo "viewimage.php?id=".$project->id;?>"/>
			
          <?php endforeach; ?>
		  
		  
		  
	<br>
             <?php foreach ($query as $project): ?>
			 <form action="<?php echo base_url() . "AGUS_site/viewimage"?>" method="POST" ">
				<input type="hidden" name="image" value="<?php echo $project->id; ?>">
				<input type="submit" name="submit" value="View IMAGE"/>
			 </form>
			 
          
             <?php endforeach; ?>	  
		  
		  
		  //uploadimages
		  
		  
		  
		  
		  
		  <?php 
header("Content-type: image/jpeg");
mysql_connect("localhost","heplant","test123") or die(mysql_error());
mysql_select_db("database_heplant") or die(mysql_error());

$id=addslashes($_REQUEST['id']);
$image=mysql_query("SELECT * FROM databaseimages WHERE id='".$id."'");
$image=mysql_fetch_assoc($image);
$image=$image['image'];

//foreach ($image as $project): 
			 // header("Content-type: ".$query->file_type);



			    //echo $project->name;
echo $image;			
			
			
//	endforeach;		   
?>
			  
			  
			  


				
			  //viewimage
			  <?php 
//header("Content-type: " . image_type_to_mime_type(IMAGETYPE_PNG));
//header("Content-type: image/jpeg");	
/*mysql_connect("localhost","heplant","test123") or die(mysql_error());
mysql_select_db("database_heplant") or die(mysql_error());

//$id=addslashes($_REQUEST['id']);
$image=mysql_query("SELECT image FROM databaseimages WHERE id=34");
$image=mysql_fetch_assoc($image);
$image=$image['image'];*/

foreach ($image as $project): 
//echo $project->name;
$row=$project->image ;
$imageshow=image_type_to_mime_type(IMAGETYPE_PNG);
//echo $row;				
			
			
endforeach;		   
?>
			  
			  
			  


				
			  
			  
	//uploadimages

<!-- end of header -->
     <form action="<?php echo base_url()?>AGUS_site/uploading_images"method="POST" enctype="multipart/form-data">
			<input type="file"  onkeypress='validate(event)' name="image" required/>
			<input type="submit" name="submit" value="Upload"/>
	</form>
	
	<!--p>Your Image</p-->
	<!--img src="<//?php echo base_url();?>application/views/viewimage.php"/-->
	<?php echo $results?>
   
	

            <?php foreach ($query as $project):?>
			 
			
			 <form action="<?php echo base_url() . "AGUS_site/viewimage"?>" method="POST" ">
				<input type="hidden" name="image" value="<?php echo $project->id; ?>">
				<input type="submit" name="submit" value="View IMAGE"/>
			 </form>
			
           <?php endforeach; 	
			  
			  
			  
			  
			  
			  
/***********************************************	ADMIN_LIST_INFRASTRUCTURE     ********************************************************************/			  
			  
<!DOCTYPE html>

<html lang="en">

	<head>
		<title>My Website</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>styles/jedoxstyle.css">
		<link rel="stylesheet" href="<?php echo base_url();?>styles/admin_style.css">
		<link href="<?php echo base_url();?>styles/bootstrap.min.css" rel="stylesheet">
		<script src="<?php echo base_url();?>scripts/jquery.min.js"></script>
		<script src="<?php echo base_url();?>scripts/bootstrap.min.js"></script>
		
		
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
					<li><a href="#myModal" role="button" data-toggle="modal""<?php echo base_url() . "AGUS_site/show_projectinfo_id/" . $imagedata->PID; ?>"><img src="<?php echo base_url().'/uploads/'.$imagedata->name_image;?>"width="100" height="80" ><br/><?php echo $imagedata->name_image ?></a></li>
					<?php 
					// -> pun.an ni.."#myModal" role="button" data-toggle="modal" 
					//echo $imagedata->name_image ?>
				    <?php endforeach; ?>
				  </ul>
				  
				  
				  
				  
				
				
		</div>
		
		</div>
		</div>
		

            <!-- Begin modal for login -->
          <div class="modal fade" id="myModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">
                  <div class="modal-header">
                   
                      <!--h4 class="modal-title" id="myModalLabel">Login</h4-->
				
					  
					   <p>SPECIFIC PROJECT</p>
				
						<?php foreach ($single_project as $project): ?>
									
							 
                            <p><?php echo $project->PID; ?></p>
                            <p><?php echo $project->INFRA_NO; ?></p>
                            <p><?php echo $project->PROJECT_NAME; ?></p>
                            <p><?php echo $project->LOCATION; ?></p>
                            <p><?php echo $project->STATUS; ?></p>
                            <p><?php echo $project->DESCRIPTION; ?></p>
						 <?php endforeach; ?>
					  
					  <br>

							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					  <br>
					 
					  <br>
                  </div><!-- end modal-header -->
              </div><!-- end modal-content -->
            </div><!-- end modal-dialog -->
          </div><!-- end myModal -->

	</body>

</html>			  
			  
			  
/********************************        HOME PAGE       **********************************************/			  
			  
<!-- aqmsproject -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Home</title>
     <link href="<?php echo base_url();?>styles/style.css" type="text/css"rel="stylesheet"/>
	 <link href="<?php echo base_url();?>styles/styleLogin.css" type="text/css"rel="stylesheet"/>
	 <link href="<?php echo base_url();?>styles/bootstrap.min.css" rel="stylesheet">
	<script src="<?php echo base_url();?>scripts/jquery.min.js"></script>
    <script src="<?php echo base_url();?>scripts/bootstrap.min.js"></script>
	
	
</head>

<body class="body">
<!-- start of header -->
	<header class="main-header">
				
		<nav class="nav">
			<ul>
				<li><a href="<?php echo base_url();?>AGUS_site/sample">Home</a></li>
				<li><a href="#myModal" role="button" data-toggle="modal">Login</a></li>
				<li><a href="<?php echo base_url();?>AGUS_site/sgu">SGU</a></li>
			</ul>
		</nav>
		
		<div class="banner">
			<a href="#"><img src="<?php echo base_url();?>images/NPC_logo.JPG"/></a>
			<h1>AGUS 6/7 HYDROELECTRIC POWER PLANT COMPLEX</h1>
			<h2>QUALITY MONITORING SYSTEM</h2>
		</div>

	</header>
<!-- end of header -->

            <!-- Begin modal for login -->
          <div class="modal fade" id="myModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">
                  <div class="modal-header">
                   
                      <h4 class="modal-title" id="myModalLabel">Login</h4>
				 </div>
					  
					 
							<div class="login">
					<?php 	
						
						echo form_open("AGUS_site/verifyloginEmployee");
								echo validation_errors();
							
							
						
							echo form_input(array(
										'name' => 'username',
										'value' => '',	
										'maxlength'   => '100',
										'size'        => '28',
                                         'style'       => 'margin:10px',
										'placeholder' => 'Username',
								 ));
							
							echo form_password(array(
										'name' => 'password',
										'value' => '',
										'placeholder' => 'Password',
										'maxlength'   => '100',
										'size'        => '28',
										'style'       => 'margin:10px',
										
								 ));
                   
							
                            echo"<p>";
							echo form_submit("loginSubmit","Log In");
							echo"</p>"	;
							echo form_close();
	 
					?>
				
					  
					  <br>

							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					  <br>
					 
					  <br>
                  </div><!-- end modal-header -->
              </div><!-- end modal-content -->
            </div><!-- end modal-dialog -->
          </div><!-- end myModal -->

<!--
	BAI, kani lang sa. Katong mahoman ug log-in, mao lang japun sa'tong sabot.
-->
</body>
</html>			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
		  