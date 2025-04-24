<?php
include('dbcon.php');
$session_id = $_POST['session_id'];
$course_id = $_POST['course_id'];
$class_id = $_POST['class_id'];
$school_year = $_POST['school_year'];
$query = mysqli_query($conn,"select * from admin_class where course_id = '$course_id' and class_id = '$class_id' and admin_id = '$session_id' and school_year = '$school_year' ")or die(mysqli_error());
$count = mysqli_num_rows($query);
if ($count > 0){ 
echo "true";
}else{

mysqli_query($conn,"insert into admin_class (admin_id,course_id,class_id,thumbnails,school_year) values('$session_id','$course_id','$class_id','admin/uploads/thumbnails.jpg','$school_year')")or die(mysqli_error());

$admin_class = mysqli_query($conn,"select * from admin_class order by admin_class_id DESC")or die(mysqli_error());
$admin_row = mysqli_fetch_array($admin_class);
$admin_id = $admin_row['admin_class_id'];


$insert_query = mysqli_query($conn,"select * from employee where class_id = '$class_id'")or die(mysqli_error());
while($row = mysqli_fetch_array($insert_query)){
$id = $row['employee_id'];
mysqli_query($conn,"insert into admin_class_employee (admin_id,employee_id,admin_class_id) value('$session_id','$id','$admin_id')")or die(mysqli_error());
echo "yes";
}
}
?>