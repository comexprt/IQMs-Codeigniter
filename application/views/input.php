<html lang="en-US">  
  <head>  
	<!--work DESCRIPTION-->
	<script type="text/javascript" src="<?php echo base_url();?>scripts2/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url();?>scripts2/multi_step_form.js"></script>

     <link href="<?php echo base_url();?>styles/styleINPUT.css" rel="stylesheet" type="text/css">	 
    <!--work DESCRIPTION-->
	 <link rel="stylesheet" href="<?php echo base_url();?>scripts2/jqueryui.css" type="text/css" media="all" />  
    <script src="<?php echo base_url();?>scripts2/jquery2.min.js" type="text/javascript"></script>  
    <script src="<?php echo base_url();?>scripts2/jqueryui.min.js" type="text/javascript"></script> 
   
	
	 <script>  
    $(function() {  
   
        $( "#dialog:ui-dialog" ).dialog( "destroy" );  
   
        $( "#dialog-confirm" ).dialog({  
            autoOpen: false,  
            resizable: false,  
            height:150,  
            modal: true,  
            hide: 'Slide',  
            buttons: {  
                "Delete": function() {  
                    var del_id = {id : $("#del_id").val(),ProjAccomID : $("#ProjAccomID").val()}; 
					
                    $.ajax({  
                        type: "POST",  
                        url : "<?php echo site_url('AGUS_site/delete')?>",  
                        data: del_id,  
                        success: function(msg){  
                            $('#show').html(msg);  
                            $('#dialog-confirm' ).dialog( "close" );  
                            //$( ".selector" ).dialog( "option", "hide", 'slide' );  
                        }  
                    });  
   
                    },  
                Cancel: function() {  
                    $( this ).dialog( "close" );  
                }  
            }  
        });  
   
         $( "#form_input" ).dialog({  
            autoOpen: false,  
           height:197, 
			width:900,
            modal: false,  
            hide: 'Slide',  
            buttons: {  
                "Add": function() {  
                    var form_data = {  
                        id: $('#id').val(),  
						
                        ProjAccomID: $('#ProjAccomID').val(),  
                        date: $('#date').val(),  
                        Description: $('#Description').val(),  
                        qty: $('#qty').val(),  
                        Unit: $('#Unit').val(),  
                        UnitPrice: $('#UnitPrice').val(),  
                        Amount: $('#Amount').val(),  
                        pp: $('#pp').val(),  
                        tap: $('#tap').val(),  
                        REL_wt: $('#REL_wt').val(),  
                        ajax:1  
                    };  
   
                    $('#date').attr("enabled",true);  
                    $('#ProjAccomID').attr("enabled",true);  
                    $('#Description').attr("enabled",true);  
                    $('#qty').attr("enabled",true); 
					$('#Unit').attr("enabled",true);  
                    $('#UnitPrice').attr("enabled",true);  
                    $('#Amount').attr("enabled",true);  
                    $('#pp').attr("enabled",true);  
                    $('#tap').attr("enabled",true);  
                    $('#REL_wt').attr("enabled",true);  
   
                  $.ajax({  
                    url : "<?php echo base_url('AGUS_site/submit')?>",  
                    type : 'POST',  
                    data : form_data,  
                    success: function(msg){  
                    $('#show').html(msg),  
                    $('#id').val(''),  
					//diri rako na dugay...
					<?php foreach ($last as $imagedata):
					$x=$imagedata->ProjAccomID; //it must be initialize..
					$y=1;
					$z=$x+$y; //returns 2 if the projectaccomplishment table initialize to 1
					?>
                    $('#ProjAccomID').val('<?php echo $z?>'),  
					<?php endforeach; ?>
                     $('#Description').val(''),  
                    $('#qty').val(''),  
                    $('#Unit').val(''),  
                    $('#UnitPrice').val(''),  
                    $('#Amount').val(''),  
                    $('#REL_wt').val(''),  
                    $('#pp').val(''),  
                    $('#tap').val(''),  
                    $('#date').attr("disabled",false);  
                    $('#ProjAccomID').attr("disabled",true);  
                    $('#Description').attr("disabled",false);  
                    $('#qty').attr("disabled",false);  
                    $('#Unit').attr("disabled",false);  
                    $('#UnitPrice').attr("disabled",false);  
                    $('#Amount').attr("disabled",false);  
                    $('#pp').attr("disabled",false);  
                    $('#tap').attr("disabled",false);  
                    $('#REL_wt').attr("disabled",false);  
                    $( '#form_input' ).dialog( "close" )  
                    
                    }  
                  });  
   
            },  
                Cancel: function() {  
                    $('#id').val(''),  
                    $('#Description').val(''),  
                    $('#qty').val(''),  
                    $('#Unit').val(''),  
                    $('#pp').val(''),  
                    $('#tap').val(''),  
                    $('#UnitPrice').val(''),  
                    $('#REL_wt').val(''),  
                    $( this ).dialog( "close" );  
                }  
            },  
            close: function() {  
                $('#id').val(''),  
                $('#Description').val(''),  
                    $('#qty').val(''),  
                    $('#Unit').val(''),  
                    $('#UnitPrice').val(''),  
                    $('#pp').val(''),  
                    $('#tap').val(''),  
                    $('#REL_wt').val('');  
            }  
        });  
   
    $( "#create-daily" ).live("click",function(){  
                $( "#form_input" ).dialog( "open" );  
            });  
    });  
   
    $(".edit").live("click",function(){  
       var id = $(this).attr("id");  
        var ProjAccomID = $(this).attr("ProjAccomID");  
        var Description = $(this).attr("Description");  
        var qty = $(this).attr("qty");
		var Unit = $(this).attr("Unit");  
        var UnitPrice = $(this).attr("UnitPrice");  
        var Amount = $(this).attr("Amount");  
        var pp = $(this).attr("pp");  
        var tap = $(this).attr("tap");  
        var REL_wt = $(this).attr("REL_wt");  
   
        $('#id').val(id);  
        $('#ProjAccomID').val(ProjAccomID);  
        $('#Description').val(Description);  
        $('#qty').val(qty);  
        $('#Unit').val(Unit);
		$('#UnitPrice').val(UnitPrice);  
        $('#Amount').val(Amount);  
        $('#pp').val(pp);  
        $('#tap').val(tap);  
        $('#REL_wt').val(REL_wt); 
   
        $( "#form_input" ).dialog( "open" );  
   
        return false;  
    });  
   
    $(".delbutton").live("click",function(){  
        var element = $(this);  
        var del_id = element.attr("id");  
        var info = 'id=' + del_id;  
        $('#del_id').val(del_id);  
        $( "#dialog-confirm" ).dialog( "open" );  
   
        return false;  
    });  
    </script>
	
	<script language="javascript">
		function validate(evt) {
		  var theEvent = evt || window.event;
		  var key = theEvent.keyCode || theEvent.which;
		  key = String.fromCharCode( key );
		  var regex = /[0-9]|\./;
		  if( !regex.test(key) ) {
			theEvent.returnValue = false;
			if(theEvent.preventDefault) theEvent.preventDefault();
		  }
		}
		function validateall(evt) {
		  var theEvent = evt || window.event;
		  var key = theEvent.keyCode || theEvent.which;
		  key = String.fromCharCode( key );
		  var regex = /[0-9]||[a-z]||[A-Z]\./;
		  if( !regex.test(key) ) {
			theEvent.returnValue = false;
			if(theEvent.preventDefault) theEvent.preventDefault();
		  }
		}
		
		function validatealpha(evt) {
		  var theEvent = evt || window.event;
		  var key = theEvent.keyCode || theEvent.which;
		  key = String.fromCharCode( key );
		  var regex = /[a-z||A-Z]|\./;
		  if( !regex.test(key) ) {
			theEvent.returnValue = false;
			if(theEvent.preventDefault) theEvent.preventDefault();
		  }
		}
	</script>
	
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
			

		
			<!-- Fieldsets -->
			<?php foreach ($img as $row):?>
				<div class="backtolist3">
					<form method="post" action="<?php echo base_url()."AGUS_site/lpaa"?>">
					<?php foreach ($last as $imagedata):
		/*be sure that nxt time if you reset the database please fill .. an initialization in ProjectAccomplishment table so that it iniatialize*/
		$x=$imagedata->ProjAccomID; //it must be initialize..
					$y=1;
					$z=$x+$y; //returns 2 if the projectaccomplishment table initialize to 1
				echo "<input id='ProjAccomID'  name='ProjAccomID'  type='hidden' value='$z' readonly>";			

			     
			endforeach; ?>  
					<input type="hidden" name='cpaID' value="<?php echo "$row->PID"?>">
					<input style="position: absolute;margin-left:1232px;margin-top:-49px;" 
								type="image" alt="submit" title="close"
								src="<?php echo base_url();?>images/close.png"  
								height="35px" width="35px">
					</form>
				</div>
				<?php endforeach; ?>
				<!-- Progress Bar -->
			 <form method="post" action="<?php echo base_url();?>AGUS_site/AddProjAccomp">
			<fieldset id='first' >
			<h2><center>PROJECT ACCOMPLISHMENT<center></h2>
			
			<ul id="progressbar">
				<li class="active">Information</li>
				<li>Work Descriptions</li>
				<li>Personnel</li>
				
			</ul>
			<div id="textfield1" style="height:380px;width:1050px;margin-left:120px;">
			<div id="textfield1a" style="float:left;width:450px;text-transform: uppercase;font-weight:bold;font-size:12px;margin-top:10px;">
			 <?php foreach ($img as $imagedata):?>
					<input type="hidden" name='cpaID' value="<?php echo "$imagedata->PID"?>">
					<label for='PROJECT_NAME'>   Infra No. </label>
						<input id='INFRA_NO' style="margin-left:30px;width:120px;margin-top:20px;font-weight:bold;" name="PROJECT_NAME" placeholder="Project Name" type="text" value="<?php echo $imagedata->INFRA_NO?>" align="left" readonly>
					<br><label for='PROJECT_NAME'>    Project </label>	
						<input id='INFRA_NO' style="margin-left:35px;width:300px;font-weight:bold;" name="INFRA_NO" placeholder="INFRA XXXX-XXX" type="text" value="<?php echo $imagedata->PROJECT_NAME?>"  align="left" readonly>
					<br><label for='PROJECT_NAME'>    Location  </label>	
						<input id='LOCATION' style="margin-left:30px;width:300px;font-weight:bold;" name="LOCATION" placeholder="Location" type="text" value="<?php echo $imagedata->LOCATION?>"  align="left" readonly>
			<?php endforeach; ?>
					<br><label for='PROJECT_NAME'>    Contractor  </label>
					<input class="contractor" style="margin-left:10px;width:300px;font-weight:bold;" name="contractor" placeholder="Contractor" type="text" value=""  align="left" required/>
					<br><label for='PROJECT_NAME'>    Rep</label>
					<input class="representative" style="margin-left:70px;width:300px;font-weight:bold;" name="representative" placeholder="Representative" type="text" value=""  align="left" required/>
			</div>
			<div id="textfield1b" style="margin-top:60px;float:left;width:550px;text-transform: uppercase;font-weight:bold;font-size:12px;">
						<input id='did' name="did" value="" type="hidden">
					<br><label for='PROJECT_NAME'>    Effectivity of CONTRACT</label>	
						<input id='EfOfCont' style="margin-left:15px;width:300px;font-weight:bold;" name="EfOfCont" placeholder="MONTH-DAY-YEAR" type="date" required/>
					<br><label for='PROJECT_NAME'>   Expiration DATE</label>
					<input class="ExpDate" style="margin-left:75px;width:300px;font-weight:bold;" name="ExpDate" placeholder="MONTH-DAY-YEAR" type="date" required/>
					<!--br><label for='PROJECT_NAME'>    Expiration Date</label>
					<input class="ExpDate" style="margin-left:30px;width:300px;" name="ExpDate" placeholder="Expiration Date" type="text" value=""-->
					<br><label for='PROJECT_NAME'>    Rev. Contact amt. </label>	
						<input id='RevContAmount' onkeypress="validate(event)" style="text-align:right;margin-left:65px;width:250px;font-weight:bold;" name="RevContAmount" placeholder="Revise CONTRACT Amount" type="text" Value="0.00"  required/>
				
				</div>
			</div>
	
					<input class="next_btn" name="next" type="button" value="Next">
			
			</fieldset>
			<fieldset id="second">
			<h2><center>PROJECT ACCOMPLISHMENT<center></h2>
			<ul id="progressbar">
				<li>Information</li>
				<li  class="deactive">Work Descriptions</li>
				<li>Personnel</li>
		
			</ul>
			<div id="textfield1" style="margin-top:30px;margin-left:20px;height:337px;">
							
						<a id="create-daily" style="text-decoration:none;float:left;box-shadow: 3px 3px 3px  gray;font-size:15px;" href="#" >ADD DESCRIPTION</a>
					
					<br>
			<div id="titlebar" style="width:1100px;margin-left:20px;height:30px;">
			<div id="titlebar" style="float:left;width:350px;margin-left:20px;height:20px;">
				<p style="font-size:17px;font-weight:bold;">WORK DESCRIPTION</p>
			</div>
			<div id="titlebar" style="float:right;width:300px;margin-right:60px;height:20px;">
				<p style="font-size:17px;font-weight:bold;">ACCOMPLISHMENT</p>
			</div>
			</div>
			
			       
				 <div id="show" style="margin-top:5px;height:269px;">  				 
					<?php $this->load->view('show'); ?>  
					</div>  
							
			<div id="form_input" title="Descriptions" style="text-align:center;font-weight:bold;font-size:12.5px;">  
		 <table   class='users' border='1px' width='100%;' float='center' style='text-transform:uppercase;text-align:center;font-size:12.5px'>  
        <?php echo form_open('AGUS_site/submit'); ?>  
        <input type="hidden" value='' id="id" name="id"> 
		<?php foreach ($last as $imagedata):
		/*be sure that nxt time if you reset the database please fill .. an initialization in ProjectAccomplishment table so that it iniatialize*/
		$x=$imagedata->ProjAccomID; //it must be initialize..
					$y=1;
					$z=$x+$y; //returns 2 if the projectaccomplishment table initialize to 1
				echo "<input id='ProjAccomID'  name='ProjAccomID'  type='hidden' value='$z' readonly>";			

			     
			endforeach; ?>
 <tr> 
 <th class='row-1 cb' rowspan="2">Description</th>  
 <th class='row-2 db' rowspan="2">Qty</th>  
 <th class='row-3 eb' rowspan="2">Unit</th>  
 <th class='row-4 fb'  rowspan="2">Unit Price</th>  

 
 
 <th colspan="2" >Present</th>  
 <th colspan="2" > Total Acum.</th>
 </tr>
