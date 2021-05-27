<?php

$a=$_POST['txt1'];
$b=$_POST['txt2'];
$c=$_POST['txt3'];
$d=$_POST['txt4'];
$e=$_POST['txt5'];

echo "PHP marks:$a<br>";
echo "HTML marks:$b<br>";
echo "CSS marks:$c<br>";
echo "JAVASCRIPT marks:$d<br>";
echo "Bootstrap marks:$e<br>";
echo "<br><b>Total  marks:</b>".($total=$a+$b+$c+$d+$e);

$percentage=($total/500.00)*100;
echo "<br><b>percentage:</b>$percentage";

if ($percentage>=90)
{
	$grade = "First Division";
}
else if($percentage>=75)
{
	$grade = "Second Division";
}
else if($percentage>=65)
{
	$grade = "Second Division";
}
else if($percentage>=33)
{
	$grade = "Third Division";
}
else
{
	$grade = "Fail";
}

echo "<br><b>Student grade:</b> $grade";
?>