<?php

$c=array(
    10=>"apple",
    70=>"mengo",
    2=>"banana",
    60=>"watermeloan"
    );
 ksort($c);
 foreach ($c as $key => $value) {
    echo "<br>$key-$value";
}

?>