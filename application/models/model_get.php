<?php

	class Model_get extends CI_Model{

		
	


			
	/*******Employee*******/
		
		function loginEmployee($username, $password){
			$this -> db -> select('EmID, username, password');
			$this -> db -> from('Employee');
			$this -> db -> where('username', $username);
			$this -> db -> where('password', $password);
			$this -> db -> limit(1);
			$query = $this -> db -> get();
			if($query -> num_rows() == 1){
				return $query->result();   
			} else {     
					return false;
				}
			}
	// Status of generating unit
	     function getSGU6(){
			$query=$this->db->query("SELECT * FROM sgu6");
		   
			return $query->result();  
		 
		 }
		  function getSGU7(){
			$query=$this->db->query("select * from sgu7");
		   
			return $query->result();  
		 
		 }
		 
	//Edit SGU6
	     function editSGU6($data){
			$this->db->update_batch("sgu6",$data,"Sgu6ID");
		 }
	//Edit SGU7
	     function editSGU7($data){
			$this->db->update_batch("sgu7",$data,"Sgu7ID");
		 }
   //add project
		public function AddProject($data){
			$this->db->insert("Project",$data);		
		} 
		
	//add work order
		public function Addworkorder($data){
			$this->db->insert("Project",$data);		
		} 
		//add work order
		public function AddUser($data){
			$this->db->insert("Employee",$data);		
		} 
		
	//add ProjAccomp
		public function ProjAccomp($data){
			$this->db->insert("ProjectAccomplishment",$data);		
		} 
			
	//update ProjectAccomplishment
		public function Update_ProjAccomp ($id,$data){
			$this->db->where('ProjAccomID',$id);
			$this->db->update('ProjectAccomplishment',$data); 
			
		}
		 
		 
	 // List of project
	     function getProject(){
		     $query = $this->db->get('Project');  
			//$query=$this->db->query("select INFRA_NO,PROJECT_NAME from Project ORDER BY INFRA_NO");
		   
			return $query->result();  
		 
		 }
	//list of images
	     function images(){
		     $data =3;
		    // $query = $this->db->get('databaseimages');  
			 $this->db->select('*');
			 $this->db->from('databaseimages');
		     $this->db->where('id',$data);			
		     $query = $this->db->get();
			 return $query->result();
			
			 
			}
		 
	/* The is just a sample code only   */
	
	   //function to select all from table name students
		function show_students(){
			$query = $this->db->get('students');
			return $query->result();  
			
		}

	//function to select particular record from table name students 
		function show_student_id($data){
        $this->db->select('*');
        $this->db->from('students');
        $this->db->where('student_id', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;  
    }

	//function to Delete selected record from table name students 	
	function delete_student_id($id){
        $this->db->where('student_id', $id);
        $this->db->delete('students');   
    }
	/*            end  of  the sample code*/
	
	
	///// UPDate na part
	function update_project_id1($id,$data){
     $this->db->where('PID', $id);
     $this->db->update('Project', $data);  
    }
	function update_user($id,$data){
     $this->db->where('EmID', $id);
     $this->db->update('Employee', $data);  
    }
	function update_project($id,$data){
     $this->db->where('PID', $id);
     $this->db->update('Project', $data);  
    }
 
    function show_updateproject(){
		$query = $this->db->get('Project');
		$query_result = $query->result();
		return $query_result;
	}

	function show_projectupdate_id($data){
        $this->db->select('*');
        $this->db->from('Project');
        $this->db->where('PID', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;  
    }



	
	
		 
		 
    	 
	/* The is a FINAL Revise code */
	
	   //function to select all from table name students
		function show_projects(){
			$query = $this->db->get('Project');
			return $query->result();  
			
		}

	//function to select particular record from table name students 
		function show_project_id($data){
        $this->db->select('*');
        $this->db->from('Project');
        $this->db->where('PID', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;  
    }

	//function to Delete selected record from table name students 	
	function delete_project_id($id){
        $this->db->where('PID', $id);
        $this->db->delete('Project');    
    }
	function delete_user($id){
        $this->db->where('EmID', $id);
        $this->db->delete('Employee');    
    }
	function update_rev($id){
        $this->db->where('EmID', $id);
        $this->db->delete('Employee');    
    }
	
	/*            end  of  the FINAL Revise code*/	


   //add project
	   function insertimage($data){
			$this->db->insert("databaseimages",$data);		
		}
		

   //add image
	   function addimage($data){
			$this->db->insert("ProjectImage",$data);		
		}

/****  getProjectImage**/

		function  getProjectImage($data)	{

			$query=$this->db->query("SELECT id	FROM databaseimages WHERE  name = '" . $data. "'");
			
			$result = $query->result();
			return $result;  	
			
					
		}
/****  getImage**/

		function  getImage($data){
		
		    
			$query = $this->db->query("SELECT image,name FROM databaseimages WHERE  id = '" . $data. "'");
				/*foreach ($query->result() as $row)
			{
				//echo $row->image;
				echo $row->name;
				//echo "<img src='".$row->$row['image']."'/>";
			
			}	*/
		   
			$result = $query->result();
			//header("Content-type: ".$result->file_type);
			return $result;  	
					
		}
		
		/****  getImage**/

		function  getProjectID($data){
		
		    
			$query = $this->db->query("SELECT PID FROM Project WHERE  INFRA_NO = '" . $data. "'");		   
			$result = $query->result();
			return $result;  	
					
		}
		/******* *    getsearch  *****/
		function getsearchi($data,$data1){
		
		    
			$query = $this->db->query("SELECT * FROM Project WHERE costcenter='$data' AND INFRA_NO like '$data1%'");		   
			$result = $query->result();
			return $result;  	
					
		}
		function getsearchp($data,$data1){
		
		    
			$query = $this->db->query("SELECT * FROM Project WHERE costcenter='$data' AND plant like '$data1%'");		   
			$result = $query->result();
			return $result;  	
					
		}
	function getsearchpn($data,$data1){
		
		    
			$query = $this->db->query("SELECT * FROM Project WHERE costcenter='$data' AND PROJECT_NAME like '$data1%'");		   
			$result = $query->result();
			return $result;  	
					
		}
	function getsearchs($data,$data1){
		
		    
			$query = $this->db->query("SELECT * FROM Project WHERE costcenter='$data' AND STATUS like '$data1%'");		   
			$result = $query->result();
			return $result;  	
					
		}
	 function getsearchy($data,$data1){
		
		    
			$query = $this->db->query("SELECT * FROM Project WHERE costcenter='$data' AND INFRA2 like '$data1%'");		   
			$result = $query->result();
			return $result;  	
					
		}
	  function getinfrasearchi($data){
		
		    
			$query = $this->db->query("SELECT * FROM Project WHERE plant='AGUS 6' AND INFRA_NO LIKE 'infra-2%' AND INFRA_NO like '$data%' ORDER BY INFRA3");		   
			$result = $query->result();
			return $result;  	
					
		}
		function getinfrasearcha($data){
		
		    
			$query = $this->db->query("SELECT * FROM Project WHERE plant='AGUS 6' AND INFRA_NO LIKE 'infra-2%' AND PROJECT_NAME LIKE '%$data%' ORDER BY INFRA3");		   
			$result = $query->result();
			return $result;  	
					
		}
	 function getinfrasearchy($data){
		
		    
			$query = $this->db->query("SELECT * FROM Project WHERE plant='AGUS 6' AND INFRA_NO LIKE 'infra-2%' AND INFRA2 like '$data%' ORDER BY INFRA3");		   
			$result = $query->result();
			return $result;  	
					
		}
	 function getinfrasearchii($data){
		
		    
			$query = $this->db->query("SELECT * FROM Project WHERE plant='AGUS 7' AND INFRA_NO LIKE 'infra-2%' AND  INFRA_NO like '$data%' ORDER BY INFRA3");		   
			$result = $query->result();
			return $result;  	
					
		}
		function getinfrasearchaa($data){
		
		    
			$query = $this->db->query("SELECT * FROM Project WHERE plant='AGUS 7' AND INFRA_NO LIKE 'infra-2%' AND PROJECT_NAME LIKE '%$data%' ORDER BY INFRA3");		   
			$result = $query->result();
			return $result;  	
					
		}
	 function getinfrasearchyy($data){
		
		    
			$query = $this->db->query("SELECT * FROM Project WHERE plant='AGUS 7' AND INFRA_NO LIKE 'infra-2%' AND  INFRA2 like '$data%' ORDER BY INFRA3");		   
			$result = $query->result();
			return $result;  	
					
		}
	 
		function ListImage(){
			$query = $this->db->query("SELECT * FROM ProjectImage");
			$result = $query->result();
			return $result;  	
			
		
		}
		
		function ListProject(){
			$query = $this->db->query("SELECT * FROM `Project` WHERE INFRA1!='' AND INFRA3!='' AND plant='AGUS 6' ORDER BY INFRA_NO");
			$query_result = $query->result();
			return $query_result; 	
			
		
		}
		function ListProject7(){
			$query = $this->db->query("SELECT * FROM `Project` WHERE INFRA1!='' AND INFRA3!='' AND plant='AGUS 7' ORDER BY INFRA_NO");
			$query_result = $query->result();
			return $query_result; 	
			
		
		}
		
		 
		function show_projectinfo_id($data){
        $this->db->select('*');
        $this->db->from('Project');
        $this->db->where('PID', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;  
		}
		/************************************************ P L A N T    A N D    P R O G R A M S  ****************************************/
	
		function  getotpm(){
			 
			$query = $this->db->query("SELECT * FROM Project WHERE  costcenter = 'otpm'");		   
			$result = $query->result();
			return $result;  	
		    /*For Pagination
			$query_str=("SELECT * FROM Project WHERE  costcenter = 'otpm'");		   
			$result = $this->db->query($query_str);
			return $result;  	
			*/		
		}
		/*
		function get_things_limited($start_row,$limit){
			$query_str=("SELECT * FROM Project LIMIT $start_row,$limit");		   
			$result = $this->db->query($query_str);
			return $result; 
		
		}
		*/
		function  getmd(){
		
		    
			$query = $this->db->query("SELECT * FROM Project WHERE  costcenter = 'md'");		   
			$result = $query->result();
			return $result;  	
					
		}
		function  getadfin(){
		
		    
			$query = $this->db->query("SELECT * FROM Project WHERE  costcenter = 'adfin'");		   
			$result = $query->result();
			return $result;  	
					
		}
		function  getptsd(){
		
			$query = $this->db->query("SELECT * FROM Project WHERE  costcenter = 'ptsd'");		   
			$result = $query->result();
			return $result;  	
					
		}
		function  getod(){
		
			$query = $this->db->query("SELECT * FROM Project WHERE  costcenter = 'od'");		   
			$result = $query->result();
			return $result;  	
					
		}
		/******************	  work description  *********************/
		
		function getAll2($data){  
			$query = $this->db->query("SELECT *
					 FROM DESCRIPTION 
                     Where ProjAccomID='".$data."'
                     ORDER BY id ASC");		   
			$result = $query->result();
			return $result;
		}
		
			  function getAll(){  
    $this->db->select('*');  
    $this->db->from('DESCRIPTION');  
    $this->db->limit(50);  
    $this->db->order_by('id','ASC');  
    $query = $this->db->get();  
   
    return $query->result();  
  }
/*
function getAll3($data,$data1){  
			$query = $this->db->query("SELECT *
					 FROM ProjectAccomplishment
					 JOIN DESCRIPTION 
					 ON ProjectAccomplishment.ProjAccomID=DESCRIPTION.ProjAccomID
                     Where ProjectAccomplishment.PID='".$data."' AND DESCRIPTION.ProjAccomID='".$data1."'
                     ORDER BY id ASC");		   
			$result = $query->result();
			return $result;
		}  
  */ 
  function getAll3($data1){  
			$query = $this->db->query("SELECT *
					 FROM DESCRIPTION
                     Where DESCRIPTION.ProjAccomID='".$data1."'
                     ORDER BY id ASC");		   
			$result = $query->result();
			return $result;
		} 

  function getAll4($data1){  
			$query = $this->db->query("SELECT *
					 FROM ProjectAccomplishment
                     Where ProjectAccomplishment.ProjAccomID='".$data1."'");		   
			$result = $query->result();
			return $result;
		} 
  function get($id){  
    $query = $this->db->getwhere('DESCRIPTION',array('id'=>$id));  
    return $query->row_array();  
  }  
   
  function save(){  
    $Description = $this->input->post('Description');  
    $ProjAccomID = $this->input->post('ProjAccomID');
    $qty=$this->input->post('qty');  
    $Unit=$this->input->post('Unit');  
    $UnitPrice=$this->input->post('UnitPrice');
	// still working
	$M=$qty*$UnitPrice; 
    $pp=$this->input->post('pp');  
    $tap=$this->input->post('tap');  
    $data = array(  
      'ProjAccomID'=>$ProjAccomID,  
      'Description'=>$Description,  
      'qty'=>$qty,  
      'Unit'=>$Unit,  
      'UnitPrice'=>$UnitPrice,  
      'Amount'=>$M,   
      'pp'=>$pp ,
      'tap'=>$tap 
    );  
    $this->db->insert('DESCRIPTION',$data);  
  }  
   
  function update(){  
    $id=$this->input->post('id');  
    $Description = $this->input->post('Description');  
    $ProjAccomID = $this->input->post('ProjAccomID');
    $qty=$this->input->post('qty');  
    $Unit=$this->input->post('Unit');  
    $UnitPrice=$this->input->post('UnitPrice'); 
	$M=$qty*$UnitPrice; 	
    $pp=$this->input->post('pp');  
    $tap=$this->input->post('tap');  
    $data = array(  
      'ProjAccomID'=>$ProjAccomID,  
      'Description'=>$Description,  
      'qty'=>$qty,  
      'Unit'=>$Unit,  
      'UnitPrice'=>$UnitPrice,  
      'Amount'=>$M,  
      'pp'=>$pp,
      'tap'=>$tap
    );  
    $this->db->where('id',$id);  
    $this->db->update('DESCRIPTION',$data);  
  }
	function save2(){  
    $Description = $this->input->post('Description');  
    $ProjAccomID = $this->input->post('ProjAccomID');
    $qty=$this->input->post('qty');  
    $Unit=$this->input->post('Unit');  
    $UnitPrice=$this->input->post('UnitPrice');
	// still working
	$M=$qty*$UnitPrice; 
    $REL_wt=$this->input->post('REL_wt');  
    $data = array(  
      'ProjAccomID'=>$ProjAccomID,  
      'Description'=>$Description,  
      'qty'=>$qty,  
      'Unit'=>$Unit,  
      'UnitPrice'=>$UnitPrice,  
      'Amount'=>$M,  
      'REL_wt'=>$REL_wt 
    );  
    $this->db->insert('DESCRIPTION',$data);  
  }  
   
  function update2(){  
    $id=$this->input->post('id');  
    $Description = $this->input->post('Description');  
    $ProjAccomID = $this->input->post('ProjAccomID');
    $qty=$this->input->post('qty');  
    $Unit=$this->input->post('Unit');  
    $UnitPrice=$this->input->post('UnitPrice'); 
	$M=$qty*$UnitPrice; 	
    $REL_wt=$this->input->post('REL_wt');  
    $data = array(  
      'ProjAccomID'=>$ProjAccomID,  
      'Description'=>$Description,  
      'qty'=>$qty,  
      'Unit'=>$Unit,  
      'UnitPrice'=>$UnitPrice,  
      'Amount'=>$M,  
      'REL_wt'=>$REL_wt
    );  
    $this->db->where('id',$id);  
    $this->db->update('DESCRIPTION',$data);  
  }
		/******************	  end work description	*********************/
		
  function showcpaID($data){
        $this->db->select('*');
        $this->db->from('Project');
        $this->db->where('PID', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;  
    }
	
	/*DETERMINE LAST NUMBER OF ProjectAccomplishment*/
  function lastPA(){
	 
			$query = $this->db->query("SELECT * FROM ProjectAccomplishment ORDER BY ProjAccomID DESC LIMIT 1");		   
			$result = $query->result();
			return $result;  	  	
	}
	function getinventory7($data1,$data2,$data3){
	 
			$query = $this->db->query("SELECT 
(SELECT COUNT(STATUS) FROM Project WHERE STATUS='ON GOING' AND INFRA2=$data3 AND plant='AGUS 7' AND FromDate BETWEEN $data1 AND $data2 AND ToDate BETWEEN $data1 AND $data2 ) as ONGOING,
(SELECT COUNT(STATUS) FROM Project WHERE STATUS='NOT YET STARTED' AND INFRA2=$data3 AND plant='AGUS 7' AND FromDate BETWEEN $data1 AND $data2 AND ToDate BETWEEN $data1 AND $data2 ) as NOTYETSTARTED,
(SELECT COUNT(STATUS) FROM Project WHERE STATUS='REFFERED' AND INFRA2=$data3 AND plant='AGUS 7' AND FromDate BETWEEN $data1 AND $data2 AND ToDate BETWEEN $data1 AND $data2 ) as REFFERED,
(SELECT COUNT(STATUS) FROM Project WHERE STATUS='CANCELED' AND INFRA2=$data3 AND plant='AGUS 7' AND FromDate BETWEEN $data1 AND $data2 AND ToDate BETWEEN $data1 AND $data2 ) as CANCELED,
(SELECT COUNT(STATUS) FROM Project WHERE STATUS='COMPLETE' AND INFRA2=$data3 AND plant='AGUS 7' AND FromDate BETWEEN $data1 AND $data2 AND ToDate BETWEEN $data1 AND $data2 ) as COMPLETE,
(SELECT COUNT(PID) FROM Project WHERE INFRA2=$data3 AND plant='AGUS 7' AND FromDate BETWEEN $data1 AND $data2 AND ToDate BETWEEN $data1 AND $data2 ) as TOTAL
FROM Project  limit 1");		   
			$result = $query->result();
			return $result;  	  	
	}
	function getinventory($data1,$data2,$data3){
	 $query = $this->db->query("SELECT 
(SELECT COUNT(STATUS) FROM Project WHERE STATUS='ON GOING' AND INFRA2=$data3 AND plant='AGUS 6' AND FromDate BETWEEN $data1 AND $data2 AND ToDate BETWEEN $data1 AND $data2 ) as ONGOING,
(SELECT COUNT(STATUS) FROM Project WHERE STATUS='NOT YET STARTED' AND INFRA2=$data3 AND plant='AGUS 6' AND FromDate BETWEEN $data1 AND $data2 AND ToDate BETWEEN $data1 AND $data2 ) as NOTYETSTARTED,
(SELECT COUNT(STATUS) FROM Project WHERE STATUS='REFFERED' AND INFRA2=$data3 AND plant='AGUS 6' AND FromDate BETWEEN $data1 AND $data2 AND ToDate BETWEEN $data1 AND $data2 ) as REFFERED,
(SELECT COUNT(STATUS) FROM Project WHERE STATUS='CANCELED' AND INFRA2=$data3 AND plant='AGUS 6' AND FromDate BETWEEN $data1 AND $data2 AND ToDate BETWEEN $data1 AND $data2 ) as CANCELED,
(SELECT COUNT(STATUS) FROM Project WHERE STATUS='COMPLETE' AND INFRA2=$data3 AND plant='AGUS 6' AND FromDate BETWEEN $data1 AND $data2 AND ToDate BETWEEN $data1 AND $data2 ) as COMPLETE,
(SELECT COUNT(PID) FROM Project WHERE INFRA2=$data3 AND plant='AGUS 6' AND FromDate BETWEEN $data1 AND $data2 AND ToDate BETWEEN $data1 AND $data2 ) as TOTAL
FROM Project  limit 1");		   
			$result = $query->result();
			return $result;  	
	}
	
	
//get list of project accomplishmennt in a specific project
   function viewProjectAccomplishments2($data){
	 
			$query = $this->db->query("SELECT * FROM ProjectAccomplishment JOIN DESCRIPTION 
								JOIN Project ON ProjectAccomplishment.ProjAccomID=DESCRIPTION.ProjAccomID 
								AND Project.PID=ProjectAccomplishment.PID 
								Where ProjectAccomplishment.ProjAccomID='".$data."' ");		   
			$result = $query->result();
			return $result;  	  	
	}
	 function viewProjectAccomplishments($data,$data1,$data2){
	 
			$query = $this->db->query("SELECT *
					 FROM ProjectAccomplishment
					 JOIN DESCRIPTION JOIN Project
					 ON ProjectAccomplishment.ProjAccomID=DESCRIPTION.ProjAccomID AND 
					Project.PID=ProjectAccomplishment.PID Where Project.PID='".$data."'
					AND EfOfCont = '".$data1."' AND ExpDate='".$data2."'");		   
			$result = $query->result();
			return $result;  	  	
	}
	  function viewProjectAccomplishmentsinfo($data,$data1,$data2){
	 
			$query = $this->db->query("SELECT *
					FROM ProjectAccomplishment JOIN Project
					ON Project.PID=ProjectAccomplishment.PID 
					Where Project.PID='".$data."'
					AND EfOfCont = '".$data1."' 
					AND ExpDate='".$data2."'");		   
			$result = $query->result();
			return $result;  	  	
	}
	
	function viewProjectAccomplishmentsinfo2($data){
	 
			$query = $this->db->query("SELECT *
					FROM ProjectAccomplishment JOIN Project
					ON Project.PID=ProjectAccomplishment.PID 
					Where ProjectAccomplishment.ProjAccomID='".$data."'");		   
			$result = $query->result();
			return $result;  	  	
	}
	
	
	function ListProjectAccomplishments($data){
	 
			$query = $this->db->query("SELECT * FROM ProjectAccomplishment WHERE PID='".$data."'");		   
			$result = $query->result();
			return $result;  	  	
	}
	function checkoldpassword($data){
	 
			$query = $this->db->query("SELECT count(password) as checkpass FROM Employee WHERE password='".$data."'");		      
			$result = $query->result();
			return $result;  	  	
	}
	function updatepassword($data,$id){
			$this->db->where('EmID',$id);
			$this->db->update('Employee',$data); 
		}
	function getuser(){
	 
			$query = $this->db->query("SELECT * FROM Employee WHERE EmID != 1 ORDER BY EmID");		      
			$result = $query->result();
			return $result;  	  	
	}
	
		
		/************************************************           E        N          D       ****************************************/


		
	
	}	