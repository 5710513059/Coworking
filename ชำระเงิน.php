<?php session_start();?>

<?php
//include('connection.php');
require 'connection.php';

	$sql = "SELECT * FROM user";

	$query = mysqli_query($mysqli,$sql);


if (!$_SESSION["UserID"]){  //check session
	  Header("Location: เข้าสู่ระบบ.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}else{}
?>
<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<head>
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
							<li class="current"><a href="profile.php">ข้อมูลส่วนตัว</a></li>
							<li class="current"><a href="index.php">จอง</a></li>
							<li class="current"><a href="คำแนะนำ.php">คำแนะนำ</a></li>
							<li><a href="ออกจากระบบ.php" class="button special">ออกจากระบบ</a></li>
							
						</ul>
					</nav>
					<?php 
					echo "WELCOME ". $_SESSION['Name'];
					?>
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
							<h2>ชำระเงิน</h2>
						</header>
					</div>
				</section>
 
  				<h2 style="background-color:#ffcccc;">
  				
  				</br>
  				<div class="12u$">
					<form name="form1" method="post" action="add_file_db.php" enctype="multipart/form-data">
						<center><strong><p><h3>เลขที่บัญชี : 336-2-33222-1</h3></strong>
  				<p><h4>ยืนยันตัวตน</h4><label><center>
  					<input class="w3-input w3-border w3-red" type="text" name="name" style="width:50%"></label></center>


	                   <center>หลักฐานการชำระเงิน </center> <br />
	                  <input type="file" name="fileupload" id="fileupload"  required="required"/>
	                  <br />
	                 	</br><center><h4><button class="w3-button w3-black w3-round-large">ยืนยันการชำระเงิน</button></h4>
	                 	</center>
					</form>
				</center>	<br /></h2>
		</div>

		<!-- CTA -->
				<section id="cta">

					<header>
						<h2><strong>Tuber  Thailand</strong></h2>
						<p>
					<h3>
						สถานที่ที่จุดประกายความคิดสร้างสรรค์
						<br />
						และเชื่อมโยงผู้คนเข้ามาร่วมมือกันด้วยความอบอุ่นเป็นกันเอง
						<br /> 
					</h3>
						</p>
					</header>
				</section>

			

	</body>
</html>
