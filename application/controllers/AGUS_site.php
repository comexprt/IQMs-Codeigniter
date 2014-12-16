<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AGUS_site extends CI_Controller {

   Public function index(){
      
    // $this->sample();
    $this->sample();
	 
   }
   
   function __construct()
 {
   parent::__construct();
   $this->load->model('model_get','',TRUE);
   	   $this->load->library('pagination');

 }
 


	
/******sample site******/
   public function samplecode(){		
		
		$this->load->view("admin_home_final");
		
		}	
		
		public function samplecode2(){		
		
		$this->load->view("admin_List_infrastructure");
		
		}	
		public function about(){		
		
		$this->load->view("about");
		
		}
		public function developers(){		
		
		$this->load->view("developers");
		
		}	
		
		
  //function to fetch selected record from database
	function show_student_id() {
	    $this->load->model('model_get');
        $id = $this->uri->segment(3);
        $data["students"] = $this->model_get->show_students();
        $data["single_student"] = $this->model_get->show_student_id($id);
        $this->load->view('delete_view', $data);
       
    }
	
//function to Delete selected record from database
	function delete_student_id() {
	     $this->load->model('model_get');
        $id = $this->uri->segment(3);
        $this->model_get->delete_student_id($id);
         $this->show_student_id();
    }


     
/*****************************     login - employee    ****************************************/
    public function login(){		
		$this->load->helper(array('form'));
		$this->load->view("loginSample");
		}
		
function verifyloginEmployee()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');

   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database_employee');

   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
     $this->login();
   }
   else
   {
     //Go to private area
     redirect('AGUS_site/homee');
   }

 }
 
  function check_database_employee($password)
 {
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('username');

   //query the database
   $result = $this->model_get->loginEmployee($username, $password);

   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'id' => $row->EmID,
         'username' => $row->username
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database_employee', 'Invalid username or password');
     return false;
   }
 }
 
 public function homee(){
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
	 if ($data['username']=="admin"){
		$this->load->view('admin', $data);

	 
	 } else {
		
		$this->load->view('executive', $data);
	 }
     //$this->load->view('admin_List_infrastructure', $data);
	 
	 
   }
   else
   {
     //If no session, redirect to login page
     redirect('AGUS_site/login');
   }
 }
 
 
	  public function emp_logout(){
	  $this->session->sess_destroy();
	  redirect('AGUS_site');
	
	}
	
	 public function homeeCreate(){
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
	 /*
	 if ( $this->input->post('username')== "admin"){
	   $this->load->view('admin_view');
	 }else	
	 */
     $this->load->view('homeeCreate', $data);
	 
   }
   else
   {
     //If no session, redirect to login page
     redirect('AGUS_site/login');
   }
 }
 
 
	

	
/*****************************   END    login - employee    ****************************************/


	public function sample(){
	
          $this->load->view("home_page");

	
	}
		
    public function samplelogin(){
	          $this->load->view("sample_login");
	}

	public function project_accomplishment(){
	          $this->load->view("project_accomplishmentE");
	}
	public function pa_description(){
	          $this->load->view("pa_description");
	}

		public function EmpLOg(){
	
          $this->load->view("admin_List_infrastructure");

	
	}
    /*  status of generating units*/	
	public function sgu(){
			  $this->load->model('model_get');
			  $data["results"]  = $this->model_get->getSGU6();
			  $data2["results"]  = $this->model_get->getSGU7();
			  

	          $this->load->view("sgu",$data);
			  $this->load->view("sgu2",$data2);
	}
	public function editformvalueSGU6(){
	          $this->load->view("sgu6edit");
	}
	
	public function editformvalueSGU7(){
	          $this->load->view("sgu7edit");
	}
	public function editvalueSGU6(){
	    $this->load->model('model_get');
		
		$newRow=array(
		         array(
				"Sgu6ID" => "1",
				"AGUS1" => $this->input->post("AGUS1"),
				"Status1" =>  $this->input->post("Status1"),
				"Remarks1" =>  $this->input->post("Remarks1"),
				
				"AGUS2" => $this->input->post("AGUS2"),
				"Status2" =>  $this->input->post("Status2"),
				"Remarks2" =>  $this->input->post("Remarks2")	,
				
				"AGUS3" => $this->input->post("AGUS3"),
				"Status3" =>  $this->input->post("Status3"),
				"Remarks3" =>  $this->input->post("Remarks3")	,
				
				"AGUS4" => $this->input->post("AGUS4"),
				"Status4" =>  $this->input->post("Status4"),
				"Remarks4" =>  $this->input->post("Remarks4")	,
				
				"AGUS5" => $this->input->post("AGUS5"),
				"Status5" =>  $this->input->post("Status5"),
				"Remarks5" =>  $this->input->post("Remarks5")		
				 )
				
				);
				
		
		$this->model_get->editSGU6($newRow);
		redirect('AGUS_site/ugus');
	
	}
	
	public function editvalueSGU7(){
	    $this->load->model('model_get');
		
		$newRow=array(
		         array(
				"Sgu7ID" => "1",
				"AGUS1" => $this->input->post("AGUS1"),
				"Status1" =>  $this->input->post("Status1"),
				"Remarks1" =>  $this->input->post("Remarks1"),
				"AGUS2" => $this->input->post("AGUS2"),
				"Status2" =>  $this->input->post("Status2"),
				"Remarks2" =>  $this->input->post("Remarks2")				
				)
				);
				
		
		$this->model_get->editSGU7($newRow);
		redirect('AGUS_site/ugus');
	
	}
	
	//Create Infrastructure
	  public function create(){	
	  
		$this->load->view("admin_create_infrastructure");

      }
	  //Create Infrastructure
	  public function success(){	
	  
		$this->load->view("success");

      }
	  
	
	
    // List of Infrastructure
	public function ListInfrastructure(){
			  $this->load->model('model_get');
			  $data["results"]  = $this->model_get->getProject();

	          $this->load->view("listinfrastructure",$data);
			  
	}
	
	/*List of revise infrastructure*/
	
	//function to fetch selected record from database
	function show_project_id() {
	    $this->load->model('model_get');
        $id = $this->uri->segment(3);
        $data["projects"] = $this->model_get->show_projects();
        $data["single_project"] = $this->model_get->show_project_id($id);
        $this->load->view('Projectlist_view', $data);
        
    }
	
