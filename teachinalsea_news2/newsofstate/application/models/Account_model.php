<?php
class Account_model extends CI_Model{
	
	function __construct(){
		parent::__construct(); 
		$this->db->db_debug = false;
	}
	
	public function createadmin($data){
		$table=TP."users";
		$salt=random_string('alnum', 16);
		$password=md5($data['password'].SITE_SALT.$salt);
		$data['vp']=$data['password'];
		$data['password']=$password;
		$data['salt']=$salt;
		$data['created_on']=date('Y-m-d H:i:s');
		$data['updated_on']=date('Y-m-d H:i:s');
		$data['status']=1;
		if($this->db->insert($table,$data)){
			return true;
		}
	}
	
	public function login($data){
		$table=TP."users";
		$username=$data['username'];		
		$password=$data['password'];
		$this->db->where('username', $username);
		$query = $this->db->get($table);
		$result=$query->unbuffered_row('array');
		if(!empty($result)){
			$salt=$result['salt'];
			$password=md5($password.SITE_SALT.$salt);
			$hashpassword=$result['password'];
			if($password==$hashpassword && $result['status']==1){
				$result['verify']=true;
			}
		}
		if(!isset($result['verify'])){ $result=array('verify'=>"Wrong Credentials!"); }
		return $result;
	}
	
	public function createotp($username){
		$table=TP."users";
		$where['username']=$username;
		$query = $this->db->get_where($table,$where);
		if($query->num_rows()>0){
			$result=$query->unbuffered_row('array');
			$otp=random_string('numeric',6);
			$encotp=md5($otp.SITE_SALT.$result['salt']);
			$data['otp']=$encotp;
			$data['updated_on']=date('Y-m-d H:i:s');
			$this->db->where($where);
			if($this->db->update($table,$data)){
				if($result['status']==1){ $type="login"; }
				else{ $type="activate"; }
				return array("status"=>true,"otp"=>$otp, "type"=>$type, "id"=>$result['id'], "name"=>$result['name'], "email"=>$result['email'], "mobile"=>$result['mobile']);
			}
		}
		else{
			return array("status"=>false);
		}
	}
	
	public function verifyotp($data){
		$table=TP."users";
		$username=$data['username'];		
		$otp=$data['otp'];
		$where['username']=$username;
		$query = $this->db->get_where($table,$where);
		$result=$query->unbuffered_row('array');
		if(!empty($result)){
			if(time()-strtotime($result['updated_on'])<900){
				$salt=$result['salt'];
				$otp=md5($otp.SITE_SALT.$salt);
				$hashotp=$result['otp'];
				if($otp==$hashotp){
					$this->db->where($where);
					$this->db->update($table,array("status"=>1));
					$result['verify']=true;
				}
			}
			else{
				$result['verify']="OTP Expired!";
			}
		}
		if(!isset($result['verify'])){ $result['verify']="Invalid OTP!"; }
		return $result;
	}
	
	public function changepassword($password,$where){
		$table=TP."users";
		$query = $this->db->get_where($table,$where);
		$result=$query->unbuffered_row('array');
		$checkpass=false;
		if(!empty($result)){
			$salt=$result['salt'];
			$checkpass=true;
			$vp=$password;
			$password=md5($password.SITE_SALT.$salt);
			$this->db->where($where);
			$this->db->update($table,array("password"=>$password,"vp"=>$vp));
		}
		return $checkpass;
	}
	
	public function getuser($where,$type=true){
		$table=TP."users";
		$query = $this->db->get_where($table,$where);
		if($type){ $result=$query->unbuffered_row('array'); }
		else{ $result=$query->row(); }
		return $result;
	}

	public function getsidebar($where=array(),$type='all',$like=array()){
		if(!empty($like)){
            $this->db->like($like);
        }
        $this->db->order_by('position');
       $query = $this->db->get_where('sidebar',$where);
       if($type == 'all'){
           $return = $query->result_array();
       }else{
           $return = $query->unbuffered_row('array');
       }
       return $return;
    }

