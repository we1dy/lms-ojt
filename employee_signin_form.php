<<<<<<< HEAD:student_signin_form.php
			<form id="signin_student" class="form-signin" method="post">
			<h3 class="form-signin-heading"><i class="icon-lock"></i> Sign up as Employee</h3>
=======
			<form id="signin_employee" class="form-signin" method="post">
			<h3 class="form-signin-heading"><i class="icon-lock"></i> Sign up as employee</h3>
>>>>>>> 9d28a60d8145b1d7730bdd61ef673dbce7dc8cfe:employee_signin_form.php
			<input type="text" class="input-block-level" id="username" name="username" placeholder="ID Number" required>
			<input type="text" class="input-block-level" id="firstname" name="firstname" placeholder="Firstname" required>
			<input type="text" class="input-block-level" id="lastname" name="lastname" placeholder="Lastname" required>
			<label>Department</label>
			<select name="class_id" class="input-block-level span5"> 
				<option></option>
				<?php
				$query = mysqli_query($conn,"select * from class order by class_name ")or die(mysqli_error());
				while($row = mysqli_fetch_array($query)){
				?>
				<option value="<?php  echo $row['class_id']; ?>"><?php echo $row['class_name']; ?></option>
				<?php
				}
				?>
			</select>
			<input type="password" class="input-block-level" id="password" name="password" placeholder="Password" required>
			<input type="password" class="input-block-level" id="cpassword" name="cpassword" placeholder="Re-type Password" required>
			<button id="signin" name="login" class="btn btn-info" type="submit"><i class="icon-check icon-large"></i> Sign in</button>
			</form>
			
		<!-- try -->
			
			<script>
			jQuery(document).ready(function(){
			jQuery("#signin_employee").submit(function(e){
					e.preventDefault();
						
						var password = jQuery('#password').val();
						var cpassword = jQuery('#cpassword').val();
					
					
					if (password == cpassword){
					var formData = jQuery(this).serialize();
					$.ajax({
						type: "POST",
						url: "employee_signup.php",
						data: formData,
						success: function(html){
						if(html=='true')
						{
<<<<<<< HEAD:student_signin_form.php
						$.jGrowl("Welcome to PBCOM LMS", { header: 'Sign up Success' });
=======
						$.jGrowl("Welcome to PBCOM Learning Management System", { header: 'Sign up Success' });
>>>>>>> 9d28a60d8145b1d7730bdd61ef673dbce7dc8cfe:employee_signin_form.php
						var delay = 2000;
							setTimeout(function(){ window.location = 'dashboard_employee.php'  }, delay);  
						}else if(html=='false'){
<<<<<<< HEAD:student_signin_form.php
							$.jGrowl("Employee does not found in the database Please Sure to Check Your ID Number or Firstname, Lastname and the Department You Belong. ", { header: 'Sign Up Failed' });
=======
							$.jGrowl("employee does not found in the database Please Sure to Check Your ID Number or Firstname, Lastname and the Section You Belong. ", { header: 'Sign Up Failed' });
>>>>>>> 9d28a60d8145b1d7730bdd61ef673dbce7dc8cfe:employee_signin_form.php
						}
						}
						
						
					});
			
					}else
						{
<<<<<<< HEAD:student_signin_form.php
						$.jGrowl("Employee does not found in the database", { header: 'Sign Up Failed' });
=======
						$.jGrowl("employee does not found in the database", { header: 'Sign Up Failed' });
>>>>>>> 9d28a60d8145b1d7730bdd61ef673dbce7dc8cfe:employee_signin_form.php
						}
				});
			});
			</script>

			
		
			<a onclick="window.location='index.php'" id="btn_login" name="login" class="btn" type="submit"><i class="icon-signin icon-large"></i> Click here to Login</a>
			
			
			
				
		
					