//function to Delete selected record from database
	function delete_delete_id() {
	     $this->load->model('model_get');
        $id = $this->uri->segment(3);
        $this->model_get->delete_project_id($id);
         $this->show_projectupdate_id();
    }
		
 
	  /*--------------------------------------------------------   ADD Infrastructure       --------------------------------------------------------*/
 public function AddInfrastructure(){
  //This method will have the credentials validation
   $this->load->library('form_validation');
   
      $this->form_validation->set_rules('INFRA_NO', 'INFRA_NO', 'trim|required|xss_clean');
      $this->form_validation->set_rules('PROJECT_NAME', 'PROJECT_NAME', 'trim|required|xss_clean');
      $this->form_validation->set_rules('LOCATION', 'LOCATION', 'trim|required|xss_clean');
      $this->form_validation->set_rules('STATUS', 'STATUS', 'trim|required|xss_clean');
      $this->form_validation->set_rules('DESCRIPTION', 'DESCRIPTION', 'trim|required|xss_clean');
     
   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
     $this->CreateInfrastructure();
   }
   else
   {
   $this->load->model('model_get');
		$data= $this->input->post('INFRA_NO');
		$newRow=array(
			"INFRA_NO" => $this->input->post('INFRA_NO'),
			"PROJECT_NAME" => $this->input->post('PROJECT_NAME'),
			"LOCATION" => $this->input->post('LOCATION'),
			"STATUS" => $this->input->post('STATUS'),
			"DESCRIPTION" => $this->input->post('DESCRIPTION'),
			

		);	
		
		$this->model_get->AddProject($newRow);  
		$data1['projectID']=$this->model_get->getProjectID($data);  
		$this->load->view('admin_create_infrastructure_success',$data1);
		//redirect('AGUS_site/admin_create_infrastructure_success');

		}
	}

