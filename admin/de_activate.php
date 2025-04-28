<?php
include('dbcon.php');
$get_id = $_GET['id'];
mysqli_query($conn,"update teacher set teacher_stat = 'Deactivated' where admin_id = '$get_id'");
header('location:teachers.php');
?>