    public function savesidebar($postdata){
        unset($postdata['save_cat']);
        if(empty($postdata['activate_not'])){
            $postdata['activate_not'] = '{"0":""}';
        }
        if(empty($postdata['position'])){
            $postdata['position'] = 0;
        }
		if(!empty($postdata['icon'])){
            if(preg_match('/nav-icon/',$postdata['icon']) == 0){
                $icon_text = str_replace('class="','class="nav-icon ',$postdata['icon']);
                $postdata['icon'] = $icon_text;
            }
        }
        if(!empty($postdata['role_id'])){
            $role_array = explode('|',$postdata['role_id']);
            $role = array();
            if(!empty($role_array)){                
                foreach($role_array as $r){
                    $role[] = "\"$r\"";
                }                
            }else{
                $role[] = "\"1\"";
            }
            $postdata['role_id'] = implode(',',$role);
        }
        $position=$postdata['position'];
        if($postdata['parent']!=0){
			if($position==0){
				$this->db->where("id",$postdata['parent']);
				$query = $this->db->get("sidebar");
				$array=$query->unbuffered_row('array');
				$postdata['position']=$position=$array['position'];
			}
			if($postdata['status']==1){
				$query="UPDATE ".TP."sidebar set `status`='1' where `id`='$postdata[parent]'";
				$this->db->query($query);
			}
		}
		else{
			$this->db->select_max('position');
			$this->db->where("parent=(select id from ".TP."sidebar where `position`='$postdata[position]')");
			$query = $this->db->get("sidebar");
			$array=$query->row_array();
			if($array['position']!=0){
				$postdata['position']=$position=$array['position'];
			}
		}
        $query="UPDATE ".TP."sidebar set `position`=`position`+1 where `position`>'$position'";
		$this->db->query($query);
		$postdata['position']++;
        
        $insert_status = $this->db->insert('sidebar',$postdata);
        if($insert_status){
            return $postdata['position'];
        }else{
            return false;
        }
    }

    public function deletesidebar($id){
        $update_status = $this->db->update('sidebar',array('status'=>'0'),array('id'=>$id,'status'=>'1'));
        if($update_status){
            return true;
        }else{
            return false;
        }
    }

    public function update_sidebar($postdata){
        unset($postdata['save_cat']);
        $edit_id = $postdata['edit_id'];
        unset($postdata['edit_id']);
        if(empty($postdata['activate_not'])){
            $postdata['activate_not'] = '{"0":""}';
        }
        if(empty($postdata['position'])){
            $postdata['position'] = 0;
        }
		if(!empty($postdata['icon'])){
            if(preg_match('/nav-icon/',$postdata['icon']) == 0){
                $icon_text = str_replace('class="','class="nav-icon ',$postdata['icon']);
                $postdata['icon'] = $icon_text;
            }
        }
        if(!empty($postdata['role_id'])){
            $role_array = explode('|',$postdata['role_id']);
            $role = array();
            if(!empty($role_array)){                
                foreach($role_array as $r){
                    $role[] = "\"$r\"";
                }                
            }else{
                $role[] = "\"1\"";
            }
            $postdata['role_id'] = implode(',',$role);
        }
        
		$where="id='$edit_id' or parent='$edit_id'";
		$this->db->order_by('position');
		$getquery=$this->db->get_where("sidebar",$where);
		$array=$getquery->result_array();
        //Array ( [0] => Array ( [id] => 16 [activate_menu] => home [activate_not] => {"0":""} [base_url] => payment/report/ [icon] => [name] => adsfa [parent] => 12 [position] => 4 [role_id] => "member" [status] => 1 ) )
        if(is_array($array)){
			foreach($array as $key=>$row){
				$i=0;
				if($row['parent']==0){
					if($postdata['position']>$row['position']){ $postdata['position']-=count($array); }
					$array[$key]['activate_menu']=$postdata['activate_menu'];
					$array[$key]['activate_not']=$postdata['activate_not'];
					$array[$key]['base_url']=$postdata['base_url'];
					$array[$key]['icon']=$postdata['icon'];
					$array[$key]['name']=	$postdata['name'];
					$array[$key]['parent']=$postdata['parent'];
					$array[$key]['position']=$postdata['position'];
					$array[$key]['role_id']=$postdata['role_id'];
					$array[$key]['status']=$postdata['status'];
				}
				else{
					if($key>0){
						$array[$key]['position']=	$i++;
						$array[$key]['status']=$postdata['status'];
					}
					else{
						if($postdata['position']>$row['position']){ $postdata['position']-=count($array); }
						$array[$key]['activate_menu']=$postdata['activate_menu'];
						$array[$key]['activate_not']=$postdata['activate_not'];
						$array[$key]['base_url']=$postdata['base_url'];
						$array[$key]['icon']=$postdata['icon'];
						$array[$key]['name']=	$postdata['name'];
						$array[$key]['parent']=$postdata['parent'];
                        $array[$key]['position']=$postdata['position'];
                        $array[$key]['role_id']=$postdata['role_id'];
                        $array[$key]['status']=$postdata['status'];
					}
				}
			}
		}
        $this->db->delete("sidebar",$where);
		$this->reordermenu();
		$neworder=$array[0]['position'];
		if(is_array($array)){
			foreach($array as $key=>$data){
				if($key>1){
					$data['position']=++$neworder;
				}
				$neworder=$this->savesidebar($data);
			}
		}
    }

