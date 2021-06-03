<?php

// db connection
$conn=mysqli_connect("localhost:3307","root","","db_internship");

$editid=$_GET['eid'];

if(!isset($_GET['eid'])  || empty($_GET['eid']))
{
    header("location:table.php");
}

$editq=mysqli_query($conn, "select * from tbl_user where user_id='{$editid}'") or die(mysqli_error($conn));
$editdata=mysqli_fetch_array($editq);
//print_r($editdata);

if($_POST){
    $name=$_POST['txt1'];
    $gender=$_POST['txt2'];
    $mobile=$_POST['txt3'];
    
    $uq= mysqli_query($conn, "update tbl_user set user_name='{$name}',user_gender='{$gender}',user_mobile='{$mobile}' where user_id='{$editid}'") or die(mysqli_error($conn));

    if($uq){
        header("location:table.php");
    }
    }

?>
<html>
    <body>
        <form method="post">
            Name:<input type="text" value="<?php echo $editdata['user_name']; ?>" name="txt1"><br><br>
            gender:male<input type="radio" <?php if($editdata['user_gender']=='male'){    echo "checked";}?> value="male" name="txt2">
            female<input type="radio" <?php if($editdata['user_gender']=='female'){    echo "checked";}?>value="female" name="txt2"><br><br>
            Mobile:<input type="number"  value="<?php echo $editdata['user_mobile']; ?>" name="txt3"><br><br>
            <input type="submit">
            
        </form>
    </body>
</html>