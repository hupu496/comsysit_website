<section class="content">
    	<div class="row">
        	<div class="col-md-12">
            	<div class="box">
                	<div class="box-header with-border">
                    	<div class="box-title">
                        	<a href="<?php echo base_url('user/franchise_order_list') ;?>">
                            	<button class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Order List</button>
                        	</a>
                        </div>
                       
                    </div>
                    <div class="box-body">
						<form action="<?php echo base_url('admin/service/insert_service/');?>" enctype="multipart/form-data" method="POST">
                            <input type="" name="fran_id" value="<?php ?>">
                        	<div class="row form-group">
                                <div class="col-md-1"></div>
                                <div class="col-sm-12 col-md-6">
                                	<div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Name <span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8">
                                            <input type="text" name="name" value="" id="name" placeholder="Name" class="form-control" required/>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Mobile No <span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8">
                                            <input type="text" name="mobile" value="" id="name" placeholder="Mobile no" class="form-control" required/>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">From Date <span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8">
                                            <input type="date" name="from_date" value="" id="name"  class="form-control" required/>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">To Date <span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8">
                                            <input type="date" name="to_date" value="" id="name"  class="form-control" required/>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Service <span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8">
                                            <select class="form-control" name="service">  
                                                <?php if(!empty($service)){
                                                    foreach ($service as $key => $value) { ?>
                                                       <option value="<?php echo $value['name']; ?>"><?php echo $value['name']; ?> </option>
                                              <?php      }
                                                } ?>
                                            

                                            </select>
                                        </div>
                                    </div>
                                     <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Sub Service <span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8">
                                            <select class="form-control" name="sub_service">  
                                                <?php if(!empty($sub_service)){
                                                    foreach ($sub_service as $key => $value) { ?>
                                                       <option value="<?php echo $value['name']; ?>"><?php echo $value['name']; ?> </option>
                                              <?php      }
                                                } ?>
                                            

                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Price<span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8">
                                            <input type="text" class="form-control" placeholder="Enter Price">    
                                        </div>
                                    </div>
                                     <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Description<span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8">
                                            <input type="text" class="form-control" placeholder="Enter Price">    
                                        </div>
                                    </div>


                                    
                                  
                                  <div class="row">
                                  <div class="col-md-1"></div>
                                  <div class="col-md-2 text-center"> 
                                    <input type="submit" name="addservice" value="Add Service"  class="btn btn-success btn-block btn-md"  />
                                </div>
                            </div>
                        </div>
                    </div>
                        </form>                    
                    </div>
               	</div>
         	</div>
       	</div>
    </section>
    <!-- /.content -->
<script>
$(document).ready(function(e){	
	function showImage(src,target) {
		var fr=new FileReader();
		// when image is loaded, set the src of the image where you want to display it
		fr.onload = function(e) { target.src = this.result; };
		src.addEventListener("change",function() {
			// fill fr with image data    
			fr.readAsDataURL(src.files[0]);
		});
	}
	var src = document.getElementById("image");
	var target = document.getElementById("target");
	showImage(src,target);
});
</script> 
    