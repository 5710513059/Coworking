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
						<ul><li class="current"><a href="ข้อมูลของลูกค้า.php">ข้อมูลของลูกค้า</a></li>
			
							<li class="current"><a href="อนุมัติการจอง.php">อนุมัติการจอง</a></li>
							 <div class="w3-dropdown-hover">
      							<button class="w3-button">สถิติการใช้งาน</button>
                    <div class="w3-dropdown-content w3-bar-block w3-card-4">
                      <a href="g_day.php" class="w3-bar-item w3-button">สถิติรายวัน</a>
                      <a href="g_month.php" class="w3-bar-item w3-button">สถิติรายเดือน</a>
                       <a href="g_years.php" class="w3-bar-item w3-button">สถิติรายปี</a>
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
							<h2>TUBER THAILAND</h2>
						<br/>
						<h1>Co-Working Space
						<br />
						แห่งแรกในหาดใหญ่
						<br />
						ที่มีห้องหลากหลายรูปแบบให้คุณเลือก</a></h1>
						</header>

					</div>

				</section>

				

					<!-- Three -->
						<section class="wrapper style3 container special">
							<h1 style="background-color:#cc91ff;">
							<header class="major">
								<h2>รูปแบบห้อง </h2>
							</header>

							<div class="row">
								<div class="6u 12u(narrower)">

									<section>
						<div class="w3-container">

  									<img src="images/2.jpg" style="width:100%;height:300px;  cursor:zoom-in"
 									 onclick="document.getElementById('modal01').style.display='block'">

  							<div id="modal01" class="w3-modal" onclick="this.style.display='none'">
   									 <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
    							<div class="w3-modal-content w3-animate-zoom">
     								 <img src="images/2.jpg" style="width:100%">
   								</div>
 		 					</div>

						</div>
										
										<header>
											<h2>ห้อง A</h2>
										</header>
										<p>
										<h4>ที่นั่งทำงานแบบรายวัน  สามารถนั่งร่วมกับผู้อื่นได้
										<br />
										> Free High-Speed Internet
										<br />
										> Free Mini Bar
										<br />
										> Free Headphone
										<br />
										ราคา 80 บาท/ชั่วโมง
										</h4>
									
										</p>
									</section>
									
									<p><h3><a href="จอง2.php"><button class="w3-button w3-red"> จอง</a></button></h3></p>
								</div>
								<div class="6u 12u(narrower)">

									<section>
						<div class="w3-container">

  									<img src="images/3.jpg" style="width:100%;height:300px; cursor:zoom-in"
 									 onclick="document.getElementById('modal02').style.display='block'">

  							<div id="modal02" class="w3-modal" onclick="this.style.display='none'">
   									 <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
    							<div class="w3-modal-content w3-animate-zoom">
     								 <img src="images/3.jpg" style="width:100%">
   								</div>
 		 					</div>

						</div>
										<header>
											<h2>ห้อง B</h2>
										</header>
										<p>
										<h4>
										ห้องติวหนังสือ สำหรับ 4-10 คน
										<br />
										> Free High-Speed Internet
										<br /> 
										> Free Whiteboard
										<br />
										> Free Projector
										<br />
										ราคา 200 บาท/ชั่วโมง
										</h4>
										</p>
									</section>
									<p><h3><a href="จอง2.php"><button class="w3-button w3-red"> จอง </a></button></h3></p>

								</div>
							</div>
							<div class="row">
								<div class="6u 12u(narrower)">

									<section>
						<div class="w3-container">

  									<img src="images/5.jpg" style="width:100%;height:300px; cursor:zoom-in"
 									 onclick="document.getElementById('modal03').style.display='block'">

  							<div id="modal03" class="w3-modal" onclick="this.style.display='none'">
   									 <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
    							<div class="w3-modal-content w3-animate-zoom">
     								 <img src="images/5.jpg" style="width:100%">
   								</div>
 		 					</div>

						</div>
										<header>
											<h2>ห้อง C</h2>
										</header>
										<p>
										<h4>
										ห้องประชุมขนาดกลาง  สำหรับ 6-12 คน
										<br />
										> Free High-Speed Internet
										<br /> 
										> Free Whiteboard
										<br />
										> Free Projector
										<br />
										ราคา 300 บาท/ชั่วโมง
										</h4>
										</p>
									</section>
									<p><h3><a href="จอง2.php"><button class="w3-button w3-red"> จอง </a></button></h3></p>

								</div>
								<div class="6u 12u(narrower)">

									<section>
						<div class="w3-container">

  									<img src="images/4.jpg" style="width:100%;height:300px; cursor:zoom-in"
 									 onclick="document.getElementById('modal04').style.display='block'">

  							<div id="modal04" class="w3-modal" onclick="this.style.display='none'">
   									 <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
    							<div class="w3-modal-content w3-animate-zoom">
     								 <img src="images/4.jpg" style="width:100%">
   								</div>
 		 					</div>

						</div>
										
										<header>
											<h2>ห้อง D </h2>
										</header>
										<p>
										<h4>
										ห้องประชุมขนาดเล็ก สำหรับ 2-6 คน
										<br />
										> Free High-Speed Internet
										<br /> 
										> Free Whiteboard
										<br />
										> Free Projector
										<br />
										ราคา 150 บาท/ชั่วโมง
									</h4>
								</p>
									</section>
									<p><h3><a href="จอง2.php"><button class="w3-button w3-red">จอง </a></button></h3></p>
								</h1>
								</div>
							</div>


						</section>

				</article>

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

