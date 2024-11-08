<section class="content">
      <div class="container-fluid">
    	<div class="row">
        	<div class="col-md-12">
                <div class="card">
                    <!-- <div class="card-header">
                    	<h3 class="card-title"><?php echo $title; ?></h3>
                    </div> -->
                    <!-- /.card-header -->
                    <div class="card-body">
                    <div class="row">
                        	<div class="col-md-5 col-lg-4">
                                <?php echo form_open_multipart('home/savesubmenu');?>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <select <?php echo form_input(array('name' => 'menu', 'id' => 'name', 'class' => 'form-control', 'placeholder' => '')); ?>>
                                            <option value="">Select Menu</option>
                                            <?php if (!empty($result1)) {  
                                                $i = 0;
                                                foreach ($result1 as $pside) {
                                                    ?>
                                                    <option value="<?php echo $pside['id'].' '.$pside['menu_name'] ?>"><?php echo $pside['menu_name'] ?></option>
                                            <?php }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <?php echo form_input(array('type'=>'text','name'=>'submenu','id'=>'activate_not','class'=>'form-control','placeholder'=>'Enter Submenu name','required'=>'required'));?>
                                    </div>                                    
                                </div>
                                
                               
                               
                                <div class="form-group row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <?php echo form_submit(array('name'=>'save_submenu','id'=>'save_cat','value'=>'Save Submenu','class'=>'form-control btn btn-success'));?>
                                    </div>
                                    <div class="col-md-4"></div>                                    
                                </div>
                                <?php echo form_close();?>
                            </div>
                            <div class="col-md-2 col-lg-2"></div>
                        	<div class="col-md-5 col-lg-6 table-responsive">
                            	<table class="table data-table stripe hover nowrap table-bordered">
                                    <thead>
                                        <tr>    
                                            <th>S.no</th>
                                            <th>Menu Name</th> 
                                            <th>Submenu Name</th>                                            
                                                                                        
                                            <th>Action</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=0; if(!empty($result)){
                                            foreach($result as $val){ $i++;$id=$val['id']; ?>
                                        <tr>
                                            <td ><?= $i?></td>
                                            <td ><?= $val['menu']?></td>
                                            <td ><?= $val['submenu']?></td>
                                            <td><span class="float-right">
                                            <a href='<?php echo base_url("home/delete_submenu/?id=".$val['id']);?>'><button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></a>
                                             <button type="button" class="btn btn-success btn-xs updt" data-toggle="modal" data-target="#exampleModal" data-id="<?php echo $val['id'];?>" data-menu="<?php echo $val['menu'];?>" data-menu_id="<?php echo $val['menu_id'];?>" data-submenu="<?php echo $val['submenu'];?>" ><i class="fa fa-edit"></i></button>
                                            <!-- <button class="btn btn-info btn-xs duplicate" type="button" data-dupid="<?php ?>"><i class="fa fa-network-wired"></i></button> -->
                                            </span></td>
                                        </tr>
                                        <?php } } ?>
                                        
                                       
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>   
    <!-- '''''''''''''''''''''''''''''''model'''''''''''''''''''''''''''''''''''''''' -->
     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
           <?php echo form_open_multipart('home/update_submenu');?>
          <div class="modal-body">
            <div class="row">
                    <div class="col-sm-12 col-md-12 mb-3" >
                        <select <?php echo form_input(array('name' => 'menu', 'id' => 'menu', 'class' => 'form-control', 'placeholder' => '')); ?>>
                            <option value="">Select Menu</option>
                            <?php if (!empty($result1)) {  
                                $i = 0;
                                foreach ($result1 as $pside) {
                                    ?>
                                    <option <?php if($this==$pside['id']){echo 'selected="selected"';} ?>  value="<?php echo $pside['id'].' '.$pside['menu_name'];?>"><?php echo $pside['menu_name'] ?></option>
                            <?php }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-sm-12 col-md-12">
                        <?php echo form_input(array('type'=>'text','name'=>'submenu','id'=>'submenu','class'=>'form-control','placeholder'=>'Enter Submenu name','required'=>'required'));?>
                        <input type="hidden" name="id" id="id">
                    </div> 
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Update</button>
          </div>
          <?php echo form_close();?>
        </div>
      </div>
    </div>
    <!-- '''''''''''''''''''''''''''''''''model end................................... -->  

     <script type="text/javascript">
        $('.updt').click(function(e){
        var id = $(this).data('id');
        var menu = $(this).data('menu');
        var submenu = $(this).data('submenu');
        var menu_id = $(this).data('menu_id');
      
        $('#id').val(id);
        $('#menu').val(menu_id);
        $('#submenu').val(submenu);
        
      
    });


  
    </script> 
<script>
	
	$(document).ready(function(e) {
        $('.hoverable').mouseenter(function(){
            //$('[data-toggle="popover"]').popover();
            $(this).popover('show');                    
        }); 

        $('.hoverable').mouseleave(function(){
            $(this).popover('hide');
        });

        

        $('.duplicate').click(function(){
            var dupid = $(this).data('dupid');
            $.ajax({
                url:"<?php echo base_url('home/ajax_sidebar') ;?>",
                method:"POST",
                data:{dupid:dupid},
                success:function(data){
                    //console.log(data);
                    var setdata = JSON.parse(data);
                    //console.log(setdata);
                    $('#activate_menu').val(setdata.activate_menu);
                    $('#activate_not').val(setdata.activate_not);
                    $('#base_url').val(setdata.base_url);
                    $('#icon').val(setdata.icon);
                    $('#parent_id').val(setdata.parent).trigger('change');
                    $('#position').val(setdata.position);
                    var role_text = setdata.role_id;                    
                    $('#roles').val(role_text);
                    $('#status').val(setdata.status);
                }
            });
        });
        
		var table=$('.data-table').DataTable({
			scrollCollapse: true,
			autoWidth: false,
			responsive: true,
			columnDefs: [{
				targets: "no-sort",
				orderable: false,
			}],
			"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
			"language": {
				"info": "_START_-_END_ of _TOTAL_ entries",
				searchPlaceholder: "Search"
			},
		});		
        
		$('body').on('change','#parent_id',function(){
			var parent_id=$(this).val();
			var option="<select name='position' id='position' class='form-control' required>";
			option+="<option value=''>Select </option>";
			option+="<option value='0'>Top</option>";
			$.ajax({
				type:"POST",
				url:"<?php echo base_url("home/getOrderList"); ?>",
				data:{parent_id:parent_id},
				dataType:"json",
				beforeSend: function(){
					//$(".box-overlay").show();
				},
				success: function(data){
					$(data).each(function(i, val) {
						option+="<option value='"+val['position']+"'>After "+val['name']+"</option>";
					});
					option+='</select>';
					$('#position').replaceWith(option);
					$('.box-overlay').hide();
				}
			});
		});
        $('#parent_id').trigger('change');
    });
</script>