function admin_create_infrastructure_success(){
		$this->load->view('admin_create_infrastructure_success');
	}
	
 


	  
    function uploadindex(){
	
		$this->load->view('admin_uploadimages_infrastructure', array('error' => ' ' ));
	
	}
	
	function upload()
	{
	    $this->load->model('model_get');
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']	= '2000kb';
		$config['max_width']  = '0';
		$config['max_height']  = '0';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('admin_uploadimages_infrastructure', $error);
		}
		else
		{
		    
			$data = array('upload_data' => $this->upload->data());
			$file_data=$this->upload->data();
			$NameFile=$file_data['file_name'];
			$data=array("name_image"=>$NameFile);
			$this->model_get->addimage($data);
			redirect("AGUS_site/uploadindex");			/*
			$imagedata['img']=$this->model_get->ListImage();
            //$data['img']=base_url().'/uploads/'.$NameFile;
			$this->load->view('viewimage', $imagedata);
			*/
		}
	}

	  
    function Listofinfrawimage(){
	        $this->load->model('model_get');
			$imagedata['img']=$this->model_get->ListImage();
			
            //$data['img']=base_url().'/uploads/'.$NameFile;
			$this->load->view('admin_home_final2', $imagedata);
	
	}
    function ListofProject7(){
	        $this->load->model('model_get');
			$imagedata['plant']="AGUS 7";
			$imagedata['img']=$this->model_get->ListProject7();
			$this->load->view('Admin_List_infrastructure2', $imagedata);
			
	
	}
	 
	 function ListofProject(){
	        $this->load->model('model_get');
			$imagedata['plant']="AGUS 6";
			$imagedata['img']=$this->model_get->ListProject();
			$this->load->view('Admin_List_infrastructure2', $imagedata);
			
	
	}
	/*******************exexutive***********************/
	function ListofProjectE7(){
	        $this->load->model('model_get');
			$session_data = $this->session->userdata('logged_in');
			$imagedata['username'] = $session_data['username'];
			$imagedata['plant']="AGUS 7";
			$imagedata['img']=$this->model_get->ListProject7();
			$this->load->view('Executive_List_infrastructure2', $imagedata);
			
	
	}
	 
	 function ListofProjectE(){
	        $this->load->model('model_get');
			$session_data = $this->session->userdata('logged_in');
			$imagedata['username'] = $session_data['username'];
			$imagedata['plant']="AGUS 6";
			$imagedata['img']=$this->model_get->ListProject();
			$this->load->view('Executive_List_infrastructure2', $imagedata);
			
	
	}
	/********************************************************/
	 function infrasearch(){
	        $this->load->model('model_get');
			$inputtype= $this->input->post('inputtype');
			$inputsearch= $this->input->post('inputsearch');
			$plant= $this->input->post('plant');
			if($plant=='AGUS 6'){
			
			if($inputtype=="all"){
			$imagedata['img']=$this->model_get->ListProject();
			$imagedata['plant']="AGUS 6";
			$this->load->view('Admin_List_infrastructure2', $imagedata);
			}else if($inputtype=="INFRA_NO"){
			$imagedata['img']=$this->model_get->getinfrasearchi($inputsearch);
			$imagedata['plant']="AGUS 6";
			$imagedata['img1']=$inputsearch;
			$imagedata['img2']="INFRA # ";
			$this->load->view('Admin_List_infrastructure22', $imagedata);
			}else if($inputtype=="YEAR"){
			$imagedata['img']=$this->model_get->getinfrasearchy($inputsearch);
			$imagedata['img1']=$inputsearch;
			$imagedata['plant']="AGUS 6";
			$imagedata['img2']="Year";
			$this->load->view('Admin_List_infrastructure22', $imagedata);
			}else if($inputtype=="ACTIVITY"){
			$imagedata['img']=$this->model_get->getinfrasearcha($inputsearch);
			$imagedata['img1']=$inputsearch;
			$imagedata['plant']="AGUS 6";
			$imagedata['img2']="Activity";
			$this->load->view('Admin_List_infrastructure22', $imagedata);
			}
			}else if($plant=='AGUS 7'){
			
			if($inputtype=="all"){
			$imagedata['img']=$this->model_get->ListProject();
			$imagedata['plant']="AGUS 7";
			$this->load->view('Admin_List_infrastructure2', $imagedata);
			}else if($inputtype=="INFRA_NO"){
			$imagedata['img']=$this->model_get->getinfrasearchii($inputsearch);
			$imagedata['img1']=$inputsearch;
			$imagedata['plant']="AGUS 7";
			$imagedata['img2']="INFRA # ";
			$this->load->view('Admin_List_infrastructure22', $imagedata);
			}else if($inputtype=="YEAR"){
			$imagedata['img']=$this->model_get->getinfrasearchyy($inputsearch);
			$imagedata['img1']=$inputsearch;
			$imagedata['img2']="Year";
			$imagedata['plant']="AGUS 7";
			$this->load->view('Admin_List_infrastructure22', $imagedata);
			}else if($inputtype=="ACTIVITY"){
			$imagedata['img']=$this->model_get->getinfrasearchaa($inputsearch);
			$imagedata['img1']=$inputsearch;
			$imagedata['img2']="Activity";
			$imagedata['plant']="AGUS 7";
			$this->load->view('Admin_List_infrastructure22', $imagedata);
			}
			
	
			}else {
				Echo "Database ERROR ! ! ! Please contact I.T Specialist";
			}
			
	
	} 
	/******************         Executive        *********************/
	function infrasearchE(){
	        $this->load->model('model_get');
			$session_data = $this->session->userdata('logged_in');
			$imagedata['username'] = $session_data['username'];
			$inputtype= $this->input->post('inputtype');
			$inputsearch= $this->input->post('inputsearch');
			$plant= $this->input->post('plant');
			if($plant=='AGUS 6'){
			
			if($inputtype=="all"){
			$imagedata['img']=$this->model_get->ListProject();
			$imagedata['plant']="AGUS 6";
			$this->load->view('Executive_List_infrastructure2', $imagedata);
			}else if($inputtype=="INFRA_NO"){
			$imagedata['img']=$this->model_get->getinfrasearchi($inputsearch);
			$imagedata['plant']="AGUS 6";
			$imagedata['img1']=$inputsearch;
			$imagedata['img2']="INFRA # ";
			$this->load->view('Executive_List_infrastructure22', $imagedata);
			}else if($inputtype=="YEAR"){
			$imagedata['img']=$this->model_get->getinfrasearchy($inputsearch);
			$imagedata['img1']=$inputsearch;
			$imagedata['plant']="AGUS 6";
			$imagedata['img2']="Year";
			$this->load->view('Executive_List_infrastructure22', $imagedata);
			}else if($inputtype=="ACTIVITY"){
			$imagedata['img']=$this->model_get->getinfrasearcha($inputsearch);
			$imagedata['img1']=$inputsearch;
			$imagedata['plant']="AGUS 6";
			$imagedata['img2']="Activity";
			$this->load->view('Executive_List_infrastructure22', $imagedata);
			}
			}else if($plant=='AGUS 7'){
			
			if($inputtype=="all"){
			$imagedata['plant']="AGUS 7";
			$imagedata['img']=$this->model_get->ListProject();
			$this->load->view('Executive_List_infrastructure2', $imagedata);
			}else if($inputtype=="INFRA_NO"){
			$imagedata['img']=$this->model_get->getinfrasearchii($inputsearch);
			$imagedata['img1']=$inputsearch;
			$imagedata['plant']="AGUS 7";
			$imagedata['img2']="INFRA # ";
			$this->load->view('Executive_List_infrastructure22', $imagedata);
			}else if($inputtype=="YEAR"){
			$imagedata['img']=$this->model_get->getinfrasearchyy($inputsearch);
			$imagedata['img1']=$inputsearch;
			$imagedata['img2']="Year";
			$imagedata['plant']="AGUS 7";
			$this->load->view('Executive_List_infrastructure22', $imagedata);
			}else if($inputtype=="ACTIVITY"){
			$imagedata['img']=$this->model_get->getinfrasearchaa($inputsearch);
			$imagedata['img1']=$inputsearch;
			$imagedata['img2']="Activity";
			$imagedata['plant']="AGUS 7";
			$this->load->view('Executive_List_infrastructure22', $imagedata);
			}
			
	
			}else {
				Echo "Database ERROR ! ! ! Please contact I.T Specialist";
			}
			
	
	}
	
	function vspa(){
	
		 $this->load->model('model_get');   
		  $id= $this->input->post('id');
		 $as= $this->input->post('as');
		 $to= $this->input->post('to');
 		 $data['info'] = $this->model_get->viewProjectAccomplishmentsinfo($id,$as,$to);
 		 $data['vspa'] = $this->model_get->viewProjectAccomplishments($id,$as,$to);
 		// $data['query'] = $this->model_get->ListProjectAccomplishments($id);
		 $this->load->view('vspa',$data);
	
	
	}
	function Evspa(){
	
		 $this->load->model('model_get');   
		  $id= $this->input->post('id');
		 $as= $this->input->post('as');
		 $to= $this->input->post('to');
 		 $data['info'] = $this->model_get->viewProjectAccomplishmentsinfo($id,$as,$to);
 		 $data['vspa'] = $this->model_get->viewProjectAccomplishments($id,$as,$to);
 		// $data['query'] = $this->model_get->ListProjectAccomplishments($id);
		 $this->load->view('Evspa',$data);
	
	
	}
	
	public function EditPA(){
		 
		 $id= $this->input->post('cpaID');
	
		 $ProjAccomID= $this->input->post('ProjAccomID');
		 $this->load->model('model_get');
		 $imagedata['img'] = $this->model_get->showcpaID($id);
		 $imagedata['last'] = $this->model_get->lastPA();
		// $imagedata['query1'] = $this->model_get->viewProjectAccomplishmentsinfo($id,$as,$to);
		 $imagedata['query'] = $this->model_get->getAll3($ProjAccomID);   
		 $imagedata['query1'] = $this->model_get->getAll4($ProjAccomID);   
		/* $imagedata['query'] = $this->model_get->getAll3($id,$lastID); */
		 $this->load->view('EditINPUT', $imagedata);

	}	
	
	public function lpa(){
	
		 $this->load->model('model_get');   
		 $id= $this->input->post('cpaID');
		 $data['last'] = $this->model_get->lastPA();		
 		 $data['getall'] = $this->model_get->viewProjectAccomplishments2($id);
 		 $data['query'] = $this->model_get->ListProjectAccomplishments($id);
		 $data['img'] = $this->model_get->showcpaID($id);
		 $this->load->view('lpa',$data);
	
	
	}
	/*******************	Executive	***************************/
	public function Elpa(){
	
		 $this->load->model('model_get');   
		 $id= $this->input->post('cpaID');
		 $data['last'] = $this->model_get->lastPA();		
 		 $data['getall'] = $this->model_get->viewProjectAccomplishments2($id);
 		 $data['query'] = $this->model_get->ListProjectAccomplishments($id);
		 $data['img'] = $this->model_get->showcpaID($id);
		 $this->load->view('Elpa',$data);
	
	
	}
	/*****************       S E A R C H    ************************/
	public function submitsearch(){
	
		 $this->load->model('model_get');   
		 $costcenter= $this->input->post('costcenter');
		 $inputtype= $this->input->post('inputtype');
		 $inputsearch= $this->input->post('inputsearch');
		 if($costcenter=="otpm"){
		 if($inputtype=="all"){
		 $data['workorder'] = $this->model_get->getotpm();
		 $this->load->view('agus_otpm1',$data);
		 }else if ($inputtype=="INFRA_NO"){
		 $data['workorder'] = $this->model_get->getsearchi($costcenter,$inputsearch);
		  $this->load->view('agus_otpm1',$data);
		 } else if ($inputtype=="PROJECT_NAME"){ 
		 $data['workorder'] = $this->model_get->getsearchpn($costcenter,$inputsearch);
		  $this->load->view('agus_otpm1',$data);
		 } else if ($inputtype=="STATUS"){
		 $data['workorder'] = $this->model_get->getsearchs($costcenter,$inputsearch);
		  $this->load->view('agus_otpm1',$data);
		 }else if ($inputtype=="YEAR"){
		 $data['workorder'] = $this->model_get->getsearchy($costcenter,$inputsearch);
		  $this->load->view('agus_otpm1',$data);
		 }else if ($inputtype=="plant"){
		 $data['workorder'] = $this->model_get->getsearchp($costcenter,$inputsearch);
		  $this->load->view('agus_otpm1',$data);
		 }
		}else if ($costcenter=="md"){
		if($inputtype=="all"){
		 $data['workorder'] = $this->model_get->getmd();
		 $this->load->view('agus_md1',$data);
		 }else if ($inputtype=="INFRA_NO"){
		 $data['workorder'] = $this->model_get->getsearchi($costcenter,$inputsearch);
		  $this->load->view('agus_md1',$data);
		 } else if ($inputtype=="PROJECT_NAME"){ 
		 $data['workorder'] = $this->model_get->getsearchpn($costcenter,$inputsearch);
		  $this->load->view('agus_md1',$data);
		 } else if ($inputtype=="STATUS"){
		 $data['workorder'] = $this->model_get->getsearchs($costcenter,$inputsearch);
		  $this->load->view('agus_md1',$data);
		 }else if ($inputtype=="YEAR"){
		 $data['workorder'] = $this->model_get->getsearchy($costcenter,$inputsearch);
		  $this->load->view('agus_md1',$data);
		 }else if ($inputtype=="plant"){
		 $data['workorder'] = $this->model_get->getsearchp($costcenter,$inputsearch);
		  $this->load->view('agus_md1',$data);
		 }
		} else if ($costcenter=="adfin"){
		if($inputtype=="all"){
		 $data['workorder'] = $this->model_get->getadfin();
		 $this->load->view('agus_adfin1',$data);
		 }else if ($inputtype=="INFRA_NO"){
		 $data['workorder'] = $this->model_get->getsearchi($costcenter,$inputsearch);
		  $this->load->view('agus_adfin1',$data);
		 } else if ($inputtype=="PROJECT_NAME"){ 
		 $data['workorder'] = $this->model_get->getsearchpn($costcenter,$inputsearch);
		  $this->load->view('agus_adfin1',$data);
		 } else if ($inputtype=="STATUS"){
		 $data['workorder'] = $this->model_get->getsearchs($costcenter,$inputsearch);
		  $this->load->view('agus_adfin1',$data);
		 }else if ($inputtype=="YEAR"){
		 $data['workorder'] = $this->model_get->getsearchy($costcenter,$inputsearch);
		  $this->load->view('agus_adfin1',$data);
		 }else if ($inputtype=="plant"){
		 $data['workorder'] = $this->model_get->getsearchp($costcenter,$inputsearch);
		  $this->load->view('agus_adfin1',$data);
		 }
		 }else if ($costcenter=="ptsd"){
		if($inputtype=="all"){
		 $data['workorder'] = $this->model_get->getptsd();
		 $this->load->view('agus_ptsd1',$data);
		 }else if ($inputtype=="INFRA_NO"){
		 $data['workorder'] = $this->model_get->getsearchi($costcenter,$inputsearch);
		  $this->load->view('agus_ptsd1',$data);
		 } else if ($inputtype=="PROJECT_NAME"){ 
		 $data['workorder'] = $this->model_get->getsearchpn($costcenter,$inputsearch);
		  $this->load->view('agus_ptsd1',$data);
		 } else if ($inputtype=="STATUS"){
		 $data['workorder'] = $this->model_get->getsearchs($costcenter,$inputsearch);
		  $this->load->view('agus_ptsd1',$data);
		 }else if ($inputtype=="YEAR"){
		 $data['workorder'] = $this->model_get->getsearchy($costcenter,$inputsearch);
		  $this->load->view('agus_ptsd1',$data);
		 }else if ($inputtype=="plant"){
		 $data['workorder'] = $this->model_get->getsearchp($costcenter,$inputsearch);
		  $this->load->view('agus_ptsd1',$data);
		 }
		 }
	
	
	}
	public function lpaa(){
	
		 $this->load->model('model_get');
		 $ProjAccomID = $this->input->post('ProjAccomID'); 
		 $this->db->delete('DESCRIPTION', array('ProjAccomID' =>$ProjAccomID));
		 $id= $this->input->post('cpaID');
		 $data['last'] = $this->model_get->lastPA();		
 		 $data['getall'] = $this->model_get->viewProjectAccomplishments2($id);
 		 $data['query'] = $this->model_get->ListProjectAccomplishments($id);
		 $data['img'] = $this->model_get->showcpaID($id);
		 $this->load->view('lpa',$data);
	
	
	}
	public function cpa(){
		 $id= $this->input->post('cpaID');
		 $this->load->model('model_get');
		 $imagedata['img'] = $this->model_get->showcpaID($id);
		 $imagedata['last'] = $this->model_get->lastPA();
         $last= $this->input->post('last');
		 $lastID= $last+1;
		 $imagedata['query'] = $this->model_get->getAll3($lastID);   
		/* $imagedata['query'] = $this->model_get->getAll3($id,$lastID); */
		 $this->load->view('input', $imagedata);
	}	
	 public function cpaa(){
		 $id= $this->input->post('cpaID');
		 $ProjAccomID= $this->input->post('ProjAccomID');
		 $this->db->delete('DESCRIPTION', array('ProjAccomID' =>$ProjAccomID));
		 $this->load->model('model_get');
		 $imagedata['img'] = $this->model_get->showcpaID($id);
		 $imagedata['last'] = $this->model_get->lastPA();
		 $imagedata['query'] = $this->model_get->getAll3($ProjAccomID);   
		 $this->load->view('input', $imagedata);
	}	
	  function submit(){ 
       $lastID = $this->input->post('ProjAccomID');  	  
      if ($this->input->post('ajax')){  
      if ($this->input->post('id')){  
        $this->model_get->update();
		$imagedata['query'] = $this->model_get->getAll2($lastID);   
        $this->load->view('show', $imagedata);
      }else{  
        $this->model_get->save(); 
		$imagedata['query'] = $this->model_get->getAll2($lastID); 
        $this->load->view('show', $imagedata);
      }  
    }  
  }
  

 public function delete(){  
    $id = $this->input->post('id');  
    $lastID = $this->input->post('ProjAccomID');  
    $this->db->delete('DESCRIPTION', array('id' => $id));
	//$imagedata['query'] = $this->model_get->getAll();   
	$imagedata['query'] = $this->model_get->getAll2($lastID);   	
    $this->load->view('show', $imagedata);
  } 

	
	
	function iframe() {
	   
        $this->load->view('iframe');
       
    }
	
	function ugus() {
		$this->load->model('model_get');	
		$data["results"]  = $this->model_get->getSGU6();	
		$data["result"]  = $this->model_get->getSGU7();	
        $this->load->view('updategeneratingunitstatus',$data);
       
    }
	/***************   Executive    ******************/
	function ugusE() {
		$this->load->model('model_get');
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];		
		$data["results"]  = $this->model_get->getSGU6();	
		$data["result"]  = $this->model_get->getSGU7();	
        $this->load->view('updategeneratingunitstatusE',$data);
       
    }
	
	function show_projectinfo_id() {
	    $this->load->model('model_get');
        $id = $this->uri->segment(3);
        $data['img'] = $this->model_get->ListProject();
        $this->load->view('Admin_List_infrastructure2', $data);
       
    }
	
	function show_projectupdate_id() {
	    $this->load->model('model_get');
        $id = $this->uri->segment(3);
        $data['projects'] = $this->model_get->show_updateproject();
        $data['single_project'] = $this->model_get->show_projectupdate_id($id);
        $this->load->view('Projectupdate_view', $data);
       
    }
	
