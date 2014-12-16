
<!DOCTYPE html>
<html>
	<head>
		<title>WebUI Popover Demo</title>		
		<link href="<?php echo base_url();?>scripts2/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo base_url();?>scripts2/jquery.webui-popover.min.css">
		<style>
			body{
				background: #eee;
				font:14px Helvetica, arial, freesans, clean, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol";
			}
			

			header{				
				color:#fff;		
				background-color: #3366aa;	
				padding-top:30px; 	
				padding-bottom:30px;
				font-size: 24px;
				margin-bottom:40px;
			}
			header h1{
				margin-right: 380px;
				font-size:60px;
				line-height: 1;

			}
			h1 i{
				font-size: 120px;
			}
			header p{
				color:#aaccff;
			}

			.demo-container{
				background: #fff;
				padding-top: 20px;
				padding-bottom: 20px;
				margin-bottom: 40px;
			}

			.row-middle{
				margin-top:200px;
				margin-bottom: 200px;
			}

			.webui-popover-demo.top{
				width:350px;
				height:150px;
				margin-top:-60px;
				margin-left: 25px;
			}

			.webui-popover-demo h3{
				font-weight:bold;
				color:#09e;
			}
			


		</style>
	</head>
	<body>
		
	
		

		<div class="container">
			<div class="row">
				<div class="col-md-12"><h1>Advanced examples </h1></div>
			</div>
		</div>
		<section class="container demo-container">
			<div class="row">				
				<div class="col-md-2"><a href="#" class="show-pop-table btn btn-info" data-placement="auto">pop with table</a></div>
				<div class="col-md-2"><a href="#" class="show-pop-list btn btn-info" data-placement="auto">pop with list</a></div>
				<div class="col-md-2"><a href="#" class="show-pop-large btn btn-info pull-right" data-placement="auto">pop large content</a></div>
				<div class="col-md-2"></div>
				<div class="col-md-2"><a href="#" class="show-pop-async btn btn-info" data-placement="auto">pop async</a></div>
				
				<div class="col-md-2"><a href="#" class="show-pop-iframe btn btn-info" data-placement="auto">pop iframe </a></div>
			</div>
			
		</section>

		

		<div id="tableContent" style="display:none;">
			<table class="table">
		      <thead>
		        <tr>
		          <th>#</th>
		          <th>First Name</th>
		          <th>Last Name</th>
		          <th>Username</th>
		        </tr>
		      </thead>
		      <tbody>
		        <tr>
		          <td>1</td>
		          <td>Mark</td>
		          <td>Otto</td>
		          <td>@mdo</td>
		        </tr>
		        <tr>
		          <td>2</td>
		          <td>Jacob</td>
		          <td>Thornton</td>
		          <td>@fat</td>
		        </tr>
		        <tr>
		          <td>3</td>
		          <td>Larry</td>
		          <td>the Bird</td>
		          <td>@twitter</td>
		        </tr>
		      </tbody>
		    </table>

		</div>
		
		<div id="listContent" style="display:none;">
			<ul class="list-group">
			  <li class="list-group-item">Cras justo odio</li>
			  <li class="list-group-item">Dapibus ac facilisis in</li>
			  <li class="list-group-item">Morbi leo risus</li>
			  <li class="list-group-item">Porta ac consectetur ac</li>
			  <li class="list-group-item">Vestibulum at eros</li>
			</ul>
		</div>

		<div id="largeContent" style="display:none;">
			<p>The jQuery Foundation&#8217;s <a href="http://jquery.org/mission">mission</a> has always been about more than just our namesake projects of jQuery, jQuery UI, and jQuery Mobile. We already host several projects such as Sizzle, QUnit and Globalize that are not dependent on the jQuery library.</p>
