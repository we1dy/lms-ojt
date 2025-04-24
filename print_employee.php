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
						
							<a id="print" onclick="window.print()"  class="btn btn-success"><i class="icon-print"></i> Print employee List</a>
						</div>
						<?php include('my_employees_breadcrums.php'); ?>
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-right">
					
								</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
						
												<table cellpadding="0" cellspacing="0" border="0" class="table" id="">
							
										<thead>
										        <tr>
												<th>Firstname</th>
												<th>Lastname</th>
												</tr>
												
										</thead>
										<tbody>
											
												<?php
														$my_employee = mysqli_query($conn,"SELECT * FROM admin_class_employee
														LEFT JOIN employee ON employee.employee_id = admin_class_employee.employee_id 
														INNER JOIN class ON class.class_id = employee.class_id where admin_class_id = '$get_id' order by lastname ")or die(mysqli_error());
														while($row = mysqli_fetch_array($my_employee)){
														$id = $row['admin_class_employee_id'];
														?>                          
										<tr id="del<?php echo $id; ?>">
									
										 <td><?php echo $row['firstname']; ?></td>
                                         <td><?php  echo $row['lastname']; ?></td>
                             
                             

                               
                                </tr>
                         
						 <?php } ?>
						   
                              
										</tbody>
									</table>
										
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