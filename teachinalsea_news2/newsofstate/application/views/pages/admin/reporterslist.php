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
                        	<div class="col-md-12 col-lg-12 col-12 table-responsive">
                            	<table class="table data-table stripe hover nowrap table-bordered">
                                    <thead>
                                        <tr>    
                                            <th>S.no</th>
                                            <!-- <th>User Name</th> -->
                                            <th>Name</th>   
                                            <th>Mobile No</th>   
                                            <th>Email</th>                                            
                                            <th>Address</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=0;
                                         if(!empty($result)){
                                            foreach($result as $val){$i++; $id=$val['id']; ?>
                                        <tr>
                                            <td ><?php echo $i; ?></td>
                                            <!-- <td ><?php //echo $val['username']; ?></td> -->
                                            <td ><?php echo $val['name']; ?></td>
                                            <td ><?php echo $val['mobile']; ?></td>
                                            <td ><?php echo $val['email']; ?></td>
                                            <td ><?php echo "Ranchi"; ?></td>
                                            <!-- 
                                            <td><span class="float-right">
                                            <button class="btn btn-danger btn-xs delete" value="<?php echo $val['id'];?>"><i class="fa fa-trash"></i></button> 
                                           <button type="button" class="btn btn-success btn-xs updt" data-toggle="modal" data-target="#exampleModal" data-id="<?php echo $val['id'];?>" data-username="<?php echo $val['username'];?>" data-name="<?php echo $val['name'];?>" data-mobile="<?php echo $val['mobile'];?>"><i class="fa fa-edit"></i></button>
                                            </span></td> -->
                                        </tr>
                                       
                                       
                                       <?php 
                                        }
                                            }
                                            ?>
                                       
                                        
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
           <?php echo form_open_multipart('home/update_market');?>
          <div class="modal-body">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                   
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <?php echo form_input(array('type'=>'text','name'=>'type','id'=>'type','class'=>'form-control type','placeholder'=>'Enter  Name','required'=>'true'));?>
                            <input type="hidden" name="id" id="id">
                        </div>                                    
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <?php echo form_input(array('type'=>'text','name'=>'value','id'=>'value','class'=>'form-control value','placeholder'=>'Enter Value','required'=>'true'));?>
                        </div>                                    
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <?php echo form_input(array('type'=>'text','name'=>'percentage','id'=>'percentage','class'=>'form-control percentage','placeholder'=>'Enter Percentage','required'=>'true'));?>
                        </div>                                    
                    </div>
                   <!--  <div class="form-group row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <?php echo form_submit(array('name'=>'update_market','id'=>'save_cat','type'=>'submit','value'=>'Save ','class'=>'form-control btn btn-success'));?>
                        </div>
                        <div class="col-md-4"></div>                                    
                    </div> -->
                    
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
        var type = $(this).data('type');
        var value = $(this).data('value');
        var percentage = $(this).data('percentage');
        $('#id').val(id);
        $('#type').val(type);
        $('#value').val(value);
        $('#percentage').val(percentage);
      
    });


    $('.delete').click(function(e){
        debugger;
        var id=$(this).closest('tr').find('.delete').val();
        if(confirm('Are you Sure !')){
        $.ajax({
                type:'GET',
                url:"<?PHP echo base_url('home/delete_market'); ?>",
                data: {id:id},
                success: function(result){
                    // alert(result);
                    console.log(result);
                    location.reload();
                    },
                    error: function(){
                    alert("error");
                    }
        });
    }
    return false;
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