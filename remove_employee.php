<?php
include('admin/dbcon.php');
$id = $_POST['id'];
mysqli_query($conn,"delete from admin_class_employee where admin_class_employee_id = '$id'")or die(mysqli_error());
?>