<p>This wider web-oriented mission is evident in our jQuery Conferences, which span a wide range of developer concerns beyond jQuery, including Node, CSS, tooling, testing and much more. Over the years we&#8217;ve had talks on build tools, accessibility, security, performance, design patterns, and frameworks such as Ember and Angular. At our San Diego conference this past February, for example, Lenny Markus gave a great talk on <a title="NodeJS In the Enterprise" href="https://www.youtube.com/watch?v=qJVk6KiOEBA" target="_blank">PayPal&#8217;s continuing adoption of Node</a> as they move away from Java and proprietary solutions, Catherine Farman talked about <a title="Real World Responsive Design Projects and Patterns" href="https://www.youtube.com/watch?v=CkC8F3x8-nc" target="_blank">real world responsive design</a>, and John Dimm gave a talk on the <a title="Fun with Speech" href="https://www.youtube.com/watch?v=n8G1CuR2zZc" target="_blank">HTML5 speech APIs</a>.</p>
<p>The jQuery Foundation is participating in the continuing evolution of the web platform via our memberships in both the W3C and ECMA TC39 (The group standardizing what we know as JavaScript). We feel that it&#8217;s essential to have strong representation in those standards groups to ensure they meet the needs of developers. The Foundation provides a platform for developers to have a voice in these standards bodies.</p>
<p>Beyond the technical compatibility between our projects, we also share the open source model and all the benefits it provides. The Foundation adds the benefit of a top-level structure designed to serve the projects, providing the resources they need but letting the contributors decide the best direction for the project based on community input. Any project that joins the Foundation is given the ability to serve their community&#8217;s needs rather than be constrained by the goals of a for-profit company.</p>
<p>Though this has been our mission for a long time, we felt we needed to make this clearer. We are excited to start bringing this part of our mission into the light and start actively working toward a more open web accessible to everyone. If you are excited as well, please help us. Contribute your time to <a href="https://jquery.org/projects/" target="_blank">Foundation projects</a>. Offer your company&#8217;s services. If you or your company have an established open source project that you believe could benefit everyone and flourish by becoming part of the jQuery Foundation, check out our philosophy around <a href="https://jquery.org/projects/join/">projects joining the Foundation</a> and <a href="mailto:info@jquery.org">let us know you’re interested</a>. If you would rather just support the existing and future projects of the Foundation through financial support, <a href="https://jquery.org/join/">become a member of the Foundation.</a> Open source projects will only thrive if everyone who benefits from them contributes back in whatever way they can.</p>
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

				$('.btn-settings').on('click',function(e){
						e.preventDefault();
						$(this).addClass('active').siblings().removeClass('active');
						var option = $(this).data('option');
						settings[option]= $(this).data(option);					
						initPopover();
				});	

				$('.btn-reset').on('click',function(e){
					e.preventDefault();
					location.reload();
				});			


				function initPopover(){					
					$('a.show-pop').webuiPopover('destroy').webuiPopover(settings);				
					
					var tableContent = $('#tableContent').html(),
						tableSettings = {content:tableContent,
											width:500
										};
					$('a.show-pop-table').webuiPopover('destroy').webuiPopover($.extend({},settings,tableSettings));

					var listContent = $('#listContent').html(),
						listSettings = {content:listContent,
											title:'',
											padding:false
										};
					$('a.show-pop-list').webuiPopover('destroy').webuiPopover($.extend({},settings,listSettings));

					var largeContent = $('#largeContent').html(),
						largeSettings = {content:largeContent,
											width:400,
											height:350,
											closeable:true
										};
					$('a.show-pop-large').webuiPopover('destroy').webuiPopover($.extend({},settings,largeSettings));


					 var
					 	iframeSettings = {	width:500,
					 						height:350,
					 						closeable:true,
					 						padding:false,
					 						type:'iframe',
					 						url:'http://getbootstrap.com'};					
					$('a.show-pop-iframe').webuiPopover('destroy').webuiPopover($.extend({},settings,iframeSettings));


					var
					 	asyncSettings = {	width:260,
					 						height:350,
					 						closeable:true,
					 						padding:false,
					 						cache:false,
					 						url:'https://api.github.com/',
					 						type:'async',
					 						content:function(data){
					 							var html = '<ul class="list-group">';
					 							for(var key in data){
					 								html+='<li class="list-group-item"><a href="'+ data[key] +'" target="_blank">'
					 								+ '<i class="glyphicon glyphicon-leaf"></i> '+ key+'</a>'+'</li>';	
					 							}
												html+='</ul>';
												return html;
					 						}};
					$('a.show-pop-async').webuiPopover('destroy').webuiPopover($.extend({},settings,asyncSettings));


					


					$('a.show-pop-event').each(function(i,item){
							var ename = $(item).text()+'.webui.popover';
							$(item).webuiPopover('destroy').webuiPopover(settings)
							.on(ename,function(e){
								var log =  ename+' is trigged!';
								if (console){
									console.log(log);
								}
								$('#eventLogs').text($('#eventLogs').text()+'\n'+log);
							});
					});
					


				}

				$('#resetLogs').on('click',function(e){
					e.preventDefault();
					$('#eventLogs').text('');
				});


				initPopover();

				
			})();
			
		</script>
	</body>
</html>
