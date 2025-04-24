<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar_employee.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar/dashboard_sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					    <!-- breadcrumb -->
				
									
					     <ul class="breadcrumb">
						<?php
						$school_year_query = mysqli_query($conn,"select * from school_year order by school_year DESC")or die(mysqli_error());
						$school_year_query_row = mysqli_fetch_array($school_year_query);
				 		$school_year = $school_year_query_row['school_year'];
						?>
							<li><a href="#"><b>Courses</b></a><span class="divider">/</span></li>
							<li><a href="#">School Year: <?php echo $school_year_query_row['school_year']; ?></a></li>
						</ul>
						 <!-- end breadcrumb -->
					 
				
					 
                        <!-- block -->
                        <!-- <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-right">
									<?php $query = mysqli_query($conn,"select * from admin_class_employee
														LEFT JOIN admin_class ON admin_class.admin_class_id = admin_class_employee.admin_class_id 
														LEFT JOIN class ON class.class_id = admin_class.class_id 
														LEFT JOIN course ON course.course_id = admin_class.course_id
														LEFT JOIN admin ON admin.admin_id = admin_class.admin_id
														where employee_id = '$session_id' and school_year = '$school_year'
														")or die(mysqli_error());
														$count = mysqli_num_rows($query);
									?>
												<span class="badge badge-info"><?php echo $count; ?></span>
								</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								
  										<ul	 id="da-thumbs" class="da-thumbs">
													<?php
														if ($count != '0'){
														while($row = mysqli_fetch_array($query)){
														$id = $row['admin_class_id'];	
													?>
											<li>
												<a href="my_classmates.php<?php echo '?id='.$id; ?>">
														<img src ="<?php echo $row['thumbnails'] ?>" width="124" height="140" class="img-polaroid">
													<div>
													<span>
													<p><?php echo $row['class_name']; ?></p>
													
													</span>
													</div>
												</a>
												<p class="class"><?php echo $row['class_name']; ?></p>
												<p class="course"><?php echo $row['course_code']; ?></p>
												<p class="course"><?php echo $row['firstname']." ".$row['lastname']?></p>
													
											
											</li>
								
			
									<?php }}else{ ?>
									<div class="alert alert-info"><i class="icon-info-sign"></i> You are currently not enroll to your class</div>
									<?php } ?>	
									</ul>
						
                                </div>
                            </div>
                        </div> -->
                        <!-- /block -->
                    </div>


                </div>
			
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
</html>