<style>
    /*''''''''''''''''''''''''''''''''''''check box ''''''''''''''''''''''''''''''''''''''''''*/
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
/*'''''''''''''''''''''''''''Check Box end'''''''''''''''''''''''''''''''''''''*/
</style>
<section class="content">
      <div class="container-fluid">
    	<div class="row">
        	<div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                    <div class="row">
                        <!-- <div class="col-md-2 col-lg-2"></div> -->
                        	<div class="col-md-12 col-lg-12 table-responsive">
                            	<table class="table data-table stripe hover nowrap table-bordered">
                                    <thead>
                                        <tr>    
                                            <th>S.no</th>
                                            <th>News Menu</th>                
                                            <th>Title</th>                                            
                                            <th>Byline</th>                                            
                                            <th>Strap Lines</th>                                     
                                            <th>News</th> 
                                            <th>Top News</th>                                            
                                            <th>News Date</th> 
                                            <th>Image</th> 
                                            <th>Published</th> 
                                            <th>Action</th> 

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=0;
                                         if(!empty($newslist)){
                                            foreach($newslist as $val){$i++; $id=$val['id']; ?>
                                        <tr>
                                            <td ><?php echo $i ?></td>
                                            <td ><?php echo $val['menu_name']; ?></td>
                                            <td ><?php echo $val['tittle']; ?></td>
                                            <td ><?php echo $val['byline']; ?></td>
                                            <td ><?php echo $val['straplines']; ?><input type="hidden" name="id" value="<?= $val['id'];?>" class="news_id"></td>
                                            <td><?php echo $val['news'] ?></td>
                                            <td ><?php echo $val['top_news_status'] ?></td>
                                            <td ><?php echo date('d-m-Y',strtotime($val['news_date']));?></td>
                                             <td ><img src="<?= base_url($val['image']);?>" height="100" width="200"></td>
                                             <td><?php if($val['published']=='0'){ ?><label class="switch"><input type="checkbox" class="published" value="1"><span class="slider round"></span></label><?php }else{ ?><label class="switch"><input type="checkbox" checked class="published" value="1"><span class="slider round"></span></label><?php }?></td>
                                            <td><span class="float-right">
                                                    <button class="btn btn-danger btn-xs delete" value="<?php echo $val['id'];?>">Delete</button>  </span>
                                                    
                                           </td>
                                           <!-- <button type="button" class="btn btn-success btn-xs updt" data-toggle="modal" data-target="#exampleModal" data-id="<?php echo $val['id'];?>" data-menu_name="<?php echo $val['menu_name'];?>"><i class="fa fa-edit"></i></button> -->
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
           <?php echo form_open_multipart('home/update_menu');?>
          <div class="modal-body">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                   
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12">
                            <?php echo form_input(array('type'=>'text','name'=>'menu_name','id'=>'menu_name','class'=>'form-control menu_name','placeholder'=>'Enter  Menu Name','required'=>'true'));?>
                            <input type="hidden" name="id" id="id">
                        </div>                                    
                    </div>
                   
                    
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
        var menu_name = $(this).data('menu_name');
        $('#id').val(id);
        $('#menu_name').val(menu_name);
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

        $('body').on('change','.published',function(){
            var news_id = $(this).closest('tr').find('.news_id').val();
            // var news_id = $('.news_id')closest('tr').val();
            $conf = confirm('Are you published this news?');
            if($conf){
               $.ajax({
                type:"POST",
                url:"<?php echo base_url("home/published_news"); ?>",
                data:{id:news_id},
                success: function(result){
                    alert(result);
                    if(result){
                        alert('News Published Successfully');
                    }
                }
            });
            }
            
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
    


$('body').on('click','.delete',function(){
    debugger;
    var id=$(this).closest('tr').find('.delete').val();
    if(confirm('Are you Sure !')){
    $.ajax({
            type:'GET',
            url:"<?PHP echo base_url('home/delete_news_by_admin'); ?>",
            data: {id:id},
            success: function(result){
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
});







</script>