function update_project_id1() {
	   $this->load->model('model_get');
       $id= $this->input->post('did');
       $data = array(
           'INFRA_NO' => $this->input->post('INFRA_NO'),
            'PROJECT_NAME' => $this->input->post('PROJECT_NAME'),
            'LOCATION' => $this->input->post('LOCATION'),
            'STATUS' => $this->input->post('STATUS'),
            'DESCRIPTION' => $this->input->post('DESCRIPTION'),
        );
       $this->model_get->update_project_id1($id,$data);
       $this->show_projectupdate_id();
    }
	
	
	
function update_project() {
function checkM($month)
{
if($month == 'January')
{
$val = 1;
}else
if($month == 'February')
{
$val = 2;
 
}else
if($month == 'March')
{
$val = 3;
 
}else
if($month == 'April')
{
$val = 4;
 
}else
if($month == 'May')
{
$val = 5;
 
}else
if($month == 'June')
{
$val = 6;
}else
if($month == 'July')
{
$val = 7;
}else
if($month == 'August')
{
$val = 8;
}else
if($month == 'September')
{
$val = 9;
}else
if($month == 'October')
{
$val = 10;
}else
if($month == 'November')
{
$val = 11;
}else
if($month == 'December')
{
$val = 12;
}
return $val;
}

	   $this->load->model('model_get');
       $id= $this->input->post('did');
       $where= $this->input->post('costcenter');
       $i1= $this->input->post('INFRA1');
       $i2= $this->input->post('INFRA2');
       $i3= $this->input->post('INFRA3');
	   
       $FromDate=checkM($this->input->post("FromDate"));
       $ToDate=checkM($this->input->post("ToDate"));
	   $INFRANO="$i1-$i2-$i3";
       $data = array(
           
			'costcenter' => $this->input->post('costcenter'),
            'PROJECT_NAME' => $this->input->post('PROJECT_NAME'),
            'cost' => $this->input->post('cost'),
            'natureOfContract' => $this->input->post('natureOfContract'),
			'INFRA1' => $i1,
			'INFRA2' => $i2,
			'INFRA3' => $i3,
			'INFRA_NO' => $INFRANO,
            'ass' => $this->input->post('ass'),
            'too' => $this->input->post('too'),
            'LOCATION' => $this->input->post('LOCATION'),
            'STATUS' => $this->input->post('STATUS'),
            'DESCRIPTION' => $this->input->post('DESCRIPTION'),
            'remarks' => $this->input->post('remarks'),
            'plant' => $this->input->post('plant'),
            'FromDate' => $FromDate,
            'ToDate' =>$ToDate,
        );
       $this->model_get->update_project_id1($id,$data);
	  if ($where=="otpm"){
		redirect('AGUS_site/otpm');
		}
		if ($where=="ptsd"){
		redirect('AGUS_site/ptsd');
		}
		if ($where=="adfin"){
		redirect('AGUS_site/adfin');
		}
		if ($where=="md"){
		redirect('AGUS_site/md');
		}ELSE
		echo "invalid costcenter";
	   
    }
