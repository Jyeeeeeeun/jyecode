<?php

    $con = mysqli_connect("localhost","sister61","wjsdpdms030521","sungkyul");
    $c1_d = $_POST["c1"];
    $sql = "SELECT * FROM student WHERE student_number like '%$c1_d%'";
    $result = mysqli_query($con, $sql);

    while($row = mysqli_fetch_assoc($result)) {

    	echo $row['number']. ".";
        echo $row['name']."<br>";
        echo $row['age']."<br>";
        echo $row['gender']."<br>";
        echo $row['student_number']."<br>";
        echo $row['mess'];
        
    }

    print "<br><a href='Simple.html'>메인 화면으로</a>";
?>
