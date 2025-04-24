<?php
include('admin/dbcon.php');
include('session.php');
	$content = $_POST['content'];		
	$id=$_POST['selector'];
		$N = count($id);
		for($i=0; $i < $N; $i++)
		{			
			mysqli_query($conn,"insert into admin_class_announcements (admin_class_id,admin_id,content,date) values('$id[$i]','$session_id','$content',NOW())")or die(mysqli_error());
			mysqli_query($conn,"insert into notification (admin_class_id,notification,date_of_notification,link) value('$id[$i]','Add Annoucements',NOW(),'announcements_employee.php')")or die(mysqli_error());
		}
?>
 

