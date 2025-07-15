<?php defined('BASEPATH') or exit('No direct script access allowed');

class Searchservice extends CI_Controller{
	function __construct(){
		parent::__construct();
		checklogin();
	}
	public function index(){
		$data['title'] = "Add Search Service";
		$data['breadcrumb'] = array('admin/searchservice' =>'Dashboard');
 		//print_r($data);die;
		$this->template->load('admin/searchservice','add',$data);
	}
	public function sub_service(){
		$data['title'] = "Add Project";
		$data['breadcrumb'] = array('admin/searchservice' =>'Dashboard');
		$servilist = $this->Homeservice_model->get_servicewebsite(array('status'=>1),'all');
		$data['servilist'] = $servilist;
		$this->template->load('admin/searchservice','sub_service',$data);
	}
	

	 public function insert_subservice(){
	 $data = $this->input->post();
	
	 $upload_path = './assets/uploads/project/';	
		$allowed_types = 'gif|jpg|jpeg|png|pdf|GIF|JPG|JPEG|PNG|PDF';
		if($_FILES['proj_images']['name'] !=''){	
			  $proj_images = upload_file("proj_images", $upload_path, $allowed_types, time());
			  if ($proj_images !='') {
				  $data['proj_images'] = $proj_images['path'];
			  }
		  }
	 $result=$this->db->insert('sub_service',$data);
	 if($result === true){
	  $this->session->set_flashdata('msg',"Project Created.");
	}
    else{
   $this->session->set_flashdata('err_msg',$result);
	}
	redirect('admin/searchservice/sub_servicelist');
} 


