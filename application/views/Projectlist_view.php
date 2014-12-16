<!-- aqmsproject -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Home</title>
      <link href="<?php echo base_url();?>styles/style.css" type="text/css"rel="stylesheet"/>
	 <link href="<?php echo base_url();?>styles/styleLogin.css" type="text/css"rel="stylesheet"/>
	 <!-------------Importing google fonts------------->
        <link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>styles/delete.css">
	
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
   
	 
	<div id="container">
            <div id="wrapper">
                <h1>Delete Infrastructure</h1><hr/> 
                <div id="menu">
                    <p>Click Project</p>
					 <!--------Displaying Fetched Names from database in Links----------> 
                    <ol>
                        <?php foreach ($projects as $project): ?>
                            <li><a href="<?php echo base_url() . "AGUS_site/show_project_id/" . $project->PID; ?>"><?php echo $project->PROJECT_NAME; ?></a></li>
                        <?php endforeach; ?>
                    </ol>
                </div>
                <div id="detail">
             
				   <!--------Displaying Fetched Details from database ---------->   
                    <?php foreach ($single_project as $project): ?>
                        <p>Project Detail</p>
                        <?php echo $project->INFRA_NO; ?><br/>
                        <?php echo $project->PROJECT_NAME; ?><br/>
                        <?php echo $project->LOCATION; ?><br/>
                        <?php echo $project->STATUS; ?><br/>
                        <?php echo $project->DESCRIPTION; ?><br/>
					
					<!--------Delete button ----------> 	
                    <a href="<?php echo base_url() . "AGUS_site/delete_project_id/" . $project->PID; ?>"><button>Delete</button></a>
                    <?php endforeach; ?>

             
                </div> 
				
            </div> 
            <div id="back_button">
	
			<a href="<?php echo base_url();?>AGUS_site/Homee"><div class="back">BACK</div></a>
	    </div>
        </div>
		</div>
		
		</div>
		
		

</body>
</html>