<?php
include('admin/dbcon.php');
include('session.php');
if (isset($_POST['delete_user'])){
$id=$_POST['selector'];

$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($conn,"select * from files  where file_id = '$id[$i]' ")or die(mysqli_error());
	while($row = mysqli_fetch_array($result)){
	
	$fname = $row['fname'];
	$floc = $row['floc'];
	$fdesc = $row['fdesc'];
	$admin_id = $row['admin_id'];
	
	
	mysqli_query($conn,"insert into employee_backpack (floc,fdatein,fdesc,employee_id,fname) value('$floc',NOW(),'$fdesc','$session_id','$fname')")or die(mysqli_error());
	
	
	}
}
?>
<script>
window.location = 'backpack.php';
</script>
<?php
}
?>