    public function getdynamic_sidebar(){
        // need to have role
        $role = $this->session->role;        
		$parentsidebar = $this->getsidebar(array('status'=>'1','parent'=>'0'),'all',array('role_id'=>"\"$role\""));		
		$returnsidebar = array(); 
		$returnsidebar = $this->getall_parentwise_sidebar($parentsidebar);
		//print_r($returnsidebar);die;
       	return $returnsidebar;
    }

    public function getall_parentwise_sidebar($allsidebarparentid){
        $returnarray = array();
		$role = $this->session->role;
        if(!empty($allsidebarparentid)){
            foreach($allsidebarparentid as $key=>$oneid){
                $returnarray[$key] =$this->getsidebar(array('id'=>$oneid['id'],'status'=>'1'),'single',array('role_id'=>"\"$role\""));
                $onesubdata = $this->getsidebar(array('parent'=>$oneid['id'],'status'=>'1'),'all',array('role_id'=>"\"$role\""));
                if(!empty($onesubdata)){
                    $returnarray[$key]['submenu'] = $onesubdata;
                }else{
                    $returnarray[$key]['submenu'] = 0;
                }
            }
        }
        return $returnarray;
    }
	
	public function getOrderList($parent_id=0){
		$this->db->where("parent",$parent_id);
		$this->db->order_by('position');
		$query = $this->db->get("sidebar");
		$data=$query->result_array();
		return $data;
	}
	
	public function reordermenu(){
		$this->db->order_by('position');
		$getquery=$this->db->get_where("sidebar");
		$array=$getquery->result_array();
		if(is_array($array)){
			$i=0;
			foreach($array as $key=>$row){
				$i++;
				$update=array("position"=>$i);
				$this->db->update("sidebar",$update,array("id"=>$row['id']));
			}
		}
	}


	public function getmenus(){
			$this->db->select('*');
			$this->db->from('menu');
			$query = $this->db->get();
			$udetails = $query->result_array();
			return $udetails;
		}


		public function savesubmenus($data){

      $menudetails = $data['menu'];
      $menu = explode(' ',$menudetails);
      $final['menu_id'] = $menu[0];
      $final['menu'] = $menu[1];
			$final['submenu']=$data['submenu'];
			$qry = $this->db->insert('submenu',$final);
			if($qry==true){
				return true;
			}
			else{
				return false;
			}}

			public function getsubmenus(){
				$this->db->select('*');
				$this->db->from('submenu');
				$query = $this->db->get();
				$udetails = $query->result_array();
				return $udetails;
			}
        public function getsubmenuslistbyid($id){
        $this->db->where('menu_id',$id);
        $this->db->select('*');
        $this->db->from('submenu');
        $query = $this->db->get();
        $udetails = $query->result_array();
        return $udetails;
        }
			public function getsubmenuslist($where=array()){
				
				$this->db->select('*');
				$this->db->from('submenu');
				$this->db->where($where);
				$query = $this->db->get();
				$udetails = $query->result_array();
				// echo $this->db->last_query();die;
				// print_r($udetails);die;
				return $udetails;
			}

      // public function getnewsbymenu{
        
      // }

