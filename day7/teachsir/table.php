<?php

// db connection
$conn=mysqli_connect("localhost:3307","root","","db_internship");
// query
$q=mysqli_query($conn,"select * from tbl_user") 
        or die(mysqli_error($conn));

echo "<table border=1>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>NAME</th>";
echo "<th>GENDER</th>";
echo "<th>MOBILE</th>";
echo "<th>ACTION</th>";

while($row = mysqli_fetch_array($q)) {
    
    echo "<tr>";
echo "<td>{$row['user_id']}</td>";
echo "<td>{$row['user_name']}</td>";
echo "<td>{$row['user_gender']}</td>";
echo "<td>{$row['user_mobile']}</td>";
echo "<td><a href='delete.php?deleteid={$row['user_id']}'>DELETE</a></td>";
echo "</tr>";
}
echo "</table>";
echo "<a href='insertrecord.php'>add record</a>";
?>