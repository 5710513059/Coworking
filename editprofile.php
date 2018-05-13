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
<html>
<head>
<title>แก้ไขข้อมูล</title>
</head>
<body>
<?php
   ini_set('display_errors', 2);
   error_reporting(~0);

   $mysqli = new mysqli('localhost', 'root', '', 'mydb1');
   $mysqli->query("set names utf8");

   $strMember_ID = null;

   if(isset($_GET["Member_ID"]))
   {
	   $strMember_ID = $_GET["Member_ID"];
   }
  
   $mysqli = new mysqli('localhost', 'root', '', 'mydb1');
   $mysqli->query("set names utf8");

   $sql = "SELECT * FROM user WHERE Member_ID = '".$strMember_ID."' ";

   $query = mysqli_query($mysqli,$sql);

   $result=mysqli_fetch_array($query,MYSQLI_ASSOC);

?>
<!DOCTYPE HTML>
<!--
  Twenty by HTML5 UP
  html5up.net | @ajlkn
  Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="login/css/login.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">

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
              <li class="current"><a href="index.php">จอง</a></li>
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
              <h2>แก้ไขข้อมูล</h2>
            </header>

<form action="updateprofile.php" name="frmAdd" method="post">
  <div class="w3-row w3-border">
      <div style="background-color:#ffa8fb;"> 
      <div class="w3-container">
<table width="284" border="1">
  <tr class="w3-purple">
    <th width="120">Member_ID</th>
    <td width="238"><input type="hidden" name="txtMember_ID" value="<?php echo $result["Member_ID"];?>"><?php echo $result["Member_ID"];?></td>
    </tr>
  <tr>
    <th width="120">Name</th>
    <td><input type="text" name="txtName" size="20" value="<?php echo $result["Name"];?>"></td>
    </tr>
  <tr>
    <th width="120">Lastname</th>
    <td><input type="text" name="txtLastname" size="20" value="<?php echo $result["Lastname"];?>"></td>
    </tr>
  <tr>
    <th width="120">Numberphone</th>
    <td><input type="text" name="txtNumberphone" size="20" value="<?php echo $result["Numberphone"];?>"></td>
    </tr>
  <tr>
    <th width="120">Email</th>
    <td><input type="text" name="txtEmail" size="30" value="<?php echo $result["Email"];?>"></td>
    </tr>
  </table>
</div>
</div>
</div>
</br>
  <h2><button class="w3-btn w3-yellow" type="submit" value="submit" name="submit">Submit</button></h2>
</form>
<?php
mysqli_close($mysqli);
?>
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
</body>
</html>