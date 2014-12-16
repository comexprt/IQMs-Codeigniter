<html lang="en-US">  
  <head>  
	<!--Styles-->
     <link href="<?php echo base_url();?>styles/styleINPUT.css" rel="stylesheet" type="text/css">	
      

	
  </head>  
   
  <body>  
	<div id="outside-wrapper" >
		<div id="simioutside-wrapper" style="position: relative;
	color: #444;
	text-shadow: none;
	-webkit-box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
	   -moz-box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
	        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);">
			<div id="wrapper2" >
			
			
			  <?php //echo "$row->ProjAccomID";?>
<h2><center>LIST OF PROJECT ACCOMPLISHMENT</center></h2>
<?php
	foreach ($img as $row):
		echo "<div id='letter' style='text-transform:uppercase;margin-top:20;margin-left:30px;font-weight:bold;font-size:14px;'>$row->INFRA_NO </div>";
		echo "<div id='letter' style='text-transform:uppercase;margin-top:5;margin-left:30px;font-weight:bold;font-size:14px;'>$row->PROJECT_NAME</div>";
		echo "<div id='letter' style='text-transform:uppercase;margin-top:5;margin-left:30px;font-weight:bold;font-size:14px;'>$row->LOCATION</div>";
		$choice=$row->costcenter;

					switch ($choice) {
					case "otpm":
							echo "<div id='letter' style='text-transform:uppercase;margin-top:5;margin-left:30px;font-weight:bold;font-size:14px;'>Office of the Plant Manager</div>";

							//echo "<H3>COST CENTER : Office of the Plant Manager</H3>";
							break;
					case "md":
							echo "<div id='letter' style='text-transform:uppercase;margin-top:5;margin-left:30px;font-weight:bold;font-size:14px;'>Maintenance Division</div>";
							//echo "<H3>COST CENTER : Maintenance Division</H3>";
							break;
					case "adfin":
							echo "<div id='letter' style='text-transform:uppercase;margin-top:5;margin-left:30px;font-weight:bold;font-size:14px;'>admin and Finance Division</div>";
							//echo "<H3>COST CENTER : admin and Finance Division</H3>";
							break;
					case "ptsd":
							echo "<div id='letter' style='text-transform:uppercase;margin-top:5;margin-left:30px;font-weight:bold;font-size:14px;'>Plant Technical Service Division</div>";
							//echo "<H3>COST CENTER : Plant Technical Service Division</H3>";
							break;
					default:
							echo"<h3>Query Database Error 'Contact an I.T Specialist' </h3>";
							}
?>
<?php endforeach; ?>
		

			  <div id="tablescroll" style="margin-left:30px;margin-top:5px;height:350px;overflow-y:auto;border:1px solid #EEEEEE">
			  <table  id="t01"  class='users' border='1px' width='100%' float='center' style='text-transform:uppercase;text-align:center;font-size:15px;font-weight:bold;'>  
 <tr> 

 <th class='row-1 alpa'>No</th>  
 <th class='row-2 clpa'>Reports</th>  
 <th class='row-3 dlpa'>Prepared by</th>  
 <th class='row-4 elpa'>Checked by</th>  
 <th class='row-5 flpa'>Approved by</th>  

 </tr>
	
 <?php  /*
 foreach ($last as $row){
	$last1=$row->ProjAccomID;
 }
 endforeach;*/
 
 $i=0;  
 foreach ($query as $row):
 $i++;  
 echo "<tr>";  
 echo    "<td align='center'>$i</td>"; ?>
 <form method="post" action="<?php echo base_url() . "AGUS_site/Evspa"?>">
		<input type="hidden" name='id' value="<?php echo "$row->PID"?>">
		<input type="hidden" name='as' value="<?php echo "$row->EfOfCont"?>">
		<input type="hidden" name='to' value="<?php echo "$row->ExpDate"?>">
		<input type="hidden" name='ProjAccomID' value="<?php echo "$row->ProjAccomID"?>">
		
		<?php
			$date=strtotime($row->EfOfCont);
			$dateto=strtotime($row->ExpDate);
			$date1=date('F d ,Y', $date);
			$date2=date('F d ,Y', $dateto);
			
			
		?>
		
 <td><input style="cursor: pointer;margin-left:-5px;color:#8C0000;width:502px;height:25px;margin-top:-8px;margin-bottom:-8px;
				  text-transform:uppercase;" type="submit" 
				  value="<?php
					if($date1 == $date2)
					{
						echo "unknown - unknown"; 
					}
					else
					{
						echo "$date1 - $date2"; 
					
					}  
				  ?>"></td> 
 </form> 
 <?php
 echo    "<td align='center'>$row->pbname</td>";  
 echo    "<td align='center'>$row->cbname</td>";  
 echo    "<td align='center'>$row->abname</td>";  

echo	"</tr>";
  
 endforeach;
 ?> 
</table>
		
		
		</div><!--scroll-->
		  
				<div class="backtolist2">
					<form method="post" action="<?php echo base_url()."AGUS_site/ListofProjectE"?>">
					
					<input style="position: absolute;margin-left:1232px;margin-top:-553px;" 
								type="image" alt="submit" title="close"
								src="<?php echo base_url();?>images/close.png"  
								height="35px" width="35px">
					</form>
				</div>
 

				</div><!--wrapper2-->
		</div><!--semioutside-->
	</div><!--outside-->
  </body>  
</html>  