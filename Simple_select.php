<?php 

	$con = mysqli_connect("localhost","sister61","wjsdpdms030521","sungkyul");
	$sql = "SELECT * FROM student"; 
    $result = mysqli_query($con, $sql);
        
    while($row = mysqli_fetch_assoc($result)) {

    	echo $row['number'].".  "."이름 :  ".$row['name']."<br>";
        echo "나이 : ".$row['age']."<br>";
        echo "성별 : ".$row['gender']."<br>";
        echo "학번 : ".$row['student_number']."<br>";
        echo "특이사항 : ".$row['mess']."<br>";
        echo "----------------------------------------------- <br>";
     
    }
	
    print "<br><a href='Simple.html'>메인 화면으로</a>";

?>

