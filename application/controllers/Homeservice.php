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
	{
		$data['title']="Home";
		$this->load->view('website/top-section',$data);
		$this->load->view('website/index',$data);
        $this->load->view('website/footer');
	}
	public function profile()
	{
		$data['title']="Profile";
		$this->load->view('website/top-section',$data);
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
      
        $data['service'] = $this->db->get_where('services',array('status'=>1))->result_array();
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
	public function refund_policy()
	{
		    $data['title']="term condition";
		    $this->load->view('website/top-section',$data);
        $this->load->view('website/main-menu');
		    $this->load->view('website/refund_policy');
        $this->load->view('website/footer');
        $this->load->view('website/bottom-script');
		    $this->load->view('website/bottom-section');
	}
  public function contactsave(){
  	$data = $this->input->post();
  	$query = $this->db->insert('contact_us',$data);
  	
  	if($query){
  		 $this->session->set_flashdata("web_msg","Contact Save Successfully!!");
  	}
  	else{
  		 $this->session->set_flashdata('web_err_msg', "Contact Save failed ");
  	}
  	 redirect('contact');
  }
    
}
