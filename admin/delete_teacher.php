<?php
include('dbcon.php');
if (isset($_POST['delete_admin'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($conn,"DELETE FROM admin where admin_id='$id[$i]'");
}
header("location: admins.php");
}
?>