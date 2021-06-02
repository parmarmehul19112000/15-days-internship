<?php
// db connection
$conn=mysqli_connect("localhost:3307","root","","db_internship");
// query
$q=mysqli_query($conn,"select * from tbl_user") 
        or die(mysqli_error($conn));
    // below function fetch data as numerical array
$row=mysqli_fetch_row($q);
//debuag
echo "<pre>";
print_r($row);
echo $row[0].$row[1].$row[2].$row[3];

//numerical and associative

$row= mysqli_fetch_array($q);
echo "<pre>";
print_r($row);
echo $row[0].$row[1].$row[2].$row[3]."<br>";
echo $row['user_id'].$row['user_name'].$row['user_gender'].$row['user_mobile'];
?>