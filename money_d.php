<?php session_start();?>

<?php
//include('connection.php');
require 'connection.php';

 $tquery = "SELECT Rooms, count(*) as number FROM booksa GROUP BY Rooms" ;    
 $tresult = mysqli_query($mysqli, $tquery);  

  $sql = "SELECT * FROM user";

  $query = mysqli_query($mysqli,$sql);


if (!$_SESSION["UserID"]){  //check session
    Header("Location: เข้าสู่ระบบ.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}else{}
?>
<?php
if($_SESSION['UserID'] == "")
  {
    echo "Please Login!";
    exit();
  }
  if($_SESSION['Userlevel'] != "O") //Owner
  {
    echo "<script>";
        echo "alert(\" ข้อมูลเฉพาะเจ้าของร้านเท่านั้น !\");";
        echo "window.history.back()";
    echo "</script>";
    exit();
  } ?>
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
        <style type="text/css">
@media print
{
#non-printable { display: none; }
#printable { display: block; }
}

</style>
         <!--  555555 -->
          <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  

          <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Sex', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($tresult))  
                          {  
                               echo "['".$row["Rooms"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'จำนวนผู้ใช้บริการ',    
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }
           </script>    

         <!--  555555 -->
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
        <style type="text/css">
@media print
{
#non-printable { display: none; }
#printable { display: block; }
}
</style>
    </head>
    <body class="index">
        <div id="page-wrapper">

            <!-- Header -->
                <header id="header" class="alt">
                    <h1 id="logo"><a href="หน้าหลักA.php"><img src="images/1.jpg" width="100" height="100"></a></h1>
                    <nav id="nav">
                        <ul>
                           <div id="non-printable">
                            <li class="current"><a href="อนุมัติการจอง.php">อนุมัติการจอง</a></li>
              
                             <div class="w3-dropdown-hover">
                                <button class="w3-button">สถิติการใช้งาน</button>
                    <div class="w3-dropdown-content w3-bar-block w3-card-4">
                      <a href="g_day.php" class="w3-bar-item w3-button">สถิติรายวัน</a>
                      <a href="g_month.php" class="w3-bar-item w3-button">สถิติรายเดือน</a>
                       <a href="money_d.php" class="w3-bar-item w3-button">สถิติรายได้</a>
                    </div>
                    </div>
                        <li><a href="ออกจากระบบ.php" class="button special">ออกจากระบบ</a></li>


                        </ul>
                    </nav><div id="non-printable">
          <?php 
          echo "WELCOME ". $_SESSION['Name'];
          ?></div>
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
                            <h2>สถิติและรายได้ของผู้ใช้แต่ละเดือน</h2>
                        </header>
                    </div>
                </section>
</br>
<div class="w3-row"><center>              

      <table border="1" cellpadding="0"  cellspacing="0" align="center">

    <tr>
      <th width="10%" bgcolor =" #FF3366"><center>เดือน</th></center>
      <th width="10%" bgcolor ="#6600CC "><center>รายได้ทั้งหมด</th></center>
      <th width="10%" bgcolor ="#FF3366 "><center>จำนวนผู้ใช้</th></center>
    </tr>


    <?php 
    $cquery = "SELECT SUM(Usercount) AS totol, DATE_FORMAT(DateReceip, '%M') AS DateReceip,SUM(total) AS sumtotal
FROM booksa
GROUP BY DATE_FORMAT(DateReceip, '%M%')
";
    $cresult = mysqli_query($mysqli, $cquery);
    while($crow = mysqli_fetch_array($cresult)) { ?>
      <tr>
        <td align="center" bgcolor ="#FDB4BF"><center><?php echo $crow["DateReceip"];?></center></td>
        <td align="center" bgcolor ="#9966FF  "><center><?php echo $crow["sumtotal"];?></center></td>
        <td align="center" bgcolor ="#FDB4BF"><center><?php echo $crow["totol"];?></center></td>
      </tr>
      <?php } ?>

      </table>
      <!--  555555 -->
   
        <div id="piechart" style="width: 900px; height: 500px;"></div>
      <!--  555555 -->
      
    </center>
    <div id="non-printable">
<center><a href="ข้อมูลของลูกค้า.php" class="w3-btn w3-display-bottom middle w3-round-xxlarge w3-blue"" style="width:200px" onclick="myFunction() ">พิมพ์</a><a href="ข้อมูลของลูกค้า.php" class="w3-btn w3-display-bottom middle w3-round-xxlarge w3-pink" style="width:200px">ย้อนกลับ</a></center></div>

</div>
</br>





<div id="non-printable">
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
        </section></div>
      <!-- Scripts -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/jquery.dropotron.min.js"></script>
      <script src="assets/js/jquery.scrolly.min.js"></script>
      <script src="assets/js/jquery.scrollgress.min.js"></script>
      <script src="assets/js/skel.min.js"></script>
      <script src="assets/js/util.js"></script>
      <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
      <script src="assets/js/main.js"></script>
<script>
function myFunction() {
    window.print();
}
</script>
  </body>
</html>