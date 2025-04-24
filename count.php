					<?php
						$school_year_query = mysqli_query($conn,"select * from school_year order by school_year DESC")or die(mysqli_error());
						$school_year_query_row = mysqli_fetch_array($school_year_query);
						$school_year = $school_year_query_row['school_year'];
						?>
				
	 				<?php $query_yes = mysqli_query($conn,"select * from admin_class_employee
					LEFT JOIN admin_class ON admin_class.admin_class_id = admin_class_employee.admin_class_id 
					LEFT JOIN class ON class.class_id = admin_class.class_id 
					LEFT JOIN course ON course.course_id = admin_class.course_id
					LEFT JOIN admin ON admin.admin_id = admin_class_employee.admin_id 
					JOIN notification ON notification.admin_class_id = admin_class.admin_class_id 
					where admin_class_employee.employee_id = '$session_id' and school_year = '$school_year'   order by notification.date_of_notification DESC
					")or die(mysqli_error());
					$count_no = mysqli_num_rows($query_yes);

		
		            ?>
					<?php $query_no = mysqli_query($conn,"select * from notification 
					LEFT JOIN notification_read ON notification_read.notification_id = notification.notification_id
					where notification_read.employee_id  = '$session_id'
					")or die(mysqli_error());
					$count_yes = mysqli_num_rows($query_no);
					
		            ?>
					
					<?php $not_read = $count_no -  $count_yes; ?>