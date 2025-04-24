<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
<?php $course_id = $_GET['course_id']; ?>
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
								<a href="course_overview.php<?php echo '?id='.$get_id; ?>" class="btn btn-success"><i class="icon-arrow-left"></i> Back</a>
								</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<?php 
								$course_query = mysqli_query($conn,"select * from class_course_overview where  class_course_overview_id  = '$course_id'")or die(mysqli_error());
								$course_row = mysqli_fetch_array($course_query);
								?>
														<form class="form-horizontal" method="post">
																<div class="control-group">
																	<label class="control-label" for="inputPassword">course Overview Content:</label>
																	<div class="controls">
																			<textarea name="content" id="ckeditor_full"><?php echo $course_row['content']; ?></textarea>
																	</div>
																</div>
														<div class="control-group">
														<div class="controls">
														
														<button name="save" type="submit" class="btn btn-success"><i class="icon-save"></i> Save</button>
														</div>
														</div>
														</form>
										<?php
										if (isset($_POST['save'])){
										$content = $_POST['content'];
										mysqli_query($conn,"update class_course_overview set content = '$content' where class_course_overview_id = '$course_id'")or die(mysqli_error());
										?>
										<script>
											window.location = 'course_overview.php<?php echo '?id='.$get_id; ?>';
										</script>
										<?php
										}
										
										?>
						
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