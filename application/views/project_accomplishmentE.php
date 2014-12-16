<!DOCTYPE html>
<html>
  <head>
    
	<link href="<?php echo base_url();?>styles/bootstrap.css" type="text/css"rel="stylesheet"/>
    <link href="<?php echo base_url();?>styles/main.css" type="text/css"rel="stylesheet"/>
     <link REL="STYLESHEET" HREF="<?php echo base_url();?>styles/html_reset.css" TYPE="text/css" media=screen />
	 <link REL="STYLESHEET" HREF="<?php echo base_url();?>styles/table.css" TYPE="text/css" media=screen />
    
	<script type="text/javascript" src="<?php echo base_url();?>scripts/description.js" ></script></head>
	<title>Project Accomplishment</title>
	<style type="text/css"> 
         input{ 
         text-align:right; 
         } 
      </style> 
	  
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
	</script>
 
	  
	<script language="javascript">
	function popup()
	{
		popupWindow = window.open('pa_description','mywindow','top=70, left=600, width=700,height=550');
		popupWindow.focus();
	}
	function parent_disable() {
	if(popupWindow && !popupWindow.closed)
	popupWindow.focus();
	}
	</script>
	
	
	<script type="text/javascript">
		
		function getyear(list)
		{
			var debug=0;var req=xmlhttp_req();
			var div=document.getElementById('month');
			var specmonth=escape(list.options[list.selectedIndex].value);
			var btnSearch=document.getElementById('btnSearchCO');
			if(debug)alert(specmonth);
			req.onreadystatechange=function()
				{	if(req.readyState==4||req.readyState=="complete")
					{
					if(debug)alert(req.responseText);
					if(div){try{div.innerHTML=req.responseText;
					}
					catch(e){
							div.firstChild.nodeValue=req.responseText;
							}
						}
					}
				}
				req.open("GET","calculator.php"+"?action=getyear&specmonth="+specmonth);
				req.send(null);
		}
	</script>

  
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

        

  </head>

  <body>
    <div class="nav">
	  <div class="container">
	    <ul class="pull-left">
		  <li><a href="#">Airbnb logo</a></li>
		  <li><a href="#">Browse</a></li>
		</ul>
		<ul class="pull-right">
		  <li><a href="<?php echo base_url();?>"><< BACK </a></li>
		  <li><a href="<?php echo base_url();?>AGUS_site/pa_description">List of Description</a></li>
		  <li><a href="<?php echo base_url();?>AGUS_site/samplelogin">Sample</a></li>
		</ul>
	  </div>
	</div>
	<div class="jumbotron">	 
	        <div class="container">
					
						<!--<div style="padding-top:10px; border-top-left-radius:5px; border-top-right-radius:5px; background: url('theme/images/menu-bg.png'); height:25px;">
							
						</div>-->
						<div style="padding-left: 250px; padding-top:20px;">
							<form action="calculator_result.php" method="POST"><!--form starts here-->
								<span style="padding-left:10px;">
									<strong>Customer type: </strong>
									<select name="customertype" id="customertype" required="yes">
									<option value="1" selected> Residential </option>
									<option value="2"> Commercial </option>
									<option value="3"> Industrial </option>
									</select>
									<span style="padding-left:120px;">For the month of: 
									
										<select size="1" name="month" id="month" required="yes">
																					<option value="January" selected> 
												January											</option>
																					<option value="February" selected> 
												February											</option>
																					<option value="March" selected> 
												March											</option>
																					<option value="April" selected> 
												April											</option>
																					<option value="May" selected> 
												May											</option>
																					<option value="June" selected> 
												June											</option>
																					<option value="July" selected> 
												July											</option>
																				</select>
									</span>
									<span style="margin-left:10px">Year: 
										<select size="1" name="year" id="year" required="yes" onChange="javascript:getyear(this);">
										<option value="2014"> 2014 </option>
										<option value="2013">  2013 </option>
											
										</select>
									</span>
								</span><br/><br/>
								<span style="padding-left:10px;">
								<input  class="classname" title="Click to add appliances that you are using to compute your estimated load." type="button" onClick="popup();" value="Add Appliances" id="add">
								</span>
								
								
						</div>
												<!--<div style="height: 50px; width: 600px; margin-left:17px; box-shadow: 1px 1px 1px #D9DAD3; -moz-box-shadow: 1px 1px 1px #D9DAD3; -webkit-box-shadow: 1px 1px 1px #D9DAD3">
							<p style="padding-top:10px; padding-bottom:10px; font-family: Arial; font-size: 14px; margin-left:20px; margin-right:20px; color: #555;">
								<span style="float:left;"><img src="includes/images/gray.jpg"/></span><span style="float: left; margin-left:10px;  padding-top:5px;"> Please add appliance to compute.</span>
							</p>
						</div>-->
												<div align="center">
							<table id="tabledefault" border="1">
								<tr >
										<th style="color: white; border-bottom: 1px solid #ccc;" width="40%"> Unit </th>
										<th style="color: white; border-bottom: 1px solid #ccc;" width="5%"> Wattage </th>
										<th style="color: white; border-bottom: 1px solid #ccc;" width="10%"> Quantity </th>
										<th style="color: white; border-bottom: 1px solid #ccc;" width="10%"> No. of <br/> hours used per day </th>
										<th style="color: white; border-bottom: 1px solid #ccc;" width="10%"> No. of <br/>days used </th>
										<th style="color: white; border-bottom: 1px solid #ccc;" width="5%"> Action </th>
								</tr>
																<tr>
								<input type="hidden" value="1" id="id" name="id"/>
								<input type="hidden" value="11" id="unitcode[]" name="unitcode[]"/>
								<input type="hidden" id="description[]" name="description[]" value="ACU (1.50 HP) (COMMERCIAL)"/>
								<td><strong>ACU (1.50 HP) (COMMERCIAL)</strong></td>
								<td><strong><input type="hidden" name="wattage[]" value="1252">1252</strong></td>
								<td><span style="float:right;"><input size="3" type="text" name="quantity[]" id="quantity[]" onkeypress='validate(event)' value="" required/></span>  </td>
								<td><span style="float:right;"><input size="5" type="text" name="hours[]" id="hours[]" onkeypress='validate(event)' value="0.4" required/></span> </td>
								<td> <span style="float:right;"><input size="5" type="text" name="days[]" id="days[]" onkeypress='validate(event)' value="" required/></span>  </td>
								<td> 
									 <center><a title="Remove appliance" href="<?php echo base_url();?>AGUS_site/project_accomplishment"><img src="<?php echo base_url();?>images/delete_button.png"/></a></center>
								</td>
								</tr>
															</table>
						</div>
				
						
						
												<div style="padding-bottom:20px;" align="center">
							<input type="submit" Value="Compute Cost" class="classname"/>
						</div>
												</form><!-- and ends here-->
						</div>
				</div>
			</div>
		</div>

	
	
	
	
	
	

  </body>
</html>