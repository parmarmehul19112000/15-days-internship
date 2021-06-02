<?php
$conn= mysqli_connect("localhost:3307","root","","db_internship");

if($_POST){
    
    $name=$_POST['txt1'];
    $gender=$_POST['txt2'];
    $mobile=$_POST['txt3'];
    
    
    $q= mysqli_query($conn,
        "insert into tbl_user(user_name,user_gender,user_mobile)values('{$name}','{$gender}','{$mobile}')")
or die("error". mysqli_error($conn));

if($q){
    echo "<script>alert('added record');</script>";
}
}


?>

<html>
    <head>
        <title>insert data</title>
    </head>
    <body>
        <form method="post">
            Name:<input type="text" name="txt1">
            Gender:<select name="txt2">
                <option>male</option>
                <option>female</option>
            </select>
            Mobile:<input type="number" name="txt3">
            <input type="submit">
        </form>
        <?php
        echo "<a href='table.php'>diplay record</a>";
    
        ?>
    </body>
</html>
