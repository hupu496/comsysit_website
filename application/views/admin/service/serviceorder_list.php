<section class="content">
	<div class="row">
        <div class="col-lg-1"></div>
                   <div class="col-lg-5 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>&#8377;<?php if(!empty($today)){
                    echo $today;
                }else{
                    echo "0";
                } ?></h3>

                <p>Today Order</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="<?php echo base_url('admin/service/serviceorder_list'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-5 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>&#8377;<?php if(!empty($all_order)){
                    echo $all_order;
                }else{
                    echo "0";
                } ?></h3>

                <p>Total Order</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="<?php echo base_url('admin/service/serviceorder_list'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-1"></div>
    	<div class="col-md-12">
        	<div class="box">
            
                <div class="box-body">
                	<table class="table data-table stripe hover nowrap">
                    	<thead>
                        	<tr>
                            	<th class="table-plus" >Sl No</th>
                                <th >Customer Name</th>
                                <th >Mobile</th>
                                <th >Email</th>
                                <th>Query</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
							if(is_array($serviceprovider)){ $i=0;
								foreach($serviceprovider as $list){
                                $i++;                    
                            ?>
                        	<tr>
                            	<td class="table-plus" ><?php echo $i; ?></td>
                                <td ><?php echo $list['name']; ?></td>
                                <td ><?php echo $list['mobile']; ?></td>
                                <td ><?php echo $list['email']; ?></td>
                                <td ><?php echo $list['query']; ?></td> 
                                <td><textarea rows="5" cols="5"><?php echo $list['remarks']; ?></textarea></td>
                                <td><a href="<?php echo base_url('homeservice/remarks/'.$list['id']); ?>" class="btn btn-sm btn-primary">update</a></td>

                                
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
		 
		$('body').one('click','.delete',function(){
			var id = $(this).data('value');
			var prompt = confirm("Are you Sure you want to delete?");
			if(prompt){
				
				$.ajax({
					url:"<?php echo base_url('admin/service/delete_order_list')?>",
					method:"POST",
					data:{id:id},
					success:function(data){
						if(data == 1){
							 swal("Blocked !", "You clicked the button!", "success");
						}
						else{
							swal("Oops!", "Something Error!", "error");
						}
						
						
					}
				});
			}
		});
		
	});
</script>
<script>
    // Add event listener for download click
    document.querySelector('.down').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default link behavior
        
        // Get the image URL from the href attribute or data attribute
        const aadharCardUrl = this.getAttribute('data-aadhar_card');

        // Create a temporary anchor element for download
        const downloadLink = document.createElement('a');
        downloadLink.href = aadharCardUrl;
        downloadLink.download = 'aadhar_card.jpg';  // Provide a default file name for download

        // Append the anchor to the body (necessary for Firefox)
        document.body.appendChild(downloadLink);

        // Trigger the download
        downloadLink.click();

        // Remove the anchor after the download starts
        document.body.removeChild(downloadLink);
    });
</script>