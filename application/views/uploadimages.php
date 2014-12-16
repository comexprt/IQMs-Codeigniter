<!-- aqmsproject -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Admin | Home</title>
      <link href="<?php echo base_url();?>styles/style.css" type="text/css"rel="stylesheet"/>
	 <link href="<?php echo base_url();?>styles/styleLogin.css" type="text/css"rel="stylesheet"/>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
	<script type="text/javascript" src="<?php echo base_url();?>scripts/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>scripts/jquery.cycle.all.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script language="javascript">
		function validate(evt) {
		  var theEvent = evt || window.event;
		  var key = theEvent.keyCode || theEvent.which;
		  key = String.fromCharCode( key );
		  var regex = /[a-z]||[0-9]|\./;
		  if( !regex.test(key) ) {
			theEvent.returnValue = false;
			if(theEvent.preventDefault) theEvent.preventDefault();
		  }
		}
	</script>

</head>

<body class="body"><!-- start of header -->
	<header class="main-header">
				
		<nav class="navi">
			<ul>
				<li><a href="<?php echo base_url();?>AGUS_site/EmpLOg">Home</a></li>
				<li><a href="<?php echo base_url();?>AGUS_site/emp_logout">Log Out</a></li>
				<li><a href="<?php echo base_url();?>AGUS_site/images">view images</a></li>
			</ul>
		</nav>
		
		<div class="banner">
			<a href="#"><img src="<?php echo base_url();?>images/NPC_logo.JPG"/></a>
			<h1>AGUS 6/7 HYDROELECTRIC POWER PLANT COMPLEX</h1>
			<h2>QUALITY MONITORING SYSTEM</h2>
		</div>

	</header>
<!-- end of header -->
<?php echo $error;?>

<?php echo form_open_multipart("AGUS_site/upload");?>

<input type="file" name="userfile" onkeypress="validate(event)"  required size="20" />

<br /><br />

<input type="submit" name="submit" value="upload" />
<br />
<br />
</form>
     
	
	<!--p>Your Image</p-->
	<!--img src="<//?php echo base_url();?>application/views/viewimage.php"/-->
	
	
			 
			 
          
           





			<a href="<?php echo base_url();?>AGUS_site/Homee"><button>back</button></a>
			
			
			
			
			
			
			
			
</body>
</html>



