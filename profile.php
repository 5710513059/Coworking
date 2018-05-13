<?php session_start();?>
<?php

require ('connection.php');
if (!$_SESSION["Userlevel"]){  //check session

	  Header("Location: เข้าสู่ระบบ.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}else{
	
?>

<?php
$meSQL = "SELECT * FROM user WHERE Member_ID='{$_SESSION['UserID']}' ";
$meQuery = mysqli_query($mysqli,$meSQL);
if ($meQuery == TRUE) {
$meResult = mysqli_fetch_assoc($meQuery);
} else {
echo 'error';
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
					<h1 id="logo"><a href="index.php"><img src="images/1.jpg" width="100" height="100"></a></h1>
					<nav id="nav">
						<ul>
							<li class="current"><a href="ประวัติการจอง.php">ประวัติการจอง</a></li>
							<li class="current"><a href="คำแนะนำ.php">คำแนะนำ</a></li>
							<li class="current"><a href="index.php">จอง</a></li>

							<li><a href="ออกจากระบบ.php" class="button special">ออกจากระบบ</a></li>
						</ul>
              

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
							<h2>ข้อมูลส่วนตัว</h2>
						</header>
					</div>
				</section>
<h3 style="background-color:#E894DF;">
<center>
<div class="w3-row w3-border">
</br>
<div class="col-75" >
					 <div class="col-25 w3-center">
						<b><h3>Member_ID</h3></b>
					</div>
					<div class="w3-round-xlarge w3-border w3-pale-green" style="width:40%" >
						<p><h1><?php echo $meResult['Member_ID']; ?></h1></p>
					</div>
			</div>
			<br></br>
			<div class="col-75" >
					 <div class="col-25 w3-center">
						<b><h3>Username</h3></b>
					</div>
					<div class="w3-round-xlarge w3-border w3-pale-green" style="width:40%" >
						<p><h1><?php echo $meResult['Username']; ?></h1></p>
					</div>
			</div>
<br></br>
		<div class="col-75" >
				 <div class="col-25 w3-center">
					<b><h3>Name</h3></b>
				</div>
				<div class="w3-round-xlarge w3-border w3-pale-green" style="width:40%" >
					<p><h1><?php echo $meResult['Name']; ?></h1></p>
				</div>
		</div>
		<br></br>
		<div class="col-75" >
				 <div class="col-25 w3-center">
					<b><h3>Lastname</h3></b>
				</div>
				<div class="w3-round-xlarge w3-border w3-pale-green" style="width:40%" >
					<p><h1><?php echo $meResult['Lastname']; ?></h1></p>
				</div>
		</div>
		<br></br>
		<div class="col-75" >
				 <div class="col-25 w3-center">
					<b><h3>Numberphone</h3></b>
				</div>
				<div class="w3-round-xlarge w3-border w3-pale-green" style="width:40%" >
					<p><h1><?php echo $meResult['Numberphone']; ?></h1></p>
				</div>
		</div>
		<br></br>
		<div class="col-75" >
				 <div class="col-25 w3-center">
					<b><h3>Email</h3></b>
				</div>
				<div class="w3-round-xlarge w3-border w3-pale-green" style="width:40%" >
					<p><h1><?php echo $meResult['Email']; ?></h1></p>
				</div>
		</div>
		
		<!--<div class="col-75" >
				 <div class="col-25 w3-center">
					<b>Password</b>
				</div>
				<div class="w3-round-xlarge w3-border w3-pale-green" style="width:40%" >
					<p><?php echo $meResult['Password']; ?></p>
				</div>
		</div>
		<br></br>-->
		
		<br></br>
<a href="แก้ไขข้อมูล.php?Member_ID=<?php echo $meResult["Member_ID"];?>"></br><center><h4><button class="w3-button w3-black w3-round-large">แก้ไขข้อมูล</button></h4>
	                 	</center>
<br></br>
</div>
</div>
</div>

</center>
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

<?php }?>