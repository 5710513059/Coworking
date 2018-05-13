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
							<li class="current"><a href="profile.php">ข้อมูลส่วนตัว</a></li>
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
							<h2>รายการห้องที่ถูกจองแล้ว</h2>
						</br>
					</br>
						<h1 style="background-color:#FF0066;">เวลาเปิดทำการ 9.00-20.00 น. </h1>

					</div>

				</section>
					
						</br>

                <?php

                $Keyword = null;

                if (isset($_POST["Keyword"])) {
                  $Keyword = $_POST["Keyword"];
              }
              ?>
				
<div class="w3-container">
 <p> <center><form method="post" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>">วันที่<input type="date" name="Keyword" value="d-m-y" required><button class="w3-button w3-blue">ค้นหา</button></input></form><a href="จอง2.php" class="w3-btn w3-display-bottom middle w3-round-xxlarge w3-pink"" style="width:200px" onclick="myFunction() ">จอง</a></center>
    <thead></p>
  <table class="w3-table w3-striped w3-light-blue">

      
      	<th>วันที่</th>
        <th>ห้อง</th>
        <th>เวลา</th>
        <th>สถานะ</th>
      </tr>
    </thead>
        <?php

    $b_sql = "SELECT * FROM booksa WHERE DateReceip LIKE '%".$Keyword."%' ";
    $b_query = mysqli_query($mysqli,$b_sql);
        while($result=mysqli_fetch_array($b_query,MYSQLI_ASSOC))
    {
    ?>
    <tr>
      <td><?php echo $result["DateReceip"];?></td>
      <td><?php echo $result["Rooms"];?></td>
      <td><?php echo $result["Start_time"];?>:00-<?php echo $result["End_time"];?>:00</td>
      <td><?php echo $result["Status"];?></td>
    </tr>
    <?php
	}
    ?>
  </table>
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

