					<?php
						$school_year_query = mysqli_query($conn,"select * from school_year order by school_year DESC")or die(mysqli_error());
						$school_year_query_row = mysqli_fetch_array($school_year_query);
						$school_year = $school_year_query_row['school_year'];
						?>
				
					<?php $query_yes = mysqli_query($conn,"select * from admin_notification
					LEFT JOIN notification_read_admin on admin_notification.admin_notification_id =  notification_read_admin.notification_id
					where admin_id = '$session_id' 
					")or die(mysqli_error());
					$count_no = mysqli_num_rows($query_yes);
		            ?>
					<?php $query = mysqli_query($conn,"select * from admin_notification
					LEFT JOIN admin_class on admin_class.admin_class_id = admin_notification.admin_class_id
					LEFT JOIN employee on employee.employee_id = admin_notification.employee_id
					LEFT JOIN assignment on assignment.assignment_id = admin_notification.assignment_id 
					LEFT JOIN class on admin_class.class_id = class.class_id
					LEFT JOIN course on admin_class.course_id = course.course_id
					where admin_class.admin_id = '$session_id' 
					")or die(mysqli_error());
					$count = mysqli_num_rows($query);
		            ?>
					
					<?php $not_read = $count -  $count_no; ?>