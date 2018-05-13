<meta charset="UTF-8">
<?php
session_start();

require ('connection.php');
isset($fileupload);
$date = date("d-m-Y");
$name = $mysqli->real_escape_string($_POST['name']);
$id = $_SESSION["UserID"];
$bid = $_SESSION["bID"];
//$UserID = $_SESSION["Userlevel"];


$upload=$_FILES['fileupload'];
if($upload <> '') {

$path="fileupload/";  


  $remove_these = array(' ','`','"','\'','\\','/','_');
  $newname = str_replace($remove_these, '', $_FILES['fileupload']['name']);
 
  //ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
  $newname = time().'-'.$newname;
$path_copy=$path.$newname;
$path_link="fileupload/".$newname;

//คัดลอกไฟล์ไปเก็บที่เว็บเซริ์ฟเวอร์
move_uploaded_file($_FILES['fileupload']['tmp_name'],$path_copy);   
  }
  // เพิ่มไฟล์เข้าไปในตาราง uploadfile
  
    $sql = "INSERT INTO uploadfile (fileID,fileupload,name,Member_ID) 
    VALUES('$bid','$newname','$name','$id')";
    
    $result = mysqli_query($mysqli, $sql) or die ("Error in query: $sql " . mysqli_error());
  
  mysqli_close($mysqli);
  // javascript แสดงการ upload file
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('Upload File Succesfuly');";
  echo "window.location = 'index.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to upload again');";
  echo "</script>";
}
?>