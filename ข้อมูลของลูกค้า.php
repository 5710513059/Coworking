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
                           <li class="current"><a href="profileA.php">ข้อมูลส่วนตัว</a></li>
                            <li class="current"><a href="อนุมัติการจอง.php">อนุมัติการจอง</a></li>
              
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
                            <h2>ข้อมูลของลูกค้า</h2>
                        </header>
                    </div>
                </section>


      </br>
      <?php
    //ถ้ามีการส่งค่าข้อมูล
    include('connection.php');
    ?>
    
    <div style="overflow-x:auto;">
    <table align="center" width="100%" border="1">
    <tr bgcolor="#FF3399">
    <td><center>Member_ID</td></center>
    <td><center>Name</td></center>
    <td><center>Lastname</td></center></center></center></center>
    <td><center>Numberphone</td></center></center></center>
    <td><center>Email </td></center>
    </tr>
    <?php
$sql = "SELECT user.* FROM user
WHERE user.Member_ID ";
$view = mysqli_query($mysqli,$sql);
while ($data = mysqli_fetch_array($view) ) {
?>
    <tr bgcolor="#ffa8fb">
    
    <td><center><?php echo "$data[Member_ID]"; ?></center></td>
    <td><center><?php echo "$data[Name]"; ?></center></td>
    <td><center><?php echo "$data[Lastname]"; ?></center></td>
    <td><center><?php echo "$data[Numberphone]"; ?></center></td>
    <td><center><?php echo "$data[Email]"; ?></center></td>
  </tr>

    <?php
    }
  
    ?>
</table>
</div>

		</div>
		</section>
		
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

