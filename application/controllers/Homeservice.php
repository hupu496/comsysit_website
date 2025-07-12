<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once FCPATH . 'vendor/autoload.php';
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Label\Alignment\LabelAlignmentCenter;


	
class Homeservice extends CI_Controller {

	function __construct(){
	   parent::__construct();
	   //$this->load->model('Homeservice_model');
	  // $this->load->library('paging');
	   $this->perPage = 15;	
	}
	public function qrcode($data)
	{
				
				$this->load->library('ciqrcode');
		
				
				$hex_data   = bin2hex($data);
				$save_name  = time() . '.png';
		
			
				$dir = 'assets/qrcode/';
				if (!file_exists($dir)) {
					mkdir($dir, 0775, true);
				}
				
				$config['cacheable']    = true;
				$config['imagedir']     = $dir;
				$config['quality']      = true;
				$config['size']         = '1020';
				$config['black']        = array(255, 255, 255);
				$config['white']        = array(255, 255, 255);
				$this->ciqrcode->initialize($config);
		
				
				$params['data']     = $data;
				$params['level']    = 'L';
				$params['size']     = 10;
				$params['savename'] = FCPATH . $config['imagedir'] . $save_name;
				$this->ciqrcode->generate($params);
			
				$return = array(
					'content' => $data,
					'file'    => $dir.$save_name
				);
				return $return;
			}
	
	public function index()
	{   $data['services'] = $this->db->get_where('services',array('status'=>1))->result_array();
	    $data['sub_service'] = $this->db->get_where('sub_service',array('status'=>1))->result_array();
	    $data['blog'] = $this->db->get_where('blog',array('status'=>1))->result_array();
		$data['faqs'] = $this->db->get_where('faqs',array('status'=>1))->result_array();
		$data['testimonial'] = $this->db->get_where('testimonial',array('status'=>1))->result_array();
		$data['title']="Home";
		$this->load->view('website/top-section',$data);
		$this->load->view('website/index',$data);
        $this->load->view('website/footer');
	}
	public function profile()
	{
		$data['title']="Profile";
		$this->load->view('website/top-section',$data);
		$data['blog'] = $this->db->get_where('blog',array('status'=>1))->result_array();
		$this->load->view('website/profile',$data);
        $this->load->view('website/footer');
       
	}
	public function contact()
	{
		$data['title']="Contact Us";
		$data['service'] = $this->db->get_where('services',array('status'=>1))->result_array();
		$this->load->view('website/top-section',$data);
		$this->load->view('website/contact',$data);
        $this->load->view('website/footer');
       
	}
	public function service()
	{
		$id = $this->uri->segment('3');
		$data['id'] = $id;
	    $data['title']="Services";
        $this->load->view('website/top-section',$data);
		$where = array('t2.id'=>$id);
		$data['subservice'] = $this->Homeservice_model->subservice($where);
		$data['service'] = $this->db->get_where('services',array('id'=>$id, 'status'=>1))->row_array();
		$this->load->view('website/services',$data);
        $this->load->view('website/footer');
    }
       
