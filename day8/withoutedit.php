<?php

// db connection
$conn=mysqli_connect("localhost:3307","root","","db_internship");

$editid=$_GET['eid'];

if(!isset($_GET['eid'])  || empty($_GET['eid']))
{
    header("location:withouttheamtable.php");
}


$editid=$_GET['eid'];
$editq= mysqli_query($conn, "select * from student_info where stu_id='{$editid}'") or die(mysqli_error($conn));
$editdata=mysqli_fetch_array($editq);

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
  
      $uq= mysqli_query($conn,"update student_info set stu_name='{$name}',stu_gender='{$gender}',stu_dob='{$dob}',stu_email='{$email}',stu_mobile='{$mobile}',stu_address='{$address}',stu_area='{$area}',stu_bloodgroup='{$bloodgroup}',stu_password='{$password}' where stu_id='{$editid}'") or die(mysqli_error($conn));
      if($uq){
          header("location:withouttheamtable.php");
      }
}


?>

<html>
    <body>
        <form method="post">
           
            stu_Name:<input type="text" value="<?php echo $editdata['stu_name']?>" name="txt2"><br><br>
            stu_Gender: male<input type="radio" <?php if($editdata['stu_gender']=='male'){    echo "checked";}?> value="male" name="txt3">
            female<input type="radio" <?php if($editdata['stu_gender']=='female'){    echo "checked";}?>value="female" name="txt3"><br><br>
            stu_Dob:<input type="date" value="<?php echo $editdata['stu_dob']?>" name="txt4"><br><br>
               stu_Email:<input type="email" value="<?php echo $editdata['stu_email']?>" name="txt5"><br><br>
               stu_Mobile:<input type="number" value="<?php echo $editdata['stu_mobile']?>" name="txt6"><br><br>
               stu_Address:<input type="text=" value="<?php echo $editdata['stu_address']?>" name="txt7"><br><br>
                 stu_Area:<input type="text" value="<?php echo $editdata['stu_area']?>" name="txt8"><br><br>
                 stu_Bloodgroup:
             A- <input type="checkbox" <?php if($editdata['stu_bloodgroup']=='A-'){    echo "checked";}?> name="txt9" value="A-">
             A+ <input type="checkbox"  <?php if($editdata['stu_bloodgroup']=='A+'){    echo "checked";}?> name="txt9" value="A+">
             O- <input type="checkbox" <?php if($editdata['stu_bloodgroup']=='O-'){    echo "checked";}?> name="txt9" value="O-">
             O+ <input type="checkbox" <?php if($editdata['stu_bloodgroup']=='O+'){    echo "checked";}?> name="txt9" value="O+">
             B- <input type="checkbox" <?php if($editdata['stu_bloodgroup']=='B-'){    echo "checked";}?> name="txt9" value="B-">
             B+ <input type="checkbox" <?php if($editdata['stu_bloodgroup']=='B+'){    echo "checked";}?> name="txt9" value="B+"><br><br>
                     
                 
                 stu_Password:<input type="password" value="<?php echo $editdata['stu_password']?>" name="txt10"><br>
                 <input type="submit">
                     
        </form>
    </body>
</html>