<tr>
  <th class='row-7 kb'>%</th>
  <th class='row-8 lb' > Amt.</th>
  <th class='row-9 mb' >%</th>
  <th class='row-10 nb' >Amt.</th>
 </tr>

 
 <tr class="record1">
			
		    <td><input style="height:30px;width:100px;	
							font-size:12.5px;text-transform: uppercase;padding:1px;
							border: 1.5px solid rgb(300, 200, 100);
							border-radius:5px;width:57px;
			width:250px;font-weight:normal" id="Description" name="Description" onkeypress="validateall(event)"></td>  

          
            <td><input style="height:30px;width:100px;	
							font-size:12.5px;text-transform: uppercase;padding:1px;
							border: 1.5px solid rgb(300, 200, 100);
							border-radius:5px;width:57px;text-align:center" 
							id="qty" name="qty" onkeypress="validate(event)"value="1.00"></td>  
         
            <td><select style="width:76px;text-align:center" name="Unit" id="Unit">
															<option value=""></option>
															<option value="LOT">LOT</option>
															<option value="PIECE">PIECE</option>
															
															</select></td>  
        
            <td><input style="height:30px;width:100px;	
							font-size:12.5px;text-transform: uppercase;padding:1px;
							border: 1.5px solid rgb(300, 200, 100);
							border-radius:5px;width:57px;
			width:76px;text-align:right" id="UnitPrice" name="UnitPrice" onkeypress="validate(event)"value="0.00"></td>  
        
       
         


			<td align='Right'><input style="height:30px;width:100px;	
							font-size:12.5px;text-transform: uppercase;padding:1px;
							border: 1.5px solid rgb(300, 200, 100);
							border-radius:5px;width:57px;
			width:80px;text-align:center"id="pp" name="pp" onkeypress="validate(event)"value="0.00"></td>
			<td align='Right'></td>
			<td align='Right'><input style="height:30px;width:100px;	
							font-size:12.5px;text-transform: uppercase;padding:1px;
							border: 1.5px solid rgb(300, 200, 100);
							border-radius:5px;width:57px;
			width:80px;text-align:center"id="tap" name="tap" onkeypress="validate(event)" value="0.00"></td>
			<td align='Right'></td>
			
	</tr> 
