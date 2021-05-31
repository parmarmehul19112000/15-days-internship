<?php

// associative array
//key=values
//method 1

$a[0]=30;
$a["mehul"]="parmar";
$a['c']='p';
$a[5]=10.5;


//method 2
//always use this method to create array
$a=array(
    
    10=>100,
    "mehul"=>"parmar",
    'c'=>'m',
    7.5=>30.6
);

//print value

echo "mehul for".$a["mehul"];


foreach ($a as $value) {
    echo "<br>value is ".$value;
}

foreach ($a as $key => $value) {
    echo"<br>key  is <b> $key </b> value is <b>$value</b>";
    
}
?>
