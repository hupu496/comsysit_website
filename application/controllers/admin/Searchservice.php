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
		$data['title'] = "Add Sub service";
		$data['breadcrumb'] = array('admin/searchservice' =>'Dashboard');
		$servilist = $this->Homeservice_model->get_servicewebsite(array('status'=>1),'all');
		$data['servilist'] = $servilist;
		$this->template->load('admin/searchservice','sub_service',$data);
	}
	public function add_blog(){
		$data['title'] = "Add Blog";
		$data['breadcrumb'] = array('admin/searchservice' =>'Dashboard');
		$data['select2'] = true;
        $data['datatable'] = true;
        $data['ckeditor'] = true;
        $data['switchery'] = true;
		$this->template->load('admin/searchservice','add_blog',$data);
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
		$data['title'] = "Sub Service list";
		$data['breadcrumb'] = array('dashboard'=>'Dashboard');
		$data['datatable'] = true;
        $subservicelist= $this->Search_model->sub_servicelist();
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
	 	$result=$this->db->update('sub_service',array('service_id'=>$data['service_id'],'sub_service'=>$data['sub_service'],'Description'=>$data['Description'],'proj_images'=>$data['proj_images']),$where);

	 }else{
	 	$result=$this->db->update('sub_service',array('service_id'=>$data['service_id'],'sub_service'=>$data['sub_service'],'Description'=>$data['Description']),$where);
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
}	 
