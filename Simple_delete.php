<?php 
	$con = mysqli_connect("localhost","sister61","wjsdpdms030521","sungkyul");
    $b1_d = $_POST["b1"];

    $sql = "DELETE FROM student WHERE number=$b1_d";
    mysqli_query($con, $sql);

    $sql = "SELECT * FROM student";
    $result = mysqli_query($con, $sql);

    while($row = mysqli_fetch_assoc($result)) {

    	echo $row['number'] .".  ";
        echo $row['name']." ";
        echo $row['age']."<br>";
        echo $row['gender'] ."<br>";
        echo $row['student_number']."<br>";
        echo $row['mess']."<br>";
     
    }
    print "<br><a href='Simple.html'>메인 화면으로</a>";
 ?>
