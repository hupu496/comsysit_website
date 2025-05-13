<section class="content">
    	<div class="row">
        	<div class="col-md-12">
            	<div class="box">
                	<div class="box-header with-border">
                    	<div class="box-title">
                        	<a href="<?php echo base_url('admin/searchservice/testmonial_list') ;?>">
                            	<button class="btn btn-sm btn-success"><i class="fa fa-plus"></i>TESTIMONIAL LIST</button>
                        	</a>
                        </div>
                    </div>
                    <div class="box-body">
						<form action="<?php echo base_url('admin/searchservice/insert_testmonial');?>" enctype="multipart/form-data" method="POST">
                        	<div class="row form-group">
                                <div class="col-md-1"></div>
                                <div class="col-sm-12 col-md-6">                                
                                        <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Client Name<span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8">
                                        <input type="text" name="name" class="form-control" placeholder="Write Client Name">
                                        </div>
                                        </div>
                                        <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Location<span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8">
                                        <input type="text" name="location" class="form-control" placeholder="Write Location">
                                        </div>
                                        </div>
                                         
                                        <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Description<span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8">
                                            <?php echo form_textarea(array('name' => 'description', 'id' => 'Description', 'class' => 'form-control')); ?>
                                       
                                        </div>
                                        </div>
                                        <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Rating<span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8">
                                        <input type="number" name="star" class="form-control" placeholder="Enter Star">
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
   let editor;
    ClassicEditor
        .create(document.querySelector('#product_desp'), {

        })
        .then(newEditor => {
            editor = newEditor;
            //console.log(editor.config._config.toolbar); 
        }, editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
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
    