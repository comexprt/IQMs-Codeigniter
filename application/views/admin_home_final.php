<!-- aqmsproject -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Home</title>
     <link href="<?php echo base_url();?>styles/style.css" type="text/css"rel="stylesheet"/>
	 <link href="<?php echo base_url();?>styles/styleLogin.css" type="text/css"rel="stylesheet"/>
	 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>styles/iqms-style.css">
	 <link href="<?php echo base_url();?>styles/bootstrap.min.css" rel="stylesheet">
	<script src="<?php echo base_url();?>scripts/jquery.min.js"></script>
    <script src="<?php echo base_url();?>scripts/bootstrap.min.js"></script>
	
	
</head>

<body class="body">
<!-- start of header -->
	<header class="main-header">
				
	
		
		<div class="banner">
			<a href="#"><img src="<?php echo base_url();?>images/NPC_logo.JPG"/></a>
			<h1>AGUS 6/7 HYDROELECTRIC POWER PLANT COMPLEX</h1>
			<h2>QUALITY MONITORING SYSTEM</h2>
		</div>

	</header>
<!-- end of header -->

            <!-- Begin modal for login -->
        
            <div class="modal-dialog modal-sm">
              <div class="modal-content">
                  <div class="modal-header">
                   
                      <h4 class="modal-title" id="myModalLabel"></h4>
				 </div>
					  
					 
							<div class="login">
					<?php 	
						
						echo form_open("AGUS_site/verifyloginEmployee");
								echo validation_errors();
							
							
						
							echo form_input(array(
										'name' => 'username',
										'value' => '',	
										'maxlength'   => '100',
										'size'        => '28',
                                         'style'       => 'margin:10px',
										'placeholder' => 'Username',
								 ));
							
							echo form_password(array(
										'name' => 'password',
										'value' => '',
										'placeholder' => 'Password',
										'maxlength'   => '100',
										'size'        => '28',
										'style'       => 'margin:10px',
										
								 ));
                   
							
                            echo"<p>";
							echo form_submit("loginSubmit","Log In");
							echo"</p>"	;
							echo form_close();
	 
					?>
				
					  
					  <br>
                        <div id="back_button">
							<a href="<?php echo base_url();?>AGUS_site"><button><< home</button></a>
					  <br>
					 
					  <br>
                  
				  </div><!-- end modal-header -->
              </div><!-- end modal-content -->
            </div><!-- end modal-dialog -->
          <!-- end myModal -->

<!--
	BAI, kani lang sa. Katong mahoman ug log-in, mao lang japun sa'tong sabot.
-->
</body>
</html>