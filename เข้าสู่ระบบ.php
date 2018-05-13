<?php

        //เรียก function สำหรับติดต่อฐานข้อมูลจากหน้า connection.php ขึ้นมา
// variable
require 'connection.php';

if(isset($_POST['submit'])){
	$Username = $mysqli->real_escape_string($_POST['Username']);
    $Password = $mysqli->real_escape_string($_POST['Password']);
    
    $salt = 'tikde78uj4ujuhlaoikiksakeidke';
    $hash_Password = hash_hmac('sha256', $Password, $salt);
    
    $sql = "SELECT * FROM user WHERE Username=? AND Password=?";
    $stmt = mysqli_prepare($mysqli, $sql);
    mysqli_stmt_bind_param($stmt,"ss", $Username,$hash_Password);
    mysqli_execute($stmt);
    $result_user = mysqli_stmt_get_result($stmt);
    if ($result_user->num_rows == 1) {
        session_start();
        $row_user = mysqli_fetch_array($result_user,MYSQLI_ASSOC);
         $_SESSION["UserID"] = $row_user["Member_ID"]; //สำคัญ
        $_SESSION['Name'] = $row_user['Name'];//echo $_SESSION['Name'];
       	$_SESSION["Userlevel"] = $row_user["Userlevel"];
       

        	if($_SESSION["Userlevel"]=="A"){ //ถ้าเป็น admin ให้กระโดดไปหน้า ประวัติของลูกค้า.php
            header("Location:ข้อมูลของลูกค้า.php");
          }
          	if($_SESSION["Userlevel"]=="U"){ //ถ้าเป็น User ให้กระโดดไปหน้า index.php
            header("Location:index.php");
          }
        	if($_SESSION["Userlevel"]=="O"){ //ถ้าเป็น admin ให้กระโดดไปหน้า ประวัติของลูกค้า.php
            header("Location:ข้อมูลของลูกค้า.php");
          }

    } else {
        echo "ผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
    }
    
}
?>
<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="login/css/login.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">

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
					<h1 id="logo"><a href="ผู้ใช้ทั่วไป.php"><img src="images/1.jpg" width="100" height="100"></a></h1>
					<nav id="nav">
						<ul>
							<li class="current"><a href="ผู้ใช้ทั่วไป.php">Welcome</a></li>
							<li class="current"><a href="คำแนะนำ.php">คำแนะนำ</a></li>
							<li><a href="สมัครสมาชิก.php" class="button special">สมัครสมาชิก</a></li>
							
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
							<h2>เข้าสู่ระบบ</h2>
						</header>
						
							
    					<div class="w3-card-4">
  <div class="w3-container w3-yellow">
    
  </div>
  <form method="post" class="w3-container" action="เข้าสู่ระบบ.php">
    <p>      
    <h3><label class="w3-text-yellow"><b>Username</b></label></h3>
    <input class="w3-input w3-border w3-sand" id="Username" required name="Username" type="text"></p>
    <p>      
    	<br/>
     <h3><label class="w3-text-yellow"><b>Password</b></label></h3>
    <input class="w3-input w3-border w3-sand" id="Password" required name="Password" type="Password"></p>
    <p>
    	 <br/>
    <h2><button class="w3-btn w3-yellow" type="submit" value="Login" name="submit">เข้าสู่ระบบ</button></h2></p>
  </form>
							
				</section>

		
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


