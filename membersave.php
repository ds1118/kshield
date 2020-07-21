<?php

include "./dbConnect.php"; //dbConnect.php는 회원가입 후 정보가 저장되는 DB와 연동

$name=$_POST['name'];
$userId=$_POST['userId'];
$userPw=$_POST['userPw'];
$userPw2=$_POST['userPw2']; 

    if($userPw == $userPw2) {
		$sql = "insert into member (name,userId, userPw)";
		$sql = $sql."values('$name', '$userId', '$userPw')";

	if($mysqli->query($sql)){
		echo "<script>alert('Success');location.href='index.php';</script>";

	}else{
		echo "<script>alert('Failed');location.href='register.html';</script>";
	}
	}
	else {
		echo "<script>alert('no match');location.href='register.html';</script>";
	}
?>