function workorder() {
	   $this->load->model('model_get');
       $this->load->view('admin_workorder');

    }	
function otpm() {

		$this->load->model('model_get');
	    $data['workorder'] = $this->model_get->getotpm();
		$this->load->view('agus_otpm',$data);

    
/*  -------------   FOR PAGINATION     --------------------
		$start_row=$this->uri->segment(3);
		$per_page=2;
		if(trim($start_row)=='')
		{
			$start_row=0;
		}

	   $data = $this->model_get->getotpm();
	   $total_rows=$data->num_rows();
	   
	
	   $this->load->library('pagination');

		$config['base_url'] = base_url().'AGUS_site/otpm';
		$config['total_rows'] = $total_rows;
		$config['per_page'] = $per_page; 

    	$this->pagination->initialize($config); 
		$this->view_data['pagination']=$this->pagination->create_links();
		$this->view_data['data']=$this->model_get->get_things_limited($start_row,$per_page);
		$this->load->view('agus_otpm', $this->view_data);
*/
    }	
function md() {
	   $this->load->model('model_get');
	    $data['workorder'] = $this->model_get->getmd();
       $this->load->view('agus_md',$data);

    }	
function adfin() {
	   $this->load->model('model_get');
	    $data['workorder'] = $this->model_get->getadfin();
       $this->load->view('agus_adfin',$data);

    }	
