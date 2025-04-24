<?php
include('dbcon.php');
$get_id = $_GET['id'];
mysqli_query($conn,"update admin set admin_stat = 'Deactivated' where admin_id = '$get_id'");
header('location:admins.php');
?>