<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php include('navbar_employee.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('course_overview_link_employee.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					  <!-- breadcrumb -->
				
										<?php $class_query = mysqli_query($conn,"select * from admin_class
										LEFT JOIN class ON class.class_id = admin_class.class_id
										LEFT JOIN course ON course.course_id = admin_class.course_id
										where admin_class_id = '$get_id'")or die(mysqli_error());
										$class_row = mysqli_fetch_array($class_query);
										?>
				
					     <ul class="breadcrumb">
							<li><a href="#"><?php echo $class_row['class_name']; ?></a> <span class="divider">/</span></li>
							<li><a href="#"><?php echo $class_row['course_code']; ?></a> <span class="divider">/</span></li>
							<li><a href="#"><b>course Overview</b></a></li>
						</ul>
						 <!-- end breadcrumb -->
					 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								
  											<?php $query = mysqli_query($conn,"select * from admin_class
										LEFT JOIN class ON class.class_id = admin_class.class_id
										LEFT JOIN course ON course.course_id = admin_class.course_id
										LEFT JOIN admin ON admin.admin_id = admin_class.admin_id
										
										where admin_class_id = '$get_id'")or die(mysqli_error());
										$row = mysqli_fetch_array($query);
										$id = $row['admin_class_id'];
				
										?>
										
										
										Instructor: <strong><?php echo $row['firstname']; ?> <?php echo $row['lastname']; ?></strong>
															<br>
															<img id="avatar" class="img-polaroid" src="admin/<?php echo $row['location']; ?>" width>
															<p><a href=""><i class="icon-search"></i> view info</a></p>
															<hr>
										<?php $query = mysqli_query($conn,"select * from admin_class
											LEFT JOIN class_course_overview ON class_course_overview.admin_class_id = admin_class.admin_class_id
											where class_course_overview.admin_class_id = '$get_id'")or die(mysqli_error());
											$row_course = mysqli_fetch_array($query); ?>
										<?php echo $row_course['content']; ?>
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