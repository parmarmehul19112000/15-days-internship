<?php
// db connection
$conn=mysqli_connect("localhost:3307","root","","db_internship");
// query
$q=mysqli_query($conn,"select * from student_info") 
        or die(mysqli_error($conn));


echo "<table border=1>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>NAME</th>";
echo "<th>GENDER</th>";
echo "<th>DOB</th>";
echo "<th>EMAIL</th>";
echo "<th>MOBILE</th>";
echo "<th>ADDRESS</th>";
echo "<th>AREA</th>";
echo "<th>BLOODGROUP</th>";
echo "<th>PASSWORD</th>";
echo "<th>ACTION</th>";

while($row = mysqli_fetch_array($q)) {
    
    echo "<tr>";
echo "<td>{$row['stu_id']}</td>";
echo "<td>{$row['stu_name']}</td>";
echo "<td>{$row['stu_gender']}</td>";
echo "<td>{$row['stu_dob']}</td>";
echo "<td>{$row['stu_email']}</td>";
echo "<td>{$row['stu_mobile']}</td>";
echo "<td>{$row['stu_address']}</td>";
echo "<td>{$row['stu_area']}</td>";
echo "<td>{$row['stu_bloodgroup']}</td>";
echo "<td>{$row['stu_password']}</td>";
echo "<td><a href='withoutedit.php?eid={$row['stu_id']}'>EDIT</a> | <a href='withoutdelete.php?deleteid={$row['stu_id']}'>DELETE</a></td>";
echo "</tr>";
}
echo "</table>";
echo "<a href='insertwithouttheam.php'>add record</a>";
?>