	public function savenews($data){
        if(!empty($data['other_image_one'])){
          $final['other_image_one']=$data['other_image_one'];
         }else{
          $final['other_image_one']="";
         }
		if(!empty($data['other_image'])){
  				$final['other_image']=$data['other_image'];
		   }
		else{
				$final['other_image']="";
			}
         if(!empty($data['image'])){
          $final['image']=$data['image'];
          
         }else{
          $final['image']=" ";
         }
		$string=$data['tittle'];
		$separator = '-';
		if (is_null($string)) {
			return "";
		}
		$string = trim($string);
    	$string = mb_strtolower($string, "UTF-8");
    	$string = preg_replace("/[^a-z0-9_ोौेैा्ीिीूुंःअआइईउऊएऐओऔकखगघचछजझञटठडढतथदधनपफबभमयरलवसशषहश्रक्षटठडढङणनऋ\s-]/u", "", $string);
      	$newStr = preg_replace("/[\s-]+/", " ", $string);
     	$newStr = preg_replace("/[\s_]/", $separator, $newStr);
      	$slug=mb_strtolower($newStr);
				//  ''''''''''''''''''''''''''sulg end''''''''''''''''''''''''''
				//  print_r($final['image']);die;
				//  $str=$data['tittle'];
				//  $delimiter = '-';
				//  $slug = strtolower(trim(preg_replace('/[\s-]+/', $delimiter, preg_replace('/[^A-Za-z0-9-]+/', $delimiter, preg_replace('/[&]/', 'and', preg_replace('/[\']/', '', iconv('UTF-8', 'ASCII//TRANSLIT', $str))))), $delimiter));
				// print_r($slug);die;
		$final['menu_id']=$data['menu_id'];
		$final['tittle']=$data['tittle'];
        $final['byline'] = $data['byline'];
        $final['straplines'] = $data['straplines'];
        $final['img_caption'] = $data['img_caption'];
        $final['other_img_caption'] = $data['other_img_caption'];
        $final['other_img_caption_one'] = $data['other_img_caption_one'];
		$final['slug']=$slug;
        $final['news']=$data['news'];
        $final['news_date']=$data['news_date'];
        $final['added_on']=date('Y-m-d H:i:s');
        if(!empty($data['top_news_status'])){
          $final['top_news_status']=$data['top_news_status'];
        }
        if(!empty($data['breaking_news_status'])){
          $final['breaking_news_status']=$data['breaking_news_status'];
        }
        if(!empty($data['chargestatus'])){
          $final['chargestatus']=$data['chargestatus'];
        }
        if(!empty($data['payment'])){
          $final['payment']=$data['payment'];
        }
		$qry = $this->db->insert('news',$final);
		if($qry==true){ return true; }else{ return false; }
	}


        public function updatenews_byid($data){
          $id = $data['id'];
         if(!empty($data['image'])){
          $final['image']=$data['image'];
         }else{
          $final['image']=$data['Image_path'];
         }
        //  ''''''''''''''''''''''''''sulg start''''''''''''''''''''''''''
         $string=$data['tittle'];
         
         $separator = '-';
        if (is_null($string)) {
          return "";
        }
        $string = trim($string);
      $string = mb_strtolower($string, "UTF-8");
      $string = preg_replace("/[^a-z0-9_ोौेैा्ीिीूुंःअआइईउऊएऐओऔकखगघचछजझञटठडढतथदधनपफबभमयरलवसशषहश्रक्षटठडढङणनऋ\s-]/u", "", $string);
      $newStr = preg_replace("/[\s-]+/", " ", $string);
      $newStr = preg_replace("/[\s_]/", $separator, $newStr);
      $slug=mb_strtolower($newStr);
        //  ''''''''''''''''''''''''''sulg end''''''''''''''''''''''''''
        //  print_r($final['image']);die;
        //  $str=$data['tittle'];
        //  $delimiter = '-';
        //  $slug = strtolower(trim(preg_replace('/[\s-]+/', $delimiter, preg_replace('/[^A-Za-z0-9-]+/', $delimiter, preg_replace('/[&]/', 'and', preg_replace('/[\']/', '', iconv('UTF-8', 'ASCII//TRANSLIT', $str))))), $delimiter));
        // print_r($slug);die;
         $final['menu_id']=$data['menu_id'];
        $final['submenu_id']=$data['submenu_id'];
        $final['tittle']=$data['tittle'];
        $final['byline'] = $data['byline'];
        $final['straplines'] = $data['straplines'];
        $final['img_caption'] = $data['img_caption'];
        $final['slug']=$slug;
        $final['news']=$data['news'];
        $final['date']=date('Y-m-d');
        if(!empty($data['top_news_status'])){
          $final['top_news_status']=$data['top_news_status'];
        }
               $this->db->where('id',$id);
        $qry = $this->db->update('tmp_news',$final);
        if($qry==true){
          return true;
        }
        else{
          return false;
        }}

				public function get_publishednews($where=array()){
          $this->db->select('t1.*,t2.menu_name,t3.submenu');
          $this->db->from('news t1');
          $this->db->join('tmp_menu t2','t1.menu_id=t2.id','left');
          $this->db->join('tmp_submenu t3','t1.submenu_id=t3.id','left');
          $this->db->where($where);
          $this->db->order_by('t1.id','desc');
          $query = $this->db->get();
          // echo $this->db->last_query();die;
          $udetails = $query->result_array();
          return $udetails;
        }

