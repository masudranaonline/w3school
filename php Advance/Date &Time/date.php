<?php
    echo "Tooday is " . date("Y/m/d");
    echo "<br>";
    echo "Tooday is " . date("Y,m,d");
    echo "<br>";
    echo "Tooday is " . date("Y-m-d");
    echo "<br>";
    echo "Tooday is " . date("Y.m.d");
    echo "<br>";
    echo date("l");
    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo "©2010-". date("Y");
    echo "<br>";
    echo "<br>";
    echo "<br>";
    
    date_default_timezone_set("Asia/Dhaka");
    echo "The time is : ". date("h:i:sa");
    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo "Create a Date With mktime() <br>";
    $d = mktime(5, 58, 15, 5,12, 2023);
    echo "Created date is ". date("Y-m-d; h:i:sa",$d);


    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo "Create a Date From a String With strtotime()";
    $a = strtotime("10:30pm April 15 2014");
    echo "Create date is ". date("Y-m-d h:i:sa",$a);

    echo "<br>";
    echo "<br>";
    echo "<br>";

    $d = strtotime("tomorrow");
    echo date("Y-m-d h:i:sa", $d);
    echo "<br>";
    $d = strtotime("next Sunday");
    echo date("Y-m-d h:i:sa",$d);
    echo "<br>";
    $d = strtotime("+3Months");
    echo date("Y-m-d h:i:sa", $d);
    echo "<br>";











