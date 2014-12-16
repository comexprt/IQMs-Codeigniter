<html lang="en-US">  
  <head>  
  
	<!--Styles-->
     <link href="<?php echo base_url();?>styles/makeacopy.css" rel="stylesheet" type="text/css">	
	 
	
	
	<style type="text/css">
		

		@media print
		{
		.noprint {display:none;}
		.close {display:none;}
		}

		
	</style>
  </head>  
   
  <body> 
		<div class="noprint">
			<form><input type=button name=print value="Print" onClick="window.print()"></form>
		</div>
   
	<div id="outside-wrapper1" style="margin-top:10px;">
	
		<div id="simioutside-wrapper"
			
    
	 <div id="wrapper3" style="">
   <!--next assignment-->
		<?php	foreach ($info as $row): ?>
		 <div id="header" style="height:150px;">
		 <br>
		 <?php
			$date=strtotime($row->EfOfCont);
			$dateto=strtotime($row->ExpDate);
			$date1=date('F d ,Y', $date);
			$date2=date('F d ,Y', $dateto);
			
			?>
			
			<div style="margin-left:390px;height:40px;width:360px;">
		 
		 
				<div style="float:left;height:40px;width:100px;">
				 <img style="margin-top:0px;"src="<?php echo base_url();?>images/img/NPC_logo.png" height="90px" width="90px">
				 
				</div>
				
				<div style="float:right;height:40px;width:240px;">
					<a style="font-size:12px;margin-left:20px;">NATIONAL POWER CORPORATION</a>
					<br><a style="font-weight:bold;font-size:14.5px;margin-left:27px;" >MINDANAO GENERATION</a>
					<br><a style="font-size:11px;">AGUS 6/7 HYDROELECTRIC PLANT COMPLEX</a>
				 
				</div>
				
			</div>
		 
		 <div style="margin-top:30px;">
		 
		 
		 <h3 Style="text-transform:uppercase;font-size:18px;margin-top:20px;"><center>PROJECT ACCOMPLISHMENT</center></h3>
		 </div>
		 <div  Style="text-transform:uppercase;font-size:9.5px;margin-top:-12px;">
		 <?php if($date1==$date2) { ?>
		 <a><center><?php echo "unknown - unknown"?></center></a>
		 <?php } else{  ?>
		 <a><center><?php echo "AS OF $date1 - $date2"?></center></a>
		 <?php } ?>
		 </div> 
		  <div id="left" style="font-size:12px;text;align:left;text-transform:uppercase;margin-left:120px;
								height:120px;width:85px;float:left;margin-top:20px;">
		 <div id="linespacing" style="margin-top:5px;">	
			<a>INFRA #</a>
		</div>
        <div id="linespacing" style="margin-top:5px;">	
			<a>PROJECT </a>
		</div>
        <div id="linespacing" style="margin-top:5px;">	
			<a>LOCATION </a>
		</div>
        <div id="linespacing" style="margin-top:5px;">	
			<a>CONTRACTOR</a>
		</div>
        <div id="linespacing" style="margin-top:5px;">	
			<a>REP </a>
		</div>
		  </div><!--left-->
		  <div id="left" style="font-size:12px;text;align:left;text-transform:uppercase;margin-left:10px;
								height:120px;width:445px;float:left;margin-top:20px;">
		 
		 <div id="linespacing" style="margin-top:5px;">	
			<a><?php echo ": $row->INFRA_NO";?></a>
		</div>
        <div id="linespacing" style="margin-top:5px;">	
			<a><?php echo ": $row->PROJECT_NAME";?></a>
		</div>
        <div id="linespacing" style="margin-top:5px;">	
			<a><?php echo ": $row->LOCATION";?></a>
		</div>
        <div id="linespacing" style="margin-top:5px;">	
			<a><?php echo ": $row->ContName";?></a>
		</div>
        <div id="linespacing" style="margin-top:5px;">	
			<a><?php echo ": $row->RepName";?></a>
		</div>
		  </div><!--left-->
		  <div id="right" style="margin-top:20px;font-size:12px;text;align:left;text-transform:uppercase;margin-left:170px;height:120px;width:185px;float:left;">
		    
		 <div id="linespacing" style="margin-top:5px;">	
			<a>REVISED CONTRACT AMOUNT</a>
		</div>
        <div id="linespacing" style="margin-top:5px;">	
			<a>EFFECTIVITY OF CONTRACT</a>
		</div>
        <div id="linespacing" style="margin-top:5px;">	
			<a>EXPIRATION DATE</a>
		</div>
        <div id="linespacing" style="margin-top:5px;">	
			<a>DURATION</a>
		</div>
        <div id="linespacing" style="margin-top:5px;">	
			<a>% ACCOMPLISHMENT</a>
		</div>
		  
		  
		  </div><!--right-->
		  <div id="right" style="margin-top:20px;font-size:12px;text;align:left;text-transform:uppercase;margin-left:10px;height:120px;width:180px;float:left;">
		   <div id="linespacing" style="margin-top:5px;">	
			<a><?php echo ": $row->RevContAmount";?></a>
			<?php
			$date=strtotime($row->EfOfCont);
			$dateto=strtotime($row->ExpDate);
			$date1=date('F d ,Y', $date);
			$date2=date('F d ,Y', $dateto);
			
			?>
		   </div>
           <div id="linespacing" style="margin-top:5px;">	
			<a><?php if($date1 == $date2)
					{
						echo "<div style='text-transform:lowercase'>: unknown</div>"; 
					}
					else
					{
						echo ": $date1"; 
					
					}  ?></a>
		   </div>
			<div id="linespacing" style="margin-top:5px;">	
			<a><?php if($date1 == $date2)
					{
						echo "<div style='text-transform:lowercase'>: unknown</div>"; 
					}
					else
					{
						echo ": $date2"; 
					
					}  ?></a>
			</div>
			<div id="linespacing" style="margin-top:5px;">
			 <?php 
				
				$date1=date_create($row->EfOfCont);
				$date2=date_create($row->ExpDate);
				$diff=date_diff($date1,$date2);
				$difeach=$diff->format("%a");
				$diffplusone=$difeach+1;

			 
			 ?>
			<a style="text-transform:lowercase"><?php 	if($difeach==0){
														echo ": none";}
														else{
														
														echo ": ".$diffplusone." day/s";}?></a>
			</div>
		<?php endforeach;?>
			<div id="linespacing" style="margin-top:5px;">	
		<?php 
			  $totalAmount=0;
			foreach ($vspa as $row):
			//$AccompTPercentage=$AccompTPercentage+$row->REL_wt;
				$totalAmount=$totalAmount+$row->Amount;
		 endforeach;
		 $totalppp=0;
			foreach ($vspa as $row):
						
						$pp=$row->pp;
						$mmm=$row->qty;
						$nnn=$row->UnitPrice;
						if($mmm==0 ||$nnn==0)
						{
						  $totalppp=$totalppp+0;
						}else{
						
						
						$totalppp=$totalppp+$pp;
						//echo $relwt."->";
						
						}
					?>
		<?php endforeach; ?>
			<a style="text-transform:lowercase"><?php echo ": $totalppp   %" ?></a>
			</div>
		  
		  
		  </div><!--right-->
		 </div><!--Header-->
		<div id="tablescroll" style="border:0.1em solid #B9B9C8;overflow:hidden;width:1100px;margin-left:95px;margin-top:120px;height:271px;">
		<table   class='users1' border='0.1em'  style='margin-top:-1px;margin-left:-1px;text-transform:uppercase;width:1102px;border:0.1em solid #B9B9C8;'>  

			<tr> 
					<th class='row-1 vcbn' rowspan="3">No</th>  
					<th class='row-1 vcb' rowspan="3">Description</th>  
					<th class='row-2 vdb' rowspan="3">Qty</th>  
					<th class='row-3 veb' rowspan="3">Unit</th>  
					<th class='row-4 vfb'  rowspan="3">Unit Price</th>  
					<th  class='row-5 vgb' rowspan="3">Amount</th>  
					<th  class='row-6 vhb'  rowspan="3">REL.WT.</th> 
				
 
					<th colspan="4" >Accomplishment</th> 
			</tr>
			<tr>
					
					<th colspan="2" >Present</th>  
					<th colspan="2" > Total Cumulative</th>
			</tr>
			<tr>
					<th class='row-7 vkb'>%</th>
					<th class='row-8 vlb' style="text-transform:capitalize;">Amount</th>
					<th class='row-9 vmb' >%</th>
					<th class='row-10 vnb' style="text-transform:capitalize;" >Amount</th>
			</tr>

 
	<?php $i=0;
	      $totalrelwt=0;
	      $ppaamount=0;
	      $tappamount=0;
	      $totalppaamount=0;
	      $totalppp=0;
		  $ttaamount=0;
	      $tappamount=0;
	      $totalttaamount=0;
	      $totalttt=0;
    
	foreach ($vspa as $row):
	$i++;
	
	
	?>
			<tr class="record" >
	
					<td align='center' ><?php echo "$i";?></td>  
					<td align='left'><?php echo "$row->Description";?></td>  
					<td align='center' style="font-weight:normal;"><?php echo number_format($row->qty,2);?></td>  
					<td align='center' style="font-weight:normal;"><?php echo "$row->Unit";?></td>  
					<td align='right' style="font-weight:normal;"><?php echo number_format($row->UnitPrice,2);?></td>  
					<td align='right' style="font-weight:normal;"><?php echo number_format($row->Amount,2);?></td>  
					<?php
						$eachamount=$row->Amount;
						if($totalAmount==0){ ?>
							<td align='center' style="font-weight:normal;"><?php echo "Error";?></td>  

					<?php
					}
						else{
						$relwt=$eachamount/$totalAmount*100;
						$totalrelwt=$totalrelwt+$relwt;
						
						
					?>
					<td align='center' style="font-weight:normal;"><?php echo (round($relwt,2));?></td>  
					<?php } ?>
					<?php
						$pp=$row->pp;
						if($eachamount==0){ ?>
					<td align='Right' style="font-weight:normal;" ><?php echo "ERROR"?></td>	
					<td align='Right' style="font-weight:normal;" ><?php echo "ERROR"?></td>	
					<?php	
					}else{
						$eachppp=$pp/$relwt*$eachamount;
						//$ppaamount=$ppaamount+$eachppp;
						$totalppp=$totalppp+$pp;
						$totalppaamount=$totalppaamount+$eachppp;;
						
						
						
					?>
					<td align='center' style="font-weight:normal;"><?php echo "$row->pp";?></td>
					<td align='Right' style="font-weight:normal;"><?php echo number_format($eachppp,2);?></td>
					<?php } ?>
					
					
					
					<?php
						$tt=$row->tap;
						if($eachamount==0){ ?>
					<td align='Right' style="font-weight:normal;" ><?php echo "ERROR"?></td>	
					<td align='Right' style="font-weight:normal;" ><?php echo "ERROR"?></td>	
					<?php	
					}else{
						$eachttt=$tt/$relwt*$eachamount;
						$totalttt=$totalttt+$tt;
						$totalttaamount=$totalttaamount+$eachttt;
					
						
						
						
					?>
					<td align='center' style="font-weight:normal;"><?php echo "$row->tap";?></td>
					<td align='Right' style="font-weight:normal;" ><?php echo number_format($eachttt,2);?></td>
					<?php
						}
					?>
					
					
			</tr>
			<tr class="record">
	
					<td style="height:22px;"></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>

	<?php endforeach;
	?>
	
			</tr>
