drop table if exists Employee;
drop table if exists sgu6;
drop table if exists sgu7;
drop table if exists Project;
drop table if exists ProjectImage;
drop table if exists students;
drop table if exists databaseimages;
drop table if exists ProjectAccomplishment;
drop table if exists DESCRIPTION;



create table Employee(EmID int UNIQUE NOT NULL AUTO_INCREMENT, username text NOT NULL,password text NOT NULL,FirstName text NOT NULL,
					LastName text NOT NULL,Position text NOT NULL,PRIMARY KEY (EmID));
			 
create table sgu6(Sgu6ID int UNIQUE NOT NULL,AGUS1 text NOT NULL, Status1 text NOT NULL, Remarks1 text NOT NULL,
					AGUS2 text NOT NULL, Status2 text NOT NULL, Remarks2 text NOT NULL,
					AGUS3 text NOT NULL, Status3 text NOT NULL, Remarks3 text NOT NULL,
					AGUS4 text NOT NULL, Status4 text NOT NULL, Remarks4 text NOT NULL,
					AGUS5 text NOT NULL, Status5 text NOT NULL, Remarks5 text NOT NULL,
                    PRIMARY KEY (Sgu6ID));
			 
create table sgu7(Sgu7ID int UNIQUE NOT NULL,AGUS1 text NOT NULL, Status1 text NOT NULL, Remarks1 text NOT NULL,
					AGUS2 text NOT NULL, Status2 text NOT NULL, Remarks2 text NOT NULL,
                   PRIMARY KEY (Sgu7ID));
				   
create table Project(PID int NOT NULL AUTO_INCREMENT,name_image text NOT NULL,INFRA1 text NOT NULL,INFRA2 text NOT NULL,INFRA3 text NOT NULL
					,INFRA_NO text NOT NULL,PROJECT_NAME text NOT NULL,LOCATION text NOT NULL,STATUS text NOT NULL, 
                     DESCRIPTION text NOT NULL,ass text NOT NULL,too text NOT NULL,FromDate text NOT NULL,ToDate text NOT NULL,cost text NOT NULL,
					 remarks text NOT NULL,natureOfContract text NOT NULL,costcenter text NOT NULL,
					 plant text NOT NULL,
					 PRIMARY KEY (PID));
					 
create table ProjectAccomplishment(ProjAccomID int NOT NULL AUTO_INCREMENT,PID int NOT NULL,AsOfMonth text NOT NULL,
					ToMonth text NOT NULL,RevContAmount text NOT NULL,EfOfCont text NOT NULL,ExpDate text NOT NULL,
					Duration text NOT NULL,pbname text NOT NULL,pbposition text NOT NULL,cbname text NOT NULL,cbposition text NOT NULL,
					abname text NOT NULL,abposition text NOT NULL,ContName text NOT NULL,RepName text NOT NULL,
					PRIMARY KEY (ProjAccomID));

create table DESCRIPTION(id int NOT NULL AUTO_INCREMENT,ProjAccomID int NOT NULL,Description varchar(64) NOT NULL,qty double NOT NULL
					,Unit text NOT NULL,UnitPrice double NOT NULL,Amount double NOT NULL,pp double NOT NULL,tap double NOT NULL,PRIMARY KEY (id));
				   
create table students(student_id int NOT NULL AUTO_INCREMENT,student_name text NOT NULL,student_email text NOT NULL,student_mobile text NOT NULL,student_address text NOT NULL,
                   PRIMARY KEY (student_id));	
				   
create table databaseimages(id int NOT NULL auto_increment,image blob not null,name text not null, primary key(id));				   
create table ProjectImage(PIID int NOT NULL auto_increment,name_image text NOT NULL, PRIMARY KEY(PIID));				   
/*create table ProjectImage(PIID int NOT NULL auto_increment,PID int NOT NULL,name_image text NOT NULL, PRIMARY KEY(PIID));*/			   
				   
				   

						 
						 

