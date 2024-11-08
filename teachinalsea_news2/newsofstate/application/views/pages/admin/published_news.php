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
                        <div class="row ">
                            <?php 
                            if($_SESSION['role']=='admin'){
                                ?>
                                <div class="col-md-12 table-responsive" >
                                    <table class="table data-table stripe hover nowrap table-bordered">
                                        <thead>
                                            <tr style="background-color: #23618a !important; color:white;">    
                                                <th>S.No</th>
                                                <th>ENTRY ID</th> 
                                                <th>MENU NAME</th> 
                                                <th>SUBMENU NAME</th> 
                                                <th>IMAGE</th>   
                                                <th width="20%">HEADLINE</th>  
                                                <th>Byline</th>
                                                <!-- <th>SLUG</th>  -->
                                                <th>Published</th>                                         
                                                <th>Action</th>                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=0; if(!empty($result)){
                                                foreach($result as $val){ $i++;$id=$val['id']; ?>
                                            <tr>
                                                <td ><?= $i?></td>
                                                <td ><?= $val['id']?></td>
                                                <td><?php echo $menu = $this->Account_model->getmenuname($val['menu_id']);?></td>
                                                <td><?php echo $submenu = $this->Account_model->getsubmenuname($val['submenu_id']);?></td>
                                                <!-- <td ><= $val['menu_id']?></td> -->
                                                <!-- <td ><= $val['submenu_id']?></td> -->
                                                <td><img src="<?php echo file_url($val['image']); ?>" alt="Image" class="img-thumbnail" alt="Responsive image"></td>
                                                <td width="20%"><?= $val['tittle']?></td>
                                                <!-- <td ><?= $val['slug']?></td> -->
                                                <td ><?= $val['byline']?></td>
                                                <td><span class="float-right">
                                                <button class="btn btn-danger btn-xs delete" value="<?php echo $val['id'];?>"><i class="fa fa-trash"></i></button> 
                                                <a href="<?php echo base_url('home/edit_news/?id='.$val['id'])?>"><button type="button" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></button></a>
                                               <!-- <button type="button" class="btn btn-success btn-xs updt" data-toggle="modal" data-id="<?php echo $val['id'];?>" data-menu="<?php echo $val['menu_id'];?>" data-submenu="<?php echo $val['submenu_id'];?>" data-tittle="<?php echo $val['tittle'];?>" data-byline="<?php echo $val['byline'];?>"  data-straplines="<?php echo $val['straplines'];?>" data-image="<?php echo $val['image'];?>" data-img_caption="<?php echo $val['img_caption'];?>" data-topnews="<?php echo $val['top_news_status'];?>" data-target=".bd-example-modal-lg"><i class="fa fa-edit"></i></button> -->

                                               <!--  <button class="btn btn-info btn-xs duplicate" type="button" data-dupid=""><i class="fa fa-network-wired"></i></button> -->
                                                </span></td>
                                            </tr>
                                            <?php } } ?> 
                                        </tbody>
                                    </table>
                                </div>
                                <?php
                            }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function(e) {
        $('.amount').hide(true);

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
        let editor;
        ClassicEditor
        .create(document.querySelector('#editor1'), {

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

        $('.hoverable').mouseenter(function(){
            //$('[data-toggle="popover"]').popover();
            $(this).popover('show');                    
        }); 

        $('.hoverable').mouseleave(function(){
            $(this).popover('hide');
        });

        function convertToSlug(Text) {
    return Text.toLowerCase()
             .replace(/[^\w ]+/g, '')
             .replace(/ +/g, '-');
    }

    $('.body').on('change','.menu_id',function(){
    debugger;
    var menu_id =$(this).val();
    $.ajax({
        type:"POST",
        // url:"<?php echo base_url("home/get_submenulist");?>",
        data:{menu_id :menu_id},
        type:"json",
        success:function(data){
            alert(data);
        }

    });
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


    $('.delete').click(function(e){
        debugger;
        var id=$(this).closest('tr').find('.delete').val();
        if(confirm('Are you Sure !')){
        $.ajax({
                type:'GET',
                url:"<?PHP echo base_url('home/delete_news'); ?>",
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

     $('.published').click(function(e){
        debugger;
        var id=$(this).closest('tr').find('.published').val();
        if(confirm('Are You Want To Change ?')){
        $.ajax({
                type:'GET',
                url:"<?PHP echo base_url('home/published_news'); ?>",
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

       $('.updt').click(function(e){
    var id = $(this).data('id');
    var menu_id = $(this).data('menu_id');
    var submenu_id = $(this).data('submenu_id');
    var tittle = $(this).data('tittle');
    var byline = $(this).data('byline');
    var news = $(this).data('news');
    var straplines = $(this).data('straplines');
    var image = $(this).data('image');
    var img_caption = $(this).data('img_caption');
    var topnews = $(this).data('topnews');
    $('#id').val(id);
    $('#menu_id').val(menu_id);
    $('#submenu_id').val(submenu_id);
    $('#tittle').val(tittle);
    $('#byline').val(byline);
    $('#news').val(news);
    $('#straplines').val(straplines);
    $('#image').val(image);
    $('#img_caption').val(img_caption);
    $('#topnews').val(topnews);

  

    
})
       $('#amount').hide();
    $('#amtlable').hide();

 $('#pay').click(function(e){
    debugger;
    $('#amount').show();
    $('#amtlable').show();
});




    </script>  

