<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Parmar Mehul</title>

<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<?php
include './theampart/menu.php';
include './theampart/logo.php';
?>


<div id="wrapper"> 
	<!-- end #header -->
	<div id="page-bgtop"></div>
	<div id="page">
		<div><img src="images/pics01.jpg" width="920" height="300" alt="" /></div>
		<div id="content">
			<div class="post">
				<h2 class="title"><a href="#">Welcome to Parmar Mehul </a></h2>
				
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
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
        echo "<a href='withtheamtable.php'>display record</a>";
        ?>
    


                                        
                                        
				</div>
			</div>
			
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		<?php
               include './theampart/sidebar.php';
                ?>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<div id="page-bgbtm"></div>
	<!-- end #page --> 
</div>
<?php
               include './theampart/footer.php';
                ?>
<!-- end #footer -->
</body>
</html>
