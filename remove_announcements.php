<?php include('admin/dbcon.php'); ?>
<?php
$id = $_POST['id'];
mysqli_query($conn,"delete from admin_class_announcements where admin_class_announcements_id = '$id'")or die(mysqli_error());
mysqli_query($conn,"delete from admin_class_announcements where admin_class_announcements_id = '$id'")or die(mysqli_error());
?>

