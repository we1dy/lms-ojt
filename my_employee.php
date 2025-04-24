<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php include('navbar_admin.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('class_sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
						<div class="pull-right">
							<a href="add_employee.php<?php echo '?id='.$get_id; ?>" class="btn btn-info"><i class="icon-plus-sign"></i> Add employee</a>
							<a onclick="window.open('print_employee.php<?php echo '?id='.$get_id; ?>')"  class="btn btn-success"><i class="icon-list"></i> employee List</a>
						</div>
						<?php include('my_employees_breadcrums.php'); ?>
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-right">
								<?php 
								$my_employee = mysqli_query($conn,"SELECT * FROM admin_class_employee
														LEFT JOIN employee ON employee.employee_id = admin_class_employee.employee_id 
														INNER JOIN class ON class.class_id = employee.class_id where admin_class_id = '$get_id' order by lastname ")or die(mysqli_error());
								$count_my_employee = mysqli_num_rows($my_employee);?>
								Number of employees: <span class="badge badge-info"><?php echo $count_my_employee; ?></span>
								</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
									<ul	 id="da-thumbs" class="da-thumbs">
										    <?php
														$my_employee = mysqli_query($conn,"SELECT * FROM admin_class_employee
														LEFT JOIN employee ON employee.employee_id = admin_class_employee.employee_id 
														INNER JOIN class ON class.class_id = employee.class_id where admin_class_id = '$get_id' order by lastname ")or die(mysqli_error());
														while($row = mysqli_fetch_array($my_employee)){
														$id = $row['admin_class_employee_id'];
														?>
											<li id="del<?php echo $id; ?>">
													<a href="#">
															<img id="employee_avatar_class" src ="admin/<?php echo $row['location'] ?>" width="124" height="140" class="img-polaroid">
														<div>
														<span>
														<p><?php ?></p>
														
														</span>
														</div>
													</a>
													<p class="class"><?php echo $row['lastname'];?></p>
													<p class="course"><?php echo $row['firstname']; ?></p>
													<a  href="#<?php echo $id; ?>" data-toggle="modal"><i class="icon-trash"></i> Remove</a>	
											</li>
											<?php include("remove_employee_modal.php"); ?>
											<?php } ?>
									</ul>
												<script type="text/javascript">
													$(document).ready( function() {
														$('.remove').click( function() {
														var id = $(this).attr("id");
															$.ajax({
															type: "POST",
															url: "remove_employee.php",
															data: ({id: id}),
															cache: false,
															success: function(html){
																$("#del"+id).fadeOut('slow', function(){ $(this).remove();}); 
																$('#'+id).modal('hide');
																$.jGrowl("Your employee is Successfully Remove", { header: 'employee Remove' });
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
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
</html>