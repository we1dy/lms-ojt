	<?php include('dbcon.php'); ?>
	<form action="delete_employee.php" method="post">
	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
	<a data-toggle="modal" href="#employee_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
	<div class="pull-right">
			    <ul class="nav nav-pills">
				<li class="">
					<a href="employees.php">All</a>
				</li>
				<li class="">
					<a href="unreg_employees.php">Unregistered</a>
				</li>
				<li class="active">
				<a href="reg_employees.php">Registered</a>
				</li>
				</ul>
	</div>
	<?php include('modal_delete.php'); ?>
		<thead>
		<tr>
					<th></th>
				
					<th>Name</th>
					<th>ID Number</th>
			
					<th>Course Yr & Section</th>
					<th></th>
		</tr>
		</thead>
		<tbody>
			
		<?php
	$query = mysqli_query($conn,"select * from employee LEFT JOIN class ON employee.class_id = class.class_id where status = 'Registered' ORDER BY employee.employee_id DESC") or die(mysqli_error());
	while ($row = mysqli_fetch_array($query)) {
		$id = $row['employee_id'];
		?>
	
		<tr>
		<td width="30">
		<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
		</td>
	
		<td><?php echo $row['firstname'] . " " . $row['lastname']; ?></td> 
		<td><?php echo $row['username']; ?></td> 
	
		<td width="100"><?php echo $row['class_name']; ?></td> 
	
		<td width="30"><a href="edit_employee.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil"></i> </a></td>
	
		</tr>
	<?php } ?>    
	
		</tbody>
	</table>
	</form>