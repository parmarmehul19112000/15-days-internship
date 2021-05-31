<?php
// numerical array
//method 1
$a[0]=23;
$a[1]=10;
$a[2]="mehul";
$a[3]='m';
$a[4]=10.5;


//method 2   //dynamic array
$a[]=45;
$a[]=24;
$a[]="parmar";
$a[]='p';
$a[]=12.4;
$a[]="3";


//method 3
// always use this method create array

$a=array(10,"mehul",'c',"10,8",10.5);

//print array values

echo $a[2]."<br>";

//print whole array

for($i=0;$i<count($a);$i++){
    echo "<br>".$a[$i];
}

//inbuilt function todenug an array
echo "<pre>";
print_r($a);

echo "<pre>";
var_dump($a);
?>
