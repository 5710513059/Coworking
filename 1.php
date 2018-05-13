<meta charset=utf-8" />
<?php 
session_start();
require ('connection.php');
	//$MEMBERNO = $_REQUEST["MEMBERNO"];
$Rooms = $_POST['Rooms']; //เก็บค่าประเภทของสินค้า
$Usercount = $_POST['Usercount']; //เก็บค่าขนาดของสินค้า
$Start_time = $_POST['Start_time']; //เก็บค่าจำนวนของสินค้า
$End_time =$_POST['End_time'];//เก็บค่าวันที่ที่ลูกค้านัดรับสินค้า
$date = date("d-m-Y"); //กำหนดวันที่และเวลา
$DateReceip =$_POST['DateReceip'];
$UserID = $_SESSION["UserID"];
$Name = $_SESSION['Name'];
	//Check MEMBERNo for dupplicate 		
	$check = "SELECT * FROM booksa  WHERE Rooms = '$Rooms' ";
	$result = mysqli_query($mysqli,$check) or die(mysqli_error());
	$num=mysqli_num_rows($result); 
        if($num > 0)   		
        {
             echo "<script>";
			 echo "alert('ขออภัย เวลานี้มีคนจองเเล้ว !!!');";
			 echo "window.location='จอง2.php';";
          	 echo "</script>";

		}else{
			
	//Insert to db	
		$sql = "INSERT INTO booksa (Rooms, Usercount, Start_time, End_time, DateReceip,Member_ID, Name )"
			. "VALUES('$Rooms', '$Usercount', '$Start_time', '$End_time', '$DateReceip','$UserID','$Name' )"; 
		
			$result = $mysqli->query($sql);
			}
		 
		
	mysqli_close($mysqli);			
		 
	if($result){
			echo "<script type='text/javascript'>";
		  	echo "alert ('REGISTER SUCCESSFULLY');";
			echo "window.location='สรุปผลการจอง.php';";
			echo "</script>";
	  }
	  else{
		    echo "<script type='text/javascript'>";
			echo "alert ('Error!');";
			echo "window.location='1.php';";
		  echo "</script>";
	  }		 
  
?>