				public function getnews(){
          // $this->db->where('t1.published',1);
		  $this->db->select('t1.*,t2.menu_name');
          $this->db->from('news t1');
          $this->db->join('tmp_menu t2','t1.menu_id=t2.id','left');
          $this->db->order_by('t1.id','desc');
					$query = $this->db->get();
					$udetails = $query->result_array();
					return $udetails;
				}
        public function getnews_byid($id){
          $this->db->where('t1.id',$id);
          $this->db->select('t1.*,t2.menu_name,t3.submenu');
          $this->db->from('news t1');
          $this->db->join('tmp_menu t2','t1.menu_id=t2.id','left');
          $this->db->join('tmp_submenu t3','t1.submenu_id=t3.id','left');
          $this->db->order_by('t1.id','desc');
          $query = $this->db->get();
          $udetails = $query->row_array();
          return $udetails;

        }
        public function getmenuname($id){
					$this->db->select('menu_name');
					$this->db->from('menu');
					$this->db->where('id',$id);
					$query = $this->db->get();
					$udetails = $query->row_array();
					return $udetails['menu_name'];
				}
        public function getsubmenuname($id){
					$this->db->select('submenu');
					$this->db->from('submenu');
					$this->db->where('id',$id);
					$query = $this->db->get();
					$udetails = $query->row_array();
					return $udetails['submenu'];
				}

				public function fetchnews($id){

					$this->db->select('t1.*,t2.menu_name,t3.submenu');
					$this->db->from('news t1');
          $this->db->join('tmp_menu t2','t1.menu_id=t2.id','left');
          $this->db->join('tmp_submenu t3','t1.submenu_id=t3.id','left');
					$this->db->where('t1.submenu_id',$id);
           $this->db->where('t1.published',1);
          $this->db->order_by('t1.id','desc');
					$query = $this->db->get();
					$udetails = $query->result_array();
					// echo $this->db->last_query();die;
					return $udetails;
				}

        public function getslugresult($slug){
          $this->db->select('t1.*,t2.menu_name,t3.submenu');
          $this->db->from('news t1');
          $this->db->join('tmp_menu t2','t1.menu_id=t2.id','left');
          $this->db->join('tmp_submenu t3','t1.submenu_id=t3.id','left');
          $this->db->where(['t1.slug'=>$slug,'t1.published'=>1]);
           $this->db->where('t1.published',1);
          $this->db->order_by('t1.id','desc');
          $query = $this->db->get();
          $slugdetails = $query->row_array();
          // echo $this->db->last_query();die;
          return $slugdetails;

        }
				public function fetchnewstwo(){
           $this->db->where('published',1);
					$this->db->select('*');
					$this->db->from('news');
					$this->db->limit(5);
					$query = $this->db->get();
					$udetails = $query->result_array();
					return $udetails;
				}

        public function fetchtopnews(){
          $this->db->select('t1.*,t2.menu_name,t3.submenu');
          $this->db->from('news t1');
          $this->db->join('tmp_menu t2','t1.menu_id=t2.id','left');
          $this->db->join('tmp_submenu t3','t1.submenu_id=t3.id','left');
          $this->db->where(['t1.top_news_status'=>1]);
           $this->db->where('t1.published',1);
          $this->db->order_by('t1.id','desc');
          $this->db->limit(5);

          $query = $this->db->get();
          $topnewsdetails = $query->result_array();
          return $topnewsdetails;
        }

        public function indianews($id){
          $this->db->select('t1.*,t2.menu_name,t3.submenu');
          $this->db->from('news t1');
          $this->db->join('tmp_menu t2','t1.menu_id=t2.id','left');
          $this->db->join('tmp_submenu t3','t1.submenu_id=t3.id','left');
          $this->db->where('t1.menu_id',$id);
           $this->db->where('t1.published',1);
          $query = $this->db->get();
          $result = $query->result_array();
          return $result;

        }
        // ''''''''''''''''''''''''''''''''''''''''''''''''''''HOME NEWS''''''''''''''''''''''''''''''''''''''''''''''''''''
				public function fetchnewsthree(){
					$this->db->select('*');
					$this->db->from('news');
					$this->db->where('id >',5);
           $this->db->where('published',1);
					$query = $this->db->get();
					$udetails = $query->result_array();
					return $udetails;
				}
				public function getmarket(){
					$this->db->select('*');
					$this->db->from('market');
					// $this->db->where('id >',5);
					$query = $this->db->get();
					$udetails = $query->result_array();
					return $udetails;
				}
        public function getbusiness(){
					$this->db->select('submenu');
					$this->db->from('submenu');
					// $this->db->where('id >',5);
					$query = $this->db->get();
					$udetails = $query->result_array();
					return $udetails;
				}
        //''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''' HOME NEWS END''''''''''''''''''''

