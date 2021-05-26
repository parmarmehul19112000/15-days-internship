<html>
    <head> <title>internship day2</title>
</head>
<body>
    <h1>task day2</h1>
<?php

$num=56789;
$revnum=0;

while($num>1){
    $reminder=$num%10;
    $revnum=($revnum*10)+$reminder;
    $num=$num/10;
}
echo"$num is reverse number is $revnum";
?>
</body>
    </html>