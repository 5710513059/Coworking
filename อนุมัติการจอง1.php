<?php
session_start();
  require ('connection.php');

  $sql = "SELECT * FROM user ORDER BY uploadfile";
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

							<li class="current"><a href="ตรวจสอบที่นั่ง.php">ตรวจสอบที่นั่ง</a></li>
							<li class="current"><a href="รายละเอียดการจอง.php">รายละเอียดการจอง</a></li>
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
							<h2>อนุมัติการจอง</h2>
						</header>
					</div>
				</section>
			</br>
			<div class="w3-row w3-border">
  							<div class="w3-container">
  								<h1 style="background-color:#cc91ff;">




                    <table width="650" border="1">
  <tr class="w3-purple">
    <th width="91"> <div align="center">ลำดับ</div></th>
    <th width="91"> <div align="center">ชื่อ</div></th>
    <th width="91"> <div align="center">สกุล</div></th>
    <th width="98"> <div align="center">email</div></th>
    <th width="97"> <div align="center">เบอร์โทรศัพท์</div></th>
    <th width="97"> <div align="center">หลักฐานการชำระเงิน</div></th>
  </tr>
<?php
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>
  <tr>
    <td><div align="center"><?php echo $result["Member_ID"];?></div></td>
    <td><?php echo $result["Name"];?></td>
    <td><?php echo $result["Lastname"];?></td>
    <td><?php echo $result["Numberphone"];?></td>
    <td><?php echo $result["Email"];?></td>
    <td><?php echo $result["Email"];?></td>

    
  <td align="center"><a href="แก้ไขข้อมูล.php?Member_ID=<?php echo $result["Member_ID"];?>"> <button class="w3-btn w3-white w3-border w3-border-purple w3-round-large">Edit</button></a></td>
  </tr>
<?php
}
?>
</table>








  								<table class="w3-table w3-striped w3-border">
   								<tr>
      								<th>ลำดับ</th>
      								<th>ชื่อลูกค้า</th>
      								<th>อีเมลล์ลูกค้า</th>
      								<th>หลักฐานการชำระเงิน</th>
      								<th>
      								<div class="w3-container">
    								<div class="w3-dropdown-hover">
      									<button class="w3-button">สถานะ</button>
      									<div class="w3-dropdown-content w3-bar-block w3-card-4">
        									<a href="#" class="w3-bar-item w3-button">อนุมัติ</a>
        									<a href="#" class="w3-bar-item w3-button">ไม่อนุมัติ</a>
        									
      									</div>
    								</div>
  								</div></th>
    							</tr>
    							<tr>
      								<th>ลำดับ</th>
      								<th>วันเวลา</th>
      								<th>ชื่อลูกค้า</th>
      								<th>อีเมลล์ลูกค้า</th>
      								<th>หลักฐานการชำระเงิน</th>
      								<th>
      								<div class="w3-container">
    								<div class="w3-dropdown-hover">
      									<button class="w3-button">สถานะ</button>
      									<div class="w3-dropdown-content w3-bar-block w3-card-4">
        									<a href="#" class="w3-bar-item w3-button">อนุมัติ</a>
        									<a href="#" class="w3-bar-item w3-button">ไม่อนุมัติ</a>
        									
      									</div>
    								</div>
  								</div></th>
    							</tr>
    							<tr>
      								<th>ลำดับ</th>
      								<th>วันเวลา</th>
      								<th>ชื่อลูกค้า</th>
      								<th>อีเมลล์ลูกค้า</th>
      								<th>หลักฐานการชำระเงิน</th>
      								<th>
      								<div class="w3-container">
    								<div class="w3-dropdown-hover">
      									<button class="w3-button">สถานะ</button>
      									<div class="w3-dropdown-content w3-bar-block w3-card-4">
        									<a href="#" class="w3-bar-item w3-button">อนุมัติ</a>
        									<a href="#" class="w3-bar-item w3-button">ไม่อนุมัติ</a>
        									
      									</div>
    								</div>
  								</div></th>
    							</tr>
    							<tr>
      								<th>ลำดับ</th>
      								<th>วันเวลา</th>
      								<th>ชื่อลูกค้า</th>
      								<th>อีเมลล์ลูกค้า</th>
      								<th>หลักฐานการชำระเงิน</th>
      								<th>
      								<div class="w3-container">
    								<div class="w3-dropdown-hover">
      									<button class="w3-button">สถานะ</button>
      									<div class="w3-dropdown-content w3-bar-block w3-card-4">
        									<a href="#" class="w3-bar-item w3-button">อนุมัติ</a>
        									<a href="#" class="w3-bar-item w3-button">ไม่อนุมัติ</a>
        									
      									</div>
    								</div>
  								</div></th>
  								</tr>
    							<tr>
      								<th>ลำดับ</th>
      								<th>วันเวลา</th>
      								<th>ชื่อลูกค้า</th>
      								<th>อีเมลล์ลูกค้า</th>
      								<th>หลักฐานการชำระเงิน</th>
      								<th>
      								<div class="w3-container">
    								<div class="w3-dropdown-hover">
      									<button class="w3-button">สถานะ</button>
      									<div class="w3-dropdown-content w3-bar-block w3-card-4">
        									<a href="#" class="w3-bar-item w3-button">อนุมัติ</a>
        									<a href="#" class="w3-bar-item w3-button">ไม่อนุมัติ</a>
        									
      									</div>
    								</div>
  								</div></th>
    							</tr>
    							<tr>
      								<th>ลำดับ</th>
      								<th>วันเวลา</th>
      								<th>ชื่อลูกค้า</th>
      								<th>อีเมลล์ลูกค้า</th>
      								<th>หลักฐานการชำระเงิน</th>
      								<th>
      								<div class="w3-container">
    								<div class="w3-dropdown-hover">
      									<button class="w3-button">สถานะ</button>
      									<div class="w3-dropdown-content w3-bar-block w3-card-4">
        									<a href="#" class="w3-bar-item w3-button">อนุมัติ</a>
        									<a href="#" class="w3-bar-item w3-button">ไม่อนุมัติ</a>
        									
      									</div>
    								</div>
  								</div></th>
    							</tr>
  									</table>
							</div>
				
				</div>
			</h1>
		
			<center><a href="รายละเอียดการจอง.html"><button class="w3-button w3-block w3-purple">รายละเอียดการจอง</button></center>
			</br>
			<!-- CTA -->
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