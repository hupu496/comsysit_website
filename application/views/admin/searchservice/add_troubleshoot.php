<section class="content">
    	<div class="row">
        	<div class="col-md-12">
            	<div class="box">
                	<div class="box-header with-border">
                    	<div class="box-title">
                        	<a href="<?php echo base_url('admin/searchservice/troubleshoot_list') ;?>">
                            	<button class="btn btn-sm btn-success"><i class="fa fa-plus"></i>TROUBLESHOOT LIST</button>
                        	</a>
                        </div>
                        <!--<div class="pull-right"><a href="" class="btn btn-sm btn-primary"> STAFF LIST </a></div>-->
                    </div>
                    <div class="box-body">
						<form action="<?php echo base_url('admin/searchservice/insert_troubleshoot');?>" enctype="multipart/form-data" method="POST">
                        	<div class="row form-group">
                                <div class="col-md-1"></div>
                                <div class="col-sm-12 col-md-12">                                
                                        <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Project Name<span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8">
                                       <select name="project_id" id="" class="form-control" required>
                                        <option value="">--SELECT PROJECT--</option>
                                        <?php if(!empty($project)){
                                            foreach ($project as $key => $value) {  ?>
                                              <option value="<?php echo $value['id']; ?>"><?php echo $value['sub_service']; ?></option>
                                       <?php     }
                                        }
                                         ?>

                                       </select>
                                        </div>
                                        </div>
                                         
                                        <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Manual Link<span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8">
                                            <?php echo form_textarea(array('name' => 'manual_link', 'class' => 'form-control')); ?>
                                        <!-- <textarea cols="5" rows="4" class="form-control" name="description" placeholder="Write short Description..."></textarea> -->
                                        </div>
                                        </div>
                                        <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">images<span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8">
                                       <input type="file" name="images" class="form-control">
                                        </div>
                                        </div>
                                       
                        
                                  <div class="row">
                                    <div class="col-md-3"></div>
                                  <div class="col-md-6 text-center"> 
                                    <input type="submit"  class="btn btn-success btn-block btn-md"  />
                                </div>
                                <div class="col-md-3"></div>
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
    