<html>
<head>
<title>ThaiCreate.Com PHP & MySQL (mysqli)</title>
</head>
<body>
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	$mysqli = new mysqli('localhost', 'root', '', 'mydb');
   $mysqli->query("set names utf8");


	
if(isset($_GET["Member_ID"]))
   {
	$strMember_ID = $_GET["Member_ID"];
	 }

	 $mysqli = new mysqli('localhost', 'root', '', 'mydb');
   $mysqli->query("set names utf8");
   
	$sql = "DELETE * FROM user WHERE Member_ID = '".$strMember_ID."' ";

	$query = mysqli_query($mysqli,$sql);

	if(mysqli_affected_rows($mysqli)) {
		 echo "Record delete successfully";
	}

	mysqli_close($mysqli);
?>
</body>
</html>