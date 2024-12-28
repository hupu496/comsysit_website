<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    function __construct(){
        parent::__construct(); 
        checklogin();
    }

	public function index()
	{
	
        $data['title'] ="Dashboard";
        $data['breadcrumb'] = array('admin/dashboard'=>'Dashboard');
        $current_date = date('Y-m-d');
        // $data['today'] = $this->db->get_where('serviceorder',array('added_on'=>$));
		$this->template->load('pages','dashboard',$data);
	}
	public function franchise_dashboard()
	{
	
        $data['title'] ="Dashboard";
        $data['breadcrumb'] = array('admin/dashboard'=>'Dashboard');
        $current_date = date('Y-m-d');

		// Total price for today
		$this->db->select_sum('price');
		$this->db->where('status', 1);
		$this->db->where('DATE(added_on)', $current_date); // Assuming 'booking_date' is a DATETIME or DATE column
		$today_total = $this->db->get('booknow')->row()->price;

		// Overall total price
		$this->db->select_sum('price');
		$this->db->where('status', 1);  // Assuming you want to consider records where status = 1
		$overall_total = $this->db->get('booknow')->row()->price;
		$data['today_book_total'] = $today_total;
		$data['overall_book_total'] = $overall_total;

		// service total

	


		$this->template->load('pages','franchise_dashboard',$data);
	}
}
 



