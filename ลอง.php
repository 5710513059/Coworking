<?php
session_start();
require 'connection.php';

$sql = "SELECT user.*,uploadfile.*,booksa.* FROM user,uploadfile,booksa
WHERE user.Member_ID = uploadfile.fileID
ORDER BY dateup ASC ";
$view = mysqli_query($mysqli,$sql);
while ($data = mysqli_fetch_array($view) ) {
    echo "$data[Member_ID]";
}
?>