</table> 
</div><!--scroll-->
<div id="overalltotal" style="margin-top:-1px;margin-left:602px;height:13px;width:595px;">
	<div style="margin-top:-1px;float:left;font-size:12;font-weight:bold;margin-top:5px;">TOTAL
	</div>
	<div style="width:529px;margin-left:1px;float:right;height:23px;border:0.1em solid #B9B9C8;">
	<table >
		<tr>
			<td align='right' style="font-weight:normal;width:98px;"><?php echo number_format($totalAmount,2)?></td>
			<td  align='center' style="font-weight:normal;width:55px;"><?php echo number_format($totalrelwt,2)?></td>
			<td  align='center' style="font-weight:normal;width:76px;"><?php echo round($totalppp,2)?></td>
			<td  align='right' style="font-weight:normal;width:76px;"><?php echo number_format($totalppaamount,2)?></td>
			<td  align='center' style="font-weight:normal;width:76px;"><?php echo round($totalttt,2)?></td>
			<td  align='right' style="font-weight:normal;width:76px;"><?php echo number_format($totalttaamount,2)?></td>
		</tr>
	</table>
	</div>
</div>

	
<div id="footer" style="font-size:12.5px;margin-left:5px;margin-top:20px;width:1100;height:90px;">
<?php	foreach ($info as $row): ?>
	<div id="res1" style="margin-left:100px;margin-top:35px;width:80px;height:14px;float:left;">Prepared by:</div>
	<div id="res2" style="margin-left:350px;margin-top:35px;width:80px;height:14px;float:left;">Checked by: </div>
	<div id="res3" style="margin-left:300px;margin-top:35px;width:80px;height:14px;float:left;">Approved by: </div>
   
   <div id="innerfooter" style="margin-top:30px;text-transform:uppercase;float:left;margin-left:75px;width:1200;height:60px;">
		<div id="personnel1" style="float:left;margin-left:75px;margin-top:5px;width:300;height:50px;">
				<div id="pbname" style="font-size:13.5px;font-weight:bold;float:center;text-align:center;height:20px;
						width:250px"><?php echo "$row->pbname";?></div>
				<div id="pbposition" style="font-size:10px;float:center;text-align:center;height:20px;
						width:250px"><?php echo "$row->pbposition";?></div>
		</div>
		<div id="personnel2" style="float:left;margin-left:105px;margin-top:5px;width:300;height:50px;">
		<div id="pbname" style="font-size:13.5px;font-weight:bold;float:center;text-align:center;height:20px;
						width:250px;"><?php echo "$row->cbname";?></div>
				<div id="pbposition" style="font-size:10px;float:center;text-align:center;height:20px;
						width:250px"><?php echo "$row->cbposition";?></div>
				
		</div>
		<div id="personnel3" style="float:left;margin-left:95px;margin-top:5px;width:300;height:50px;">
		<div id="pbname" style="font-size:13.5px;font-weight:bold;float:center;text-align:center;height:20px;
						width:250px"><?php echo "$row->abname";?></div>
				<div id="pbposition" style="font-size:10px;float:center;text-align:center;height:20px;
						width:250px"><?php echo "$row->abposition";?></div>
		</div>
<?php endforeach; ?>	
</div>
  
					

			



		      <?php foreach ($info as $row):?>
					<div class="close">
						<form method="post" action="<?php echo base_url()."AGUS_site/vspa"?>">
						<input type="hidden" name='id' value="<?php echo "$row->PID"?>">
						<input type="hidden" name='as' value="<?php echo "$row->EfOfCont"?>">
						<input type="hidden" name='to' value="<?php echo "$row->ExpDate"?>">
						<input type="hidden" name='ProjAccomID' value="<?php echo "$row->ProjAccomID"?>">
						<input style="position: absolute;margin-left:276px;margin-top:-613px;" 
						type="image" alt="submit" title="close"
						src="<?php echo base_url();?>images/close.png"  
						height="35px" width="35px">
						</form>
					</div>
				<?php endforeach; ?>
		
			</div><!--wrapper2-->
			
		</div><!--semioutside-->
	</div><!--outside-->
  </body>  
</html>  