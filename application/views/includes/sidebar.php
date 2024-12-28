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
            <li class="<?php echo activate_menu('service/servilist'); ?>">
                <a href="<?php echo base_url("admin/service/servilist"); ?>"><i class="fa fa-cog"></i> <span>Add Services</span></a>
            </li>
            <li class="<?php echo activate_menu('searchservice/track'); ?>">
                <a href="<?php echo base_url("admin/searchservice/sub_service"); ?>"><i class="fa fa-cog"></i> <span>Add Project</span></a>
            </li>
             <li class="<?php echo activate_menu('searchservice/track'); ?>">
                <a href="<?php echo base_url("admin/searchservice/add_blog"); ?>"><i class="fa fa-cog"></i> <span>Add Blog</span></a>
            </li>
         
            <li class="<?php echo activate_menu('admin/serviceprovider_cont/serviceprovider_inactive'); ?>">
                <a href="<?php echo base_url('admin/user_cont/contactlist'); ?>"><i class="fa fa-users"></i> <span>Contact Us List</span></a>
            </li> 
            
            <li class="<?php echo activate_menu('admin/service/serviceorder_list'); ?>">
                <a href="<?php echo base_url('admin/service/order_list'); ?>"><i class="fa fa-users"></i> <span>Order list</span></a>
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