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
					     <!-- breadcrumb -->
				<div class="pull-right">
							<a href="my_employees.php<?php echo '?id='.$get_id; ?>" class="btn btn-info"><i class="icon-arrow-left"></i> Back</a>
						</div>
										<?php $class_query = mysqli_query($conn,"select * from admin_class
										LEFT JOIN class ON class.class_id = admin_class.class_id
										LEFT JOIN course ON course.course_id = admin_class.course_id
										where admin_class_id = '$get_id'")or die(mysqli_error());
										$class_row = mysqli_fetch_array($class_query);
										?>
				
					     <ul class="breadcrumb">
							<li><a href="#"><?php echo $class_row['class_name']; ?></a> <span class="divider">/</span></li>
							<li><a href="#"><?php echo $class_row['course_code']; ?></a> <span class="divider">/</span></li>
							<li><a href="#">My employees</a><span class="divider">/</span></li>
							<li><a href="#"><b>Add employee</b></a></li>
						</ul>
						
						 <!-- end breadcrumb -->
					 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
									<form method="post" action="">

							
										<button name="submit" type="submit" class="btn btn-info"><i class="icon-save"></i>&nbsp;Add employee</button>
												<br>
												<br>
                           
							 <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
                          
						 <thead>
		
                                <tr>
                               
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Course Year and Section</th>
                  
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
					
                                         <?php
							
							
										$a = 0 ;
										$query = mysqli_query($conn,"select * from employee LEFT JOIN class on class.class_id = employee.class_id
												
										") or die(mysqli_error());
										while ($row = mysqli_fetch_array($query)) {
                                        $id = $row['employee_id'];
										$a++;
									
                                        ?>
								
										<tr>
										<input type="hidden" name="test" value="<?php echo $a; ?>">
                                        <td width="70"><img  class="img-rounded" src="admin/<?php echo $row['location']; ?>" height="50" width="40"></td>
                                        <td><?php echo $row['firstname'] . " " . $row['lastname']; ?></td> 
										<td><?php echo $row['class_name']; ?></td> 
								
										<td width="80">
										<select name="add_employee<?php echo $a; ?>" class="span12">
										<option></option>
										<option>Add</option>
										</select>
										
										<input type="hidden" name="employee_id<?php echo $a; ?>" value="<?php echo $id; ?>">
										<input type="hidden" name="class_id<?php echo $a; ?>" value="<?php echo $get_id; ?>">
										<input type="hidden" name="admin_id<?php echo $a; ?>" value="<?php echo $session_id; ?>">
										
										</td>
									
                                   <?php } ?>    
										
                                </tr>
                         
                            </tbody>
                        </table>
					
						</form>
						
  										
	<?php

if (isset($_POST['submit'])){

	$test = $_POST['test'];
	for($b = 1; $b <=  $test; $b++)
	{
	

		
		
	$test1 = "employee_id".$b;
	$test2 = "class_id".$b;
	$test3 = "admin_id".$b;
	$test4 = "add_employee".$b;
	
	$id = $_POST[$test1];
	$class_id = $_POST[$test2];
	$admin_id = $_POST[$test3];
	$Add = $_POST[$test4];
	
 	$query = mysqli_query($conn,"select * from admin_class_employee where employee_id = '$id' and admin_class_id = '$class_id' ")or die(mysqli_error());
	$count = mysqli_num_rows($query); 
	
 	if ($count > 0){ ?>
	<script>
	 alert('employee Already in the class'); 
	</script>
	<script>
	window.location = "add_employee.php<?php echo '?id='.$get_id; ?>"; 
	</script>
	
	<?php
	}else  
	if($Add == 'Add'){
	
	
	mysqli_query($conn,"insert into admin_class_employee (employee_id,admin_class_id,admin_id) values('$id','$class_id','$admin_id') ")or die(mysqli_error());
	
	
	}else{
	
	
	
	}
	

	
?>
<script>
 window.location = "my_employees.php<?php echo '?id='.$get_id; ?>"; 
</script>
	
	<?php
	}
	
	
	
	}
	 
	
	?>
	
					
                      
								
                         
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