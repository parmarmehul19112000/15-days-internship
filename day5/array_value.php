<?php
$a=array("i"=>"c","want"=>"java","learn"=>"php");
$b= array_values($a);
foreach ($b as $key => $value) {
    echo "<br/>$key - $value";
}
?>
