<section class="content">
	<div class="row">
    	<div class="col-md-12">
        	<div class="box">
            	<div class="box-header with-border">
                	<div class="box-title">
                      <a href="<?php echo base_url('admin/searchservice/slides') ;?>">
                            <button class="btn btn-sm btn-success"><i class="fa fa-plus"></i>Add Presentation</button>
                        </a>
                    </div>
                </div>
                <div class="box-body">
                	<table class="table data-table stripe hover nowrap">
                    	<thead>
                        	<tr>
                            	<th class="table-plus">Sl No</th>
                                <th>Project Name</th>
                                <th>Slide Images</th>
                                <th>Technology</th>
								<th>Descriptions</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
        <?php if (!empty($subservicelist)): 
            $i = 1;
            foreach ($subservicelist as $row): ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= htmlspecialchars($row['sub_service']); ?></td>
                    <td>
                        <?php
                        $images = json_decode($row['images'], true); // assuming JSON
                        if (is_array($images)) {
                            foreach ($images as $img) {
                                echo '<img src="' . base_url($img) . '" width="60" height="60" style="margin: 5px; border:1px solid #ccc;">';
                            }
                        } else {
                            echo 'No images';
                        }
                        ?>
                    </td>
					 <td>
                        <?php
                        $technology = json_decode($row['tech'], true); // assuming JSON
                        if (is_array($technology)) {
                            foreach ($technology as $tech) {
                                echo $tech;
                            }
                        } else {
                            echo 'No images';
                        }
                        ?>
                    </td>
					<td><?php echo $row['description']; ?></td>
                    <td> <a href="<?php echo base_url('admin/searchservice/edit_slides/'.$row['slides_id']);  ?>" class="btn btn-sm btn-success">Edit</a>
					<a class="btn btn-sm btn-danger" href="<?php echo base_url('admin/searchservice/delete_slides/'.$row['slides_id']); ?>">Delete</a></td>
                </tr>
            <?php endforeach;
        else: ?>
            <tr><td colspan="4">No records found.</td></tr>
        <?php endif; ?>
    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
	$(document).ready(function(e) {
		var table=$('.data-table').DataTable({
			scrollCollapse: true,
			autoWidth: false,
			responsive: true,
			columnDefs: [{
				targets: "datatable-nosort",
				orderable: false,
			}],
			"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
			"language": {
				"info": "_START_-_END_ of _TOTAL_ entries",
				searchPlaceholder: "Search"
			},
		});
		new $.fn.dataTable.FixedHeader( table );
		 
		/*$('body').one('click','.delete',function(){
			var dlt = $(this).attr('value');
			var prompt = confirm("Are you Sure you want to delete?");
			if(prompt){
				//alert(dlt);
				$.ajax({
					url:"<?php echo base_url('lead/teamleader/delete_teamleader')?>",
					method:"POST",
					data:{id:dlt},
					success:function(data){
						console.log();
						//alert(data);
						//location.reload();
					}
				});
			}
		});*/
		
	});
</script>