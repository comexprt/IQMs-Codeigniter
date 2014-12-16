<div class="banner">
		  <div id ="choice_style">
   
	  <div id='list'>
	
	</div>
			
     <?php 	
	 
	
	echo"<br>";
	echo"<br>";
	echo'</table>';
	echo"
	<table border='1px' width='100%' float=center>
	<tr>
		<th>AGUS7</th>
		<th>Status</th>
		<th>Remarks</th>";
	
	
	 echo "<tr>";
			foreach($results as $row){
				echo "<td>".$row->AGUS7."</td>";
			    echo "<td>".$row->Status."</td>";
			    echo "<td>".$row->Remarks."</td>";
				
				
		echo "</tr>";
		}
	 echo'</table>';
	 
	  
	
	
	
	 ?>
		</div>
		</div>
		<div id="back_button">
	
			<a href="<?php echo base_url();?>AGUS_site/editformvalueSGU7"><div class="back">EDIT</div></a>
	    </div>
		<br>
		<br>