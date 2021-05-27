<html>
    <head> <title>internship day3</title>
</head>
<body>
    <h1>task day3</h1>
<?php
echo "<table border=1>";
for($i=0;$i<=100;$i++){
    echo "<tr>";
    if($i%2==0){
        echo "<td bgcolor='yellow'>$i</td>";
    }else{
        echo "<td bgcolor='pink'>$i</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
</body>
    </html>