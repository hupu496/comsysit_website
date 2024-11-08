<?php
class Website_model extends CI_Model{
	
	function __construct(){
		parent::__construct(); 
		$this->db->db_debug = false;
	}

	public function menulist(){
		$qry = $this->db->get('tmp_menu');
		return $qry->result_array();
	}

	public function newslist_byid($id){
		$this->db->where(['menu_id'=>$id,'published'=>1]);
		$this->db->order_by('id','desc');
		$qry = $this->db->get('tmp_news');
		return $qry->result_array();
	}

	public function newsdetails($slug){
		$this->db->where('slug',$slug);
		$qry = $this->db->get('tmp_news');
		return $qry->row_array();

	}

	public function all_news(){



		$this->db->where(['t1.published'=>1]);
		$this->db->order_by('t1.id','desc');
		$this->db->select('t1.*,t2.menu_name');
		$this->db->from('tmp_news t1');
		$this->db->join('tmp_menu t2','t1.menu_id=t2.id','left');
		$qry = $this->db->get();
		return $qry->result_array();
	}

	public function top_newslist(){
		$this->db->where(['top_news_status'=>1,'published'=>1]);
		$this->db->order_by('id','desc');
		$qry = $this->db->get('tmp_news');
		return $qry->result_array();
	}

	public function top_worldlist(){
		$this->db->where(['menu_id'=>7,'published'=>1]);
		$this->db->order_by('id','desc');
		$qry = $this->db->get('tmp_news');
		return $qry->result_array();
	}
	public function intertainmentlist(){
		$this->db->where(['menu_id'=>8,'published'=>1]);
		$this->db->order_by('id','desc');
		$qry = $this->db->get('tmp_news');
		return $qry->result_array();
	}
	public function breaking_news(){
		$this->db->where(['t1.top_news_status'=>1,'t1.published'=>1]);
		$this->db->order_by('t1.id','desc');
		$this->db->select('t1.*,t2.menu_name');
		$this->db->from('tmp_news t1');
		$this->db->join('tmp_menu t2','t1.menu_id=t2.id','left');
		$qry = $this->db->get();
		return $qry->result_array();


		// $this->db->where(['breaking_news_status'=>1,'published'=>1]);
		// $this->db->order_by('id','desc');
		// $qry = $this->db->get('tmp_news');
		// return $qry->result_array();
	}

}?>