<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
            	<img src="<?php echo $user['photo']; ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $this->session->userdata('name'); ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
        	<li class="header">MAIN NAVIGATION</li>
             <li class="<?php echo activate_menu('admin/dashboard'); ?>">
            	<a href="<?php echo base_url('admin/dashboard'); ?>"><i class="fa fa-home"></i> <span>Home</span></a>
            </li>
           <?php 
           if(!empty($_SESSION['role_id'])){


          if($_SESSION['role_id'] == 1){ ?>
          <li class="treeview <?php echo activate_menu('service/servilist') || activate_menu('searchservice/sub_service') || activate_menu('searchservice/add_blog') || activate_menu('searchservice/faqs') || activate_menu('searchservice/testominal') ? 'active' : ''; ?>">
    <a href="#">
        <i class="fa fa-cogs"></i> <span>Add Master</span>
        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
    </a>
    <ul class="treeview-menu">
        <li class="<?php echo activate_menu('service/servilist'); ?>">
            <a href="<?php echo base_url("admin/service/servilist"); ?>"><i class="fa fa-circle-o"></i> Add Services</a>
        </li>
        <li class="<?php echo activate_menu('searchservice/sub_service'); ?>">
            <a href="<?php echo base_url("admin/searchservice/sub_service"); ?>"><i class="fa fa-circle-o"></i> Add Project</a>
        </li>
        <li class="<?php echo activate_menu('searchservice/add_blog'); ?>">
            <a href="<?php echo base_url("admin/searchservice/add_blog"); ?>"><i class="fa fa-circle-o"></i> Add Blog</a>
        </li>
        <li class="<?php echo activate_menu('searchservice/add_faqs'); ?>">
            <a href="<?php echo base_url("admin/searchservice/our_team"); ?>"><i class="fa fa-circle-o"></i> Our Team</a>
        </li>
        <li class="<?php echo activate_menu('searchservice/add_faqs'); ?>">
            <a href="<?php echo base_url("admin/searchservice/add_faqs"); ?>"><i class="fa fa-circle-o"></i> FAQs</a>
        </li>
        <li class="<?php echo activate_menu('searchservice/add_testmonial'); ?>">
            <a href="<?php echo base_url("admin/searchservice/add_testmonial"); ?>"><i class="fa fa-circle-o"></i> Testimonial</a>
        </li>
         <li class="<?php echo activate_menu('searchservice/troubleshoot_list'); ?>">
            <a href="<?php echo base_url("admin/searchservice/troubleshoot_list"); ?>"><i class="fa fa-circle-o"></i>Troubleshooting</a>
        </li>
         <li class="<?php echo activate_menu('searchservice/need_help_list'); ?>">
            <a href="<?php echo base_url("admin/searchservice/need_help_list"); ?>"><i class="fa fa-circle-o"></i>Need a Help</a>
        </li>
         <li class="<?php echo activate_menu('searchservice/live_demo_list'); ?>">
            <a href="<?php echo base_url("admin/searchservice/live_demo_list"); ?>"><i class="fa fa-circle-o"></i>Live Demo</a>
        </li>
         <li class="<?php echo activate_menu('searchservice/live_demo_list'); ?>">
            <a href="<?php echo base_url("admin/searchservice/slides_list"); ?>"><i class="fa fa-circle-o"></i>Presentation List</a>
        </li>
    </ul>
</li>
            <li class="<?php echo activate_menu('admin/service/serviceorder_list'); ?>">
                <a href="<?php echo base_url('admin/service/order_list'); ?>"><i class="fa fa-users"></i> <span>Order list</span></a>
            </li> 
              <!-- <li class="<?php echo activate_menu('admin/serviceprovider_cont/serviceprovider_inactive'); ?>">
                <a href="<?php echo base_url('admin/user_cont/contactlist'); ?>"><i class="fa fa-users"></i> <span>Contact Us List</span></a>
            </li>  -->
             <li class="<?php echo activate_menu('admin/serviceprovider_cont/serviceprovider_inactive'); ?>">
                <a href="<?php echo base_url('admin/service/meeting'); ?>"><i class="fa fa-users"></i> <span>Meeting Us List</span></a>
            </li> 
              <li class="<?php echo activate_menu('admin/serviceprovider_cont/serviceprovider_inactive'); ?>">
                <a href="<?php echo base_url('admin/service/request_livedemo'); ?>"><i class="fa fa-users"></i> <span>Request Demo List</span></a>
            </li> 
            
            
    
      <?php    }}elseif (!empty($_SESSION['fran_id'])) { ?>
       
            
        
   <?php   }
           ?>
            
         
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
<div class="content-wrapper">
    <div class="overlay" id="loading">
        <i class="fa fa-3x fa-refresh fa-spin"></i>
    </div>
	<?php
    	$this->load->view('includes/breadcrumb');
	?>
    <!-- Main content -->