</table> 

    </div> 
	
	 <div id="dialog-confirm" title="Delete Item" style="text-align:center;font-weight:bold;font-size:12.5px;">  
    <p>  
        <span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>  
		<?php foreach ($last as $imagedata):
		/*be sure that nxt time if you reset the database please fill .. an initialization in ProjectAccomplishment table so that it iniatialize*/
		$x=$imagedata->ProjAccomID; //it must be initialize..
					$y=1;
					$z=$x+$y; //returns 2 if the projectaccomplishment table initialize to 1
				echo "<input id='ProjAccomID'  name='ProjAccomID'  type='hidden' value='$z' readonly>";			

			     
			endforeach; ?>  
        <input type="hidden" value='' id="del_id" name="del_id">  
        Are you sure?</p>  
	</div>
   
					
	  
			</div>
					
			<!--END OF WORK DESCRIPTION-->

					<input class="pre_btn" style="margin-top:19px;" type="button" value="Previous" >
					<input class="next_btn" name="next" type="button" value="Next" style="margin-left:20px;">
			
			</fieldset>
			
			</fieldset>
			<fieldset id="second">
			<h2><center>PROJECT ACCOMPLISHMENT<center></h2>
			<ul id="progressbar">
				<li>Information</li>
				<li>Work Descriptions</li>
				<li  class="deactive">Personnel</li>
		
			</ul>
			<div id="textfield1" style="margin-left:20px;height:325px">
			
				<br>
				<br>
				<br>
				<br>
					<label for='personnel' style="margin-left:100px;">  Prepared by: </label><label for='Personnel'style="margin-left:470px;">   Checked by: </label>

				    <br>
						<input id='INFRA_NO' style="margin-left:170px;width:300px;text-align:center;font-weight:bold" name="pbname" placeholder="name" type="text" value="E.E. MONCAY" required/>
						<input id='INFRA_NO' style="margin-left:250px;width:300px;text-align:center;font-weight:bold" name="cbname" placeholder="name" type="text" value="R.A ENCABO">
				    <div for='personnel' style="margin-top:-20px;">
						<input id='INFRA_NO' style="margin-left:170px;width:300px;text-align:center;font-weight:bold" name="pbposition" placeholder="position" type="text" value="QA/safety Engineer-Agus 6/7 hepc" required/>
						<input id='INFRA_NO' style="margin-left:250px;width:300px;text-align:center;font-weight:bold" name="cbposition" placeholder="position" type="text" value="PTS div. Mngr. Agus 6/7 hepc" required/>
					</div>
				<br>
				
					<label for='personnel' style="margin-left:400px;margin-top:100px;">   Approved by: </label>
				<br>
						<input id='INFRA_NO' style="margin-left:450px;width:300px;text-align:center;font-weight:bold" name="abname" placeholder="Project Name" type="text" value="J.S PATES. JR." required/>
						<input id='INFRA_NO' style="margin-top:-8px;margin-left:450px;width:300px;text-align:center;font-weight:bold" name="abposition" placeholder="position" type="text" value="OIC-PLANT MNGR. AGUS 6/7 HEPC" required/>

				
	

   
					
	  
			</div>
					
			<!--END OF WORK DESCRIPTION-->
					<input class="pre_btn" style="margin-top:55px;" type="button" value="Previous">
					<input class="submit_btn" onClick="return confirm('You are about to submit a PROJECT ACCOMPLISHMENT')"type="submit" value="Submit">
			
			</fieldset>

				</form>
				<?php foreach ($img as $row):?>
				<div style="width:500px;float:right;margin-right:-30px;">
				<div id="downnote" style="margin-left:65px;float:left;text-transform:uppercase;color:white;font-size:12px;">
				note : If there is an existing ENTRY Before Inputing. click 
				</div>
				<div id="reset" style="float:right;margin-top:-7px;">
					<form method="post" action="<?php echo base_url()."AGUS_site/cpaa"?>">
					<?php foreach ($last as $imagedata):
						/*be sure that nxt time if you reset the database please fill .. an initialization in ProjectAccomplishment table so that it iniatialize*/
						$x=$imagedata->ProjAccomID; //it must be initialize..
						$y=1;
						$z=$x+$y; //returns 2 if the projectaccomplishment table initialize to 1
						echo "<input id='ProjAccomID'  name='ProjAccomID'  type='hidden' value='$z' readonly>";			

			     
					endforeach; ?>  
					<input type="hidden" name='cpaID' value="<?php echo "$row->PID"?>">
					<input type="submit" onClick="return confirm('RESET ALL DATA INPUT : Are you sure to reset this page ?')" value="reset">
					</form>
				</div>
				</div>
				<?php endforeach; ?>
		
		</div><!--wrapper2-->
		</div><!--semioutside-->
	</div><!--outside-->
  </body>  
</html>  