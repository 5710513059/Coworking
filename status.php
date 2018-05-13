<?php
session_start();
error_reporting(0);
//1. เชื่อมต่อ database:
include('connection.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้านี้
$book = $_GET['ID'];
//มันสามารถเชื่อมฐานข้อมูลได้  เเต่ยังไม่เก็บค่า
$sql = "UPDATE booksa SET Status = 'จองแล้ว' WHERE  ID LIKE '$book%' ";
$result = mysqli_query($mysqli,$sql) or die ("Error in query: $sql " . mysqli_error());
if($result){
echo "<script type='text/javascript'>alert('เปลี่ยนสถานะ $file เป็น อนุมัติ เเล้ว') </script>";
echo "<script type='text/javascript'>window.location='อนุมัติการจอง.php' </script>";
}
mysqli_close($mysqli);
?>