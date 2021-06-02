<?php

// db connection
$conn=mysqli_connect("localhost:3307","root","","db_internship");

$id=$_GET['deleteid'];

$q=mysqli_query($conn,
        "delete from student_info where stu_id='{$id}'") 
or die(mysqli_error($conn));

if($q){
   echo "<script>alert('record delete');window.location='withouttheamtable.php';</script>";
}
?>
