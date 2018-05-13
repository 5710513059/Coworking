<?php   
session_start(); 
// Check login

include('connection.php');

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
							<h2>ประวัติการจอง</h2>
						</header>
					</div>
				</section>

	<center><h2>รูปแบบห้อง </h2></center>

			
			<?php
		//ถ้ามีการส่งค่าข้อมูล
		include('connection.php');
		?>
		
		<div style="overflow-x:auto;">
		<table align="center" width="100%" border="1">
		<tr bgcolor="#0066CC">
		<td><center>ชื่อ</td></center>
		<td><center>ห้อง</td></center>
		<td><center>วันที่</td></center></center></center></center>
		<td><center>เวลา</td></center></center></center>
		<td><center>สถานะ</td></center>
		</tr>
		<?php
		$sql = "SELECT * FROM booksa
		WHERE Member_ID='{$_SESSION['UserID']}'
		ORDER BY DateReceip ASC ";
		$view = mysqli_query($mysqli,$sql);
		while ($data = mysqli_fetch_array($view) ) {
		?>
		<tr bgcolor="#00CCFF">
		
		<td><center><?php echo "$data[Name]"; ?></center></td>
		<td><center><?php echo "$data[Rooms]"; ?></center></td>
		<td><center><?php echo "$data[DateReceip]"; ?></center></td>
		<td><center><?php echo "$data[Start_time]"; ?>:00-<?php echo "$data[End_time]"; ?>:00</td>
		<td><center><?php echo "$data[Status]"; ?></td></center>


		<?php
		}
	
		?>
</table>
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