<?php

$host="localhost:3307";
$username="root";
$password="";
$dbname="db_internship";

// connection function

$conn= mysqli_connect($host, $username, $password, $dbname);
$q= mysqli_query($conn,
        "insert into tbl_user(user_name,user_gender,user_mobile)values('mehul','male','938974873')")
or die("error". mysqli_error($conn));

if($q){
    echo "<script>alert(added record)</script>";
}
?>