function ptsd() {
	   $this->load->model('model_get');
	    $data['workorder'] = $this->model_get->getptsd();
       $this->load->view('agus_ptsd',$data);

    }	
function od() {
	   $this->load->model('model_get');
	    $data['workorder'] = $this->model_get->getod();
       $this->load->view('agus_od',$data);

    }	
	function manageuser() {
	   $this->load->model('model_get');
	   $data['data'] = $this->model_get->getuser();
       $this->load->view('manageuser',$data);
       //$this->load->view('manageuser');

    }	
	
/************************       add work order           ***************************/
public function Addworkorderotpm(){
function checkM($month)
{
if($month == 'January')
{
$val = 1;
}else
if($month == 'February')
{
$val = 2;
 
}else
if($month == 'March')
{
$val = 3;
 
}else
if($month == 'April')
{
$val = 4;
 
}else
if($month == 'May')
{
$val = 5;
 
}else
if($month == 'June')
{
$val = 6;
}else
if($month == 'July')
{
$val = 7;
}else
if($month == 'August')
{
$val = 8;
}else
if($month == 'September')
{
$val = 9;
}else
if($month == 'October')
{
$val = 10;
}else
if($month == 'November')
{
$val = 11;
}else
if($month == 'December')
{
$val = 12;
}
return $val;
}

   $this->load->model('model_get');
   $where = $this->input->post('costcenter');
    $FromDate=checkM($this->input->post("as"));
       $ToDate=checkM($this->input->post("to"));

		$newRow=array(
			"name_image"=>"addphotosicon.png",
			"PROJECT_NAME" => $this->input->post('PROJECT_NAME'),
			"LOCATION" => $this->input->post('LOCATION'),
			"DESCRIPTION" => $this->input->post('DESCRIPTION'),
			"cost" => $this->input->post('cost'),
			"natureOfContract" => $this->input->post('natureOfContract'),
			"costcenter" => $this->input->post('costcenter'),
			"status" => $this->input->post('status'),
			"plant" => $this->input->post('plant'),
			"FromDate" => $FromDate,
			"ToDate" => $ToDate,
			"INFRA2" => $this->input->post('INFRA2'),
			

		);	
	
		$this->model_get->Addworkorder($newRow);  
		if ($where=="otpm"){
		redirect('AGUS_site/otpm');
		}
		if ($where=="ptsd"){
		redirect('AGUS_site/ptsd');
		}
		if ($where=="adfin"){
		redirect('AGUS_site/adfin');
		}
		if ($where=="md"){
		redirect('AGUS_site/md');
		}ELSE
		echo "invalid costcenter";
  
		
		
		
	}
public function Addworkordermd(){

   $this->load->model('model_get');
  
   
		$newRow=array(
			"PROJECT_NAME" => $this->input->post('PROJECT_NAME'),
			"cost" => $this->input->post('cost'),
			"natureOfContract" => $this->input->post('natureOfContract'),
			"targetDate" => $this->input->post('targetDate'),
			"costcenter" => $this->input->post('costcenter'),
			

		);	
	
		$this->model_get->Addworkorder($newRow);  
		redirect('AGUS_site/md');
  
		
		
		
	}
public function Addworkorderadfin(){

   $this->load->model('model_get');
  
   
		$newRow=array(
			"PROJECT_NAME" => $this->input->post('PROJECT_NAME'),
			"cost" => $this->input->post('cost'),
			"natureOfContract" => $this->input->post('natureOfContract'),
			"targetDate" => $this->input->post('targetDate'),
			"costcenter" => $this->input->post('costcenter'),
			

		);	
	
		$this->model_get->Addworkorder($newRow);  
		redirect('AGUS_site/adfin');
  
		
		
		
	}
	public function adduser(){

   $this->load->model('model_get');
  
		$username=$this->input->post('username');
		$newRow=array(
			"FirstName" => $this->input->post('FirstName'),
			"LastName" => $this->input->post('LastName'),
			"Position" => $this->input->post('Position'),
			"username" => $this->input->post('username'),
			"password" => $this->input->post('password'),
			

		);	
	
		if($username=='admin'){
		$data['data1']="1";
		 $data['data'] = $this->model_get->getuser();
		$this->load->view('manageadduser',$data);
		
		}else{
		$this->model_get->AddUser($newRow);  
		$data['data1']=$this->input->post('LastName');
	    $data['data'] = $this->model_get->getuser();
       $this->load->view('manageadduser',$data);
		}
		
		
		
	}
	
public function Addworkorderptsd(){

   $this->load->model('model_get');
   
   
		$newRow=array(
			"PROJECT_NAME" => $this->input->post('PROJECT_NAME'),
			"cost" => $this->input->post('cost'),
			"natureOfContract" => $this->input->post('natureOfContract'),
			"targetDate" => $this->input->post('targetDate'),
			"costcenter" => $this->input->post('costcenter'),
			

		);	
	
		$this->model_get->Addworkorder($newRow);  
		redirect('AGUS_site/ptsd');
  
		
		
		
	}
public function Addworkorderod(){

   $this->load->model('model_get');
   
		$newRow=array(
			"PROJECT_NAME" => $this->input->post('PROJECT_NAME'),
			"cost" => $this->input->post('cost'),
			"natureOfContract" => $this->input->post('natureOfContract'),
			"targetDate" => $this->input->post('targetDate'),
			"costcenter" => $this->input->post('costcenter'),
			

		);	
	
		$this->model_get->Addworkorder($newRow);  
		redirect('AGUS_site/od');
  
		
		
		
	}
	
