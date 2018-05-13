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
					<h1 id="logo"><a href="หน้าหลักA.php"><img src="images/1.jpg" width="100" height="100"></a></h1>
					<nav id="nav">
						<ul>
							<li class="current"><a href="ตรวจสอบที่นั่ง.php">ตรวจสอบที่นั่ง</a></li>
							<li class="current"><a href="อนุมัติการจอง.php">อนุมัติการจอง</a></li>
							 <div class="w3-dropdown-hover">
      							<button class="w3-button">รายงานผล</button>
                    <div class="w3-dropdown-content w3-bar-block w3-card-4">
                      <a href="รายงานและสถิติการใช้ห้อง.php" class="w3-bar-item w3-button">รายงานและสถิติการใช้ห้อง</a>
                      <a href="รายงานและสถิติการใช้ห้อง2.php" class="w3-bar-item w3-button">รายงานและสถิติการใช้ห้อง2</a>
                    </div>
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
							<h2>รายงานและสถิติการใช้ห้อง</h2>
						</header>
					</div>
				</section>
			</br>
			<center><h1>ห้อง A ที่นั่งจำนวน 10 ที่นั่ง</h1></center>
			</br>
			<div class="w3-row w3-border">
  							<div class="w3-container">
  								<h1 style="background-color:#ffa8fb;">
  									<div class="w3-padding-large">
  										<table class="w3-table w3-striped w3-border">
   												<tr>
      												<th>ชื่อลูกค้า</th>
      												<th>เบอร์โทรศัพท์</th>
      												<th>เวลาที่ใช้ห้อง</th>   								
  	   											</tr>
  	   											<tr>
      												<th>1.พอรออาวอ พราว</th>
      												<th>089-9999999</th>
      												<th>9.00-10.00</th>   								
  	   											</tr>
  	   											<tr>
      												<th>2.อออาอาร์ อาร์</th>
      												<th>089-9999998</th>
      												<th>10.00-11.00</th>    								
  	   											</tr>
  	   											<tr>
      												<th>3.สะกิม  กิม</th>
      												<th>089-9999997</th>
      												<th>14.00-15.00</th>   								
  	   											</tr>
  	   											<tr>
      												<th>4.อะลิซ ลิซซี่</th>
      												<th>089-9999996</th>
      												<th>15.00-16.00</th>   								
  	   											</tr>
  	   											<tr>
      												<th>5.มะมิว มิว</th>
      												<th>089-9999995</th>
      												<th>17.00-18.00</th>   								
  	   											</tr>
  	   											
  	   									</table>
  	   								</div>
  	   							</h1>
  	   						</div>
  	   		</div>
  	   		<section id="cta">

					<header>
						<h2><strong>Tuber  Thailand</strong></h2>
						<p>
						<br />
						สถานที่ที่จุดประกายความคิดสร้างสรรค์
						<br />
						และเชื่อมโยงผู้คนเข้ามาร่วมมือกันด้วยความอบอุ่นเป็นกันเอง
						<br /> 
						</p>
					</header>
					<footer>
						
					</footer>

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