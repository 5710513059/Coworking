<html>
<head>
<title>อัปเดตข้อมูล</title>
</head>
<body>
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	$mysqli = new mysqli('localhost', 'root', '', 'mydb1');
    $mysqli->query("set names utf8");


	$sql = "UPDATE user SET 
			Name = '".$_POST["txtName"]."' ,
			Lastname = '".$_POST["txtLastname"]."' ,
			Numberphone = '".$_POST["txtNumberphone"]."' ,
			Email = '".$_POST["txtEmail"]."'
			WHERE Member_ID = '".$_POST["txtMember_ID"]."' ";

	$query = mysqli_query($mysqli,$sql);

	if($query) {
	 echo "แก้ไขข้อมูลเรียบร้อยแล้ว"; 
	 echo "<meta http-equiv='refresh' content='2;URL=profileA.php' />";
	}

	mysqli_close($mysqli);
?>
</body>
</html>