	public function searchlist(){
		$data['title'] = "Search List";
		$data['breadcrumb'] = array('dashboard'=>'Dashboard');
		$data['datatable'] = true;
        $searchlist= $this->Search_model->get_search(array('all'));
		if(!empty($searchlist)){
			$this->session->set_flashdata('msg',"data already Found.");
			redirect($_SERVER['HTTP_REFERER']);
		}
		else{
			$this->session->set_flashdata('msg',"data add Found.");
			redirect($_SERVER['HTTP_REFERER']);
		}
		$data['searchlist'] = $searchlist;
		$this->template->load('admin/searchservice','view',$data);
	}
	public function sub_servicelist(){
		$data['title'] = "Project List";
		$data['breadcrumb'] = array('dashboard'=>'Dashboard');
		$data['datatable'] = true;
        $subservicelist= $this->Search_model->sub_servicelist();
		// print_r($subservicelist);die;
		// if(empty($subservicelist)){
		// 	$this->session->set_flashdata('msg',"data not Found.");
		// 	redirect($_SERVER['HTTP_REFERER']);
		// }
		$data['subservicelist'] = $subservicelist;
		$this->template->load('admin/searchservice','subservicelist',$data);
	}
	public function edit_subservice($id){
		$id = $this->uri->segment('4');
		$data['title'] = "Sub Service Edit";
		$data['breadcrumb'] = array('dashboard'=>'Dashboard');
		$data['datatable'] = true;
        $subservicelist= $this->Search_model->edit_subservice($id);
		if(empty($subservicelist)){
			$this->session->set_flashdata('msg',"data not Found.");
			redirect($_SERVER['HTTP_REFERER']);
		}
		$data['service'] = $this->db->get_where('services',array('status'=>1))->result_array();

		$data['subservicelist'] = $subservicelist;
		$this->template->load('admin/searchservice','edit_subservice',$data);

	}
	public function update_subservice(){
	 $data = $this->input->post();
	 $upload_path = './assets/uploads/project/';	
		$allowed_types = 'gif|jpg|jpeg|png|pdf|GIF|JPG|JPEG|PNG|PDF';
		if($_FILES['proj_images']['name'] !=''){	
			  $proj_images = upload_file("proj_images", $upload_path, $allowed_types, time());
			  if ($proj_images !='') {
				  $data['proj_images'] = $proj_images['path'];
			  }
		  }
	 $where = $this->db->where('id',$data['id']);
	 if($_FILES['proj_images']['name'] !=''){
	 	$result=$this->db->update('sub_service',array('service_id'=>$data['service_id'],'sub_service'=>$data['sub_service'],'Description'=>$data['Description'],'proj_images'=>$data['proj_images'],'video'=>$data['video']),$where);

	 }else{
	 	$result=$this->db->update('sub_service',array('service_id'=>$data['service_id'],'sub_service'=>$data['sub_service'],'Description'=>$data['Description'],'video'=>$data['video']),$where);
	 }
	 
	 if($result === true){
	  $this->session->set_flashdata('msg',"Update Succesfully.");
	}
    else{
     $this->session->set_flashdata('err_msg',$result);
	}
	redirect('admin/searchservice/sub_servicelist');

	}
	public function delete_subservice($id){
		$id = $this->uri->segment('4');
	    $result= $this->Staff_model->delete_subservice($id);
	    if($result === true){
	    $this->session->set_flashdata('msg',"Delete Sub Service.");
	   }
	   else{
	  $this->session->set_flashdata('err_msg',$result);
	   }
	   redirect('admin/searchservice/sub_servicelist');
	}
	public function add_blog(){
		$data['title'] = "Add Blog";
		$data['breadcrumb'] = array('admin/searchservice' =>'Dashboard');
		$data['select2'] = true;
        $data['datatable'] = true;
        $data['ckeditor'] = true;
        $data['switchery'] = true;
        $data['ckeditor'] = true;
		$this->template->load('admin/searchservice','add_blog',$data);
	}
 public function insert_blog(){
	 $data = $this->input->post();
	 $upload_path = './assets/uploads/blog/';	
		$allowed_types = 'gif|jpg|jpeg|png|pdf|GIF|JPG|JPEG|PNG|PDF';
		if($_FILES['photos']['name'] !=''){	
			  $photos = upload_file("photos", $upload_path, $allowed_types, time());
			  if ($photos !='') {
				  $data['photos'] = $photos['path'];
			  }
		  }
     $data['added_on'] = date('Y-m-d');
	 $result=$this->db->insert('blog',$data);
	 if($result === true){
	  $this->session->set_flashdata('msg',"Blog Created.");
	}
    else{
   $this->session->set_flashdata('err_msg',$result);
	}
	redirect('admin/searchservice/add_blog');
} 
	public function blog_list(){
		$data['title'] = "Blog list";
		$data['breadcrumb'] = array('dashboard'=>'Dashboard');
		$data['datatable'] = true;
        $subservicelist= $this->db->get_where('blog',array('status'=>1))->result_array();
		// if(empty($subservicelist)){
		// 	$this->session->set_flashdata('msg',"data not Found.");
		// 	redirect($_SERVER['HTTP_REFERER']);
		// }
		$data['subservicelist'] = $subservicelist;
		$this->template->load('admin/searchservice','blog_list',$data);
	}
	public function edit_blog($id){
		$id = $this->uri->segment('4');
		$data['title'] = "Sub Blog Edit";
		$data['breadcrumb'] = array('dashboard'=>'Dashboard');
		$data['datatable'] = true;
        $subservicelist= $this->db->get_where('blog',array('id'=>$id))->row_array();
		// if(empty($subservicelist)){
		// 	$this->session->set_flashdata('msg',"data not Found.");
		// 	redirect($_SERVER['HTTP_REFERER']);
		// }
		$data['subservicelist'] = $subservicelist;
		$this->template->load('admin/searchservice','edit_blog',$data);

	}
	public function update_blog(){
	 $data = $this->input->post();
	 $upload_path = './assets/uploads/project/';	
		$allowed_types = 'gif|jpg|jpeg|png|pdf|GIF|JPG|JPEG|PNG|PDF';
		if($_FILES['photos']['name'] !=''){	
			  $photos = upload_file("photos", $upload_path, $allowed_types, time());
			  if ($photos !='') {
				  $data['photos'] = $photos['path'];
			  }
		  }
	 $where = $this->db->where('id',$data['id']);
	 $date = date('y-m-d');
	 if($_FILES['photos']['name'] !=''){
	 	$result=$this->db->update('blog',array('id'=>$data['id'],'name'=>$data['name'],'description'=>$data['description'],'photos'=>$data['photos'],'added_on'=>$date),$where);

	 }else{
	 	$result=$this->db->update('blog',array('id'=>$data['id'],'name'=>$data['name'],'description'=>$data['description'],'added_on'=>$date),$where);
	 }
	 
	 if($result === true){
	  $this->session->set_flashdata('msg',"Update Succesfully.");
	}
    else{
     $this->session->set_flashdata('err_msg',$result);
	}
	redirect('admin/searchservice/blog_list');

	}
	public function delete_blog($id){
		$id = $this->uri->segment('4');
	    $result= $this->Staff_model->delete_blog($id);
	    if($result === true){
	    $this->session->set_flashdata('msg',"Delete Blog.");
	   }
	   else{
	  $this->session->set_flashdata('err_msg',$result);
	   }
	   redirect('admin/searchservice/blog_list');
	}
	public function our_team(){
		$data['title'] = "Add Team";
		$data['breadcrumb'] = array('admin/searchservice' =>'Dashboard');
		$data['select2'] = true;
        $data['datatable'] = true;
        $data['ckeditor'] = true;
        $data['switchery'] = true;
		$this->template->load('admin/searchservice','add_team',$data);
	}
	public function insert_team(){
		$data = $this->input->post();
		$upload_path = './assets/uploads/project/';	
		$allowed_types = 'gif|jpg|jpeg|png|pdf|GIF|JPG|JPEG|PNG|PDF';
		if(isset($_FILES['photos']) && $_FILES['photos']['name'] != ''){	
			
			  $photos = upload_file("photos", $upload_path, $allowed_types, time());
			  if ($photos !='') {
				  $data['photos'] = $photos['path'];
			  }
		  }
		
		$data['added_on'] = date('y-m-d');
		$result = $this->db->insert('our_team', $data);
		if ($result) {
			$this->session->set_flashdata('msg', "Team Inserted.");
		} else {
			$this->session->set_flashdata('err_msg', $result);
		}
    redirect('admin/searchservice/team_list');
} 
public function team_list(){
		$data['title'] = "team list";
		$data['breadcrumb'] = array('dashboard'=>'Dashboard');
		$data['datatable'] = true;
        $subservicelist= $this->db->get_where('our_team',array('status'=>1))->result_array();
		if(empty($subservicelist)){
			$this->session->set_flashdata('msg',"data not Found.");
			redirect($_SERVER['HTTP_REFERER']);
		}
		$data['subservicelist'] = $subservicelist;
		$this->template->load('admin/searchservice','team_list',$data);
	}
	public function edit_team($id){
		$id = $this->uri->segment('4');
		$data['title'] = "Team Edit";
		$data['breadcrumb'] = array('dashboard'=>'Dashboard');
		$data['datatable'] = true;
        $subservicelist= $this->db->get_where('our_team',array('id'=>$id))->row_array();
		if(empty($subservicelist)){
			$this->session->set_flashdata('msg',"data not Found.");
			redirect($_SERVER['HTTP_REFERER']);
		}
		$data['subservicelist'] = $subservicelist;
		$this->template->load('admin/searchservice','edit_team',$data);

	}
	public function update_team(){
	 $data = $this->input->post();
	 $upload_path = './assets/uploads/project/';	
		$allowed_types = 'gif|jpg|jpeg|png|pdf|GIF|JPG|JPEG|PNG|PDF';
		if($_FILES['photos']['name'] !=''){	
			  $photos = upload_file("photos", $upload_path, $allowed_types, time());
			  if ($photos !='') {
				  $data['photos'] = $photos['path'];
			  }
		  }
	 $where = $this->db->where('id',$data['id']);


	 if($_FILES['photos']['name'] !=''){
	 	$result=$this->db->update('our_team',array('id'=>$data['id'],'name'=>$data['name'],'position'=>$data['position'],'description'=>$data['description'],'photos'=>$data['photos']),$where);

	 }else{
	 	$result=$this->db->update('our_team',array('id'=>$data['id'],'name'=>$data['name'],'position'=>$data['position'],'description'=>$data['description']),$where);
	 }
	 
	 if($result === true){
	  $this->session->set_flashdata('msg',"Update Succesfully.");
	}
    else{
     $this->session->set_flashdata('err_msg',$result);
	}
	redirect('admin/searchservice/team_list');

	}
	public function delete_team($id){
		$id = $this->uri->segment('4');
	    $result= $this->Staff_model->delete_team($id);
	    if($result === true){
	    $this->session->set_flashdata('msg',"Delete Team members.");
	   }
	   else{
	  $this->session->set_flashdata('err_msg',$result);
	   }
	   redirect('admin/searchservice/team_list');
	}
	public function add_faqs(){
		$data['title'] = "Add FAQS";
		$data['breadcrumb'] = array('admin/searchservice' =>'Dashboard');
		$data['select2'] = true;
        $data['datatable'] = true;
        $data['ckeditor'] = true;
        $data['switchery'] = true;
		$this->template->load('admin/searchservice','add_faqs',$data);
	}
 public function insert_faqs(){
	 $data = $this->input->post();
	 $data['added_on'] = date('y-m-d');
	 $result=$this->db->insert('faqs',$data);
	 if($result === true){
	  $this->session->set_flashdata('msg',"faqs Created.");
	}
    else{
   $this->session->set_flashdata('err_msg',$result);
	}
	redirect('admin/searchservice/faqs_list');
} 
	public function faqs_list(){
		$data['title'] = "faqs list";
		$data['breadcrumb'] = array('dashboard'=>'Dashboard');
		$data['datatable'] = true;
        $subservicelist= $this->db->get_where('faqs',array('status'=>1))->result_array();
		if(empty($subservicelist)){
			$this->session->set_flashdata('msg',"data not Found.");
			redirect('admin/searchservice/add_faqs');
		}
		$data['subservicelist'] = $subservicelist;
		$this->template->load('admin/searchservice','faqs_list',$data);
	}
	public function edit_faqs($id){
		$id = $this->uri->segment('4');
		$data['title'] = "Sub faqs Edit";
		$data['breadcrumb'] = array('dashboard'=>'Dashboard');
		$data['datatable'] = true;
        $subservicelist= $this->db->get_where('faqs',array('id'=>$id))->row_array();
		if(empty($subservicelist)){
			$this->session->set_flashdata('msg',"data not Found.");
			redirect($_SERVER['HTTP_REFERER']);
		}
		$data['subservicelist'] = $subservicelist;
		$this->template->load('admin/searchservice','edit_faqs',$data);

	}
	public function update_faqs(){
	 $data = $this->input->post();
	 $data['added_on'] = date('y-m-d');
	 
	 $where = $this->db->where('id',$data['id']);
	 $result=$this->db->update('faqs',$data,$where);
	 if($result === true){
	  $this->session->set_flashdata('msg',"Update Succesfully.");
	  }
     else{
      $this->session->set_flashdata('err_msg',$result);
	 }
	 redirect('admin/searchservice/faqs_list');
	}
	public function delete_faqs($id){
		$id = $this->uri->segment('4');
	    $result= $this->Staff_model->delete_faqs($id);
	    if($result === true){
	    $this->session->set_flashdata('msg',"Delete faqs.");
	   }
	   else{
	  $this->session->set_flashdata('err_msg',$result);
	   }
	   redirect('admin/searchservice/faqs_list');
	}
	public function add_testmonial(){
		$data['title'] = "Add testmonial";
		$data['breadcrumb'] = array('admin/searchservice' =>'Dashboard');
		$data['select2'] = true;
        $data['datatable'] = true;
        $data['ckeditor'] = true;
        $data['switchery'] = true;
		$this->template->load('admin/searchservice','add_testmonial',$data);
	}
 public function insert_testmonial(){
	 $data = $this->input->post();
	 $data['added_on'] = date('Y-m-d');
	 $upload_path = './assets/uploads/testmonial/';	
		$allowed_types = 'gif|jpg|jpeg|png|pdf|GIF|JPG|JPEG|PNG|PDF';
		if($_FILES['images']['name'] !=''){	
			  $images = upload_file("images", $upload_path, $allowed_types, time());
			  if ($images !='') {
				  $data['images'] = $images['path'];
			  }
		  }
    
	 $result=$this->db->insert('testimonial',$data);
	 if($result === true){
	  $this->session->set_flashdata('msg',"testmonial Created.");
	}
    else{
   $this->session->set_flashdata('err_msg',$result);
	}
	redirect('admin/searchservice/add_testmonial');
} 
	public function testmonial_list(){
		$data['title'] = "testmonial list";
		$data['breadcrumb'] = array('dashboard'=>'Dashboard');
		$data['datatable'] = true;
        $subservicelist= $this->db->get_where('testimonial',array('status'=>1))->result_array();
		if(empty($subservicelist)){
			$this->session->set_flashdata('msg',"data not Found.");
			redirect($_SERVER['HTTP_REFERER']);
		}
		$data['subservicelist'] = $subservicelist;
		$this->template->load('admin/searchservice','testmonial_list',$data);
	}
	public function edit_testmonial($id){
		$id = $this->uri->segment('4');
		$data['title'] = "Sub testmonial Edit";
		$data['breadcrumb'] = array('dashboard'=>'Dashboard');
		$data['datatable'] = true;
        $subservicelist= $this->db->get_where('testimonial',array('id'=>$id))->row_array();
		if(empty($subservicelist)){
			$this->session->set_flashdata('msg',"data not Found.");
			redirect('admin/searchservice/testmonial_list');
		}
		$data['subservicelist'] = $subservicelist;
		$this->template->load('admin/searchservice','edit_testmonial',$data);

	}
	public function update_testmonial(){
	 $data = $this->input->post();
	 $data['added_on'] = date('Y-m-d');
	 $upload_path = './assets/uploads/project/';	
	 $allowed_types = 'gif|jpg|jpeg|png|pdf|GIF|JPG|JPEG|PNG|PDF';
		if($_FILES['images']['name'] !=''){	
			  $images = upload_file("images", $upload_path, $allowed_types, time());
			  if ($images !='') {
				  $data['images'] = $images['path'];
			  }
		  }
	 $where = $this->db->where('id',$data['id']);
	 if($_FILES['images']['name'] !=''){
	 	$result=$this->db->update('testimonial',array('id'=>$data['id'],'name'=>$data['name'],'location'=>$data['location'],'description'=>$data['description'],'images'=>$data['images'],'star'=>$data['star']),$where);

	 }else{
	 	$result=$this->db->update('testimonial',array('id'=>$data['id'],'name'=>$data['name'],'location'=>$data['location'],'description'=>$data['description'],'star'=>$data['star']),$where);
	 }
	 
	 if($result === true){
	  $this->session->set_flashdata('msg',"Update Succesfully.");
	}
    else{
     $this->session->set_flashdata('err_msg',$result);
	}
	redirect('admin/searchservice/testmonial_list');

	}
	public function delete_testmonial($id){
		$id = $this->uri->segment('4');
	    $result= $this->Staff_model->delete_testmonial($id);
	    if($result === true){
	    $this->session->set_flashdata('msg',"Delete testmonial.");
	   }
	   else{
	  $this->session->set_flashdata('err_msg',$result);
	   }
	   redirect('admin/searchservice/testmonial_list');
	}
	public function our_troubleshoot(){
		$data['title'] = "Add Troubleshoot";
		$data['breadcrumb'] = array('admin/searchservice' =>'Dashboard');
		$data['select2'] = true;
        $data['datatable'] = true;
		$data['project'] = $this->db->get_where('sub_service',array('status'=>1))->result_array();
		$this->template->load('admin/searchservice','add_troubleshoot',$data);
	}
	public function insert_troubleshoot(){
		$data = $this->input->post();
		$upload_path = './assets/uploads/trouble/';	
		$allowed_types = 'gif|jpg|jpeg|png|pdf|GIF|JPG|JPEG|PNG|PDF';
		if(isset($_FILES['images']) && $_FILES['images']['name'] != ''){	
			
			  $images = upload_file("images", $upload_path, $allowed_types, time());
			  if ($images !='') {
				  $data['images'] = $images['path'];
			  }
		  }
		
		
		$result = $this->db->insert('troubleshoot', $data);
		if ($result) {
			$this->session->set_flashdata('msg', "troubleshoot Inserted.");
		} else {
			$this->session->set_flashdata('err_msg', $result);
		}
    redirect('admin/searchservice/troubleshoot_list');
} 
public function troubleshoot_list(){
		$data['title'] = "Troubleshoot list";
		$data['breadcrumb'] = array('dashboard'=>'Dashboard');
		$data['datatable'] = true;
        $data['subservicelist'] =  $this->Service_model->troubleshoot(array('t1.status'=>1),'all');
	
		
		$this->template->load('admin/searchservice','troubleshoot_list',$data);
	}
	public function edit_troubleshoot($id){
		$id = $this->uri->segment('4');
		$data['title'] = "troubleshoot Edit";
		$data['breadcrumb'] = array('dashboard'=>'Dashboard');
		$data['datatable'] = true;
        $subservicelist= $this->Service_model->troubleshoot(array('t1.id'=>$id),'single');
		if(empty($subservicelist)){
			$this->session->set_flashdata('msg',"data not Found.");
			redirect($_SERVER['HTTP_REFERER']);
		}
		$data['subservicelist'] = $subservicelist;
		$data['project'] = $this->db->get_where('sub_service',array('status'=>1))->result_array();
		$this->template->load('admin/searchservice','edit_troubleshoot',$data);

	}
	public function update_troubleshoot(){
	 $data = $this->input->post();
	 $upload_path = './assets/uploads/trouble/';	
		$allowed_types = 'gif|jpg|jpeg|png|pdf|GIF|JPG|JPEG|PNG|PDF';
		if($_FILES['images']['name'] !=''){	
			  $images = upload_file("images", $upload_path, $allowed_types, time());
			  if ($images !='') {
				  $data['images'] = $images['path'];
			  }
		  }
	 $where = $this->db->where('id',$data['id']);
	 if($_FILES['images']['name'] !=''){
	 	$result=$this->db->update('troubleshoot',array('id'=>$data['id'],'project_id'=>$data['project_id'],'manual_link'=>$data['manual_link'],'images'=>$data['images']),$where);

	 }else{
	 	$result=$this->db->update('troubleshoot',array('id'=>$data['id'],'project_id'=>$data['project_id'],'manual_link'=>$data['manual_link']),$where);
	 }
	 
	 if($result === true){
	  $this->session->set_flashdata('msg',"Update Succesfully.");
	}
    else{
     $this->session->set_flashdata('err_msg',$result);
	}
	redirect('admin/searchservice/troubleshoot_list');

	}
	public function delete_troubleshoot($id){
		$id = $this->uri->segment('4');
	    $result= $this->Staff_model->delete_troubleshoot($id);
	    if($result === true){
	    $this->session->set_flashdata('msg',"Delete troubleshoot members.");
	   }
	   else{
	  $this->session->set_flashdata('err_msg',$result);
	   }
	   redirect('admin/searchservice/troubleshoot_list');
	}
	public function need_help(){
		$data['title'] = "Add Need Help";
		$data['breadcrumb'] = array('admin/searchservice' =>'Dashboard');
		$data['select2'] = true;
        $data['datatable'] = true;
		
		$this->template->load('admin/searchservice','add_need_help',$data);
	}
	public function insert_need_help(){
		$data = $this->input->post();
		$result = $this->db->insert('need_help', $data);
		if ($result) {
			$this->session->set_flashdata('msg', "need & help Inserted.");
		} else {
			$this->session->set_flashdata('err_msg', $result);
		}
    redirect('admin/searchservice/need_help_list');
} 
public function need_help_list(){
		$data['title'] = "Need Help list";
		$data['breadcrumb'] = array('dashboard'=>'Dashboard');
		$data['datatable'] = true;
        $data['subservicelist'] =  $this->db->get_where('need_help',array('status'=>1))->result_array();
		$this->template->load('admin/searchservice','need_help_list',$data);
	}
	public function edit_need_help($id){
		$id = $this->uri->segment('4');
		$data['title'] = "Need Help Edit";
		$data['breadcrumb'] = array('dashboard'=>'Dashboard');
		$data['datatable'] = true;
        $subservicelist= $this->db->get_where('need_help',array('id'=>$id,'status'=>1))->row_array();
		if(empty($subservicelist)){
			$this->session->set_flashdata('msg',"data not Found.");
			redirect($_SERVER['HTTP_REFERER']);
		}
		$data['subservicelist'] = $subservicelist;
		$this->template->load('admin/searchservice','edit_need_help',$data);

	}
	public function update_need_help(){
	 $data = $this->input->post();
	 $where = $this->db->where('id',$data['id']);
	 $result = $this->db->update('need_help',$data,$where);
	 
	 if($result === true){
	  $this->session->set_flashdata('msg',"Update Succesfully.");
	}
    else{
     $this->session->set_flashdata('err_msg',$result);
	}
	redirect('admin/searchservice/need_help_list');

	}
	public function delete_need_help($id){
		$id = $this->uri->segment('4');
	    $result= $this->Staff_model->delete_need_help($id);
	    if($result === true){
	    $this->session->set_flashdata('msg',"Delete need_help members.");
	   }
	   else{
	  $this->session->set_flashdata('err_msg',$result);
	   }
	   redirect('admin/searchservice/need_help_list');
	}
	// live demo 

