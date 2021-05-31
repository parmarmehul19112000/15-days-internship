<?php

$a=array("c","c++","java","php","java","c");
$b=array_count_values($a);

foreach ($b as $key => $value) {
    echo"<br> $key -<strong>$value</strong>";
}
