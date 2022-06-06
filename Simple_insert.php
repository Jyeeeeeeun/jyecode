<?php
	$con = mysqli_connect("localhost","sister61","wjsdpdms030521","sungkyul");
	$name = $_POST['a1'];
	$name = addslashes($name);
    $age = $_POST['a2'];
    $age = addslashes($age);
	$gender = $_POST['a3'];
    $gender = addslashes($gender);
	$student_number = $_POST['a4'];
    $student_number = addslashes($student_number);
	$mess = $_POST['a5'];
    $mess = addslashes($mess);

	$sql = "insert into student (
			name,
			age,
			gender,
			student_number,
			mess
	)";
	
	$sql = $sql. "values (
			'$name',
			'$age',
			'$gender',
			'$student_number',
			'$mess'
	)";

	if($con->query($sql)){ 
	  echo '<script>alert("입력을 완료하였습니다.")</script>'; 
	}else{ 
	  echo '<script>alert("입력에 실패하였습니다.")</script>';
	}

	mysqli_close($mysqli);
  
?>

<script>
	location.href = "Simple.html";
</script>
