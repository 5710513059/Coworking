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
							<li class="current"><a href="index.php">Welcome</a></li>
							<li class="current"><a href="คำแนะนำ.php">คำแนะนำ</a></li>
							<li class="current"><a href="ชำระเงิน.php">ชำระเงิน</a></li>
							<li><a href="ออกจากระบบ.php" class="button special">ออกจากระบบ</a></li>
							


						</ul>
					</nav>
					<?php 
					echo "WELCOME ". $_SESSION['Name'];
					?>
				</header>


					<!-- Banner -->
				<section id="banner">

					
					<div class="inner">

						<header>
							<h2>การจอง</h2>
						</header>
					</div>
				</section>
  				</br>
  				<h1 style="background-color:#ffcccc;">
				<center>					
					<form method="post" action="1.php" class="w3-container">
							<p> <center>ห้อง<select name="Rooms" required>
      <option selected>--ห้อง--</option>
      <option name="Rooms" value="A">A</option>
      <option name="Rooms" value="B">B </option>
      <option name="Rooms" value="C">C</option>
      <option name="Rooms" value="D">D </option>
     </select></input></center></p>
  							<p> <center>จำนวนผู้ใช้<input type="number"  name="Usercount" min="1" max="10" required></input></center></p>
  							<p> <center>วันที่<input type="date" name="DateReceip" value="d-m-y" required></input></center></p>
  							<p> <center>เวลาเริ่มต้น<input class="w3-input w3-border w3-hover-blue" type="time" name="Start_time" style="width:50%" value="d-m-Y" required></input></center></p>
  							<p><center>เวลาสิ้นสุด <input class="w3-input w3-border w3-hover-blue" type="time" name="End_time" style="width:50%"  value="d-m-Y" required></input></center></p>
  							
					
				</center>


			<p><center><h2><button class="w3-button w3-black w3-round-large name="button" id="button">ตกลง</button></a>
			</h2></a></center></p></form>
			<br />
			</h1>

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


				