    public function service_form()
	{
        $id = $this->input->post();
	    $data['title']="Service Form";
        $this->load->view('website/top-section',$data);
        $this->load->view('website/main-menu');
        $data['subservice'] = $this->db->get_where('sub_service',array('service_id'=>$id['id'],'status'=>1))->result_array();
        $data['service'] = $this->db->get_where('services',array('id'=>$id['id'],'status'=>1))->row_array();
		$this->load->view('website/service_form',$data);
        $this->load->view('website/footer');
        $this->load->view('website/bottom-script');
		    $this->load->view('website/bottom-section');
    }
	public function serviceorder(){
		$data = $this->input->post();
		$data['added_on'] = date('y-m-d');
	
		$query = $this->db->insert('serviceorder',$data);
	if ($query) {
        echo json_encode(["status" => "success", "message" => "Service Order successfully!"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Service Order failed"]);
    }
    exit;

	}
	public function troublshooting(){
		$data['title']="TroubleShooting";
		$data['trouble'] = $this->Service_model->troubleshoot(array('t1.status'=>1),'all');
		$this->load->view('website/top-section',$data);
		$this->load->view('website/troubleshooting',$data);
        $this->load->view('website/footer');
      
	}
	public function manual(){
		$data['title']="Manual";
		$data['trouble'] = $this->db->get_where('sub_service',array('status'=>1))->result_array();
		$this->load->view('website/top-section',$data);
		$this->load->view('website/manual',$data);
        $this->load->view('website/footer');
      
	}
	public function need_help(){
		$data['title']="Need & Help";
		$data['faqs'] = $this->db->get_where('need_help',array('status'=>1))->result_array();
		$this->load->view('website/top-section',$data);
		$this->load->view('website/need_help',$data);
        $this->load->view('website/footer');
      
	}
	public function slides(){
		$data['title']="Slides";
		$data['trouble'] = $this->Service_model->troubleshoot(array('t1.status'=>1),'all');
		$data['faqs'] = $this->db->get_where('faqs',array('status'=>1))->result_array();
		$this->load->view('website/top-section',$data);
		$this->load->view('website/slides',$data);
        $this->load->view('website/footer');
      
	}
	public function live_demo(){
		$data['title']="Live Demo";
		$data['live_demo'] = $this->db->get_where('live_demo',array('status'=>1))->result_array();
		$this->load->view('website/top-section',$data);
		$this->load->view('website/live_demo',$data);
        $this->load->view('website/footer');
      
	}
	public function request_demo(){
	$data = $this->input->post();
    $data['added_on'] = date('Y-m-d');

    $query = $this->db->insert('request_demo', $data);

    if ($query) {
        echo json_encode(["status" => "success", "message" => "Meeting saved successfully!"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Meeting save failed"]);
    }
    exit;
		
	}
    // ///////////////////
	
	public function privacy_policy()
	{
		$data['title']="term condition";
		$this->load->view('website/top-section',$data);
        $this->load->view('website/main-menu');
		$this->load->view('website/privacy_policy');
        $this->load->view('website/footer');
        $this->load->view('website/bottom-script');
		$this->load->view('website/bottom-section');
	}
	public function term_condition()
	{
		$data['title']="term condition";
		$this->load->view('website/top-section',$data);
        $this->load->view('website/main-menu');
		$this->load->view('website/refund_policy');
        $this->load->view('website/footer');
        $this->load->view('website/bottom-script');
		$this->load->view('website/bottom-section');
	}
	public function meeting() {
    $data = $this->input->post();
    $data['added_on'] = date('Y-m-d');

    $query = $this->db->insert('meeting', $data);

    if ($query) {
        echo json_encode(["status" => "success", "message" => "Meeting saved successfully!"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Meeting save failed"]);
    }
    exit;
}
    public function contactsave(){
		$data = $this->input->post();
		$data['added_on'] = date('Y-m-d');
		$query = $this->db->insert('contact_us',$data);
		if($query){
			$this->session->set_flashdata("web_msg","Contact Save Successfully!!");
		}
		else{
			$this->session->set_flashdata('web_err_msg', "Contact Save failed ");
		}
		redirect('contact');
  }
  public function blog()
	{
	
		$data['title']="Blog";
		$this->load->view('website/top-section',$data);
		$data['blog'] = $this->db->get_where('blog',array('status'=>1))->result_array();
		$this->load->view('website/blog',$data);
        $this->load->view('website/footer');
       
	}
	public function our_team()
	{
		$data['title']="Our Team";
		$this->load->view('website/top-section',$data);
		$data['our_team']= $this->db->get_where('our_team',array('status'=>1))->result_array();
		$this->load->view('website/our_team',$data);
        $this->load->view('website/footer');
       
	}
	public function blog_description()
	{         
		$data['title']="Blog Description";
		$id = $this->uri->segment('3');
		$data['service'] = $this->db->get_where('services',array('status'=>1))->result_array();
		$data['blog_description'] = $this->db->get_where('blog',array('status'=>1,'id'=>$id))->row_array();
		$this->load->view('website/top-section',$data);
		$this->load->view('website/blog_description',$data);
        $this->load->view('website/footer');
       
	}
    
}
