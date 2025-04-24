<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('course_sidebar.php'); ?>
		
						<div class="span9" id="content">
		                    <div class="row-fluid">
									 <a href="add_course.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add course</a>
		                        <!-- block -->
		                        <div id="" class="block">
		                            <div class="navbar navbar-inner block-header">
		                                <div class="muted pull-left">Edit course</div>
		                            </div>
		                            <div class="block-content collapse in">
									<a href="courses.php"><i class="icon-arrow-left"></i> Back</a>
									
									<?php
									$query = mysqli_query($conn,"select * from course where course_id = '$get_id'")or die(mysqli_error());
									$row = mysqli_fetch_array($query);
									?>
									
									    <form class="form-horizontal" method="post">
										<div class="control-group">
											<label class="control-label" for="inputEmail">course Code</label>
											<div class="controls">
											<input type="text" value="<?php echo $row['course_code']; ?>" name="course_code" id="inputEmail" placeholder="course Code">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputPassword">course Title</label>
											<div class="controls">
											<input type="text" value="<?php echo $row['course_title']; ?>" class="span8" name="title" id="inputPassword" placeholder="course Title" required>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputPassword">Number of Units</label>
											<div class="controls">
											<input type="text" value="<?php echo $row['unit']; ?>" class="span1" name="unit" id="inputPassword" required>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputPassword">Description</label>
											<div class="controls">
													<textarea name="description" id="ckeditor_full">
													<?php echo $row['description']; ?>
													</textarea>
											</div>
										</div>
												
																		
											
										<div class="control-group">
										<div class="controls">
										
										<button name="update" type="submit" class="btn btn-info"><i class="icon-save icon-large"></i> Update</button>
										</div>
										</div>
										</form>
										
										<?php
										if (isset($_POST['update'])){
										$course_code = $_POST['course_code'];
										$title = $_POST['title'];
										$unit = $_POST['unit'];
										$description = $_POST['description'];
										
										
									
										mysqli_query($conn,"update course set course_code = '$course_code' ,
																		course_title = '$title',
																		unit  = '$unit',
																		description = '$description'
																		where course_id = '$get_id' ")or die(mysqli_error());
																		
										mysqli_query($conn,"insert into activity_log (date,username,action) values(NOW(),'$user_username','Edit course $course_code')")or die(mysqli_error());
										
										?>
										<script>
										window.location = "courses.php";
										</script>
										<?php
										}
										
										
										?>
									
								
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