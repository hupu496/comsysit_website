<section class="content">
    	<div class="row">
        	<div class="col-md-12">
            	<div class="box">
                	<div class="box-header with-border">
                    	<div class="box-title">
                        	<a href="<?php echo base_url('admin/searchservice/live_demo_list') ;?>">
                            	<button class="btn btn-sm btn-success"><i class="fa fa-plus"></i>LIVE DEMO LIST</button>
                        	</a>
                        </div>
                        <!--<div class="pull-right"><a href="" class="btn btn-sm btn-primary"> STAFF LIST </a></div>-->
                    </div>
                    <div class="box-body">
						<form action="<?php echo base_url('admin/searchservice/update_live_demo');?>" enctype="multipart/form-data" method="POST">
                        	<div class="row form-group">
                                <div class="col-md-1"></div>
                                <div class="col-sm-12 col-md-12">                                
                                        <div class="row form-group">
                                      <input type="hidden" name="id" value="<?php echo $subservicelist['id']; ?>">
                                        <label class="col-sm-12 col-md-2 col-form-label"> Name<span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8">
                                         <input type="text" name="name" class="form-control" value="<?php echo $subservicelist['name']; ?>">

                                        </div>
                                        </div>
                                        <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">User Acces<span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8">
                                            <textarea name="user_access" id="description" class="form-control"><?php echo $subservicelist['user_access']; ?></textarea>
                                        </div>
                                        </div>
                                         <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Link<span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8">
                                        <input type="textarea" name="link" class="form-control" id="link" value="<?php echo $subservicelist['link']; ?>">
                                        </div>
                                        </div>
                                         
                                        <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Images<span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8">
                                            <img src="<?php echo base_url($subservicelist['photos']); ?>" width="100px">
                                        <input type="file" name="photos" class="form-control" placeholder="Enter &#8377;" value="<?php echo $subservicelist['photos']; ?>">
                                        </div>
                                        </div>
                        
                                  <div class="row">
                                  <div class="col-md-1"></div>
                                  <div class="col-md-2 text-center"> 
                                    <input type="submit"  class="btn btn-success btn-block btn-md"  />
                                </div>
                            </div>
                        </form>                    
                    </div>
               	</div>
         	</div>
       	</div>
    </section>
    <!-- /.content -->
     <script src="<?php echo base_url("/assets/ckeditor4-4.22.1/ckeditor.js"); ?>"></script>
        <script src="<?php echo base_url("/assets/ckeditor4-4.22.1/config.js"); ?>"></script>
    <script>
        CKEDITOR.replace('description');
    </script>
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
    