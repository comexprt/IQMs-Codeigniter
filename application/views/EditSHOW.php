 <table  id="t01"  class='users' border='1px' width='100%' float='center' style='text-transform:uppercase;x`text-align:center;font-size:12.5px'>  
 <tr> 

 <th class='row-1 a'rowspan="2">No</th>  
 <th class='row-2 c' rowspan="2">Description</th>  
 <th class='row-3 d' rowspan="2">Qty</th>  
 <th class='row-4 e' rowspan="2">Unit</th>  
 <th class='row-5 f'  rowspan="2">Unit Price</th>  
 <th  class='row-6 g' rowspan="2">Amount</th>  
 <th  class='row-7 h'  rowspan="2">REL.WT.</th> 
 
 
 <th colspan="2" >Present</th>  
 <th colspan="2" > Total Acum.</th>
  <th class='row-8 i'rowspan="2"></th> 
  <th class='row-9 j'rowspan="2"></th> 
 </tr>
<tr>
  <th class='row-10 k'>%</th>
  <th class='row-11 l' > Amt.</th>
  <th class='row-12 m' >%</th>
  <th class='row-13 n' >Amt.</th>
 </tr>
 <?php  /*
 foreach ($last as $row){
	$last1=$row->ProjAccomID;
 }
 endforeach;*/
 
 $i=0;  
 foreach ($query as $row){  
 $i++;  
 echo "<tr class=\"record\">";  
 echo    "<td align='center'>$i</td>";  
 echo    "<td>$row->Description</td>";  
 echo    "<td align='center'>$row->qty</td>";  
 echo    "<td align='center'>$row->Unit</td>";  
 echo    "<td align='Right'>$row->UnitPrice</td>";  
 echo    "<td align='Right'>$row->Amount</td>";  
 echo    "<td align='center'>$row->REL_wt</td>"; 
echo     "<td align='center'></td>";
echo     "<td align='Right'></td>";
echo     "<td align='center'></td>";
echo     "<td align='Right'></td>";
 echo    "<td align='center'><a href=\"#\" class=\"edit\" id=\"$row->id\"  Description=\"$row->Description\"
		qty=\"$row->qty\"
		Unit=\"$row->Unit\"
		UnitPrice=\"$row->UnitPrice\"
		Amount=\"$row->Amount\"
		REL_wt=\"$row->REL_wt\">Edit</a></td>";  
 echo    "<td align='center'><a class=\"delbutton\" id=\"$row->id\"  href=\"#\" >Delete</a></td>";  
 echo  "</tr>";  
 }
/*

*/ 
 ?> 
 
</table>