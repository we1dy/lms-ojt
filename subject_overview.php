<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php include('navbar_admin.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('course_overview_link.php'); ?>
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
                                <div id="" class="muted pull-right">
									<?php $query = mysqli_query($conn,"select * from admin_class
										LEFT JOIN class_course_overview ON class_course_overview.admin_class_id = admin_class.admin_class_id
										where class_course_overview.admin_class_id = '$get_id'")or die(mysqli_error());
										$row = mysqli_fetch_array($query);
										$id = $row['class_course_overview_id'];
										$count = mysqli_num_rows($query);
									if ($count > 0){
									?>
										  <a href="edit_course_overview.php<?php echo '?id='.$get_id; ?>&<?php echo 'course_id='.$id; ?>" class="btn btn-info"><i class="icon-pencil"></i> Edit course Overview</a>
									 <?php }else{ ?>
										     <a href="add_course_overview.php<?php echo '?id='.$get_id; ?>" class="btn btn-success"><i class="icon-plus-sign"></i> Add course Overview</a>
									 <?php } ?>
								</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
										<?php echo $row['content']; ?>
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