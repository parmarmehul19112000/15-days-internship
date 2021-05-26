<html>
    <head> <title>internship day2</title>
</head>
<body>
    <h1>task day2</h1>
<?php
$year=2000;

if(($year%400==0) || ($year%4==0 && $year%100!=0)){
    echo "$year is leap year";
}else{
    echo "$year is not leap year";
}

?>
</body>
    </html>