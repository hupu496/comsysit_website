<section class="content">
	<div class="row">
    	<div class="col-md-12">
        	<div class="box">
            	<div class="box-header with-border">
                	<div class="box-title">
                      <a href="<?php echo base_url('admin/searchservice/need_help') ;?>">
                            <button class="btn btn-sm btn-success"><i class="fa fa-plus"></i>NEED & HELP</button>
                        </a>
                    </div>
                </div>
                <div class="box-body">
                	<table class="table data-table stripe hover nowrap">
                    	<thead>
                        	<tr>
                            	<th class="table-plus" >Sl No</th>
                                <th >Questions</th>
                                <th>Answer</th>
                               
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
							if(is_array($subservicelist)){ $i=0;
								foreach($subservicelist as $srlist){ $i++;                    
                            ?>
                        	<tr>
                            	<td class="table-plus" ><?php echo $i; ?></td>
                                <td ><?php echo $srlist['question']; ?></td>
								<td><?php echo $srlist['answer'];?></td>
							
                                <td >
                                 <a href="<?php echo base_url("admin/searchservice/edit_need_help/$srlist[id]"); ?>" class="btn btn-sm btn-success" ><i class="fa fa-file"></i> Edit </a>
                                  <a href="<?php echo base_url("admin/searchservice/delete_need_help/$srlist[id]"); ?>" class="btn btn-sm btn-danger delete" value="<?php echo $srlist['id'] ;?>"><i class="fa fa-trash"></i> Delete </a>
                              </td>
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
		 
		
		
	});
</script>