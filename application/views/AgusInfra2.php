<!DOCTYPE html>

<html lang="en">

<head>
	<link rel="shortcut icon" href="<?php echo base_url();?>/images/img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php echo base_url();?>/images/img/favicon.ico" type="image/x-icon">
	<meta charset="utf-8">
	<title>Agus 6/7 - Infrastructure Quality Monitoring System</title>

	<!-- stylesheets -->
	<link rel="stylesheet"  type="text/css" href="<?php echo base_url();?>styles/css/iqms-styles.css">
	<link href="<?php echo base_url();?>styles/bootstrap.min.css" rel="stylesheet">
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
</head>

<body>
		<!-- start top navigation bar -->
	
		<div id="top-navigation-bar">
			
			<div class="top-nav-title">
				<a href="<?php echo base_url();?>" title="Agus 6/7 Infrastructure Quality Monitoring System"><img src="<?php echo base_url();?>images/img/iqms_logo.png">AGUS 6/7 Hydroelectric Power Plant<br>Infrastructure Quality Monitoring System</a>
			</div>
			
			<div class="top-nav-links">
				
				<ul>
					<li><a href="#LOGIN12345" class="fancybox" >Log in▼</a></li>
				</ul>
				
			</div>
			
		</div>
		
		<!-- end top navigation bar -->
		
		<div id="wrapper">

			<div class="insidemain-content-container"> <!-- width: 1000px; -->
				<div id="content" role="main" >
				<div class="content-container">
				
					<div class="title" style="text-align:center;margin-top:-15px;" >
						<h1><?php echo $plant; ?>- LIST OF INFRASTRUCTURE</h1>
					</div>
			
					<form method="post" action="<?php echo base_url()."AGUS_site/AgusInfraSearch"?>">
            <div class="cost-centers-year-selector">
                <select style="width:90px;" id="inputtype" name="inputtype">
                    <option value="all">ALL </option>
                    <option value="INFRA_NO">INFRA #</option>
                    <option value="ACTIVITY">ACTIVITY</option>
                    <option value="YEAR">YEAR</option>
					
                   
                </select>
            </div >
				
			
			
            <div class="cost-centers-search-tool">
                <input style="margin-top:27px;width:200px;text-transform:lowercase;font-size:12px;" class="cost-centers-search-input" type="text" id="inputsearch" name="inputsearch" placeholder="Search here" required/>
                <input  type="hidden" id="plant" name="plant" value="<?php echo $plant;?>"  required/>
                <input class="cost-centers-search-button" type="submit" value="Search">
            </div>
			
			 <div style="margin-left:30px;width:150px;height:20px;">
			 <?
				if($plant=="AGUS 6"){
			 ?>
			 <div class="plantselector" style="float:left;width:70px;">
                <a class="cost-centers-search-button2" style="color:white;text-decoration:none;width:70px;padding:10px;background-color: #00238C;"href="<?php echo base_url();?>AGUS_site/AgusInfra" title="AGUS 6 Infrastructure">
				AGUS 6</a>
			 </div>
			 <div class="plantselector7" style="float:right;width:70px;">
                <a class="cost-centers-search-button2" style="color:white;text-decoration:none;width:70px;padding:10px;" href="<?php echo base_url();?>AGUS_site/AgusInfra7" title="AGUS 7 Infrastructure">
				AGUS 7</a>
			 </div>
			 <?php }else{?>
			 <div class="plantselector" style="float:left;width:70px;">
                <a class="cost-centers-search-button2" style="color:white;text-decoration:none;width:70px;padding:10px;"href="<?php echo base_url();?>AGUS_site/AgusInfra" title="AGUS 6 Infrastructure">
				AGUS 6</a>
			 </div>
			 <div class="plantselector7" style="float:right;width:70px;">
                <a class="cost-centers-search-button2" style="color:white;text-decoration:none;width:70px;padding:10px;background-color: #00238C;" href="<?php echo base_url();?>AGUS_site/AgusInfra7" title="AGUS 7 Infrastructure">
				AGUS 7</a>
			 </div>
			 
			 <?php }?>
			</div>
			
            </form>
			<?php $i=0;
			foreach ($img as $imagedata):
			$i++;
			endforeach;
			?>
			<?php if($i==0){?>
					
					
			<div style="padding-bottom:1px;margin-top:-80px;margin-left:50px;color:#424251;"><h3><?php echo $img2." >>  "?>Search  " <?php echo $img1." \""?></h3></div>
					<div id="content-wrapper" style="margin-top:48px;border-radius:10px;border:3px double #DBDBEA;height:630px;width:1100px;overflow-y:auto;" >
					<h2 style="margin-left:450px;margin-top:100px;color:#D90000;">No Match Found ! ! !</h2>
				  </div>
		    <?php }else{?>
			<div style="margin-top:-80px;margin-left:50px;color:#424251;"><h3><?php echo $img2." >>  "?>Search  " <?php echo $img1." \""?></h3></div>
			<?php if($i==1){?>
			<div style="margin-top:-13px;margin-left:50px;font-size:10px;color:#D90000;"><h3>RESULTS : <?php echo $i." Match Found"?></h3></div>
			<?php }else {?>
			<div style="margin-top:-13px;margin-left:50px;font-size:10px;color:#D90000;"><h3>RESULTS : <?php echo $i." Matches Found"?></h3></div>
			<?php }?>
			
					
				
		
					<div id="content-wrapper" style="margin-top:45px;border-radius:10px;border:3px double  #DBDBEA;height:630px;width:1100px;overflow-y:auto;" >
				<br>
				<?php foreach ($img as $imagedata):?>
					<ul class="img">
					
					<li><a class="fancybox" style="text-decoration:none;font-size:12px; text-transform: uppercase;text-align: center;color:#00008C;" href="#<?php echo $imagedata->PID?>" ><img src="<?php echo base_url().'/uploads/'.$imagedata->name_image;?>"width="110" height="90" border="1.5px solid #D4D4D4"><br/>
					<?php echo $imagedata->INFRA_NO?><br><div style="overflow:hidden;width:110px;height:25px;font-size:9px;color:#006CD9;"><?php echo $imagedata->PROJECT_NAME; ?></div></a></li>
					
					
				    <?php endforeach; ?>
				  </ul>
				  </div>
				  
				 <?php }?>
				</div>
				
			</div>
			
			</div>
			
		</div>
			
			
		</div>
		<?php foreach ($img as $imagedata):?>			   
	<div id="<?php echo $imagedata->PID?>" style="display: none;border-radius:5px;border:2px solid #E1E1E1;height:500px;box-shadow: 1px 1px 1px #E4E4E4;">
	 <div id="border-header">
	 <h2><center>INFRASTRUCTURE<center></h2>
	 </div>
	<div id="wrapper2" style="margin-top:10px;">
         <div id="menu2" style="border:2px double #E1E1E1;margin-top:-25px;box-shadow: 2px 2px 2px #E4E4E4;border-radius:5px;">
		 <div id="borderimage" style="margin-top:20px;margin-left:20px;"> 
			<img src="<?php echo base_url().'/uploads/'.$imagedata->name_image;?>"width="360px" height="300px" >
		
	    </div>
			<div id="transformtext" Style="text-transform: uppercase;font-weight: bold;font-size:15px;margin-left:120px;padding-top:5px;"><?php echo $imagedata->INFRA_NO?> </div>
	    </div>
		
		  <div id="detail4" >
		  <!--div id="detail41" style="float:left;width: 760px;height:380px;margin-top: -15px;margin-left: 27px;" -->
		  
		  
		<div style="font-size:14px;font-weight:bold;width:150px;height:20px;">INFRA NO</div>
		<div style="color:#00008C;font-size:15px;margin-left:130px;margin-top:-23px;width:200px;height:20px;text-transform: capitalize;"><?php echo "  : ".$imagedata->INFRA_NO?></div>
		
		<div class="idinfo2">ACTIVITIES</div>
		<div class="idinfo"><?php echo "  : ".$imagedata->PROJECT_NAME?></div>
		
		<div class="idinfo2">LOCATION</div>
		<div class="idinfo"><?php echo "  : ".$imagedata->LOCATION?></div>
		
		<div class="idinfo2">COST</div>   
		<div class="idinfo"><?php echo "  : ".$imagedata->cost." M"?></div>
		
		<div class="idinfo2">TARGET DATE</div>  
		<div class="idinfo"><?php echo "  : ".$imagedata->FromDate." - ".$imagedata->ToDate?></div>
		
		<div class="idinfo2">NATURE OF CONTRACT</div>  
		<div class="idinfo"><?php echo "  : ".$imagedata->natureOfContract?></div>
		 <?php 
			$date=strtotime($imagedata->ass);
			$dateto=strtotime($imagedata->too);
			$date1=date('F d ,Y', $date);
			$date2=date('F d ,Y', $dateto);
			if ($date1==$date2){

		?>
			<div class="idinfo2">ACTUAL DATE</div>
			<div class="idinfo"><?php echo ": unknown";?></div>
		<?php	}else{
		 
		 ?>
		<div class="idinfo2" style="margin-top:25px;">ACTUAL DATE</div>   
		<div class="idinfo" style="width:350px;"><?php echo " : ".$date1."-".$date2; ?></div>
		<?php } ?>
		<div class="idinfo2" >DESCRIPTION</div>   
		<div class="idinfo"style='margin-left:138px;border:1px solid #DBDBEA;border-radius:5px;width:550px;height:70px;overflow:hidden;'><?php echo $imagedata->DESCRIPTION?></div>
		<?php
					$choice=$imagedata->costcenter;

					switch ($choice) {
					case "otpm":
							echo "<div class='idinfo2'>COST CENTER</div><div class='idinfo'>: Office of the Plant Manager</div>";
							break;
					case "md":
							echo "<div class='idinfo2'>COST CENTER</div><div class='idinfo'>: Maintenance Division</div>";
							break;
					case "adfin":
							echo "<div class='idinfo2' >COST CENTER</div><div class='idinfo'>: admin & Finance Division</div>";
							break;
					case "ptsd":
							echo "<div class='idinfo2'>COST CENTER</div><div class='idinfo'>: Plant Technical Service Division</div>";
							break;
					default:
							echo"<div class='idinfo2'>COST CENTER</div><div class='idinfo'>Query Database Error 'Contact I.T' </div>";
							}
					
			?>
		<div class="idinfo2" >STATUS</div> 
		<div class="idinfo" ><?php echo " : ".$imagedata->STATUS?></div>
		<?php 
		$remark=$imagedata->remarks;
		if($remark==""){
		}else{
		?>
		<div class="idinfo2" >REMARKS</div> 
		<div class="idinfo" style='margin-left:138px;border:1px solid #DBDBEA;border-radius:5px;width:550px;height:70px;overflow:hidden;'><?php echo $imagedata->remarks?></div>
		<?php }?>
		<div class="idinfo2" >PLANT</div> 
		<div class="idinfo" ><?php echo " : ".$imagedata->plant?></div>
	<!--div id="actions-button" style="width:80px;height:30px;margin-left:500px;margin-top:-110px;">
			<label>
				<select>
					<option selected> Select Box </option>
					<option>Short Option</option>
					<option>This Is A Longer Option</option>
				</select>
			</label>
	</div-->
	
	<!-----------------      Still  working   September 27,2014   ----------->
	<!--/div--><!--end div41--> 
	<?php 
	$remarks=$imagedata->STATUS;
	if($remarks=="Canceled"||$remarks=="Reffered"){
		$display="none";
	}else{
	    $display="";
	}
	?>
	<?php endforeach; ?>
	

	
    

		</div>	
		</div>	
		</div>	
		
		<div id="LOGIN12345" style="display: none;border-radius:5px;border:2px solid #E1E1E1;height:350px;box-shadow: 1px 1px 1px #E4E4E4;">
					 <div id="border-header">
					 <h2><center>LOGIN<center></h2>
					 </div>
					<div id="login12345" style="margin-top:10px;width:310px;">
					<div class="login">
					<?php 	
						
						
						echo form_open("AGUS_site/verifyloginEmployee");
								echo validation_errors();
							
						echo"<br>";	
						echo"<input type='text' name='username' id='username' onkeypress='validate(event)' placeholder='username' required/>";
						echo"<br>";
						
						echo"<input type='password' name='password' id='password' onkeypress='validate(event)' placeholder='password' required/>";
						echo"<br>";	
						echo"<br>";	
                            echo"<p>";
							echo form_submit("loginSubmit","Log In");
							echo"</p>"	;
							echo form_close();
	 
	 
					?>
				
                  </div><!-- endLOGIN -->
					
						</div>	
		</div>	

		 
	
</body>

</html>