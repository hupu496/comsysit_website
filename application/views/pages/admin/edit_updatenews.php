<section class="content">
      <div class="container-fluid">
    	<div class="row">
        	<div class="col-md-12">
                <div class="card">
                    <!-- <div class="card-header">
                    	<h3 class="card-title"><?php echo $title; ?></h3>
                    </div> -->
                    <!-- /.card-header -->
                    <div class="card-body" sty>
                    <div class="row ">
                        	<div class="col-md-12 col-lg-12">
                                <?php echo form_open_multipart('home/updatenews');?>
                                <div class="row">
                                    <div class="col-sm-6 col-md-6 mb-2">
                                        <lable style="font-size: 15px; font-weight:600">Menu</lable>
                                        <select name="menu_id" onchange="getsubmenulist(this.value)" class="form-control">
                                            <option value="">Select Menu</option>
                                            <?php if (!empty($result1)) {  
                                                $i = 0;
                                                foreach ($result1 as $val) {
                                                    ?>
                                                    <option <?php if($result['menu_id']==$val['id']){echo 'selected="selected"';} ?> value="<?php echo $val['id'] ?>"><?php echo $val['menu_name'] ?></option>
                                            <?php }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 col-md-6 mb-2">
                                        <lable style="font-size: 15px; font-weight:600">Sub Menu</lable>
                                         <select class="form-control submenus"   name="submenu_id">
                                                    <option value="">----SELECT----</option>
                                         </select>
                                    </div>
                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 col-md-6 mb-2">
                                        <lable style="font-size: 15px; font-weight:600">Tittle</lable>
                                        <?php echo form_input(array('type'=>'text','name'=>'tittle','id'=>'activate_not','class'=>'form-control','placeholder'=>'News Tittle','value'=>''.$result['tittle'].'','required'=>'required'));?>
                                        <input type="hidden" name="id" value="<?php echo $result['id'];?>">
                                         <input type="hidden" name="Image_path" value="<?php echo $result['image'];?>">
                                    </div>                                    
                                    <div class="col-sm-6 col-md-6 mb-2">
                                        <lable style="font-size: 15px; font-weight:600">By Line</lable>
                                        <?php echo form_input(array('type'=>'text','name'=>'byline','value'=>''.$result['byline'].'','id'=>'activate_not','class'=>'form-control','placeholder'=>'By Line'));?>
                                    </div> 
                                </div>
                                 
                                
                                <div class="form-group col-md-12 row">
                                    <div class="col-sm-12 mb-2">
                                    <lable style="font-size: 15px; font-weight:600">News Description</lable>
                                    <textarea class="form-control" name="news" id="editor1" rows="6" col="12"><?php echo $result['news']?></textarea>
                                    </div>                                    
                                </div>
                                <div class="form-group col-md-12 row">
                                    <div class="col-sm-12 mb-2">
                                    <lable style="font-size: 15px; font-weight:600">Straplines</lable>
                                    <textarea class="form-control" name="straplines"  rows="5" col="12"><?php echo $result['straplines']?></textarea>
                                    </div>                                    
                                </div>
                                   <div class="form-group row">
                                    <div class="col-sm-6 col-md-6 mb-2">
                                    <img src="<?php echo base_url(''.$result['image'].'')?>" class="img-fluid" height="200" width="200">
                                        
                                    </div>                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 col-md-12 mb-2">
                                    <lable style="font-size: 15px; font-weight:600">News Image</lable>
                                        <?php echo form_input(array('type'=>'file','name'=>'image','id'=>'activate_not','class'=>'form-control','placeholder'=>'Enter Submenu name'));?>
                                    </div>                                    
                                </div>


                                <div class="form-group row">
                                    <div class="col-sm-12 col-md-12 mb-2">
                                        <lable style="font-size: 15px; font-weight:600">Image Caption</lable>
                                        <?php echo form_input(array('type'=>'text','name'=>'img_caption','id'=>'activate_not','value'=>''.$result['img_caption'].'','class'=>'form-control','placeholder'=>'Image Caption'));?>
                                    </div>                                   
                                </div>
                                <?php if(!empty($result['other_image']))
                                    {
                                      ?>
                                      <div class="form-group row">
                                        <div class="col-sm-6 col-md-6 mb-2">
                                           <img src="<?php echo base_url(''.$result['other_image'].'')?>" class="img-fluid" height="200" width="200"> 
                                        </div>                                    
                                     </div>
                                     <div class="form-group row">
                                    <div class="col-sm-12 col-md-12 mb-2">
                                        <lable style="font-size: 15px; font-weight:600">Other Image</lable>
                                        <?php echo form_input(array('type'=>'file','name'=>'other_image','id'=>'activate_not','class'=>'form-control','placeholder'=>'Enter Other Image'));?>
                                    </div>                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 col-md-12 mb-2">
                                        <lable style="font-size: 15px; font-weight:600">Other Image Caption</lable>
                                        <?php echo form_input(array('type'=>'text','name'=>'other_img_caption','id'=>'activate_not','class'=>'form-control','value'=>''.$result['other_img_caption'].'','placeholder'=>'Other Image By Line'));?>
                                    </div>                                   
                                </div>
                                      <?php 
                                    }
                                ?>
                                
                                 


                                 <div class="form-group row">
                                    <div class="col-sm-12 col-md-12 mb-2">
                                    <lable style="font-size: 15px; font-weight:600">Top News :</lable>
                                    <?php 
                                        if($result['top_news_status']==0){
                                            ?>
                                            <?php echo form_input(array('type'=>'checkbox','name'=>'top_news_status','id'=>'activate_not','value'=>'0'));?>
                                            <?php
                                        }
                                    elseif($result['top_news_status']==1){
                                        ?>
                                            <?php echo form_input(array('type'=>'checkbox','name'=>'top_news_status','id'=>'activate_not','value'=>'1','checked'=>'true'));?>
                                            <?php
                                        }



                                    ?>
                                        
                                    </div>   
                                                                     
                                </div>
                                <script> 
                // Replace the <textarea id="editor1"> with a CKEditor 
                // instance, using default configuration. 
                CKEDITOR.replace( 'editor1' ); 
            </script> 
                               
                               
            <div class="form-group row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <?php echo form_submit(array('name'=>'update_news','id'=>'save_cat','value'=>'Upload News','class'=>'form-control btn btn-success'));?>
                </div>
                <div class="col-md-4"></div>                                    
                </div>
                <?php echo form_close();?>
           </div>
        	
        </div>
    </div>
</div>
</div>
</div>
</div>
</section> 

<script type="text/javascript">
         function getsubmenulist(id){
            // debugger;
    $.ajax({
            type:'POST',
            url:"<?PHP echo base_url('home/get_submenulist'); ?>",
            data: {id:id},
            dataType: 'json',
            success: function(result){
                 $('.submenus').append('<option value="">---SELECT---</option>');
             $.each(result,function(ind,val){
                            $('.submenus').append('<option value="'+val.id+'">'+val.submenu+'</option>');
                          });
                          
                },
                // 
                error: function(){
                alert("error");
                }
        });
        $('.submenus').html(''); 
       } 

    </script>  