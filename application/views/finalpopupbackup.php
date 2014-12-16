
<!DOCTYPE html>
<html>
	<head>
		<title>paninit</title>		
		<link href="<?php echo base_url();?>scripts2/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo base_url();?>scripts2/jquery.webui-popover.min.css">
		
	</head>
	<body>
		
	
		<section class="container demo-container">
				
				<div class="col-md-2"><a href="#" class="show-pop-list btn btn-info" data-placement="auto"><img src="<?php echo base_url();?>images/actions.jpg" height="35px;" width="35px;">ACTIONS</a></div>
			</div>
		</section>

		

	
		
		<div id="listContent" style="display:none;">
			<ul class="list-group">
			  <li class="list-group-item">Cras justo odio</li>
			  <li class="list-group-item">Dapibus ac facilisis in</li>
			  <li class="list-group-item">Morbi leo risus</li>
			  <li class="list-group-item">Porta ac consectetur ac</li>
			  <li class="list-group-item">Vestibulum at eros</li>
			</ul>
		</div>

			
		
		
		<script src="<?php echo base_url();?>scripts2/jquery-1.11.1.min.js"></script>		
		<script src="<?php echo base_url();?>scripts2/jquery.webui-popover.min.js"></script>	
		<script>
			(function(){

				var settings = {
						trigger:'click',
						title:'Pop Title',
						content:'<p>This is webui popover demo.</p><p>just enjoy it and have fun !</p>',
						width:300,						
						multi:true,						
						closeable:false,
						style:'',
						padding:true
				};

				function initPopover(){					
								

					var listContent = $('#listContent').html(),
						listSettings = {content:listContent,
											title:'',
											padding:false
										};
					$('a.show-pop-list').webuiPopover('destroy').webuiPopover($.extend({},settings,listSettings));
				}
				initPopover();

				
			})();
			
		</script>
	</body>
</html>
