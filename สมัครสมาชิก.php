<?php
session_start();

$_SESSION['message'] = ''; /*เเสดงข้อความ Error*/
$mysqli = new mysqli('localhost', 'root', '', 'mydb1');
$mysqli->query("set names utf8");

if(isset($_POST['register_btn'])){

		$Name= $mysqli->real_escape_string($_POST['Name']);
		$Lastname = $mysqli->real_escape_string($_POST['Lastname']);
		$Username= $mysqli->real_escape_string($_POST['Username']);
		$Numberphone = $mysqli->real_escape_string($_POST['Numberphone']);
		$Email = $mysqli->real_escape_string($_POST['Email']);
		$Password = $mysqli->real_escape_string($_POST['Password']);
		$Password2 = $mysqli->real_escape_string($_POST['Password2']);
		
  		$salt = 'tikde78uj4ujuhlaoikiksakeidke';
        $hash_Password = hash_hmac('sha256', $Password, $salt);


		if($_POST['Password']!==$_POST['Password2']) {

		echo "รหัสผ่านไม่ตรงกัน โปรดลองอีกครั้ง !";


		} else {
		
			$sql = "INSERT INTO user (Name, Lastname, Email, Numberphone, Username, Password)"
			. "VALUES('$Name', '$Lastname', '$Email', '$Numberphone', '$Username', '$hash_Password')";
			$result = $mysqli->query($sql);
//เก็บข้อมูลลง DB
		       
        if ($result) {
            header("Location: เข้าสู่ระบบ.php");
        } else {
            echo "เกิดข้อผิดพลาด ".  mysqli_error($mysqli);
        }
        
        
		}
	}
mysqli_close($mysqli);
?>
<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">
<link rel="stylesheet" href="assets/css/registration.css">
<html>
	<head>
		<title>Tuber Thailand</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="index">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1 id="logo"><a href="index.php"><img src="images/1.jpg" width="100" height="100"></a></h1>
					<nav id="nav">
						<ul>
							<li class="current"><a href="index.php">Welcome</a></li>
							<li class="current"><a href="คำแนะนำ.php">คำแนะนำ</a></li>


						</ul>
					</nav>
				</header>

					<!-- Banner -->
				<section id="banner">

					<!--
						".inner" is set up as an inline-block so it automatically expands
						in both directions to fit whatever's inside it. This means it won't
						automatically wrap lines, so be sure to use line breaks where
						appropriate (<br />).
					-->

					<div class="inner">
						<header>	

							<h2>สมัครสมาชิก</h2>
						</header>
				
  					<div class="w3-card-4">
  <div class="w3-container w3-yellow">
    
  </div>
  		<form method="post" class="w3-container" action="สมัครสมาชิก.php">
       <p>
<h3><label class="w3-text-yellow"><b>Username
    <input class="w3-input w3-border w3-sand" name="Username" required type="text"></b></label></h3></p>
    <p>
    <h3><label class="w3-text-yellow"><b>Name
    <input class="w3-input w3-border w3-sand" name="Name" required type="text"></b></label></h3></p>   
    <h3><label class="w3-text-yellow"><b>Lastname
    <input class="w3-input w3-border w3-sand" name="Lastname" required type="text"></b></label></h3></p>
    <p>
<h3><label class="w3-text-yellow"><b>Numberphone
    <input class="w3-input w3-border w3-sand" name="Numberphone" required type="text"></b></label></h3></p>
    <p>
<h3><label class="w3-text-yellow"><b>Email
    <input class="w3-input w3-border w3-sand" name="Email" required type="text"></b></label></h3></p>

    <p>
<h3><label class="w3-text-yellow"><b>Password
    <input class="w3-input w3-border w3-sand" name="Password" required type="password"></b></label></h3></p>
    
    <h3><label class="w3-text-yellow"><b>Confirm Password
    <input class="w3-input w3-border w3-sand" name="Password2" required type="password"></b></label></h3></p>
    <p>

    <br/>
     <div class="input-group">
    	 <h2><button class="w3-btn w3-yellow" type="submit" name="register_btn" class="btn" >สมัครสมาชิก</button></h2>
    </div>
    <div class = "alert alert-error"><?= $_SESSION['message']?>

		
</div>
  </form>
</div>
							
 	<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>

