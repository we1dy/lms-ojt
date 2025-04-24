<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php include('navbar_employee.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('my_classmates_link.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					     <!-- breadcrumb -->
					<?php $query = mysqli_query($conn,"select * from admin_class_employee
					LEFT JOIN admin_class ON admin_class.admin_class_id = admin_class_employee.admin_class_id 
					JOIN class ON class.class_id = admin_class.class_id 
					JOIN course ON course.course_id = admin_class.course_id
					where employee_id = '$session_id'
					")or die(mysqli_error());
					$row = mysqli_fetch_array($query);
					$id = $row['admin_class_employee_id'];	
					?>
					     <ul class="breadcrumb">
							<li><a href="#"><?php echo $row['class_name']; ?></a> <span class="divider">/</span></li>
							<li><a href="#"><?php echo $row['course_code']; ?></a> <span class="divider">/</span></li>
							<li><a href="#">School Year: <?php echo $row['school_year']; ?></a> <span class="divider">/</span></li>
							<li><a href="#"><b>My Classmates</b></a></li>
						</ul>
						
						 <!-- end breadcrumb -->
					 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
									<ul	 id="da-thumbs" class="da-thumbs">
										    <?php
										 
										 
														$my_employee = mysqli_query($conn,"SELECT *
														FROM admin_class_employee
														LEFT JOIN employee ON employee.employee_id = admin_class_employee.employee_id
														INNER JOIN class ON class.class_id = employee.class_id where admin_class_id = '$get_id' order by lastname ")or die(mysqli_error());
														
														while($row = mysqli_fetch_array($my_employee)){
														$id = $row['admin_class_employee_id'];
														?>
														
											<li id="del<?php echo $id; ?>">
												<a  class="classmate_cursor" href="#">
														<img id="employee_avatar_class" src ="admin/<?php echo $row['location'] ?>" width="124" height="140" class="img-polaroid">
													<div><span></span></div>
												</a>
												<p class="class"><?php echo $row['lastname'];?></p>
												<p class="course"><?php echo $row['firstname']; ?></p>
											</li>
									<?php } ?>
									</ul>
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