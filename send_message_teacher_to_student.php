<?php
include('admin/dbcon.php');
include('session.php');
$employee_id = $_POST['employee_id'];
$my_message = $_POST['my_message'];


$query = mysqli_query($conn,"select * from student where employee_id = '$employee_id'")or die(mysqli_error());
$row = mysqli_fetch_array($query);
$name = $row['firstname']." ".$row['lastname'];

$query1 = mysqli_query($conn,"select * from teacher where admin_id = '$session_id'")or die(mysqli_error());
$row1 = mysqli_fetch_array($query1);
$name1 = $row1['firstname']." ".$row1['lastname'];


mysqli_query($conn,"insert into message (reciever_id,content,date_sended,sender_id,reciever_name,sender_name) values('$employee_id','$my_message',NOW(),'$session_id','$name','$name1')")or die(mysqli_error());
mysqli_query($conn,"insert into message_sent (reciever_id,content,date_sended,sender_id,reciever_name,sender_name) values('$employee_id','$my_message',NOW(),'$session_id','$name','$name1')")or die(mysqli_error());
?>