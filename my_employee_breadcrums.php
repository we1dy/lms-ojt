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
		<li><a href="#">School Year: <?php echo $class_row['school_year']; ?></a> <span class="divider">/</span></li>
		<li><a href="#"><b>My employees</b></a></li>
	</ul>
	<!-- end breadcrumb -->