/* Populate the tables with our data */

/* employee data*/
insert into Employee values(1, 'admin', 'admin123', 'bybpy','Palermo','administrator');
insert into Employee values(2, 'executive', '1234', 'E.E.',' MONCAY','QA/safety Engineer-Agus 6/7 hepc');
insert into Employee values(3, 'executive1', '1234', 'R.A ','ENCABO','PTS div. Mngr. Agus 6/7 hepc');
insert into Employee values(4, 'executive2', '1234', 'J.S ','PATES. JR.','OIC-PLANT MNGR. AGUS 6/7 HEPC');
insert into Employee values(5, 'executive3', '1234', 'Jedox','Avelino','System Design');
insert into Employee values(6, 'executive4', '1234', 'Lorena Karla','Silao','System Analyst');

/* Status of generating unit AGUS6*/
insert into sgu6 values(1,'UNIT 1', 'ok','operational'
						,'UNIT 2', 'ok','operational'
						,'UNIT 3', 'ok','operational'
						,'UNIT 4', 'ok','operational'
						,'UNIT 5', 'ok','operational');



/* Status of generating unit AGUS7*/
insert into sgu7 values(1,'UNIT 1', 'ok','operational',
						  'UNIT 2', 'ok','operational');


/* Status of generating unit AGUS7*/
insert into Project values(1,'beach.jpg','infra','2014','001','infra-2014-001', 'Beach Resort','BURU-UN, Iligan city','ON GOING','For the relaxation of the employee','2014-09-08','2014-10-08','1','12','1.5','','by Contract','otpm','AGUS 6');
insert into Project values(2,'Desert.jpg','infra','2014','002','infra-2014-002', 'Dinasour Park','fuentes, iligan city','ON GOING','FOR relaxing and happenings of the employee','2014-01-08','2014-02-08','1','3','1.9','','by Contract','md','AGUS 7');
insert into Project values(3,'basketballcourt.jpg','infra','2014','003','infra-2014-003', 'basketball court','Suarez, iligan city','ON GOING','for the physical fitness of the employee','2014-06-08','2014-08-08','1','4','0.45','','by Contract','adfin','AGUS 6');
insert into Project values(4,'addphotosicon.png','','2015','','', 'Repairing Of Garder in AGUS 6/7','Maria Christina,Iligan city','NOT YET STARTED','for fresh air','','','4','5','0.3','','by Contract','otpm','AGUS 7');
insert into Project values(5,'airport.jpg','infra','2014','004','infra-2014-004', 'Developement Of Airport in AGUS 6/7','Canawai,Iligan City','COMPLETE','easy transport','2014-02-08','2014-03-08','1','12','10.8','','by Contract','otpm','AGUS 7');
insert into Project values(6,'addphotosicon.png','','2016','','', 'Installment and Enchancement Of CCTV AGUS 6/7','Agus site - Fuentes,Iligan City','NOT YET STARTED','Enchancement of the security','','','6','10','2.8','','by Contract','otpm','AGUS 6');
insert into Project values(7,'monkey.jpg','infra','2014','005','infra-2014-005', 'Enlargement Of the Monkey','Suarez,Iligan City','REFERRED','For the good of the Monkey','2014-03-08','2014-04-08','5','11','3.5','','by Contract','ptsd','AGUS 7');
insert into Project values(8,'addphotosicon.png','','2015','','', 'Unit Maintainance','Ditucalan, Iligan City','NOT YET STARTED','Generator Unit Maintainance','','','3','6','0.88','','by Contract','md','AGUS 6');
insert into Project values(9,'addphotosicon.png','','2017','','', 'Turbine Inspection','Agus 6-Fuentes,Iligan City','NOT YET STARTED','Turbine Inspection','','','11','12','1.5','','by Contract','md','AGUS 7');
insert into Project values(10,'generator.jpg','infra','2014','006','infra-2014-006', 'Generator Inspection','Agus site','ON GOING','Generator Inspection','2014-04-08','2014-05-08','6','10','0.8','','by Contract','md','AGUS 6');
insert into Project values(11,'addphotosicon.png','','2014','','', 'Feeding Program for the Crocodile','Agus 7 - fuentes, Iligan Citty','CANCELED','Feeding Program for the Crocodile','','','3','10','0.8','','by Contract','ptsd','AGUS 7');
insert into Project values(12,'addphotosicon.png','','2016','','', 'Coop Bldg. Renovation ','Brgy.Tibanga, Iligan City','NOT YET STARTED','Coop Bldg. Renovation','','','6','12','2.8','','by Contract','adfin','AGUS 6');
insert into Project values(13,'addphotosicon.png','','2015','', '', 'Computer Maintainance','Brgy.Suarez, Iligan City','NOT YET STARTED','Computer Maintainance','','','3','5','0.24','','by Contract','ptsd','AGUS 7');
insert into Project values(14,'addphotosicon.png','','2014','', '', 'Additional Cages for the Crocodile','Brgy.Tominobo, Iligan City','NOT YET STARTED','Additional Cages for the Crocodile','','','5','8','0.5','','by Contract','md','AGUS 7');
insert into Project values(15,'addphotosicon.png','','2014','', '', 'Enhacement of the Natures park','Brgy.Fuentes, Iligan City','NOT YET STARTED','Enhacement of the Natures park','','','1','3','0.33','','by Contract','md','AGUS 6');
insert into Project values(16,'addphotosicon.png','','2014','', '', 'Re-Painting Coop Building','Brgy.Fuentes, Iligan City','COMPLETE','Re-Painting Coop Building','','','10','12','0.18','','by Contract','adfin','AGUS 6');
insert into Project values(17,'addphotosicon.png','','2014','', '', 'Repainting of the Building','Brgy.Maria Christina, Iligan City','REFFERED','Repainting of the Building','','','6','9','0.16','','by Contract','adfin','AGUS 6');
insert into Project values(18,'addphotosicon.png','','2014','', '', 'Repairing Transformer','Brgy.Tominobo, Iligan City','COMPLETE','Repairing Transformer','','','5','11','8.88','','by Contract','ptsd','AGUS 6');
insert into Project values(19,'addphotosicon.png','','2014','', '', 'Widening of the Spill Way','Brgy.Fuentes, Iligan City','ON GOING','Widening of the Spill Way','','','8','11','10.08','','by Contract','ptsd','AGUS 7');
insert into Project values(20,'addphotosicon.png','','2014','', '', 'Buying Mobile Car','Brgy.Fuentes, Iligan City','CANCELED','Buying Mobile Car','','','10','12','5.8','','by Contract','ptsd','AGUS 6');




/* Sample students*/
insert into students values(1,'Peter Fernandis', 'Peter_Fernandis@gmail.com','4569871239','street no. 456,New York');
insert into students values(2,'Mark John', 'mkj@yahoo.com','0242554879','south, Washington DC');
insert into students values(3,'Jacqueline', 'Jacqueline@hotmail.com','8978956412','36 China town, USA');
insert into students values(4,'Maria', 'maria@gmail.com','0125478965','Obere Str. 57');
insert into students values(5,'Christina', 'christina@hotmail.com','0123045870','Str. 786 Paris');

/*initialization of the ProjectAccomplishment*/
insert into ProjectAccomplishment values (0,0, '', '', '', '', '', '', '', '', '', '', '', '', '', '');



/*
foreach ($last as $imagedata):
		/*be sure that nxt time if you reset the database please fill .. an initialization in ProjectAccomplishment table so that it iniatialize
					$x=$imagedata->ProjAccomID; //it must be initialize..
					$y=1;
					$z=$x+$y; //returns 2 if the projectaccomplishment table initialize to 1
				echo "<input id='ProjAccomID'  name='ProjAccomID'  type='hidden' value='$z' readonly>";

			     
			endforeach; 
*/