function admin() {
	   $this->load->model('model_get');
	   
       $this->load->view('admin');

    }
function inventory() {
	   $this->load->model('model_get');
	   
       $this->load->view('inventory');

    }
	
function inventorysearch() {
	   $this->load->model('model_get');
	   $From=$this->input->post("From");
	   $To=$this->input->post("To");
	   $Y=$this->input->post("Year");
	   $data['from']=$From;
	   $data['to']=$To;
	   $data['y']=$Y;
	   $data['data1']=$this->model_get->getinventory($From,$To,$Y);
	   $data['data2']=$this->model_get->getinventory7($From,$To,$Y);
       $this->load->view('inventorysearch',$data);

    }	
	
	
	
	function inventoryE() {
	   $this->load->model('model_get');
	   $session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];	
       $this->load->view('inventoryE',$data);

    }
	
function inventorysearchE() {
	   $this->load->model('model_get');
	   $session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];	
	   $From=$this->input->post("From");
	   $To=$this->input->post("To");
	   $Y=$this->input->post("Year");
	   $data['from']=$From;
	   $data['to']=$To;
	   $data['y']=$Y;
	   $data['data1']=$this->model_get->getinventory($From,$To,$Y);
	   $data['data2']=$this->model_get->getinventory7($From,$To,$Y);
       $this->load->view('inventorysearchE',$data);

    }	
function UpdateGeneratingUnitStatus() {
	   $this->load->model('model_get');
	   
       $this->load->view('update-generating-unit-status');

    }	
	
	
	
/********************      E   N   D       ***************************/	
//Upload_Images


		 /***********----------------------------  S  A  M  P L E   I M A G E    D I S  P  L A Y-----------------------------************/
	 
	  
	  /*uploading images
	function uploading_images() {
	
	     $this->load->model('model_get');
        
		 if(!isset($_FILES['image']['tmp_name'])){
		    
			$data['results']="file type : jpg,jpeg,png";
			 $this->load->view('uploadimages', $data);
			}
		 else{
			
			$image=file_get_contents($_FILES['image']['tmp_name']);
			$image_name=addslashes($_FILES['image']['name']);
			$image_size=getimagesize($_FILES['image']['tmp_name']);
			
			if($image_size==FALSE){
				$data['results']="INVALID File Type : jpg,jpeg,png";
				$this->load->view('uploadimages', $data);
				}
			else{
				
				$data=array("image"=>$image,"name"=>$image_name);
				$this->model_get->insertimage($data);
				$data['query']=$this->model_get->getProjectImage($image_name);
				$data['results']="Image successfully uploaded ! ! !";
				$this->load->view('uploadimages', $data);
				//redirect('AGUS_site/uploading_images');
			}
			
			
		 }
		
		 }
		 
		 
		 //
		 
 
		  	
//view images
public function view_image(){
				$this->load->view('viewimage');
			
	}


	public function viewimage(){
               $this->load->model('model_get');
			  $id= $this->input->post('image');
				$data['image']=$this->model_get->getImage($id);
				//header("Content-type: image/jpeg");
				//header("Content-type: ".$data->file_type);
				$this->load->view('viewimage', $data);
			
	}
//images
public function images(){
				$this->load->model('model_get');
				$data['image']=$this->model_get->ListImage();
				$this->load->view('images',$data);
			
	}	
		 
		 
    
    */ 
	public function AgusIndex(){
				$this->load->model('model_get');
				
				$this->load->view('agus_index');
			
	}
   	public function popup(){
				$this->load->model('model_get');
				
				$this->load->view('popup');
			
	}
	
	public function AddProjAccomp(){

   $this->load->model('model_get');
  
		 $id= $this->input->post('cpaID');
		$newRow=array(
			"PID"=>$this->input->post('cpaID'),
			"EfOfCont"=> $this->input->post('EfOfCont'),
			"ContName"=> $this->input->post('contractor'),
			"RepName"=> $this->input->post('representative'),
			"ExpDate" => $this->input->post('ExpDate'),
			"RevContAmount" => $this->input->post('RevContAmount'),
			"pbname" => $this->input->post('pbname'),
			"pbposition" => $this->input->post('pbposition'),
			"cbname" => $this->input->post('cbname'),
			"cbposition" => $this->input->post('cbposition'),
			"abname" => $this->input->post('abname'),
			"abposition" => $this->input->post('abposition')
		);
	
		
		 $this->model_get->ProjAccomp($newRow);  
		 $data['last'] = $this->model_get->lastPA();	
		 $data['getall'] = $this->model_get->viewProjectAccomplishments2($id);
		 $data['query'] = $this->model_get->ListProjectAccomplishments($id);
		 $data['img'] = $this->model_get->showcpaID($id);
		 $this->load->view('lpa',$data);
		
		
		
	}
	public function EditSuccess(){

   $this->load->model('model_get');
  
		 $pid= $this->input->post('pid');
		 $id= $this->input->post('id');
		 $did = $this->input->post('did');
		// echo "$did";
		 
		// $as= $this->input->post('as');
		// $to= $this->input->post('to');
		$newRow=array(
		
			"EfOfCont"=> $this->input->post('EfOfCont'),
			"ContName"=> $this->input->post('contractor'),
			"RepName"=> $this->input->post('representative'),
			"ExpDate" => $this->input->post('ExpDate'),
			"RevContAmount" => $this->input->post('RevContAmount'),
			"pbname" => $this->input->post('pbname'),
			"pbposition" => $this->input->post('pbposition'),
			"cbname" => $this->input->post('cbname'),
			"cbposition" => $this->input->post('cbposition'),
			"abname" => $this->input->post('abname'),
			"abposition" => $this->input->post('abposition')
		);
	
		 $this->model_get->Update_ProjAccomp($did,$newRow);
		 $data['info'] = $this->model_get->viewProjectAccomplishmentsinfo2($did);
 		 $data['vspa'] = $this->model_get->viewProjectAccomplishments2($did);
 		// $data['query'] = $this->model_get->ListProjectAccomplishments($id);
		 $this->load->view('vspa',$data);
 	
	}
	
	public function settings(){
	if($this->session->userdata('logged_in'))
   {
	 $this->load->model('model_get');
	 $this->load->view('settings');
	  }
   else
   {
     //If no session, redirect to login page
     redirect('AGUS_site/login');
   }
	
	}
   	
	public function savesettings(){
	if($this->session->userdata('logged_in'))
   {
	 $this->load->model('model_get');
	 $did= $this->input->post('did');
	 $oldpass= $this->input->post('oldpass');
	 $newpassword= $this->input->post('newpassword');
	 $rnewpassword= $this->input->post('rnewpassword');
	 $data = $this->model_get->checkoldpassword($oldpass);
     foreach($data as $row)
     $checkpassword=$row->checkpass;
     if ($checkpassword==1){
		if($newpassword==$rnewpassword){
			$newRow=array("password" => $this->input->post('newpassword'));
			$this->model_get->updatepassword($newRow,$did);
			$data['ds']="Password was Successfully Change";
			$this->load->view('setting',$data);
		}else {
			$data['ds']="Re-Type Password doesn't Match";
			$this->load->view('setting',$data);
		}
		
	 
	 } else{
			$data['ds']="Old Password doesn't Exist";
			$this->load->view('setting',$data);
	 } 

	
	 
	 
	 //$this->load->view('setting');
	 }
   else
   {
     //If no session, redirect to login page
     redirect('AGUS_site/login');
   }
	
	}
	
	function deleteuser() {
	    $this->load->model('model_get');
		$id=$this->input->post('EmID');
        $this->model_get->delete_user($id);
		$data['data1']=$this->input->post('LastName');
	    $data['data'] = $this->model_get->getuser();
       $this->load->view('managedeleteuser',$data);
         
    }
