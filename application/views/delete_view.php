<html>
    <head>
        <title>Delete Data From Database Using CodeIgniter</title>
		
		<!-------------Importing google fonts------------->
        <link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>styles/delete.css">
    </head>
    <body>
        <div id="container">
            <div id="wrapper">
                <h1>Delete Data From Database Using CodeIgniter </h1><hr/> 
                <div id="menu">
                    <p>Click On Menu</p>
					 <!--------Displaying Fetched Names from database in Links----------> 
                    <ol>
                        <?php foreach ($students as $student): ?>
                            <li><a href="<?php echo base_url() . "AGUS_site/show_student_id/" . $student->student_id; ?>"><?php echo $student->student_name; ?></a></li>
                        <?php endforeach; ?>
                    </ol>
                </div>
                <div id="detail">
             
				   <!--------Displaying Fetched Details from database ---------->   
                    <?php foreach ($single_student as $student): ?>
                        <p>Student Detail</p>
                        <?php echo $student->student_name; ?><br/>
                        <?php echo $student->student_email; ?><br/>
                        <?php echo $student->student_mobile; ?><br/>
                        <?php echo $student->student_address; ?><br/>
					
					<!--------Delete button ----------> 	
                    <a href="<?php echo base_url() . "AGUS_site/delete_student_id/" . $student->student_id; ?>"><button>Delete</button></a>
                    <?php endforeach; ?>

             
                </div> 
				
            </div> 

        </div>
    </body>
</html>