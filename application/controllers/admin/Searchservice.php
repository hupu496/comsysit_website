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
		if(empty($subservicelist)){
			$this->session->set_flashdata('msg',"data not Found.");
			redirect($_SERVER['HTTP_REFERER']);
		}
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
		if(empty($subservicelist)){
			$this->session->set_flashdata('msg',"data not Found.");
			redirect($_SERVER['HTTP_REFERER']);
		}
		$data['subservicelist'] = $subservicelist;
		$this->template->load('admin/searchservice','blog_list',$data);
	}
	public function edit_blog($id){
		$id = $this->uri->segment('4');
		$data['title'] = "Sub Blog Edit";
		$data['breadcrumb'] = array('dashboard'=>'Dashboard');
		$data['datatable'] = true;
        $subservicelist= $this->db->get_where('blog',array('id'=>$id))->row_array();
		if(empty($subservicelist)){
			$this->session->set_flashdata('msg',"data not Found.");
			redirect($_SERVER['HTTP_REFERER']);
		}
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
	 if($_FILES['photos']['name'] !=''){
	 	$result=$this->db->update('blog',array('id'=>$data['id'],'name'=>$data['name'],'Description'=>$data['Description'],'photos'=>$data['photos']),$where);

	 }else{
	 	$result=$this->db->update('blog',array('id'=>$data['id'],'name'=>$data['name'],'Description'=>$data['Description']),$where);
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
}	 