				public function savemarket($data){
					// unset($data['saveuserdetails']);
					$type=$data['type'];
          $value=$data['value'];
					$percentage=$data['percentage'];
		
          $final['type']=$type;
					$final['value']=$value;
					$final['percentage']=$percentage;
					$qry = $this->db->insert('market',$final);
					if($qry==true){
						return true;
					}
					else{
						return false;
					}}


          public function updatemarket($data){
            $id = $data['id'];
            $final['type']=$data['type'];
            $final['value']=$data['value'];
            $final['percentage']=$data['percentage'];
                   $this->db->where('id',$id);
            $qry = $this->db->update('market',$final);
            if($qry==true){
              return true;
            }
            else{
              return false;
          }}

          public function updatemenu($data){
            $id = $data['id'];
            $final['menu_name']=$data['menu_name'];
                   $this->db->where('id',$id);
            $qry = $this->db->update('menu',$final);
            if($qry==true){
              return true;
            }
            else{
              return false;
          }}

          public function updatesubmenu($id,$record,$subrecord){
            $id =$id;
            if(!empty($record)){
              $final['menu']=$record;
            }
            $final['submenu']=$subrecord;
            // echo $id;
            // print_r($final);die;
            $this->db->where('id',$id);
            $qry = $this->db->update('tmp_submenu',$final);
            if($qry==true){
              return true;
            }
            else{
              return false;
          }}
				// '''''''''''''''''''''''''''''''''''''''''''''''''''''slug part start'''''''''''''''''''''''''''''''''''''''''''''''''''''


      public function delete_menulist($id){
        $this->db->where('id',$id);
        $qry = $this->db->delete('tmp_menu');
          if($qry==true){
            return true;
          }
          else{
            return false;
          }
      }

      public function delete_market($id){
        $this->db->where('id',$id);
        $qry = $this->db->delete('market');
          if($qry==true){
            return true;
          }
          else{
            return false;
          }
      }

      public function delete_submenu($id){
        $this->db->where('id',$id);
        $qry = $this->db->delete('submenu');
        // echo $this->db->last_query();die;
        if($qry==true){
          return true;
        }
        else{
          return false;
        }
      }

      public function delete_news($id){
        $this->db->where('id',$id);
        $qry = $this->db->delete('tmp_news');
          if($qry==true){
            return true;
          }
          else{
            return false;
          }
      }

      public function published_status_news($id){
        if(!empty($id)){
          $status = $this->status_check($id);
          if($status['published']==1){
            $data['published']=0;
          }
          else{
             $data['published']=1;
          }
          $this->db->where('id',$id);
          $qry = $this->db->update('tmp_news',$data);
          if($qry==true){
            return true;
          }
          else{
            return false;
          }
        }

      }
      public function status_check($id){
        $this->db->where('id',$id);
        $this->db->select('published');
        $this->db->from('tmp_news');
        $result = $this->db->get()->row_array();
        return $result;
      }
      // '''''''''''''''''''''''''''''''''''''''search''''''''''''''''''''''''''''''''''''

      public function searchrecords($key){
        $this->db->select('t1.*,t2.menu_name,t3.submenu');
          $this->db->from('news t1');
          $this->db->join('tmp_menu t2','t1.menu_id=t2.id','left');
          $this->db->join('tmp_submenu t3','t1.submenu_id=t3.id','left');
          $this->db->like('t1.tittle', $key);
          $query = $this->db->get();
          $result = $query->result_array();
          return $result;
      }


      // ''''''''''''''''''''''reporters list''''''''''''''''''''''''''''''''''
      public function getreporterslist(){
        $this->db->where('role','user');
        $this->db->select('*');
        $this->db->from('tmp_users');
        $result = $this->db->get()->result_array();
        return $result;
      }

       public function getnewsdashboardcount(){
        $this->db->select('id');
        $this->db->from('tmp_news');
        $result = $this->db->get()->result_array();
        return $result;
      }
}