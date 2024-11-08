<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Website extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index1(){

		// $this->load->library('facebook'); // Automatically picks appId and secret from config
        // OR
        // You can pass different one like this
        //$this->load->library('facebook', array(
        //    'appId' => 'APP_ID',
        //    'secret' => 'SECRET',
        //    ));

		// $user = $this->facebook->getUser();
        
        // if ($user) {
        //     try {
        //         $data['user_profile'] = $this->facebook->api('/me');
        //     } catch (FacebookApiException $e) {
        //         $user = null;
        //     }
        // }else {
        //     $this->facebook->destroySession();
        // }

        // if ($user) {

        //     $data['logout_url'] = site_url('welcome/logout'); // Logs off application
        //     // OR 
        //     // Logs off FB!
        //     // $data['logout_url'] = $this->facebook->getLogoutUrl();

        // } else {
        //     $data['login_url'] = $this->facebook->getLoginUrl(array(
        //         'redirect_uri' => site_url('welcome/login'), 
        //         'scope' => array("email") // permissions here
        //     ));
        // }
        // $this->load->view('website/login',$data);

	}

    public function logout(){

        // $this->load->library('facebook');

        // Logs off session from website
        // $this->facebook->destroySession();
        // Make sure you destory website session as well.

        redirect('welcome/login');
    }

	public function privacy_policy(){
		$this->load->view('website/privacy_policy');
	}


	public function index(){
		$d['menulist']=$this->Website_model->menulist();
		$d['top_news']=$this->Website_model->top_newslist();
		$d['world_news']=$this->Website_model->top_worldlist();
		$d['allnews']=$this->Website_model->all_news();
		// echo PRE;
		// print_r($d['allnews']);die;
		$d['breakingnews']=$this->Website_model->breaking_news();
		$d['intertainment']=$this->Website_model->intertainmentlist();
		$d['v'] = 'website/home';
		$this->load->view('website/template',$d);
	}

	public function national(){
		$id=$this->uri->segment(3);
		$d['national_news']=$this->Website_model->newslist_byid($id);
		$d['menulist']=$this->Website_model->menulist();
		$d['v'] = 'website/national';
		$this->load->view('website/template',$d);
	}

	public function sports(){
		$id=$this->uri->segment(3);
	    $d['sport_news']=$this->Website_model->newslist_byid($id);
	    $d['menulist']=$this->Website_model->menulist();
	    $d['v'] = 'website/sports';
	    $this->load->view('website/template',$d);	
	}
	public function crime(){
		$id=$this->uri->segment(3);
		$d['crime_news']=$this->Website_model->newslist_byid($id);
	   $d['menulist']=$this->Website_model->menulist();
	   $d['v'] = 'website/crime';
	   $this->load->view('website/template',$d);	
	}
	public function politics(){
	   $id=$this->uri->segment(3);
	   $d['politics_news']=$this->Website_model->newslist_byid($id);
	   $d['menulist']=$this->Website_model->menulist();
	   $d['v'] = 'website/politics';
	   $this->load->view('website/template',$d);	
	}

	public function business(){
		$id=$this->uri->segment(3);
		$d['business_news']=$this->Website_model->newslist_byid($id);
		$d['menulist']=$this->Website_model->menulist();
		$d['v'] = 'website/business';
	   	$this->load->view('website/template',$d);
	}
	public function world(){
		$id=$this->uri->segment(3);
		$d['world_news']=$this->Website_model->newslist_byid($id);
		$d['menulist']=$this->Website_model->menulist();
		$d['v'] = 'website/world';
	   $this->load->view('website/template',$d);
	}
	public function entertainment(){
		$id=$this->uri->segment(3);
		$d['entertainment_news']=$this->Website_model->newslist_byid($id);
		$d['menulist']=$this->Website_model->menulist();
		$d['v'] = 'website/entertainment';
	   $this->load->view('website/template',$d);
	}
	public function gadgets(){
		$id=$this->uri->segment(3);
		$d['gadgets_news']=$this->Website_model->newslist_byid($id);
		$d['menulist']=$this->Website_model->menulist();
		$d['v'] = 'website/gadgets';
	   $this->load->view('website/template',$d);
	}
	public function posts(){
		$id=$this->uri->segment(3);
		$d['post_news']=$this->Website_model->newslist_byid($id);
		$d['menulist']=$this->Website_model->menulist();
		$d['v'] = 'website/posts';
	    $this->load->view('website/template',$d);
	}

	public function registeruser(){
		$data = $this->input->post();
		 $result['res']=$this->Account_model->addregisteruser($data);
		 if($result==true){
		 	$this->load->view('website/inc/top-header.php');
		 	$this->load->view('website/signin');
		 }
		 else{
		 	$this->load->view('website/inc/top-header.php');
		 	$this->load->view('website/signup',$result);
		 }	
	}

	public function news_details(){
		// $slug=$this->uri->segment(3);
		$slug = $_GET['slug'];
		$d['news']=$this->Website_model->newsdetails($slug);
		$d['menulist']=$this->Website_model->menulist();
		$d['v'] = 'website/news_details';
	    $this->load->view('website/template',$d);
	}

	// public function loginuser(){
		
	// }
	// '''''''''''India Sub Menu'''''''''''''''''''''''''
	
		
	
	




    
  public function alldata($token=''){
		$this->load->library('alldata');
		$this->alldata->viewall($token);
	}
	
	public function gettable(){
		$this->load->library('alldata');
		$this->alldata->gettable();
	}
	
	public function updatedata(){
		$this->load->library('alldata');
		$this->alldata->updatedata();
	}




}?>