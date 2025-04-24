<div class="span3" id="">
	<div class="row-fluid">
	
				      <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"><h4><i class="icon-pencil"></i> Create Message</h4></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
									<ul class="nav nav-tabs">
										<li>
											<a href="admin_message.php">For admin</a>
										</li>
										<li class="active"><a href="admin_message_admin.php">For employee</a></li>
									</ul>
									
		
								<form method="post" id="send_message_employee">
									<div class="control-group">
											<label>To:</label>
                                          <div class="controls">
                                            <select name="employee_id"  class="chzn-select" required>
                                             	<option></option>
											<?php
											$query = mysqli_query($conn,"select * from admin_class_employee
																  LEFT JOIN employee ON employee.employee_id = admin_class_employee.employee_id
											 group by admin_class_employee.employee_id order by firstname ASC");
											while($row = mysqli_fetch_array($query)){
											
											?>
											<option value="<?php echo $row['employee_id']; ?>"><?php echo $row['firstname']; ?> <?php echo $row['lastname']; ?> </option>
											<?php } ?>
                                            </select>
                                          </div>
                                        </div>
										
										<div class="control-group">
											<label>Content:</label>
                                          <div class="controls">
											<textarea name="my_message" class="my_message" required></textarea>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
												<button  class="btn btn-info"><i class="icon-envelope-alt"></i> Send </button>

                                          </div>
                                        </div>
                                </form>
						
								
			<script>
			jQuery(document).ready(function(){
			jQuery("#send_message_employee").submit(function(e){
					e.preventDefault();
					var formData = jQuery(this).serialize();
					$.ajax({
						type: "POST",
						url: "send_message_admin_to_employee.php",
						data: formData,
						success: function(html){
						
						$.jGrowl("Message Successfully Sended", { header: 'Message Sent' });
						var delay = 2000;
							setTimeout(function(){ window.location = 'admin_message.php'  }, delay);  
						
						
						}
						
					});
					return false;
				});
			});
			</script>
								
								
								</div>
                            </div>
                        </div>
                        <!-- /block -->
						

	</div>
</div>