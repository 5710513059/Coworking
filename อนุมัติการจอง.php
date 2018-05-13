<?php
session_start();
  require 'connection.php';

  $sql = "SELECT * FROM user  ORDER BY uploadfile";
  $query = mysqli_query($mysqli,$sql);
  
  if (!$_SESSION["Userlevel"]){  //check session
    Header("Location: เข้าสู่ระบบ.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form
  }
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

							<li class="current"><a href="ข้อมูลของลูกค้า.php">ข้อมูลของลูกค้า</a></li>
							<li class="current"><a href="profileA.php">ข้อมูลส่วนตัว</a></li>
							 <div class="w3-dropdown-hover">
      							<button class="w3-button">สถิติการใช้งาน</button>
                    <div class="w3-dropdown-content w3-bar-block w3-card-4">
                      <a href="g_day.php" class="w3-bar-item w3-button">สถิติรายวัน</a>
                      <a href="g_month.php" class="w3-bar-item w3-button">สถิติรายเดือน</a>
                       <a href="g_years.php" class="w3-bar-item w3-button">สถิติรายปี</a>
                       <a href="money_d.php" class="w3-bar-item w3-button">สถิติรายได้</a>
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
							<h2>อนุมัติการจอง</h2>
						</header>
					</div>
				</section>
			</br>
			<div class="w3-row w3-border">
  							<div class="w3-container">
  								<h1 style="background-color:#cc91ff;">


<table align="center" width="100%" border="1">
<tr>
<td align="center">รหัสสมาชิก</td>
<th> <div align="left">เบอร์โทรศัพท์<div></th>
 <th> <div align="center">ชื่อ</div></th>
<th> <div align="center">รายละเอียดการจอง</div></th>
<td align="center">สถานะ</td>
</tr>
<?php
$sql = "SELECT user.*,booksa.* FROM user,booksa
WHERE user.Member_ID = booksa.Member_ID
ORDER BY booksa.DateReceip ASC ";
$view = mysqli_query($mysqli,$sql);
while ($data = mysqli_fetch_array($view) ) {
?>
<tr class="w3-purple">
<td align="center"><?php echo "$data[Member_ID]"; ?></td>
<td align="left"><?php echo "$data[Numberphone]"; ?></td>
<td align="right"><?php echo "$data[Name]"; ?></td>
<td align="center"><?php echo "<a href='note.php?ID=$data[ID]'>รายละเอียด"?></td>
<td align="center"><?php echo "$data[Status]"; ?></td>
</tr>
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