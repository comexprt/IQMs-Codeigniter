 <div id="whole" style="width:1160px;margin-top:5px;height:269px; overflow-y:Scroll;">
 <div id="left" style="margin-left:26px;float:left;width:600px;height:267px;border:1px solid #D5D5E3;" >
 <table  id="t01"  class='users' border='1px' width='100%' float='center' style='text-transform:uppercase;x`text-align:center;font-size:12.5px'>  
 <tr>

 <th class='row-1 a'  style="padding-top:10px;padding-bottom:10px;">No</th>  
 <th class='row-2 c' >Description</th>  
 <th class='row-3 d' >Qty</th>  
 <th class='row-4 e' >Unit</th>  
 <th class='row-5 f' >Unit Price</th>  
 <th  class='row-6 g' >Amount</th>
 </tr>
 
 <?php 
			  $totalAmount=0;
			foreach ($query as $row):
			//$AccompTPercentage=$AccompTPercentage+$row->REL_wt;
				$totalAmount=$totalAmount+$row->Amount;
		 endforeach;
?>

 <?php  /*
 foreach ($last as $row){
	$last1=$row->ProjAccomID;
 }
 endforeach;*/
 
 $i=0;  
 foreach ($query as $row){  
 $i++;  
 echo "<tr class=\"record\">";  
 echo    "<td align='center' style='padding:10.5px;'>$i</td>";  
 echo    "<td>$row->Description</td>";  
 echo    "<td align='center'>$row->qty</td>";  
 echo    "<td align='center'>$row->Unit</td>";  
 echo    "<td align='Right'>$row->UnitPrice</td>";  
 echo    "<td align='Right'>$row->Amount</td>"; 
 echo  "</tr>";  
 }
/*

*/ 
 ?> 
 
</table>
</div>

<div id="right" style="float:right;width:510px;height:267px;margin-right:3px;border:1px solid #D5D5E3;">

	 <table  id="t01"  class='users' border='1px' width='100%' float='center' style='text-transform:uppercase;x`text-align:center;font-size:12.5px'>  
 <tr> 
 <tr> 

 
 <th class='row-10 k' rowspan="2">REL wt</th>
 <th colspan="2" >Present</th>  
 <th colspan="2" > Total Acum.</th>
 <th colspan="2" rowspan="2">Actions</th>
 
 </tr>
<tr>
  <th class='row-10 k'>%</th>
  <th class='row-11 l' > Amt.</th>
  <th class='row-12 m' >%</th>
  <th class='row-13 n' >Amt.</th>
 </tr>
 </tr>
 <?php  /*
 foreach ($last as $row){
	$last1=$row->ProjAccomID;
 }
 endforeach;*/
 
 $i=0;  
 $totalrelwt=0;
 $ppaamount=0;
 $tappamount=0;
 $totalppaamount=0;
 $totalppp=0;
 $ttaamount=0;
 $tappamount=0;
 $totalttaamount=0;
 $totalttt=0;
 

 foreach ($query as $row){  
 $i++;  
 echo "<tr class=\"record\">";

 $eachamount=$row->Amount;
	
	if($totalAmount==0){
		echo     "<td align='center' >ERROR</td>";
	
	}else{
		$relwt=$eachamount/$totalAmount*100;
		$totalrelwt=$totalrelwt+$relwt;
?>
		<td align='center' ><?php echo (round($relwt,2));?></td>
<?php		
	}
	
 $pp=$row->pp;
if($eachamount==0){ 
	echo     "<td align='center' >$row->pp</td>";
	echo     "<td align='Right'>ERROR</td>";

}else{

	$eachppp=$pp/$relwt*$eachamount;
	//$ppaamount=$ppaamount+$eachppp;
	$totalppp=$totalppp+$pp;
	$totalppaamount=$totalppaamount+$eachppp;;

	echo     "<td align='center' >$row->pp</td>";
	
?>
		
		<td align='Right'><?php echo number_format($eachppp,2);?></td>

<?php
}

	$tt=$row->tap;
	if($eachamount==0){ 
		echo     "<td align='center'>$row->tap</td>";
		echo     "<td align='Right'>ERROR</td>";

	}else{
		$eachttt=$tt/$relwt*$eachamount;
		$totalttt=$totalttt+$tt;
		$totalttaamount=$totalttaamount+$eachttt;

		echo     "<td align='center'>$row->tap</td>";
?>
		
		<td align='Right'><?php echo number_format($eachttt,2);?></td>

<?php

	}

 echo    "<td align='center'><a href=\"#\" class=\"edit\" id=\"$row->id\"  Description=\"$row->Description\"
		qty=\"$row->qty\"
		Unit=\"$row->Unit\"
		ProjAccomID=\"$row->ProjAccomID\"
		UnitPrice=\"$row->UnitPrice\"
		Amount=\"$row->Amount\"
		pp=\"$row->pp\"
		tap=\"$row->tap\">"
		?>
		<img src='<?php echo base_url();?>images/editimage2.png' title='Edit' height='22px' width='22px'>
		<?php echo "</a></td>";  
 echo    "<td align='center'><a class=\"delbutton\" id=\"$row->id\"  href=\"#\" >"?>
 <img src='<?php echo base_url();?>images/delete1.png' title='Delete' height='22px' width='22px'>
 <?php echo "</a></td>";  
 echo  "</tr>";  
 }
/*

*/ 
 ?> 
 
</table>

</div>




</div>
<div id="overalltotal" style="margin-top:-1px;margin-left:454px;height:12px;width:685px;">
	<div style="float:left;font-size:12;font-weight:bold;margin-top:5px;">TOTAL
	</div>
	<div style="width:630px;margin-left:5px;float:right;height:24px;border:1px solid #D5D5E3">
	<table >
		
		<tr>
			<td align='right' style="font-weight:normal;width:85.2px;"><?php echo number_format($totalAmount,2)?></td>
			<td  align='center' style="font-weight:normal;width:47px;"><?php echo number_format($totalrelwt,2)?></td>
			<td  align='center' style="font-weight:normal;width:47px;"><?php echo round($totalppp,2)?></td>
			<td  align='right' style="font-weight:normal;width:47px;"><?php echo number_format($totalppaamount,2)?></td>
			<td  align='center' style="font-weight:normal;width:46px;"><?php echo round($totalttt,2)?></td>
			<td  align='right' style="font-weight:normal;width:46px;"><?php echo number_format($totalttaamount,2)?></td>
			<td  align='right' style="font-weight:normal;width:103px;"></td>
		</tr>
	</table>
	</div>
</div>