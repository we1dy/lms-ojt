<?php
include('admin/dbcon.php');
$get_id = $_POST['id'];
mysqli_query($conn,"delete from admin_class  where  admin_class_id = '$get_id' ")or die(mysqli_error());
mysqli_query($conn,"delete from admin_class_employee  where  admin_class_id = '$get_id' ")or die(mysqli_error());
mysqli_query($conn,"delete from admin_class_announcements  where  admin_class_id = '$get_id' ")or die(mysqli_error());
mysqli_query($conn,"delete from admin_notification  where  admin_class_id = '$get_id' ")or die(mysqli_error());
mysqli_query($conn,"delete from class_course_overview where  admin_class_id = '$get_id' ")or die(mysqli_error());
header('location:dasboard_admin.php');
?>