<?php
session_start(); //เปิด seesion เพื่อทำงาน
include("connection.php");           //เรียก function สำหรับติดต่อฐานข้อมูลจากหน้า connection.php ขึ้นมา
// variable
$Username  = $_POST['Username'];
$Password  = md5($_POST['Password']);

if ($Username == '') {
    echo "Check Username";
} else if ($Password == '') {
    echo "Check Password";
} else {

    $sql = mysql_query("SELECT * FROM user
                        WHERE Username = $Username
                        AND Password = $Password ");

    // count result data
    $num = mysql_num_rows($sql);
    if($num <= 0){
      echo "<meta http-equiv='refresh' content='1;URL=เข้าสู่ระบบ.php'> ";
    } else {
      while ($user = mysql_fetch_array($sql)) {


        // Admin case
        if ($user['Userlevel'] == 1 ) 
        {
            $_SESSION['ses_id'] = session_id();
            $_SESSION['Username'] = $user['Username'];
            $_SESSION['Userlevel'] = 1;
            // send to admin page
            echo "<meta http-equiv='refresh' content='1;URL=ประวัติของลูกค้า.php'>";

        // User case
        } else if($user['Userlevel'] == 2) {

            $_SESSION['ses_id'] = session_id();
            $_SESSION['Username'] = $user['Username'];
            $_SESSION['Userlevel'] = 2;
          //send to user page
          echo "<meta http-equiv='refresh' content='1;URL=index.php'>";
        }


      }
      //end while
    }//end else


}