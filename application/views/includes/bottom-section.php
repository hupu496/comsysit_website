            	</div>
            <footer class="main-footer">
                <div class="pull-right hidden-xs hidden">
                	<b>Version</b> 2.4.0
                </div>
                <strong>Copyright &copy; <?php echo SESSION_YEAR;?> <a href="#" class=""></a><?php echo OUR_BRAND;?></strong> All rights reserved.
            </footer>
        </div>
        <!-- jQuery UI 1.11.4 -->
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
          	$.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Bootstrap 3.3.7 -->
        <script src="<?php echo file_url("includes/bootstrap/js/bootstrap.min.js"); ?>"></script>
        <!-- Slimscroll -->
        <script src="<?php echo file_url("includes/plugins/slimScroll/jquery.slimscroll.min.js"); ?>"></script>
        <!-- FastClick -->
        <script src="<?php echo file_url("includes/plugins/fastclick/fastclick.js"); ?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo file_url("includes/dist/js/adminlte.min.js"); ?>"></script>
        <script src="<?php echo base_url("/assets/ckeditor4-4.22.1/ckeditor.js"); ?>"></script>
        <script src="<?php echo base_url("/assets/ckeditor4-4.22.1/config.js"); ?>"></script>
        <?php
		if(!empty($bottom_script)){
		  foreach($bottom_script as $key=>$script){
			  if($key=="link"){
					if(is_array($script)){
						foreach($script as $single_script){
							echo "<script src='$single_script'></script>\n\t\t";
						}
					}
					else{
						echo "<script src='$script'></script>\n\t\t";
					}
			  }
			  elseif($key=="file"){
				if(is_array($script)){
					foreach($script as $single_script){
						echo "<script src='".file_url("$single_script")."'></script>\n\t\t";
					}
				}
				else{
					echo "<script src='".file_url("$script")."'></script>\n\t\t";
				}
			  }
		  }
		}
		?>
        <script src="<?php echo file_url('includes/custom/custom.js'); ?>"></script>
        <script>
    function fetchNotifications() {
        $.ajax({
            url: '<?php echo base_url("admin/service/get_notifications"); ?>', // URL to your PHP function
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                // Update notification count
                $('.notificationCount').text(response.totalMessages);

                // Update notification list
                var notificationHTML = '';

                // Loop through book notifications
                if (response.serviceorder.length > 0) {
                    response.serviceorder.forEach(function(item) {
                        notificationHTML += '<li>' +
                            '<a href="<?php echo base_url('admin/service/serviceorder_list'); ?>">' +
                                    '<p>Name: ' + item.name + '</p>' +
                                '<p>Service Order: ' + item.service + 
                                '<small><i class="fa fa-clock-o"></i> 5 mins</small></p>' +
                                
                            '</a>' +
                        '</li>';
                    });
                }

                // Loop through franchise notifications
                if (response.contact_us.length > 0) {
                    response.contact_us.forEach(function(item) {
                        notificationHTML += '<li>' +
                            '<a href="<?php echo base_url('aadmin/user_cont/contactlist'); ?>">' +
                                    '<p>Contact Name: ' + item.name +'</p>' +
                                '<p>Contact Email: ' + item.email + 
                                '<small><i class="fa fa-clock-o"></i> 5 mins</small></p>' +
                                '<p>' + item.service + '</p>' +
                            '</a>' +
                        '</li>';
                    });
                }

                if (response.meeting.length > 0) {
                    response.meeting.forEach(function(item) {
                        notificationHTML += '<li>' +
                            '<a href="<?php echo base_url('aadmin/user_cont/contactlist'); ?>">' +
                                
                                    '<p>Meeting Name: ' + item.name +'</p>' +
                               
                                '<p>Meeting Email: ' + item.email + 
                                '<small><i class="fa fa-clock-o"></i> 5 mins</small></p>' +
                                '<p>' + item.subject + '</p>' +
                            '</a>' +
                        '</li>';
                    });
                }

                // Update the list in the DOM
                $('#notificationList').html(notificationHTML);
            },
            error: function(error) {
                console.error('Error fetching notifications:', error);
            }
        });
    }

    // Fetch notifications every 5 seconds
    setInterval(fetchNotifications, 5000);

    // Fetch notifications on page load
    fetchNotifications();
</script>
<script>
    // Function to mark all notifications as seen
    $('#seeAllMessages').click(function(e) {
        e.preventDefault();

        $.ajax({
            url: '<?php echo base_url("admin/service/mark_all_notifications_as_seen"); ?>',
            type: 'POST',
            dataType: 'json',
            success: function(response) {
                if (response.status === 'success') {
                    // Clear the notification count and list
                    $('.notificationCount').text('0');
                    $('#notificationList').html('');

                    
                }
            },
            error: function(error) {
                console.error('Error updating notifications:', error);
            }
        });
    });
</script>
        
  	</body>
</html>