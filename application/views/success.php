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
               <h1>Project was successfully Added</h1><hr/> 
                <div id="menu">
                    <p>View Project</p>
                    <!--Fetching Names Of All projects From Database-->
					<ol>
                        <?php foreach ($projects as $project): ?>
                            <li><a href="<?php echo base_url() . "AGUS_site/show_projectupdate_id/" . $project->PID; ?>"><?php echo $project->PROJECT_NAME; ?></a></li>
                        <?php endforeach; ?>
                    </ol>
                </div>
                <div id="detail">
					<!--Fetching All Details of Selected project From Database And Showing In a Form-->
                    <?php foreach ($single_project as $project): ?>
                        <p>Edit Detail & Click Update Button</p>
                        <form method="post" action="<?php echo base_url() . "AGUS_site/update_project_id1"?>">
                            <label id="hide">Id :</label><br/> 
                            <input type="text" id="hide" name="did" value="<?php echo $project->PID; ?>"><br/>   
							
							<label>INFRA #:</label><br/> 
                            <input type="text" name="INFRA_NO" value="<?php echo $project->INFRA_NO; ?>" style='text-transform:uppercase'><br/>  							

                            <label>Project Name:</label><br/> 
                            <input type="text" name="PROJECT_NAME" value="<?php echo $project->PROJECT_NAME; ?>"><br/>    

                            <label>Location:</label><br/> 
                            <input type="text" name="LOCATION" value="<?php echo $project->LOCATION; ?>"><br/>
							
							<label>Description :</label><br/> 
                            <input type="text" name="DESCRIPTION" value="<?php echo $project->DESCRIPTION; ?>"><br/>
							
							 <label>Status :</label><br/> 
                            <input type="text" name="STATUS" value="<?php echo $project->STATUS; ?>"><br/>

                            
							<input type="submit" id="submit" name="dsubmit" value="Update">
							<div id="Delete_button">
							<!--      Make Project Accomplishment    -->
												         <!--------Add Project Accomplishment button ----------> 	
                            <a href="#"><div class="delete">Add Project Accomplishment</div></a>
					
                            
					         <!--------Delete button ----------> 	
                            <a href="<?php echo base_url() . "AGUS_site/delete_delete_id/" . $project->PID; ?>"><div class="delete">Delete</div></a>
							
							
							</div> 
	                             
								
							
							
                        </form>
						
                      
                    <?php endforeach; ?>
					
					
                </div> 
				
            </div>  
			<a href="<?php echo base_url();?>AGUS_site/Homee"><button>back</button></a>
				
			

            
        </div>
		
		
		
		

</body>
</html>