	public function live_demo(){
		$data['title'] = "Add Live Demo";
		$data['breadcrumb'] = array('admin/searchservice' =>'Dashboard');
		$data['select2'] = true;
        $data['datatable'] = true;
		
		$this->template->load('admin/searchservice','add_live_demo',$data);
	}
	public function insert_live_demo(){
		$data = $this->input->post();
		$upload_path = './assets/uploads/live_demo/';	
		$allowed_types = 'gif|jpg|jpeg|png|pdf|GIF|JPG|JPEG|PNG|PDF';
		if(isset($_FILES['photos']) && $_FILES['photos']['name'] != ''){	
			
			  $photos = upload_file("photos", $upload_path, $allowed_types, time());
			  if ($photos !='') {
				  $data['photos'] = $photos['path'];
			  }
		  }
		$result = $this->db->insert('live_demo', $data);
		if ($result) {
			$this->session->set_flashdata('msg', "need & help Inserted.");
		} else {
			$this->session->set_flashdata('err_msg', $result);
		}
    redirect('admin/searchservice/live_demo_list');
} 
public function live_demo_list(){
		$data['title'] = "Live Demo List";
		$data['breadcrumb'] = array('dashboard'=>'Dashboard');
		$data['datatable'] = true;
        $data['subservicelist'] =  $this->db->get_where('live_demo',array('status'=>1))->result_array();
		$this->template->load('admin/searchservice','live_demo_list',$data);
	}
	public function edit_live_demo($id){
		$id = $this->uri->segment('4');
		$data['title'] = "Live Demo Edit";
		$data['breadcrumb'] = array('dashboard'=>'Dashboard');
		$data['datatable'] = true;
        $subservicelist= $this->db->get_where('live_demo',array('id'=>$id,'status'=>1))->row_array();
		if(empty($subservicelist)){
			$this->session->set_flashdata('msg',"data not Found.");
			redirect($_SERVER['HTTP_REFERER']);
		}
		$data['subservicelist'] = $subservicelist;
		$this->template->load('admin/searchservice','edit_live_demo',$data);

	}
	public function update_live_demo(){
	 $data = $this->input->post();
	 $upload_path = './assets/uploads/live_demo/';	
		$allowed_types = 'gif|jpg|jpeg|png|pdf|GIF|JPG|JPEG|PNG|PDF';
		if(isset($_FILES['photos']) && $_FILES['photos']['name'] != ''){	
			
			  $photos = upload_file("photos", $upload_path, $allowed_types, time());
			  if ($photos !='') {
				  $data['photos'] = $photos['path'];
			  }
		  }
	 $where = $this->db->where('id',$data['id']);
	 $result = $this->db->update('live_demo',$data,$where);
	 
	 if($result === true){
	  $this->session->set_flashdata('msg',"Update Succesfully.");
	}
    else{
     $this->session->set_flashdata('err_msg',$result);
	}
	redirect('admin/searchservice/live_demo_list');

	}
	public function delete_live_demo($id){
		$id = $this->uri->segment('4');
	    $result= $this->Staff_model->delete_live_demo($id);
	    if($result === true){
	    $this->session->set_flashdata('msg',"Delete live demo members.");
	   }
	   else{
	  $this->session->set_flashdata('err_msg',$result);
	   }
	   redirect('admin/searchservice/live_demo_list');
	}
	// slides list
	public function slides(){
		$data['title'] = "Add Slides";
		$data['breadcrumb'] = array('admin/searchservice' =>'Dashboard');
		$data['select2'] = true;
        $data['datatable'] = true;
		$data['servilist'] = $this->db->get_where('sub_service',array('status'=>1))->result_array();
		$this->template->load('admin/searchservice','add_slides',$data);
	}
	public function insert_slides()
{
    $data = $this->input->post();
    $upload_path = './assets/uploads/live_demo/';	
	$allowed_types = 'gif|jpg|jpeg|png|pdf|GIF|JPG|JPEG|PNG|PDF';
	$image_paths = [];

	if (!empty($_FILES['images']['name'][0])) {
		$files = $_FILES['images'];
		$count = count($files['name']);

		for ($i = 0; $i < $count; $i++) {
			// Rebuild $_FILES array for single file
			$_FILES['single_photo']['name']     = $files['name'][$i];
			$_FILES['single_photo']['type']     = $files['type'][$i];
			$_FILES['single_photo']['tmp_name'] = $files['tmp_name'][$i];
			$_FILES['single_photo']['error']    = $files['error'][$i];
			$_FILES['single_photo']['size']     = $files['size'][$i];

			// Call your custom upload_file function
			$photo = upload_file("single_photo", $upload_path, $allowed_types, time() . $i);
			if (!empty($photo['path'])) {
				$image_paths[] = $photo['path'];
			}
		}
	

		// Save as JSON or comma-separated
		if (!empty($image_paths)) {
			$data['images'] = json_encode($image_paths); // You can also use implode(',', $image_paths)
		}
	}

    $insert_data = [
        'project_id'  => $data['project_id'],
        'images'      => $data['images'],
        'tech'        => json_encode($data['tech']),
        'description' => $data['description'],
        'status'      => 1,
      
    ];
   
    $result = $this->db->insert('slides', $insert_data);
   

    if ($result) {
        $this->session->set_flashdata('msg', "Project Slides Inserted.");
    } else {
        $this->session->set_flashdata('err_msg', "Error inserting record.");
    }

    redirect('admin/searchservice/slides_list');
}

public function slides_list(){
		$data['title'] = "Live Demo List";
		$data['breadcrumb'] = array('dashboard'=>'Dashboard');
		$data['datatable'] = true;
        $data['subservicelist'] =  $this->Service_model->slides_list(array('t1.status'=>1));
		
		$this->template->load('admin/searchservice','slides_list',$data);
	}
	public function edit_slides($id)
{
    $id = $this->uri->segment(4);
    $data['title'] = "Live Demo Edit";
    $data['breadcrumb'] = array('dashboard' => 'Dashboard');

    $slide = $this->db->get_where('slides', ['id' => $id, 'status' => 1])->row_array();

    if (empty($slide)) {
        $this->session->set_flashdata('err_msg', "Data not found.");
        redirect('admin/searchservice/slides_list');
    }

    $slide['images'] = json_decode($slide['images'], true); // array
    $slide['tech'] = json_decode($slide['tech'], true); // array

    $data['slide'] = $slide;
    $data['servilist'] = $this->db->get('sub_service')->result_array(); // optional: for dropdown

    $this->template->load('admin/searchservice', 'edit_slides', $data);
}
public function update_slides()
{
    $data = $this->input->post();
    $id = $data['id'];

    $upload_path = './assets/uploads/live_demo/';
    $allowed_types = 'gif|jpg|jpeg|png|pdf|GIF|JPG|JPEG|PNG|PDF';
    $image_paths = [];

    // Handle new uploads only if selected
    if (!empty($_FILES['images']['name'][0])) {
        $files = $_FILES['images'];
        $count = count($files['name']);

        for ($i = 0; $i < $count; $i++) {
            $_FILES['single_photo']['name']     = $files['name'][$i];
            $_FILES['single_photo']['type']     = $files['type'][$i];
            $_FILES['single_photo']['tmp_name'] = $files['tmp_name'][$i];
            $_FILES['single_photo']['error']    = $files['error'][$i];
            $_FILES['single_photo']['size']     = $files['size'][$i];

            $photo = upload_file("single_photo", $upload_path, $allowed_types, time() . $i);
            if (!empty($photo['path'])) {
                $image_paths[] = $photo['path'];
            }
        }
    }

    // Prepare update data
    $update_data = [
        'project_id'  => $data['project_id'],
        'tech'        => json_encode($data['tech']),
        'description' => $data['description'],
        'updated_at'  => date('Y-m-d H:i:s')
    ];

    // Only add image field if new images are uploaded
    if (!empty($image_paths)) {
        $update_data['images'] = json_encode($image_paths);
    }

    // Perform update
    $this->db->where('id', $id);
    $result = $this->db->update('slides', $update_data);

    if ($result) {
        $this->session->set_flashdata('msg', "Slide updated successfully.");
    } else {
        $this->session->set_flashdata('err_msg', "Update failed.");
    }

    redirect('admin/searchservice/slides_list');
}

	public function delete_slides($id){
		$id = $this->uri->segment('4');
	    $result= $this->Staff_model->delete_slides($id);
	    if($result === true){
	    $this->session->set_flashdata('msg',"Delete live demo members.");
	   }
	   else{
	  $this->session->set_flashdata('err_msg',$result);
	   }
	   redirect('admin/searchservice/slides_list');
	}
	
}	 
