<html>
<head>
<title>Upload Form</title>
</head>
<body>

<h3>Your file was successfully uploaded!</h3>

<!--ul>
<?php //foreach ($upload_data as $item => $value):?>
<li><?php //echo $item;?>: <?php //echo $value;?></li>
<?php// endforeach; ?>
</ul-->

<!--img src="<?php// echo $img?>" width="300" height="300" border="1"-->


<ul>
<?php foreach ($img as $imagedata):?>
<img src="<?php echo base_url().'/uploads/'.$imagedata->name_image;?>"width="120" height="120" border="1">
<?php echo $imagedata->name_image ?>

<br>
<?php endforeach; ?>
</ul>



</body>
</html>