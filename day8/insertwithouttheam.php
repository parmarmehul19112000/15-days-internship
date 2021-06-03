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
           
            stu_Name:<input type="text" name="txt2"><br><br>
            stu_Gender:male<input type="radio"  value="male" name="txt3">
            female<input type="radio" value="female" name="txt3"><br><br>
            stu_Dob:<input type="date" name="txt4"><br><br>
               stu_Email:<input type="email" name="txt5"><br><br>
               stu_Mobile:<input type="number" name="txt6"><br><br>
                 stu_Address:<input type="text" name="txt7"><br><br>
                 stu_Area:stu_Area:<input type="text" name="txt8"><br><br>
                 stu_Bloodgroup: A- <input type="checkbox"  name="txt9" value="A-">
             A+ <input type="checkbox"   name="txt9" value="A+">
             O- <input type="checkbox"  name="txt9" value="O-">
             O+ <input type="checkbox"  name="txt9" value="O+">
             B- <input type="checkbox"  name="txt9" value="B-">
             B+ <input type="checkbox"  name="txt9" value="B+"><br><br>
                 stu_Password:<input type="password" name="txt10"><br><br>
                 <input type="submit">
                     
        </form>
        <?php
        echo "<a href='withouttheamtable.php'>display record</a>";
        ?>
    </body>
</html>
