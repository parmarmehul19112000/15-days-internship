<html>
    <head> <title>internship day2</title>
</head>
<body>
    <h1>task day2</h1>
<?php
$num=407;
$total=0;
$x=$num;

while($x!=0){
    $remider=$x%10;
    $total=$total+$remider*$remider*$remider;
    $x=$x/10;
}

if($num==$total){
    echo "$num is armstrong";
}else{
    echo "$num is not armstrong";
}
?>
</body>
    </html>