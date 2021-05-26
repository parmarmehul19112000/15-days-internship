<html>
    <head> <title>internship day2</title>
</head>
<body>
    <h1>task day2</h1>
<?php
$num=0;
$n1=0;$n2=1;

echo "$n1 $n2";

while($num<10){
    $n3=$n1+$n2;
    echo $n3.' ';
    $n1=$n2;
    $n2=$n3;
    $num=$num+1;
  
}
?>
</body>
    </html>