<?php
$conn= mysqli_connect("localhost:3307","root","","db_internship");


if($_POST){
$name=$_POST['txt2'];
$gender=$_POST['txt3'];
$dob=$_POST['txt4'];
$email=$_POST['txt5'];
$mobile=$_POST['txt6'];
$address=$_POST['txt7'];
$area=$_POST['txt8'];
$bloodgroup=$_POST['txt9'];
$password=$_POST['txt10'];
        


$q= mysqli_query($conn,
        "insert into student_info(stu_name,stu_gender,stu_dob,stu_email,stu_mobile,stu_address,stu_area,stu_bloodgroup,stu_password)values('{$name}','{$gender}','{$dob}','{$email}','{$mobile}','{$address}','{$area}','{$bloodgroup}','{$password}')")
        
        or die("error". mysqli_error($conn));
if($q){
    
    echo "<script>alert('added record');</script>";
      }
  }
?>

<html>
    <body>
        <form method="post">
           
            stu_Name:<input type="text" name="txt2"><br>
            stu_Gender:<select name="txt3">
                <option>male</option>
                <option>female</option>
            </select><br>
            stu_Dob:<input type="date" name="txt4"><br>
               stu_Email:<input type="email" name="txt5"><br>
               stu_Mobile:<input type="number" name="txt6"><br>
                 stu_Address:<input type="text" name="txt7"><br>
                 stu_Area:<select name="txt8">
                     <option>Ahmadabad</option>
                     <option>Surendranagar</option>
                     <option>Baroda</option>
                     <option>Junagadh</option>
                 </select><br>
                 stu_Bloodgroup:<select name="txt9"><br>
                     <option>A-</option>
                     <option>A+</option>
                     <option>B+</option>
                     <option>B-</option>
                     <option>O+</option>
                     <option>O-</option>
                 </select><br>
                 stu_Password:<input type="password" name="txt10"><br>
                 <input type="submit">
                     
        </form>
        <?php
        echo "<a href='withouttheamtable.php'>display record</a>";
        ?>
    </body>
</html>