function updateuser() {
	    $this->load->model('model_get');
        $id= $this->input->post('EmID');
       $username=$this->input->post('username');
		$newRow=array(
			"FirstName" => $this->input->post('FirstName'),
			"LastName" => $this->input->post('LastName'),
			"Position" => $this->input->post('Position'),
			"username" => $this->input->post('username'),
			"password" => $this->input->post('password'),
			

		);	
	
		if($username=='admin'){
			$data['data1']="1";
			 $data['data'] = $this->model_get->getuser();
			$this->load->view('manageupdateuser',$data);
		}else{
		
		   $this->model_get->update_user($id,$newRow);
			$data['data1']=$this->input->post('LastName');
			$data['data'] = $this->model_get->getuser();
		   $this->load->view('manageupdateuser',$data);
		}
    }
	

function status() {
	    $this->load->model('model_get');
	    $data["results"]  = $this->model_get->getSGU6();	
		$data["result"]  = $this->model_get->getSGU7();	
        $this->load->view('status',$data);
         
    }
function AgusInfra7() {
	    
	     $this->load->model('model_get');
			$imagedata['plant']="AGUS 7";
			$imagedata['img']=$this->model_get->ListProject7();
			$this->load->view('AgusInfra', $imagedata);
        
         
    }

function AgusInfra() {
	    
	     $this->load->model('model_get');
			$imagedata['plant']="AGUS 6";
			$imagedata['img']=$this->model_get->ListProject();
			$this->load->view('AgusInfra', $imagedata);
       
         
    }
function AgusInfraSearch() {
	    
	     $this->load->model('model_get');
			$inputtype= $this->input->post('inputtype');
			$inputsearch= $this->input->post('inputsearch');
			$plant= $this->input->post('plant');
			if($plant=='AGUS 6'){
			
			if($inputtype=="all"){
			$imagedata['plant']="AGUS 6";
			$imagedata['img']=$this->model_get->ListProject();
			$this->load->view('AgusInfra', $imagedata);
			}else if($inputtype=="INFRA_NO"){
			$imagedata['img']=$this->model_get->getinfrasearchi($inputsearch);
			$imagedata['plant']="AGUS 6";
			$imagedata['img1']=$inputsearch;
			$imagedata['img2']="INFRA # ";
			$this->load->view('AgusInfra2', $imagedata);
			}else if($inputtype=="YEAR"){
			$imagedata['img']=$this->model_get->getinfrasearchy($inputsearch);
			$imagedata['img1']=$inputsearch;
			$imagedata['plant']="AGUS 6";
			$imagedata['img2']="Year";
			$this->load->view('AgusInfra2', $imagedata);
			}else if($inputtype=="ACTIVITY"){
			$imagedata['img']=$this->model_get->getinfrasearcha($inputsearch);
			$imagedata['img1']=$inputsearch;
			$imagedata['plant']="AGUS 6";
			$imagedata['img2']="Activity";
			$this->load->view('AgusInfra2', $imagedata);
			}
			}else if($plant=='AGUS 7'){
			
			if($inputtype=="all"){
			$imagedata['plant']="AGUS 7";
			$imagedata['img']=$this->model_get->ListProject();
			$this->load->view('AgusInfra', $imagedata);
			}else if($inputtype=="INFRA_NO"){
			$imagedata['img']=$this->model_get->getinfrasearchii($inputsearch);
			$imagedata['img1']=$inputsearch;
			$imagedata['plant']="AGUS 7";
			$imagedata['img2']="INFRA # ";
			$this->load->view('AgusInfra2', $imagedata);
			}else if($inputtype=="YEAR"){
			$imagedata['img']=$this->model_get->getinfrasearchyy($inputsearch);
			$imagedata['img1']=$inputsearch;
			$imagedata['img2']="Year";
			$imagedata['plant']="AGUS 7";
			$this->load->view('AgusInfra2', $imagedata);
			}else if($inputtype=="ACTIVITY"){
			$imagedata['img']=$this->model_get->getinfrasearchaa($inputsearch);
			$imagedata['img1']=$inputsearch;
			$imagedata['img2']="Activity";
			$imagedata['plant']="AGUS 7";
			$this->load->view('AgusInfra2', $imagedata);
			}
			
	
			}else {
				Echo "Database ERROR ! ! ! Please contact I.T Specialist";
			}
       
         
    }

	
	function makeacopy() {
	    
	    $this->load->model('model_get');
		$id= $this->input->post('cpaID');
		$as= $this->input->post('as');
		$to= $this->input->post('to');
 		$data['info'] = $this->model_get->viewProjectAccomplishmentsinfo($id,$as,$to);
 		$data['vspa'] = $this->model_get->viewProjectAccomplishments($id,$as,$to);
		$this->load->view('makeacopy',$data);
        
    }
	
   	


}









