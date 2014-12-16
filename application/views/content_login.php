<body>
	  
<div class="jumbotron">	  
	  
	 <div class="container">
			
		  <a href="<?php echo base_url();?>AGUS_site/sample">< BACK</a>
	  </div>
				<div id="login_form_container">
				<div class="login">
					<?php 	
						echo"<h2>LOGIN</H2>";
						echo form_open("AGUS_site/verifyloginEmployee");
								//echo validation_errors();
							
							
						
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
				</div>
			
	</div>
	
</div>