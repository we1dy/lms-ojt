<?php
		include('admin/dbcon.php');
		session_start();
		$username = $_POST['username'];
		$password = $_POST['password'];
		/* employee */
			$query = "SELECT * FROM employee WHERE username='$username' AND password='$password'";
			$result = mysqli_query($conn,$query)or die(mysqli_error());
			$row = mysqli_fetch_array($result);
			$num_row = mysqli_num_rows($result);
		/* admin */
		$query_admin = mysqli_query($conn,"SELECT * FROM admin WHERE username='$username' AND password='$password'")or die(mysqli_error());
		$num_row_admin = mysqli_num_rows($query_admin);
		$row_teahcer = mysqli_fetch_array($query_admin);
		if( $num_row > 0 ) { 
		$_SESSION['id']=$row['employee_id'];
		echo 'true_employee';	
		}else if ($num_row_admin > 0){
		$_SESSION['id']=$row_teahcer['admin_id'];
		echo 'true';
		
		 }else{ 
				echo 'false';
		}	
				
		?>